@extends('layouts.userlayout')
@section('content')
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h4 class="" style="margin-bottom: 20px;"> <span style="color: #0054A6;"> PRODUCT </span>
                                DETAILS</h4>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('orders.create') }}" class="btn btn-primary px-3" type="button">
                                    <i class="fa-solid fa-plus" style="margin-right: 5px"></i>
                                    Add New
                                </a>
                                <!-- accordian button -->
                                <button class="btn btn-primary px-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-controls="collapseExample">
                                    <i class="fa-solid fa-filter" style="margin-right: 5px"></i>
                                    Filter
                                </button>
                            </div>

                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- accordian content -->
                            <div class="collapse card-body" id="collapseExample">
                                <div class="">
                                    <form class="row g-3" action="" id="filter-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-4">
                                            <label for="userid" class="form-label">User ID</label>
                                            <input type="text" class="form-control" id="inputEmail4" name="uesrid"
                                                placeholder="Enter User ID" />
                                        </div>

                                        <div class="col-md-4">
                                            <label for="payment id" class="form-label">Product ID</label>
                                            <input type="text" class="form-control" id="inputPassword4" name="productid"
                                                placeholder="Enter Product ID" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="payment id" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" id="inputPassword4"
                                                name="productname" placeholder="Enter Product Name" />
                                        </div>

                                        {{-- <div class="col-md-4">
                      <label for="payment id" class="form-label"
                        >Payment ID</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="inputPassword4"
                        name=""
                        placeholder="Enter Payment ID"
                      />
                    </div> --}}
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
                                        {{-- <div class="col-md-4">
                      <label for="from date" class="form-label"
                        >From Date</label
                      >
                      <input
                        class="form-control datepicker"
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
                        placeholder="Please select date"
                        type="date"
                        onfocus="focused(this)"
                        onfocusout="defocused(this)"
                      />
                    </div> --}}
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
                                                <i class="fa-regular fa-user mx-1"></i> User Id
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-box mx-1"></i> Product ID
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-box mx-1"></i> Product name
                                            </th>
                                            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Product Description
                      </th> --}}
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-box mx-1"></i> Product Price
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-solid fa-money-bill-transfer"></i> Transaction
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-regular fa-image"></i> Product Image
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <i class="fa-regular fa-pen-to-square"></i> Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="align-middle text-center">
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
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->name }}</span>
                                                </td>
                                                <!-- <td class="align-middle text-center">
                                                      <span class="text-secondary text-xs font-weight-bold"
                                                        >loremffndsofnon</span
                                                      >
                                                    </td> -->
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $order->price }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="badge"
                                                        href="{{ route('orders.transaction', $order->product_id) }}"
                                                        style="font-weight: 500; text-transform: capitalize; text-decoration: underline; background-color: #c9c8c3;">Details</a>

                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="">
                                                        <div>
                                                            @if ($order->image)
                                                                <img src="{{ asset('uploads/previewimages/' . $order->image) }}"
                                                                    class="avatar avatar-sm me-3" alt="user2" />
                                                            @else
                                                                <span>No image found!</span>
                                                            @endif
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center w-1">
                                                    <a href="{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}"
                                                        class="text-white font-weight-bold text-xs mx-1  bg-primary"
                                                        data-toggle="tooltip" data-original-title="Edit user"
                                                        style=" padding: 7px; border-radius: 10px;">
                                                        <i class="fa-regular fa-eye " style="margin-right: 3px"></i>
                                                        Preview
                                                    </a>
                                                    <a class="share-module " data-toggle="tooltip"
                                                        data-original-title="Edit user" data-title="{{ $order->name }}"
                                                        data-text="{{ $order->description }}"
                                                        data-url="{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}"
                                                        style=" padding: 7px; border-radius: 10px;">
                                                        <template class="is-supported">
                                                            <a
                                                                class="text-white font-weight-bold text-xs mx-1  bg-gradient-success js-share"><i
                                                                    class="fa-solid fa-share"
                                                                    style="margin-right: 5px"></i>Share</a>
                                                        </template>
                                                        <template class="not-supported">
                                                            <pre>@Html.Partial('_Social.html')</pre>
                                                        </template>

                                                    </a>
                                                    <a href="{{ url('/' . $order->id . '/edit') }}"
                                                        class="text-white font-weight-bold text-xs mx-1  bg-gradient-warning"
                                                        data-toggle="tooltip" data-original-title="Edit user"
                                                        style=" padding: 7px; border-radius: 10px;">
                                                        <i class="fa-regular fa-pen-to-square"
                                                            style="margin-right: 3px"></i> Edit
                                                    </a>
                                                    <a href="{{ url('/' . $order->id . '/destory') }}"
                                                        class="text-white font-weight-bold text-xs mx-1 bg-gradient-danger"
                                                        data-toggle="tooltip" data-original-title="Edit user"
                                                        style=" padding: 7px; border-radius: 10px;">
                                                        <i class="fa-solid fa-trash-can" style="margin-right: 3px"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var formData = $('#filter-form').serialize();
                console.log('Form data:', formData);

                $.ajax({
                    url: "{{ route('orders.filter') }}",
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

                                html += '<td class="align-middle text-center">' + row
                                    .id + '</td>';
                                html += '<td class="align-middle text-center">' + row
                                    .user_id + '</td>';
                                html += '<td class="align-middle text-center">' + row
                                    .product_id + '</td>';
                                html += '<td class="align-middle text-center">' + row
                                    .name +
                                    '</td>';
                                html += '<td class="align-middle text-center">' + row
                                    .price + '</td>';
                                html += '<td class="align-middle text-center">';
                                // Construct the anchor tag dynamically
                                html += '<a class="badge" href="/transaction/' +
                                    row.product_id +
                                    '" style="font-weight: 500; text-transform: capitalize; text-decoration: underline; background-color: #c9c8c3;">Details</a>';
                                html += '</td>';
                                html += '<td class="align-middle text-center">';
                                html += '<div class="">';
                                html += '<div>';
                                // Check if the order has an image
                                if (row.image) {
                                    // If an image exists, construct an <img> tag
                                    html += '<img src="./uploads/previewimages/' + row
                                        .image +
                                        '" class="avatar avatar-sm me-3" alt="user2" />';
                                } else {
                                    // If no image exists, display a text message
                                    html += '<span>No image found!</span>';
                                }
                                html += '</div>';
                                html +=
                                    '<div class="d-flex flex-column justify-content-center">';
                                html += '</div>';
                                html += '</div>';
                                html += '</td>';
                                html += '<td class="align-middle text-center w-1">';
                                // Construct the anchor tag dynamically for previewing the product
                                html += '<a href="/' + row.product_id + '/' + row
                                    .name +
                                    '/show" class="text-white font-weight-bold text-xs mx-1  bg-primary" data-toggle="tooltip" data-original-title="Preview" style=" padding: 7px; border-radius: 10px;">';
                                html +=
                                    '<i class="fa-regular fa-eye" style="margin-right: 3px"></i>';
                                html += 'Preview';
                                html += '</a>';

                                // Share button
                                html +=
                                    '<a class="share-module" data-toggle="tooltip" data-original-title="Edit user" data-title="' +
                                    row.name + '" data-text="' + row.description +
                                    '" data-url="' + '/' + row.product_id + '/' + row
                                    .name +
                                    '/show" style="padding: 7px; border-radius: 10px;">';
                                html += '<template class="is-supported">';
                                html +=
                                    '<a class="text-white font-weight-bold text-xs mx-1 bg-gradient-success js-share"><i class="fa-solid fa-share" style="margin-right: 5px"></i>Share</a>';
                                html += '</template>';
                                html += '<template class="not-supported">';
                                html += '<pre>@Html.Partial(\'_Social.html\')</pre>';
                                html += '</template>';
                                html += '</a>';

                                // Edit button
                                html += '<a href="/' + row.id +
                                    '/edit" class="text-white font-weight-bold text-xs mx-1 bg-gradient-warning" data-toggle="tooltip" data-original-title="Edit user" style="padding: 7px; border-radius: 10px;">';
                                html +=
                                    '<i class="fa-regular fa-pen-to-square" style="margin-right: 3px"></i> Edit';
                                html += '</a>';

                                // Delete button
                                html += '<a href="/' + row.id +
                                    '/destroy" class="text-white font-weight-bold text-xs mx-1 bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user" style="padding: 7px; border-radius: 10px;">';
                                html +=
                                    '<i class="fa-solid fa-trash-can" style="margin-right: 3px"></i> Delete';
                                html += '</a>';

                                html += '</td>';
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
