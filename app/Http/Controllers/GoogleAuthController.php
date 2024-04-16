<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class GoogleAuthController extends Controller
{
   public function redirect()
   {
    return Socialite::driver('google')->redirect();
   }
   public function callbackGoogle()
   {

    $google_user = Socialite::driver('google')->stateless()->user();

    $name = $google_user->name;
    $id = $google_user->id;
    $email = $google_user->email;
    $token = $google_user->token;

    try
    {
        $google_user = Socialite::driver('google')->user();

        $user = User::where('google_id',$id)->first();

        if(!$user){

            $new_user = User::create([
            'name'=>$name,
            'email'=>$email,
            'google_id'=>$id,
            'password' => Hash::make($token),
            ]);


            $user_id = $new_user->id;
// dd($user_id);
            Auth::login($new_user);
            return view('auth.register2',compact('user_id'));
        }
        else{
            Auth::login($user);
            return view('auth.register2',compact('user_id'));
        }

    }
    catch(\Throwable $th)
    {
         dd($th);
    }
   }


   public function userregister(Request $request)
   {
    // $google_user = Socialite::driver('google')->stateless()->user();


     $id = $request->userid;
    $user = User::where('id',$id)->first();


    $new_user = $user->update([
        // 'name'=>$name,
        // 'email'=>$email,
        // 'google_id'=>$id,
        // 'password' => Hash::make($token),

        'Pancard' =>$request->Pancard,
        'phone' =>$request->phone,

        ]);

        return redirect()->route('home')->with('success','Welcome'. $request->name .'!');
   }
}
