<?php

namespace App\Http\Controllers;


use App\Models\UserComplaints;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order_details;
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
        $username = $user->name;
        $orders = Product::where('status', '=', '1')->where('user_id', $user->id)->limit(4)->get();
        Session::put('username', $username);
        $title = "User Dashboard";


        return view('user.home')->with(compact('title', 'orders'));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(Request $request)
    {
        $commissionFee = config('comission.commission_key');
        $thismonth = Carbon::now();
        $thismonth = now()->format('m');
        //counting users
        $users = Auth::user()->where('type', 0)
            ->where('status', 0)
            ->get()
            ->all();
        $countusers = count($users);

        //getting current username
        $currentuser = Auth::user();
        $username = $currentuser->name;
        Session::put('username', $username);
        $title = "Admin Dashboard";

        //sum of the amount
        $orderdetails = Order_details::where('payment_status', 'SUCCESS')
            ->whereMonth('created_at', $thismonth)
            ->sum('product_price');
        $thismonthrevenue = $orderdetails * $commissionFee / 100;

        //payment status 
        $success = Order_details::where('payment_status', 'SUCCESS')->count();
        $initiate = Order_details::where('payment_status', 'INITIATE')->count();
        $failed = Order_details::where('payment_status', 'FAILED')->count();
        $error = Order_details::where('payment_status', 'ERROR')->count();

        //this month usercount   
        $this_month_user = Auth::user()
            ->where('status', 1)->where('type', 0)
            ->whereMonth('created_at', $thismonth)->get()->count();

        //today's money
        $currentmoney = Carbon::now();
        $currentmoney = now()->format('Y/m/d');

        $cash = Order_details::whereDate('created_at', $currentmoney)
            ->where('payment_status', 'SUCCESS')
            ->sum('product_price');
        $todaysmoney = $cash * $commissionFee / 100;


        //product count

        $products = Product::where('status', 1)->get()->count();
        $physicalproduct = Product::where('status', 1)
            ->where('type', 'physicalproduct')
            ->get()->count();
        $digitalproduct = Product::where('status', 1)
            ->where('type', 'digitalproduct')
            ->get()->count();

        //Complaint Stats
        $totalcomplaints = UserComplaints::get()->count();
        $solved = UserComplaints::where('status', 'Solved')->get()->count();
        $enquiring = UserComplaints::where('status', 'Enquiring')->get()->count();
        $pending = UserComplaints::where('status', 'Pending')->get()->count();

        if ($request->ajax()) {
            return response()->json([
                'orderdetails' => $orderdetails,
                'countusers' => $countusers,
                'thismonthusers' => $this_month_user,
                'success' => $success,
                'initiate' => $initiate,
                'failed' => $failed,
                'error' => $error,
                'todaysmoney' => $cash,
                'totalproduct' => $products,
                'digitalproducts' => $digitalproduct,
                'physicalproducts' => $physicalproduct,
                'totalcomplaints' => $totalcomplaints,
                'solved' => $solved,
                'pending' => $pending,
                'enquiring' => $enquiring,
                'revenuetoday' => $todaysmoney,
                'revenuethismonth' => $thismonthrevenue

            ]);
        }
        // for chart 

        return view('admin.adminhome', compact('users', 'title'));
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
