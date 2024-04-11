<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $user = Auth::user();
        $username =  $user->name;
        $orders = Product::where('status', '=', '1')->where('user_id', $user->id)->limit(4)->get();
        Session::put('username', $username);  // just example
        $title = "User Dashboard";

        return view('user.home')->with(compact('title','orders'));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = Auth::user()->where('type',0)
        ->where('status',0)
        ->get()
        ->all();

        $currentuser = Auth::user();
        $username = $currentuser->name;
        Session::put('username', $username);
        $title = "Admin Dashboard";
        return view('admin.adminhome',compact('users','title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('manager.managerHome');
    }



}
