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


        /* Validation */
        $request->validate([
            'no1' => 'required',
            'no2' => 'required',
            'no3' => 'required',
            'no4' => 'required'
        ]);

        $no1 = $request->input('no1');
        $no2 = $request->input('no2');
        $no3 = $request->input('no3');
        $no4 = $request->input('no4');

        $pin = $no1 . $no2 . $no3 . $no4;


        /* Validation Logic */
        $userOtp   = User::where('pin', $pin)->first();
        $now = now();
        if (!$userOtp) {

            return redirect()->back()->with('error', 'Your OTP is in correct');
        }
        if ($userOtp) {
            $userOtp->pin = null;
            $userOtp->steps = 1;
            $userOtp->save();
            Auth::login($userOtp); // Logging in the user after OTP validation
            return redirect('/home');
        }

        return redirect()->route('login')->with('error', 'Your OTP is ib correct');
    }

    public function mailconfirm(Request $request)
    {
        $user = Auth::user();
        $no1 = $request->input('no1');
        $no2 = $request->input('no2');
        $no3 = $request->input('no3');
        $no4 = $request->input('no4');

        $newotp = $no1 . $no2 . $no3 . $no4;

        $usernewOtp = User::where('pin', $newotp)->first();

        if (!$usernewOtp) {
            return redirect()->back()->with('error', 'Your OTP is in correct');
        }

        if ($usernewOtp) {
            $usernewOtp->pin = null;
            $usernewOtp->steps = 1;
            $usernewOtp->save();
            Auth::login($usernewOtp); // Logging in the user after OTP validation
            return redirect('/home');
        }

        return redirect()->route('login')->with('error', 'Failed to login');
    }

/*user login cancel*/
    public function cancel()
    {
        $user = Auth::user();

        if ($user) {
            $user->pin = null;
            $user->steps = 1;
            $user->update();
            Auth::logout();
            return redirect()->route('login');
        }
    }
    /*end*/
}
