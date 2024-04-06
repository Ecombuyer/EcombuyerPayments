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

        $user = Auth::user();
        $userid =  $user->id;
        $title = 'PaymentMethods';
        $paymenttype = Paymenttype::all();
        return view('user.paymentsmethod', compact('title', 'userid', 'paymenttype'));
    }



    public function paymentactive(Request $request)
    {
        $gatewayId = $request->input('gateway_id');
        $status = $request->input('status');
        $paymentGateway = Paymenttype::find($gatewayId);
        if ($paymentGateway) {
            $paymentGateway->status = $status;
            $paymentGateway->save();
            return redirect()->back()->with('success', 'Payment gateway status updated successfully');
        }
        return redirect()->back()->with('error', 'Payment gateway not found');
    }
}
