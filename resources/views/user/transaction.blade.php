@extends('layouts.userlayout')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


    <div class="container mt-3">
        <a class="btn btn-primary" style="border: 1px solid #fff;" href="{{ route('orders.index') }}"><i
                class="fa-solid fa-arrow-left" style="margin-right: 7px;"></i>Back</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header pb-3 font-weight-bold d-flex justify-content-between">
                        <div>
                            <span style="color: #0054A6;">TRANSACTION</span> DETAILS
                        </div>



                        <!-- accordian button -->
                        <button class="btn btn-primary px-4 mx-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-controls="collapseExample">
                            <i class="fa-solid fa-filter" style="margin-right: 5px"></i>
                            Filter
                        </button>

                    </div>



                    <div class="collapse card-body" id="collapseExample">
                        <div class="">
                            <form class="row g-3" action="" id="filter-form" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="userid"
                                        placeholder="Enter User ID" />
                                </div>

                                <div class="col-md-4">
                                    <label for="payment id" class="form-label">Product ID</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="productid"
                                        placeholder="Enter Product ID" />
                                </div>
                                <div class="col-md-4">
                                    <label for="payment id" class="form-label">Transaction id</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="transactionid"
                                        placeholder="Enter Transaction id" />
                                </div>
                                <div class="col-md-4">
                                    <label for="payment id" class="form-label">Product Type</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="producttype"
                                        placeholder="Enter product type" />
                                </div>

                                    <div class="col-md-4">
                                    <label for="from date" class="form-label"
                                        >From Date</label
                                    >
                                    <input
                                        class="form-control datepicker"
                                        id="fromDate"
                                        name="fromDate"
                                        placeholder="Please select date"
                                        type="date"
                                        onfocus="focused(this)"
                                        onfocusout="defocused(this)"
                                    />
                                    </div>
                                    <div class="col-md-4">
                                    <label for="to date" class="form-label">To Date</label>
                                    <input
                                        class="form-control datepicker"
                                        id="toDate"
                                        name="toDate"
                                        placeholder="Please select date"
                                        type="date"
                                        onfocus="focused(this)"
                                        onfocusout="defocused(this)"
                                    />
                                    </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary float-end px-4" id="filter">
                                        Submit
                                    </button>
                                    {{-- <button
                                            type="submit"
                                            class="btn btn-primary float-end px-4 mx-2"
                                        >
                                            Reset
                                        </button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            S.no
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-user mx-1"></i> User Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i>Product ID
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-user mx-1"></i> name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-phone mx-1"></i> number
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-envelope mx-1"></i> email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-cart-shopping"></i> order status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-file-invoice-dollar"></i> payment status
                                        </th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <i class="fa-solid fa-file-invoice-dollar"></i> Product type
                                    </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-money-bill-transfer"></i> Transaction id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Payment method
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (!empty($transaction_details))
                                        @foreach ($transaction_details as $order)
                                            <tr>
                                                <td class="align-middle text-center p-3">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->user_id }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->product_id }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->user_name }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->user_number }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->user_email }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="">
                                                        <span class="badge rounded-pill bg-success"
                                                            style="font-weight: 500; text-transform: capitalize;">{{ $order->order_status }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    @if ($order->payment_status =='ERROR')
                                                    <span class="badge rounded-pill bg-warning"
                                                    style="font-weight: 500; text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                    @elseif($order->payment_status =='INITIATE')
                                                    <span class="badge rounded-pill bg-primary"
                                                    style="font-weight: 500; text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                    @elseif($order->payment_status =='SUCCESS')
                                                    <span class="badge rounded-pill bg-success"
                                                    style="font-weight: 500; text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                    @endif

                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->type }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->transaction_id }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->payment_method }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="text-center">

                                            <td colspan="10" class="text-danger">No Data Found</td>

                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var formData = $('#filter-form').serialize();
                console.log('Form data:', formData);

                $.ajax({
                    url: "{{ route('orders.transactionfilter') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {


                        if (response.length === 0) {
                            // If no data is found, display a message
                            var html =
                                '<tbody><tr><td colspan="5" class="text-center">No data found</td></tr></tbody>';
                        } else {

                            // Assuming response is an array of objects representing table rows
                            var html = '<tbody>';

                            // Iterate through the response data and construct table rows
                            response.forEach(function(row) {
                                html += '<tr>';

                                html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .id + ' </span> </td>';
                                html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .user_id + ' </span> </td>';
                                html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .product_id + '  </span> </td>';

                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .user_name + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .user_number + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .user_email
 +
                                    ' </span> </td>';
                                html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .order_status + ' </span>  </td>';
                                    if(row.payment_status == 'ERROR')
                                    html +=
                                    '<td class="align-middle text-center"> <span  class="badge rounded-pill bg-warning" text-xs font-weight-bold">' +
                                    row
                                    .payment_status + ' </span>  </td>';
                                    else if( row.payment_status =='INITIATE')
                                    html +=
                                    '<td class="align-middle text-center"> <span class="badge rounded-pill bg-primary" text-xs font-weight-bold">' +
                                    row
                                    .payment_status + ' </span>  </td>';
                                    else if(row.payment_status =='SUCCESS')
                                    else
                                    html +=
                                    '<td class="align-middle text-center"> <span class="badge rounded-pill bg-primary" text-xs font-weight-bold">' +
                                    row
                                    .payment_status + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="badge rounded-pill bg-success" text-xs font-weight-bold">' +
                                    row
                                    .payment_status + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-xs font-weight-bold">' +
                                    row
                                    .type + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-xs font-weight-bold">' +
                                    row
                                    .transaction_id + ' </span>  </td>';
                                    html +=
                                    '<td class="align-middle text-center"> <span class="text-secondary text-xs font-weight-bold">' +
                                    row
                                    .payment_method + ' </span>  </td>';
                                // Add more columns as needed
                                html += '</tr>';
                            });

                            html += '</tbody>';
                        }
                        // Replace the contents of the existing table body with the newly constructed HTML
                        $('table').find('tbody').remove();
                        $('table').append(html);
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        // Handle errors
                    }
                });
            });
        });
    </script>



@endsection
