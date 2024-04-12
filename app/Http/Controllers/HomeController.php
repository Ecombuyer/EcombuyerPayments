<?php

namespace App\Http\Controllers;


use App\Models\Order_details;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        Session::put('username', $username); 
        $title = "User Dashboard";
        

        return view('user.home')->with(compact('title','orders'));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(Request $request)
    {
        $users = Auth::user()->where('type',0)
        ->where('status',0)
        ->get()
        ->all();
        $countusers = count($users);
        $currentuser = Auth::user();
        $username = $currentuser->name;
        Session::put('username', $username);
        $title = "Admin Dashboard";
        $orderdetails = Order_details::where('payment_status','SUCCESS')->sum('product_price');
        if($request->ajax())
        {
            return response()->json(['orderdetails'=>$orderdetails,'countusers'=>$countusers]);
        }
        
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
