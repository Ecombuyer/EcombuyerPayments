<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function profile ()
    {   
        $user = Auth::user();
        $title = "Profile";
        return view("admin.adminprofile",compact("title","user"));
     
    }
}
