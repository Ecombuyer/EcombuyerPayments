<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function otp()
    {
        $user = Auth::user();
        return view('user.otp')->with(compact('user'));
    }


    public function mailverify()
    {
        $user = Auth::user();
        return view('user.mailverify')->with(compact('user'));
    }

    public function otppost(Request $request)
    {
        $user = Auth::user();

        Validator::extend('match_user_pin', function ($attribute, $value, $parameters, $validator) use ($user) {
            return $user && $user->pin === $value;
        });

        $messages = [
            'pin.match_user_pin' => 'Invalid PIN.',
            'pin.required' => 'The PIN field is required.',
            'pin.digits' => 'The PIN must be 4 digits long.'
        ];

        $validator = Validator::make($request->all(), [
            'pin' => [
                'required',
                'digits:4',
                'match_user_pin',
            ],
        ], $messages);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'message' => 'The pin field is required.',
                    'errors' => $validator->errors()
                ], 422);
            } else {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        $user->pin = '';
        $user->steps = 2;
        $user->update();

        if ($request->ajax()) {
            return response()->json(['message' => 'PIN verified successfully.'], 200);
        } else {
            return redirect()->route('home')->with('success', 'PIN verified successfully.');
        }
    }
}
