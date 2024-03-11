<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserPinAndSteps
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->steps == 0 && !empty($user->pin)) {
                return redirect()->route('user.otp');
            } elseif ($user->steps == 1 && !empty($user->pin)) {
                return redirect()->route('user.mailverify');
            }

        }

        return $next($request);
    }
}
