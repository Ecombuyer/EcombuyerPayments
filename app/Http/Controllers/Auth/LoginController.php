<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            } else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
            } else {


                $user = Auth::user();
                $email = $user->email;
                $otp = rand(1000, 9999); // Generate a random 4-digit OTP

                $userOtp = User::find($user->id); // Find the user by ID
                // dd($userOtp);
                if ($userOtp) {
                    // User exists, proceed with updating pin
                    if ($userOtp->steps == 1) {
                        // Save OTP to user's pin
                        $userOtp->pin = $otp;
                        $userOtp->save();
                        $usernewOtp = User::where('pin', $userOtp->pin)->first();
                        // dd($usernewOtp);
                        // Send OTP to user's email
                        Mail::to($email)->send(new RegisterMail($usernewOtp));
                    }
                } else {
                    // Handle case where user is not found
                    // You might want to log an error or handle it differently
                }



                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}
