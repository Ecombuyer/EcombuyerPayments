@extends('layouts.adminlayout')
@section('content')
    <div class="container-fluid py-4">
        <a href="{{ route('admin.home') }}" class="btn btn-primary" style="border: 1px solid #fff;"><i
                class="fa-solid fa-arrow-left" style="margin-right: 7px;"></i>HOME</a>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-3 font-weight-bold d-flex justify-content-between">
                        <div>
                            <span style="color: #0054A6;">COMPLAINT</span> DETAILS
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
                            <form class="row g-3" action="" id="filter-form" method ="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter User ID"
                                        name = "userid" />
                                </div>
                                <div class="col-md-4">
                                    <label for="productid" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="inputPassword4"
                                        placeholder="Enter User Name" name="name" />
                                </div>
                                <div class="col-md-4">
                                    <label for="productname" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="productname"
                                        placeholder="Enter Product Name" />
                                </div>
                                <div class="col-md-4">
                                    <label for="Type" class="form-label">Complaint Status</label>
                                    <select id="inputState" class="form-select" name="status">
                                        <option selected disabled>Select Type...</option>
                                        <option value="solved">Solved</option>
                                        <option value="unsolved">
                                            Unsolved
                                        </option>
                                        <option value="pending">
                                            Pending
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="Type" class="form-label">Complaint Type</label>
                                    <select id="inputState" class="form-select" name="type">
                                        <option selected>Select the Concern About Complaint</option>
                                        <option value="ProductQuality">Product Quality</option>
                                        <option value="DeliveryDelays">Delivery Delays</option>
                                        <option value="Incorrect_or_Incomplete_Orders">Incorrect or Incomplete Orders
                                        </option>
                                        <option value="Poor_Customer_Service">Poor Customer Service</option>
                                        <option value="Shipping_Damage">Shipping Damage</option>
                                        <option value="Difficulty_in_Returns_or_Exchanges">Difficulty in Returns or
                                            Exchanges</option>
                                        <option value="HiddenFees_or_Charges">Hidden Fees or Charges</option>
                                        <option value="SecurityConcerns">Security Concerns</option>
                                        <option value="ProductMisrepresentation">Product Misrepresentation</option>
                                        <option value="TechnicalGlitches">Technical Glitches</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="from date" class="form-label">From Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date" type="date"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="fromDate" />
                                </div>
                                <div class="col-md-4">
                                    <label for="to date" class="form-label">To Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date" type="date"
                                        onfocus="focused(this)" onfocusout="defocused(this)" name="toDate" />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary float-end px-4" id ="filter">
                                        Submit
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
                                        <th>
                                            <input type="checkbox" name="checkall" id="ids">
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            S.no
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Complaint ID
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-id-card mx-1"></i> User Id
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-user mx-1"></i> User Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-envelope mx-1"></i> User Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-phone mx-1"></i> User Phone
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-message mx-1"></i> Complaint
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-hashtag mx-1"></i> Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-eye mx-1"></i> Type
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-plus mx-1"></i> Created at
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-pen-to-square mx-1"></i> Updated at
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($complaints as $complaint)
                                        <tr>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <input type="checkbox" name="id" class="checkboxclass"
                                                        value="{{ $complaint->id }}">
                                                </span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->user_id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->name }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->email }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->phone }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->complaints }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->status }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->type }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->created_at->format('Y/m/d') }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $complaint->updated_at->format('Y/m/d') }}</span>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var formData = $('#filter-form').serialize();
                console.log('Form data:', formData);

                $.ajax({
                    url: "{{ route('admin.complaintsfilter') }}",
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
                                html += '<span>';
                                html +=
                                    '<input type="checkbox" name="id" class="checkboxclass" value="row.id">';
                                html += '</span>';
                                html += '</td>';


                                html += '<tr>';
                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += i++
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.id
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_id;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.name;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.email;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.phone;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.complaints;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.status;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.type;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.created_at;
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.updated_at;
                                html += '</span></td>';



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
    <script>
        $('#ids').click(function() {
            $('.checkboxclass').prop('checked', $(this).prop('checked'));

        });
    </script>
@endsection
