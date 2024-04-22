<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paymentstatus</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
</head>
<style>
    .qr{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 130px;
    }
</style>
<body>


<div class="container-fluid pt-5 qr" style="color:black; align:center;">
    {{ $pay }}
</div>


    <a href="{{$button}}" class="btn btn-dark" name="qrCode" id="PAID">Pay</a>
</body>
{{-- @foreach ($paymenttype as $paymenttype ) --}}


{{-- @switch($paymenttype->payment_name=='indicpay' || $paymenttype->payment_name=='crizpay'|| $paymenttype->payment_name=='hodapay') --}}
@if($paymenttype->payment_name=='haodapay' && $paymenttype->status=='1')
        <script>
            // Function to check payment status
            $(document).ready(function() {
                function makeAjaxGet() {
                    var txnid = {{ $txnid }};
                    $.ajax({
                        type: "GET",
                        url: "https://jupiter.haodapayments.com/api/v3/collection/status?txnid={{txnid}}",
                        dataType: "json",
                        success: function(response) {
                            console.log("Get successful:", response.status);
                            if (response.status === "INITIATE") {

                                console.log("Transaction initiated. Do nothing.");
                            } else if (response.status === "SUCCESS") {

                                console.log("Transaction successful. Redirecting to success page.");
                                var userId = {{ $userid }};



                                // Make an AJAX request to pass data to the server
                                $.ajax({
                                    url: '{{ route('orders.success') }}',
                                    type: 'GET',
                                    data: {
                                        res: response
                                    }, // Pass the response data
                                    success: function(data) {
                                        console.log(data);
                                        // Redirect to the success page
                                        // window.location.href = data.redirect_url;
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                    }
                                });


                            } else if (response.status === "ERROR") {

                                console.log("Transaction successful. Redirecting to success page.");
                                var userId = {{ $userid }};



                                // Make an AJAX request to pass data to the server
                                $.ajax({
                                    url: '{{ route('orders.failed') }}',
                                    type: 'GET',
                                    data: {
                                        res: response,
                                        indicpay: {{ $paymenttype->payment_name }}
                                    }, // Pass the response data
                                    success: function(data) {
                                        console.log(data);
                                        // Redirect to the success page
                                        // window.location.href = data.redirect_url;
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                    }
                                });


                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error:", error);
                        }
                    });
                }
                makeAjaxGet();
                setInterval(makeAjaxGet, 3000);
            });
        </script>
 @elseif($paymenttype->payment_name=='indicpay' && $paymenttype->status=='1')
    <script>
        // Function to check payment status
        $(document).ready(function() {
            function makeAjaxGet() {
                //  var txnid = {{ $txnid }};
                // alert(txnid)
                $.ajax({
                    type: "GET",
                    url: "https://indicpay.in/api/newc/checkstatus?txnid={{$txnid}}",
                    dataType: "json",
                    success: function(response) {
                        console.log("Get successful:", response.status);
                        if (response.status === "INITIATE") {
                            console.log("Transaction initiated. Do nothing.");


                            // var userId = {{ $userid }};



                            // // Make an AJAX request to pass data to the server
                            // $.ajax({
                            //     url: "{{ route('orders.success') }}",
                            //     type: 'GET',
                            //     data: {
                            //         res: response
                            //     }, // Pass the response data
                            //     success: function(data) {
                            //         // console.log(data);
                            //         // Redirect to the success page
                            //         // window.location.href = data.redirect_url;
                            //     },
                            //     error: function(xhr, status, error) {
                            //         console.error(error);
                            //     }
                            // });

                        } else if (response.status === "SUCCESS") {

                            console.log("Transaction successful. Redirecting to success page.");
                            var userId = {{ $userid }};



                            // Make an AJAX request to pass data to the server
                            $.ajax({
                                url: '{{ route('orders.success') }}',
                                type: 'GET',
                                data: {
                                    res: response
                                }, // Pass the response data
                                success: function(data) {
                                    console.log(data);
                                    // Redirect to the success page
                                    // window.location.href = data.redirect_url;
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });


                        } else if (response.status === "ERROR") {

                            console.log("Transaction successful. Redirecting to success page.");
                            var userId = {{ $userid }};



                            // Make an AJAX request to pass data to the server
                            $.ajax({
                                url: '{{ route('orders.failed') }}',
                                type: 'GET',
                                data: {
                                    res: response,
                                    indicpay: {{ $paymenttype->payment_name }}
                                }, // Pass the response data
                                success: function(data) {
                                    console.log(data);
                                    // Redirect to the success page
                                    // window.location.href = data.redirect_url;
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });


                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }
            makeAjaxGet();
            setInterval(makeAjaxGet, 3000);
        });
    </script>
     @elseif($paymenttype->payment_name=='crizzpay' && $paymenttype->status=='1')
     <script>
        // Function to check payment status
        $(document).ready(function() {
            function makeAjaxGet() {
                var txnid = {{ $txnid }};
                $.ajax({
                    type: "GET",
                    url: "https://indicpay.in/api/newc/checkstatus?txnid={{txnid}}",
                    dataType: "json",
                    success: function(response) {
                        console.log("Get successful:", response.status);
                        if (response.status === "INITIATE") {

                            console.log("Transaction successful. Redirecting to success page.");
                            var userId = {{ $userid }};



                            Make an AJAX request to pass data to the server
                            $.ajax({
                                url: '{{ route('orders.success') }}',
                                type: 'GET',
                                data: {
                                    res: response
                                }, // Pass the response data
                                success: function(data) {
                                    console.log(data);
                                    // Redirect to the success page
                                    // window.location.href = data.redirect_url;
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });


                            console.log("Transaction initiated. Do nothing.");
                        } else if (response.status === "SUCCESS") {

                            // console.log("Transaction successful. Redirecting to success page.");
                            // var userId = {{ $userid }};



                            // Make an AJAX request to pass data to the server
                            // $.ajax({
                            //     url: '{{ route('orders.success') }}',
                            //     type: 'GET',
                            //     data: {
                            //         res: response
                            //     }, // Pass the response data
                            //     success: function(data) {
                            //         console.log(data);
                            //         // Redirect to the success page
                            //         // window.location.href = data.redirect_url;
                            //     },
                            //     error: function(xhr, status, error) {
                            //         console.error(error);
                            //     }
                            // });


                        } else if (response.status === "ERROR") {

                            console.log("Transaction successful. Redirecting to success page.");
                            var userId = {{ $userid }};



                            // Make an AJAX request to pass data to the server
                            $.ajax({
                                url: '{{ route('orders.failed') }}',
                                type: 'GET',
                                data: {
                                    res: response,
                                    indicpay: {{ $paymenttype->payment_name }}
                                }, // Pass the response data
                                success: function(data) {
                                    console.log(data);
                                    // Redirect to the success page
                                    // window.location.href = data.redirect_url;
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });


                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }
            makeAjaxGet();
            setInterval(makeAjaxGet, 3000);
        });
    </script>
  @endif
</html>
