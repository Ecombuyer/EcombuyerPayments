<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order_details;
use Illuminate\Support\Facades\DB;
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

    public function users ()
    {
        $title = "Users";
        $userdetails = DB::table('users')
        ->join('user_profiles','users.id','=','user_profiles.user_id')
        ->where('users.type',0)
        ->where('user_profiles.status',1)
        ->select('users.id','users.name','users.email','users.phone','user_profiles.pan_no','user_profiles.address','user_profiles.city','user_profiles.pin_code','user_profiles.state','user_profiles.country','user_profiles.created_at','user_profiles.updated_at')
        ->get()->all();
        return view("admin.users",compact("title","userdetails"));
    }

     public function userfilter ()
     {
        
     }

    public function transaction ()
    {
        $title = "Transactions";
        $orders = Order_details::get()->all();
        return view("admin.transactiondetails",compact("title","orders"));
    }

    public function transactionfilter()
    {
        
    }
    public function products ()
    {
        $title = "Products";
        $products = Product::get()->where('status',1)->all();
        return view("admin.products",compact("title","products"));
    }

    public function productfilters(Request $request)
    {   
        $createdat = $request->createdat;
        $updatedat = $request->updatedat;
        $pro = Product::
    when($request->userid, function ($query) use ($request) {
        $query->where('user_id', $request->userid);
    })
    ->when($request->productid, function ($query) use ($request) {
        $query->where('product_id', $request->productid)->where('user_id', $request->userid);
    })
    ->when($request->productname, function ($query) use ($request) {
        $query->where('name', $request->productname)->where('user_id', $request->userid);
    })
    ->when($request->createdat, function ($query) use ($createdat) {
        $query->whereDate('created_at','>=', $createdat);
    })
    ->when($request->updatedat, function ($query) use ($updatedat) {
        $query->whereDate('created_at', '<=', $updatedat);
    })
    ->where('status', 1)->where('user_id', $request->userid)
    ->get();
        return response()->json($pro);

}

   
}
