@extends('layouts.userlayout')
@section('content')
    <div class="container-fluid py-4">
        <a href="{{ route('admin.home') }}" class="btn btn-primary" style="border: 1px solid #fff;"><i
                class="fa-solid fa-arrow-left" style="margin-right: 7px;"></i>HOME</a>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-3 font-weight-bold d-flex justify-content-between">
                        <div>
                            <span style="color: #0054A6;">TRANSACTION</span> DETAILS
                        </div>
                        <button class="btn btn-primary px-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-controls="collapseExample">
                            <i class="fa-solid fa-filter" style="margin-right: 5px"></i>
                            Filter
                        </button>
                        <!-- filter content -->
                    </div>

                    <div class="collapse card-body" id="collapseExample">
                        <div class="">
                            <form class="row g-3 "id="filter-form" method="POST" action=""
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter User ID"
                                        name="userid" />
                                </div>
                                <div class="col-md-4">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter User Name" name = "name" />
                                </div>
                                <div class="col-md-4">
                                    <label for="productname" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter Product Name" name = "productname" />
                                </div>
                                <div class="col-md-4">
                                    <label for="productid" class="form-label">Product ID</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter Product ID" name = "productid" />
                                </div>
                                <div class="col-md-4">
                                    <label for="txnid" class="form-label">Transaction ID</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter Transaction ID" name = "txnid" />
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email ID</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Email"
                                        name = "email" />
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter Phone Number" name = "phone" />
                                </div>
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Transaction Status</label>
                                    <select id="inputState" class="form-select" name="status">
                                        <option selected disabled>Select Status...</option>
                                        <option value="INITIATE">INITIATE</option>
                                        <option value="SUCCESS">
                                            SUCCESS
                                        </option>
                                        <option value="FAILED">FAILED</option>
                                        <option value="ERROR">ERROR</option>
                                    </select>
                                </div>
                                {{-- <div class="col-md-4">
                  <label for="city" class="form-label">City</label>
                  <select id="inputState" class="form-select">
                    <option selected disabled>Select State...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">
                      Arunachal Pradesh
                    </option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">
                      Himachal Pradesh
                    </option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">
                      Andaman and Nicobar Islands
                    </option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option
                      value="Dadra and Nagar Haveli and Daman and Diu"
                    >
                      Dadra and Nagar Haveli and Daman and Diu
                    </option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected disabled>Select State...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">
                      Arunachal Pradesh
                    </option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">
                      Himachal Pradesh
                    </option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">
                      Andaman and Nicobar Islands
                    </option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option
                      value="Dadra and Nagar Haveli and Daman and Diu"
                    >
                      Dadra and Nagar Haveli and Daman and Diu
                    </option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                  </select>
                </div> --}}
                                <div class="col-md-4">
                                    <label for="from date" class="form-label">From Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date" type="date"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="fromDate" />
                                </div>
                                <div class="col-md-4">
                                    <label for="to date" class="form-label">To Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date"
                                        type="date" onfocus="focused(this)" onfocusout="defocused(this)"
                                        name="toDate" />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary float-end px-4" id="filter">
                                        Submit
                                    </button>
                                    <button type="submit" class="btn btn-primary float-end px-4 mx-2">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            S.no
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-hashtag mx-1"></i> Order Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i> Product Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i> Product Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i> Product Price
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-id-card mx-1"></i> User Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-user mx-1"></i> Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-envelope mx-1"></i>Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-phone mx-1"></i> Number
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-eye mx-1"></i> Order Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-eye mx-1"></i> Payment Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-money-bill-transfer"></i> Transaction Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-credit-card mx-1"></i> Payment Method
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-plus mx-1"></i> Created at
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-plus mx-1"></i> Updated at
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->order_id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->product_id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->product_name }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->product_price }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->user_id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->user_name }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->user_email }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->user_number }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->order_status }}</span>
                                            </td>
                                            @if ($order->payment_status == 'INITIATE')
                                                <td class="align-middle text-center p-3">
                                                    <span class="badge rounded-pill bg-info text-xs font-weight-bold"
                                                        style="text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                </td>
                                            @elseif($order->payment_status == 'ERROR')
                                                <td class="align-middle text-center p-3">
                                                    <span class="badge rounded-pill bg-danger text-xs  font-weight-bold"
                                                        style="text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                </td>
                                            @elseif($order->payment_status == 'SUCCESS')
                                                <td class="align-middle text-center p-3">
                                                    <span class="badge rounded-pill bg-success text-xs font-weight-bold"
                                                        style="text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                </td>
                                            @elseif($order->payment_status == 'FAILED')
                                                <td class="align-middle text-center p-3">
                                                    <span class="badge rounded-pill bg-warning text-xs font-weight-bold"
                                                        style="text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                </td>
                                            @else
                                                <td class="align-middle text-center p-3">
                                                    <span class="badge rounded-pill bg-warning text-xs  font-weight-bold"
                                                        style="text-transform: capitalize;">{{ $order->payment_status }}</span>
                                                </td>
                                            @endif
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->transaction_id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->payment_method }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->created_at->format('Y/m/d') }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $order->updated_at->format('Y/m/d') }}</span>
                                            </td>
                                    @endforeach
                                    </tr>



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </body>

    </html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var formData = $('#filter-form').serialize();
                console.log('Form data:', formData);

                $.ajax({
                    url: "{{ route('admin.transactionfilters') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        console.log(response);
                        if (response.length === 0) {
                            // If no data is found, display a message
                            var html =
                                '<tbody><tr><td colspan="5" class="text-center">No data found</td></tr></tbody>';
                        } else {

                            // Assuming response is an array of objects representing table rows
                            var html = '<tbody>';
                            var i = 1;
                            // Iterate through the response data and construct table rows
                            response.forEach(function(row) {
                                html += '<tr>';
                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += i++;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.order_id;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.product_id;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.product_name;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.product_price;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_id;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_name;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_email;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_number;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.order_status;
                                html += '</span></td>';

                                if (row.payment_status == 'INITIATE') {
                                    html +=
                                        ' <td class="align-middle text-center p-3">';
                                    html +=
                                        '<span class="badge rounded-pill bg-info text-xs font-weight-bold">';
                                    html += row.payment_status;
                                    html += '</span></td>';
                                } else if (row.payment_status == 'SUCCESS') {
                                    html +=
                                        ' <td class="align-middle text-center p-3">';
                                    html +=
                                        '<span class="badge rounded-pill bg-success text-xs font-weight-bold">';
                                    html += row.payment_status;
                                    html += '</span></td>';
                                } else if (row.payment_status == 'FAILED') {
                                    html +=
                                        ' <td class="align-middle text-center p-3">';
                                    html +=
                                        '<span class="badge rounded-pill bg-warning text-xs font-weight-bold">';
                                    html += row.payment_status;
                                    html += '</span></td>';
                                } else if (row.payment_status == 'ERROR') {
                                    html += '<td class="align-middle text-center p-3">';
                                    html +=
                                        '<span class="badge rounded-pill bg-danger text-xs  font-weight-bold">';
                                    html += row.payment_status;
                                    html += '</span></td>';
                                } else {
                                    html +=
                                    ' <td class="align-middle text-center p-3">';
                                    html +=
                                        '<span class="text-secondary text-xs font-weight-bold">';
                                    html += row.payment_status;
                                    html += '</span></td>';
                                }

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.transaction_id;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.payment_method;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.created_at;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.updated_at;
                                html += '</span></td>';





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
