<?php

namespace App\Http\Controllers;

use App\Models\Paymenttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function paymentmethod()
    {

        $title = 'PaymentMethods';
        $paymenttype = Paymenttype::all();
        return view('admin.adminpaymentsmethod', compact('title','paymenttype'));
    }



    public function paymentactive(Request $request)
    {
        $gatewayId = $request->input('gateway_id');
        $status = $request->input('status');
        $paymentGateway = Paymenttype::find($gatewayId);
        if ($paymentGateway) {
            $paymentGateway->status = $status ;
            $paymentGateway->save();
            if($paymentGateway->status == 0)
            {
                return redirect()->back()->with('error', 'Payment gateway Inactivated');
            }
            else if ($paymentGateway->status == 1)
            {
                return redirect()->back()->with('success','Payment gateway Activated');
            }
        }
        return redirect()->back()->with('error', 'Payment gateway not found');
    }
}
