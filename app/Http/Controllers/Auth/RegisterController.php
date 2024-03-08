<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/otp';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'Pancard' => ['required', 'string', 'regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/'],
        ]);
    }

    protected function create(array $data)
    {
        $otp = mt_rand(1000, 9999);
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'pin' => $otp,
            'Pancard' => $data['Pancard'],
        ]);
        $userprofile = new UserProfile;
        $userprofile->name = $user->name;
        $userprofile->user_id  = $user->id;
        $userprofile->pan_no = $user->Pancard;
        $userprofile->save();
        $number = $user->phone;
        $name = $user->name;
        $authkey = "41632a58a273b09e";
        $cc = "+91";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.authkey.io/request?authkey=$authkey&mobile=$number&country_code=+91&sid=12190&name=twinkle&otp=$otp",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode(array(
                'authkey' => $authkey,
                'country_code' => $cc,
                'mobile' => $number,
                'sid' => '12190',
                'name' => $name,
                'otp' => $otp
            )),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Basic " . base64_encode($authkey . ":")
            ),
        ));
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            Log::error("cURL Error: $error_message");
        }
        curl_close($curl);
        Log::info("cURL Response: $response");
        return $user;
    }
}
