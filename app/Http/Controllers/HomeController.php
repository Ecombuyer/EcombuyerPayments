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
    public function index(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $username = $user->name;
        $orders = Product::where('status', '=', '1')->where('user_id', $user->id)->limit(4)->get();
        Session::put('username', $username);
        $title = "User Dashboard";

        $commissionfee = config('comission.commission_key');
        $thismonth = Carbon::now();
        $thismonth = now()->format('m');

        $today = Carbon::now();
        $today = now()->format('Y/m/d');

        //today's clients
        $usercounttoday = Order_details::where('seller_id', $userid)
            ->Where('payment_status', 'INITIATE')
            ->orWhere('payment_status', 'SUCCESS')
            ->whereDate('created_at', $today)
            ->get('id')->count();

        //thismonth clients
        $usercountthismonth = Order_details::where('seller_id', $userid)
            ->where('payment_status', 'INITIATE')
            ->orWhere('payment_status', 'SUCCESS')
            ->whereMonth('created_at', $thismonth)
            ->get('id')
            ->count();

        //revenue_today
        $revenue_today = Order_details::where('seller_id', $userid)
            ->where('payment_status', 'SUCCESS')
            ->whereDate('created_at', $today)
            ->sum('product_price');
        $amount_today = $revenue_today * $commissionfee / 100;

        //revenue_thismonth
        $revenue_thismonth = Order_details::where('seller_id', $userid)
            ->where('payment_status', 'SUCCESS')
            ->whereMonth('created_at', $thismonth)
            ->sum('product_price');
        $amount_thismonth = $revenue_thismonth * $commissionfee / 100;

        if($request->ajax())
        {
            return response()->json([
                'amount_today' => $amount_today,
                'amount_thismonth' => $amount_thismonth,
                'userstoday' => $usercounttoday,
                'usersmonth' => $usercountthismonth,
            ]);
        }
        //notifications 
        $complaints_status = UserComplaints::where('status', '=', 'solved')->get();


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

        $today = Carbon::now();
        $today = now()->format('Y/m/d');


        //counting users
        $users = Auth::user()->where('type', 0)
            ->where('status', 1)
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

        //daily usercount   
        $this_month_user = Auth::user()
            ->where('status', 1)->where('type', 0)
            ->whereDate('created_at', $today)->get()->count();

        //today's money
        $cash = Order_details::whereDate('created_at', $today)
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
        $totalcomplaints = UserComplaints::get('id')->count();
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
        return view('admin.adminHome', compact('users', 'title'));
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
