@extends('layouts.userlayout')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        .align-center {
            text-align: center;
            color: white;
            /* Text color */
            background-color: #007bff;
            /* Background color */
            padding: 10px;
            /* Add padding for better appearance */
        }
    </style>

    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-3">
                <a href="{{ route('orders.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h1 class="card-title">TRANSACTION DETAILS</h1>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="">Sno</th>

                                    <th class="">User Id</th>
                                    <th class="">Product ID</th>
                                    <th class="">User Name</th>

                                    <th>Number</th>
                                    <th class="">Email</th>
                                    <th class="">Order status</th>
                                    <th class="">Payment status</th>

                                    <th class="w-1 text-center">Transaction Id</th>
                                    <th class="w-1 text-center">Payment Method</th>
                                </tr>
                            </thead>


                            <tbody>
                                @if (!empty($transaction_details))
                                    @foreach ($transaction_details as $order)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $order->user_id }}</td>
                                            <td>{{ $order->product_id }}</td>
                                            <td>{{ $order->user_name }}</td>
                                            <td>{{ $order->user_number }}</td>
                                            <td>{{ $order->user_email }}</td>
                                            <td>{{ $order->order_status }}</td>
                                            <td>{{ $order->payment_status }}</td>
                                            <td>{{ $order->transaction_id }}</td>
                                            <td>{{ $order->payment_method }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">

                                        <td colspan="10" class="text-danger" >No Data Found</td>

                                    </tr>
                                @endif
                            </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
