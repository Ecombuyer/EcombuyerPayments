<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ManagerviewController extends Controller
{
   public function managerview(){
    $user= User::select()->where('type',2)->get();
    // dd($user);


    return view('userview')->with('userlist', $user);

   }
}
