<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaystackController extends Controller
{
    public function callback(Request $request)
    {
        // dd($request->all());
        $reference = $request->reference;
        $secret_key = 'sk_test_6d62cb976e1e0ab43f1e48b2934b0dfc7f32a1fe';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $secret_key",
                "Cache-Control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        //  dd($response);
        $meta_data = $response->data->metadata->custom_fields;
        if($response->data->status == 'success')
        {
            $obj = new Payment;
            $obj->payment_id = $reference;
            $obj->product_name = $meta_data[0]->value;
            $obj->quantity = $meta_data[1]->value;
            $obj->amount = $response->data->amount / 100;
            $obj->currency = $response->data->currency;
            $obj->payment_status =$response->data->status;
            $obj->payment_method = "Paystack";
            $obj->save();
            return redirect()->route('success1');
        } else {
            return redirect()->route('cancel1');
        }
    }

    public function successful()
    {
        return "Payment is successful";
    }
    public function failure()
    {
        return "Payment is cancelled";
    }
}
