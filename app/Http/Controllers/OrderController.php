<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order_details;
use App\Models\Paymenttype;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userid =  $user->id;

        $username =  $user->name;

        Session::put('username', $username);  // just example
        // dd($username);
        $title = "Orders";
        $orders = Product::where('user_id', $userid)->where('status', 1)->get();

        // dd($orders);
        return view('user.orders', compact('title', 'orders', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Orders";
        return view('user.orderscreate', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //  dd($request->all());
        $user = Auth::user();
        $userid =  $user->id;
        $product_id = $userid . mt_rand(1000, 9999);


        // Validate the incoming request data
        $validatedData = $request->validate([

            'product_name' => 'required|string',
            'type'=>'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'preimage2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'productfile' => 'required|max:102400|mimetypes:application/pdf,image/jpeg,image/png,application/zip,application/x-rar-compressed',

            'product_description' => 'required|string',
            'product_price' => 'required|numeric',
        ]);


        $fileName = $product_id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads/previewimages/'), $fileName);

        $preimage2 = time() . '.' . $request->preimage2->getClientOriginalExtension();
        $request->preimage2->move(public_path('uploads/previewimages/'), $preimage2);

        $productfile = time() . '.' . $request->productfile->getClientOriginalExtension();
        $request->productfile->move(public_path('uploads/products/'), $productfile);

        // Save the product file
        // $productFileName = $request->productfile->getClientOriginalName();


        // Create a new order instance
        $order = new Product();

        $order->user_id = $userid;

        $order->product_id = $product_id;
        $order->type = $validatedData['type'];
        $order->name = $validatedData['product_name'];

        $order->description = $validatedData['product_description'];
        $order->price = $validatedData['product_price'];
        $order->image = $fileName;
        $order->image_2 = $preimage2;
        $order->file = $productfile;

        // Save the order to the database
        //  dd($order);
        $order->save();

        // Redirect the user back to the create order page with a success message
        // return redirect()->route('orders.index')->with('success', 'Order created successfully!');
        if ($order == true) {
            toastr()->success('Products Created Succesfully ');
            return redirect()->route('orders.index');
        } else {
            toastr()->error('Products creation Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $name)
    {
        $banks = ['Paypal', 'stripe', 'indicash'];

        $order = Product::where('product_id', $id)->get()->first();
        $qrdata = QrCode::generate(
            $order
        );


        $mobileViewUrl = route('user.mobileview', ['order' => $order]);

        return view('user.preview', compact('mobileViewUrl'));
    }


    public function mobileview(Request $request)
    {
        $order = $request->query('order');
        // Process the $order data as needed
        return view('user.mobileview', compact('order'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        $order = Product::find($id);
        $title = "Orderslist";

        // // return redirect()->route('orders.edit')->with('orders', $order)->with('id', $id);

        return view('user.ordersedit', compact('title', 'order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        $form1 = $request->validate([

            'product_name' => 'required|string',
            'type'=>'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'preimage2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'productfile' => 'required|mimes:pdf,jpg,png|max:2048',

            'productfile' => 'required|max:102400|mimetypes:application/pdf,image/jpeg,image/png,application/zip,application/x-rar-compressed',


            'product_description' => 'required|string',
            'product_price' => 'required|numeric',
        ]);

        // dd($form1);
        $order = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            // Generate unique filename for the new image
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();

            // Move the new image to the uploads directory
            $request->image->move(public_path('uploads/previewimages/'), $fileName);

            // Delete old image if it exists
            if ($order->image && file_exists(public_path('uploads/previewimages/' . $order->image))) {
                unlink(public_path('uploads/previewimages/' . $order->image));
            }

            // Assign the new filename to the form data
            $form1['image'] = $fileName;
        } else {
            // If no new image is uploaded, keep the old image
            $form1['image'] = $order->image;
        }

        if ($request->hasFile('image_2')) {
            // Generate unique filename for the new image
            $fileName2 = time() . '.' . $request->preimage2->getClientOriginalExtension();

            // Move the new image to the uploads directory
            $request->preimage2->move(public_path('uploads/previewimages/'), $fileName2);

            // Delete old image if it exists
            if ($order->image_2 && file_exists(public_path('uploads/previewimages/' . $order->image_2))) {
                unlink(public_path('uploads/previewimages/' . $order->image_2));
            }

            // Assign the new filename to the form data
            $form1['preimage2'] = $fileName2;
        } else {
            // If no new image is uploaded, keep the old image
            $form1['preimage2'] = $order->image_2;
        }


        if ($request->hasFile('productfile')) {
            // Generate unique filename for the new image
            $fileName3 = time() . '.' . $request->productfile->getClientOriginalExtension();

            // Move the new image to the uploads directory
            $request->productfile->move(public_path('uploads/products/'), $fileName3);

            // Delete old image if it exists
            if ($order->file && file_exists(public_path('uploads/products/' . $order->file))) {
                unlink(public_path('uploads/products/' . $order->file));
            }

            // Assign the new filename to the form data
            $form1['productfile'] = $fileName3;
        } else {
            // If no new image is uploaded, keep the old image
            $form1['productfile'] = $order->file;
        }


        // dd($form1['type']);
        // Update order with form data
        $order->update([
            'name' => $form1['product_name'],
            'description' => $form1['product_description'],
            'price' => $form1['product_price'],
            'type' => $form1['type'],
            'image' => $form1['image'] ?? $order->image, // Use the new image if uploaded, otherwise keep the old one
            'image_2' => $form1['preimage2'] ?? $order->image_2,
            'file' => $form1['productfile'] ?? $order->file,



        ]);
        if ($order == true) {
            toastr()->success('Products Updated Succesfully ');
            return redirect()->route('orders.index');
        } else {
            toastr()->error('Products Updation Failed');
        }

        return redirect('/index')->with([
            'message' => 'Order updated successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $order = Product::find($id);

        $order->update(['status' => '0']);

        toastr()->error('Product Deleted Successfully');
        return redirect('/index')
            ->with('Orders');

    }


    // public function loadMoreProducts(Request $request)
    // {
    //     $user = Auth::user();
    //     $userid =  $user->id;
    //     $title = "Orderslist";
    //     $page = $request->page;


    //     $orders = Product::where('user_id', $userid)->where('status', 1)->get();

    //     return view('user.orders', compact('title', 'orders'));
    // }


    public function buynow($productid)
    {

        $user = Auth::user();
        $userid =  $user->id;
        $order = Product::where('product_id', $productid)->get()->first();

        $title = "BuyNow";
        return view('user.placeorder', compact('title', 'order', 'userid'));
    }
    public function placeorder(Request $request)
    {
        $user = Auth::user();
        $userid =  $user->id;

        $paymenttype = Paymenttype::where('status', 1)->get()->first();


        $form2 = $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'mobileno' => 'required|numeric',
            'address' => $request->input('type') == 'physicalproduct' ? 'required|string' : '', // Address is required if type is physicalproduct
        ]
        , [
            'address.required' => 'The address field is required for physical products.', // Custom error message for 'address'
        ]);


        // Randomly select a name from the array
        // foreach ($paymenttype as $paymenttype) {

        if ($paymenttype->payment_name == 'indicpay' && $paymenttype->status == 1) {

             //dd($paymenttype->payment_name);
            $txnid = "TXN" . time();
            $orderid = mt_rand(1000, 9000);

            $token = '0803b0761771c6d03bc95fc27e6645';
            $endpoint = 'https://indicpay.in/api/btt/createorder';
            $paymentverify = 'https://indicpay.in/api/newc/checkstatus?txnid=' . $txnid;

            $callback_url = route('payment.callback');
            // }

            $data = [
                "name" => $form2['name'],
                "email" => $form2['email'],
                "phone" => $form2['mobileno'],
                "amount" => $request->productprice,
                "txnid" => $txnid,
                "return_url" => $callback_url,
                "token" => $token,
            ];
            // Conditionally include the "address" field based on product type
            if ($request->input('type') == 'physicalproduct') {
                $data['address'] = $form2['address'];
            }
// dd($data);
            $data = json_encode($data);

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json'
                ],
            ]);

            $response = curl_exec($curl);

            curl_close($curl);
            //  dd($response);
            // session()->put('txnid', $txnid);
            if ($response === false) {
                echo 'Curl error: ' . curl_error($curl);
            } else {
                $response_array = json_decode($response, true);

                if (!empty($response_array) && isset($response_array['upi_url']) && !empty($response_array['upi_url'])) {
                    $upi_url = $response_array['upi_url'];


                    $orderdetails1Data = [
                        'order_id' => $orderid,
                        'product_id' => $request->productid,
                        'seller_id' => $request->selleruserid,
                        'user_id' => $userid,
                        'user_name' => $form2['name'],
                        'user_email' => $form2['email'],
                        'user_number' => $form2['mobileno'],
                        'payment_method' => $paymenttype->payment_name,
                        'product_price' => $request->productprice,
                        'product_name' => $request->productname,
                        'payment_status' =>$response_array['status'],
                        'type' =>$request->type,
                        "transaction_id" => $txnid
                    ];

                    // Conditionally include the "address" field based on product type
                    if ($request->input('type') == 'physicalproduct') {
                        $orderdetails1Data['address'] = $form2['address'];
                    }
                  //  dd($orderdetails1Data);

                    $orderdetails1 = Order_details::create($orderdetails1Data);

                  //  dd($orderdetails1);

                    $pay = QrCode::size(200)
                        ->backgroundColor(255, 255, 0)
                        ->color(0, 0, 255)
                        ->margin(1)
                        ->generate(
                            $upi_url
                        );
                    // $paymenttype = Paymenttype::get()->first();
                    return view('user.payments', compact('pay', 'userid', 'paymenttype', 'txnid'));
                }


            }
        }else if ($paymenttype->payment_name == 'haodapay' && $paymenttype->status == 1) {

                // dd($paymenttype->payment_name);
                // echo 'hoada';
                $txnid = "TXN" . time();
                $orderid = mt_rand(1000, 9000);

                $key = 'xnF20EI173240130015224';
                $endpoint = 'https://jupiter.haodapayments.com/api/v4/collection';
                // $paymentverify = ' https://jupiter.haodapayments.com/api/v3/collection/status?txnid=' . $txnid;

                $callback_url = route('payment.callback');
                // }

                $data = [
                    "name" => $form2['name'],
                    "email" => $form2['email'],
                    "phone" => $form2['mobileno'],
                    "amount" => $request->productprice,
                    "txnid" => $txnid,
                    "return_url" => $callback_url,
                    "token" => $key,
                ];
                // Conditionally include the "address" field based on product type
                if ($request->input('type') == 'physicalproduct') {
                    $data['address'] = $form2['address'];
                }

                $data = json_encode($data);

                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => $endpoint,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $data,
                    CURLOPT_HTTPHEADER => [
                        'Content-Type: application/json',
                        'x-client-id: bcaAJWUNDs3857',
                        'x- client-secret: xnF20EI173240130015224'
                    ],
                ]);

                $response = curl_exec($curl);

                curl_close($curl);

                dd($response);
                // session()->put('txnid', $txnid);
                if ($response === false) {
                    echo 'Curl error: ' . curl_error($curl);
                } else {
                    $response_array = json_decode($response, true);

                    if (!empty($response_array) && isset($response_array['upi_url']) && !empty($response_array['upi_url'])) {
                        $upi_url = $response_array['upi_url'];
                        $orderdetails2Data =[
                            'order_id' => $orderid,
                            'product_id' => $request->productid,
                            'seller_id' => $request->selleruserid,
                            'user_id' => $userid,
                            'user_name' => $form2['name'],
                            'user_email' => $form2['email'],
                            'user_number' => $form2['mobileno'],
                            'payment_method' => $paymenttype->payment_name,
                            'product_price' => $request->productprice,
                            'payment_status' => $response_array['status'],
                            'product_name' => $request->productname,
                            'payment_status' =>$response_array['status'],
                            'type' =>$request->type,
                            "transaction_id" => $txnid

                        ];
                        // Conditionally include the "address" field based on product type
                        if ($request->input('type') == 'physicalproduct') {
                            $orderdetails2Data['address'] = $form2['address'];
                        }
                        $orderdetails2 =   Order_details::create($orderdetails2Data);
                        /// dd($response_array);

                        $pay = QrCode::size(200)
                            ->backgroundColor(255, 255, 0)
                            ->color(0, 0, 255)
                            ->margin(1)
                            ->generate(
                                $upi_url
                            );
                        // $paymenttype = Paymenttype::get()->first();
                        return view('user.payments', compact('pay', 'userid', 'paymenttype', 'txnid'));
                    }
                }

            }
        // }

            else if ($paymenttype->payment_name == 'crizzpay' && $paymenttype->status == '1') {
                $txnid = "TXN" . time();
                $orderid = mt_rand(1000, 9000);

                $key = 'CP36308010567889670';
                $paymentmethod = 'PS001';
                $endpoint = 'https://boapi.cricpayz.io:14442/api/appuser/loginPaymentGateway';

                $callback_url = route('payment.callback');
                // }

                $data = [
                    "name" => $form2['name'],
                    "email" => $form2['email'],
                    "phone" => $form2['mobileno'],
                    "amount" => $request->productprice,
                    "txnid" => $txnid,
                    "return_url" => $callback_url,
                    "token" => $key,
                ];
                // Conditionally include the "address" field based on product type
                if ($request->input('type') == 'physicalproduct') {
                    $data['address'] = $form2['address'];
                }

                $data = json_encode($data);




                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => $endpoint,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $data,
                    CURLOPT_HTTPHEADER => [
                        'Content-Type: application/json',
                    ],
                ]);

                $response = curl_exec($curl);

                curl_close($curl);
                //dd($response);
                // session()->put('txnid', $txnid);
                if ($response === false) {
                    echo 'Curl error: ' . curl_error($curl);
                } else {
                    $response_array = json_decode($response, true);

                    if (!empty($response_array) && isset($response_array['upi_url']) && !empty($response_array['upi_url'])) {
                        $upi_url = $response_array['upi_url'];
                        $orderdetails1 = [
                            'order_id' => $orderid,
                            'product_id' => $request->productid,
                            'seller_id' => $request->selleruserid,
                            'user_id' => $userid,
                            'user_name' => $form2['name'],
                            'user_email' => $form2['email'],
                            'user_number' => $form2['mobileno'],
                            'payment_method' => $paymenttype->payment_name,
                            'product_price' => $request->productprice,
                            'payment_status' => $response_array['status'],
                            'product_name' => $request->productname,
                            'payment_status' =>$response_array['status'],
                            'type' =>$request->type,
                            "transaction_id" => $txnid

                        ];
                        // Conditionally include the "address" field based on product type
                        if ($request->input('type') == 'physicalproduct') {
                            $orderdetails3Data['address'] = $form2['address'];
                        }
                        $orderdetails3 =   Order_details::create($orderdetails3Data);
                        /// dd($response_array);

                        $pay = QrCode::size(200)
                            ->backgroundColor(255, 255, 0)
                            ->color(0, 0, 255)
                            ->margin(1)
                            ->generate(
                                $upi_url
                            );
                        // $paymenttype = Paymenttype::get()->first();
                        return view('user.payments', compact('pay', 'userid', 'paymenttype', 'txnid'));
                    }
                }
            }
        }

    public function transaction(Request $request, $id)
    {

        $title = 'Transaction';
        $transaction_details = Order_details::where('product_id', $id)->get()->all();

        return view('user.transaction', compact('transaction_details', 'title'));
    }



    public function success(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $userid =  $user->id;
        if ($request->indicpay == 1) {
            $indicpay = 'indicpay';
        } else {
            $indicpay = 'crizpay';
        }
        // $payment = Order_details::where('user_id', $userid)->get()->all();
        $transaction_details = Order_details::where('user_id', $userid)
            ->where('transaction_id', $request->res['txnid'])
            ->get()->first();

        $transaction_details->update([

            'payment_status' => $request->res['status'],
            'payment_method' => $indicpay
        ]);

        return "Payment is successful";
    }
    public function cancel(Request $request)
    {
        //dd($request->res['txnid']);
        $user = Auth::user();
        $userid =  $user->id;
        if ($request->indicpay == 1) {
            $indicpay = 'indicpay';
        } else {
            $indicpay = 'crizpay';
        }


        // $payment = Order_details::where('user_id', $userid)->get()->all();
        $transaction_details = Order_details::where('user_id', $userid)
            ->where('transaction_id', $request->res['txnid'])
            ->get()->first();
        //dd($transaction_details);
        $transaction_details->update([

            'payment_status' => $request->res['status'],
            'payment_method' => $indicpay

        ]);
        return "Payment is failed";
    }

/* product filter */
    public function filter(Request $request)
    {

        // Initialize query for products

        $pro = Product::

        when($request->uesrid, function ($query) use ($request) {
            $query->where('user_id', Auth::id());
        })
        ->when($request->productid, function ($query) use ($request) {
            $query->where('product_id', $request->productid)->where('user_id', Auth::id());
        })
        ->when($request->productname, function ($query) use ($request) {
            $query->where('name', $request->productname)->where('user_id', Auth::id());
        })
        ->when($request->producttype, function ($query) use ($request) {
            $query->where('type', $request->producttype)->where('user_id', Auth::id());
        })
        ->where('status', 1)->where('user_id', Auth::id())
        ->get();
         //dd($pro);
        // Return the filtered products as JSON response
        return response()->json($pro);
    }

    /*End*/
    public function transactionfilter(Request $request)
    {
    //dd($request->all());

        $pro = Order_details::

        when($request->userid !== "null", function ($query) use ($request) {
            $query->where('user_id', Auth::id());
        })
        ->when($request->productid, function ($query) use ($request) {
            $query->where('product_id', $request->productid)->where('user_id', Auth::id());
        })
        ->when($request->transactionid, function ($query) use ($request) {
            $query->where('transaction_id', $request->transactionid)->where('user_id', Auth::id());
        })
        ->when($request->producttype, function ($query) use ($request) {
            $query->where('type', $request->producttype)->where('user_id', Auth::id());
        })
        ->where('user_id', Auth::id())
        ->get();



        //  dd($pro);
        // Return the filtered products as JSON response
        return response()->json($pro);
    }


    public function profile()
    {
        $title='Profile';
        $userprofile = UserProfile::
        select('users.name','users.email','users.phone','user_profiles.*')
        ->join('users','users.id','=','user_profiles.user_id')

        ->where('user_profiles.user_id',Auth::id())->get()->first();
       // dd($userprofile);

        return view('user.profile',compact('title','userprofile'));
    }

    public function addprofile(Request $request)
    {


    if (Auth::check()) {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if a user profile already exists for the authenticated user
        $existingProfile = UserProfile::where('user_id', $userId)->first();

        if ($existingProfile) {
            // If a user profile already exists, update the existing record
            $existingProfile->update([
                'name' => $request->username,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pin_code' => $request->postalcode,
                'address' =>$request->address
            ]);

            // Optionally, you can return a success message or redirect the user
            return response()->json(['message' => 'User profile updated successfully']);
        } else {
            // If no user profile exists, create a new one
            $userProfileData = [
                'user_id' => $userId,
                'name' => $request->username,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pin_code' => $request->postalcode,
                'address' =>$request->address
            ];

            // Insert the user profile data
            $userProfile = UserProfile::create($userProfileData);

            // Optionally, you can return a success message or redirect the user
            return response()->json(['message' => 'User profile created successfully']);
        }
    } else {
        // Return an error message or redirect the user
        return response()->json(['error' => 'User is not authenticated'], 401);
    }

        // dd($userprofile);
    }
}
