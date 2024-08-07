<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order_details;
use App\Models\UserComplaints;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $title = "Profile";
        return view("admin.adminprofile", compact("title", "user"));
    }

    public function users()
    {
        $title = "Users";
        $userdetails = DB::table('users')
            ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.type', 0)
            ->where('user_profiles.status', 1)
            ->select('users.id', 'users.name', 'users.email', 'users.phone', 'user_profiles.pan_no', 'user_profiles.address', 'user_profiles.city', 'user_profiles.pin_code', 'user_profiles.state', 'user_profiles.country', 'user_profiles.created_at', 'user_profiles.updated_at')
            ->get()->all();
        return view("admin.adminusers", compact("title", "userdetails"));
    }

    public function userfilter(Request $request)
    {
        $userfilters = DB::table('users')
            ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.type', 0)
            ->where('user_profiles.status', 1)
            ->select('users.id', 'users.name', 'users.email', 'users.phone', 'user_profiles.pan_no', 'user_profiles.address', 'user_profiles.city', 'user_profiles.pin_code', 'user_profiles.state', 'user_profiles.country', 'user_profiles.created_at', 'user_profiles.updated_at')
            ->when($request->userid, function ($query) use ($request) {
                $query->where('users.id', $request->userid);
            })
            ->when($request->name, function ($query) use ($request) {
                $query->where('users.name', $request->name);
            })
            ->when($request->number, function ($query) use ($request) {
                $query->where('users.phone', $request->phone);
            })
            ->when($request->email, function ($query) use ($request) {
                $query->where('users.email', $request->email);
            })
            ->when($request->pan, function ($query) use ($request) {
                $query->where('userprofiles.pan_no', $request->pan);
            })
            ->when($request->pincode, function ($query) use ($request) {
                $query->where('userprofiles.pin_code', $request->pincode);
            })
            ->when($request->state, function ($query) use ($request) {
                $query->where('userprofiles.state', $request->state);
            })
            ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
                $startDate = date('Y-m-d', strtotime($request->fromDate));
                $endDate = date('Y-m-d', strtotime($request->toDate));
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            })
            ->get();

        return response()->json($userfilters);
    }

    public function transaction()
    {
        $title = "Transactions";
        $orders = Order_details::get()->all();
        return view("admin.admintransactiondetails", compact("title", "orders"));
    }

    public function transactionfilter(Request $request)
    {
        $pro = Order_details::when($request->userid, function ($query) use ($request) {
                $query->where('user_id', $request->userid);
            })
            ->when($request->name, function ($query) use ($request) {
                $query->where('user_name', $request->name);
            })
            ->when($request->productname, function ($query) use ($request) {
                $query->where('product_name', $request->productname);
            })
            ->when($request->productid, function ($query) use ($request) {
                $query->where('product_id', $request->productid);
            })
            ->when($request->txnid, function ($query) use ($request) {
                $query->where('transaction_id', $request->txnid);
            })
            ->when($request->email, function ($query) use ($request) {
                $query->where('user_email', $request->email);
            })
            ->when($request->phone, function ($query) use ($request) {
                $query->where('user_number', $request->phone);
            })
            ->when($request->status, function ($query) use ($request) {
                $query->where('payment_status', $request->status);
            })
            ->when($request->createdat, function ($query) use ($request) {
                $query->whereDate('created_at', '>=', $request->createdat);
            })
            ->when($request->updatedat, function ($query) use ($request) {
                $query->whereDate('created_at', '<=', $request->updatedat);
            })
            ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
                $startDate = date('Y-m-d', strtotime($request->fromDate));
                $endDate = date('Y-m-d', strtotime($request->toDate));
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            })
            ->get();

        return response()->json($pro);
    }
    public function products()
    {
        $title = "Products";
        $products = Product::get()->where('status', 1)->all();
        return view("admin.adminproducts", compact("title", "products"));
    }

    public function productfilters(Request $request)
    {

        $pro = Product::when($request->userid, function ($query) use ($request) {
                $query->where('user_id', $request->userid);
            })
            ->when($request->productid, function ($query) use ($request) {
                $query->where('product_id', $request->productid);
            })
            ->when($request->productname, function ($query) use ($request) {
                $query->where('name', $request->productname);
            })
            ->when($request->type, function ($query) use ($request) {
                $query->where('type', $request->type);
            })
            ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
                $startDate = date('Y-m-d', strtotime($request->fromDate));
                $endDate = date('Y-m-d', strtotime($request->toDate));
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            })
            ->where('status', 1)
            ->get();
        return response()->json($pro);
    }

    public function usercomplaints(Request $request)
    {
        $title = "Complaints";
        $complaints = UserComplaints::get()->all();
        return view('admin.admincomplaints', compact('title', 'complaints'));
    }

    public function complaintsfilter(Request $request)
    {
        $pro = UserComplaints::when($request->userid, function ($query) use ($request) {
                $query->where('user_id', $request->userid);
            })
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', $request->name);
            })
            ->when($request->email, function ($query) use ($request) {
                $query->where('email', $request->email);
            })
            ->when($request->phone, function ($query) use ($request) {
                $query->where('phone', $request->phone);
            })
            ->when($request->type, function ($query) use ($request) {
                $query->where('type', $request->type);
            })
            ->when($request->status, function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
                $startDate = date('Y-m-d', strtotime($request->fromDate));
                $endDate = date('Y-m-d', strtotime($request->toDate));
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            })
            ->get();

        return response()->json($pro);
    }

    public function revenue()
    {
        $title = 'Revenue';
        $commissionFee = config('comission.commission_key');
        $revenue = Order_details::where('payment_status', '=', 'SUCCESS')
            ->where('created_at', '>=', Carbon::now()->subMonths(12))
            ->select('product_price', 'created_at')
            ->get();
        return view('admin.adminrevenue', compact('title', 'revenue', 'commissionFee'));
    }

    public function revenuefilter(Request $request)
    {

        $rev = Order_details::
            when($request->userid, function ($query) use ($request) {
                $query->where('user_id', $request->userid);
            })
            ->when($request->filled('year'), function ($query) use ($request) {
                $year = date('Y', strtotime($request->year));
                $query->whereYear('created_at', '=', $year);
            })
            ->when($request->filled('month'), function ($query) use ($request) {
                $month = date('m', strtotime($request->month));
                $query->whereMonth('created_at', '=', $month);
            })
            ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
                $startDate = date('Y-m-d', strtotime($request->fromDate));
                $endDate = date('Y-m-d', strtotime($request->toDate));
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            })
            ->select('product_price', 'created_at')
            ->get();

        return response()->json($rev);
    }

    public function adminnotification(Request $request)
    {


        $complaints = UserComplaints::whereBetween('created_at', [Carbon::now()->subSeconds(4), Carbon::now()])
            ->orderByDesc('id')
            ->get();

        $reports = Report::whereBetween('created_at', [Carbon::now()->subSeconds(4), Carbon::now()])
            ->orderByDesc('id')->where('status', '!=', 'Solved')
            ->get();


        if ($request->ajax()) {
            return response()->json([
                'complaints' => $complaints,
                'reports'=> $reports
            ]);
        }


    }
    public function reports(Request $request)
    {
        $title = 'Reports';
        $reports = Report::orderByDesc('id')->get()->all();
        return view('admin.adminreports',compact('title','reports'));
    }

    public function reportsfilter(Request $request)
     {
        $pro =Report::when($request->userid, function ($query) use ($request) {
            $query->where('user_id', $request->userid);
        })
        ->when($request->name, function ($query) use ($request) {
            $query->where('name', $request->name);
        })
        ->when($request->email, function ($query) use ($request) {
            $query->where('email', $request->email);
        })
        ->when($request->phone, function ($query) use ($request) {
            $query->where('phone', $request->phone);
        })
        ->when($request->type, function ($query) use ($request) {
            $query->where('type', $request->type);
        })
        ->when($request->status, function ($query) use ($request) {
            $query->where('status', $request->status);
        })
        ->when($request->filled('fromDate') && $request->filled('toDate'), function ($query) use ($request) {
            $startDate = date('Y-m-d', strtotime($request->fromDate));
            $endDate = date('Y-m-d', strtotime($request->toDate));
            $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
        })
        ->get();

    return response()->json($pro);
     }
}
