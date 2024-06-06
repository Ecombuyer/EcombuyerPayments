<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

use App\Models\Order_details;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        $orders = Product::where('status', '=', '1')->limit(4)->get();
        // Session::put('username', $username);
        $title = "User Dashboard";

        //cards

        return view('user.home')->with(compact('title', 'orders'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutpage()
    {
        return view('home.about');
    }
}
