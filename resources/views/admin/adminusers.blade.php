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
                            <span style="color: #0054A6;">USER</span> DETAILS
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
                            <form class="row g-3" id="filter-form" action="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter User ID"
                                        name = "userid" />
                                </div>
                                <div class="col-md-4">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="inputEmail4"
                                        placeholder="Enter User Name" name = "name" />
                                </div>
                                <div class="col-md-4">
                                    <label for="number" class="form-label">User Number</label>
                                    <input type="text" class="form-control" id="inputEmail4"
                                        placeholder="Enter User Number" name = "number" />
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">User Email</label>
                                    <input type="text" class="form-control" id="inputEmail4"
                                        placeholder="Enter User Email" name = "email" />
                                </div>
                                <div class="col-md-4">
                                    <label for="pan" class="form-label">Pan No</label>
                                    <input type="text" class="form-control" id="inputEmail4"
                                        placeholder="Enter Pan Number" name = "pan" />
                                </div>
                                <div class="col-md-4">
                                    <label for="pincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter PinCode"
                                        name = "pincode" />
                                </div>
                                <div class="col-md-4">
                                    <label for="state" class="form-label">State</label>
                                    <select id="inputState" class="form-select" name="state">
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
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">
                                            Dadra and Nagar Haveli and Daman and Diu
                                        </option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="from date" class="form-label">From Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date"
                                        type="date" onfocus="focused(this)" onfocusout="defocused(this)"
                                        name ="fromDate" />
                                </div>
                                <div class="col-md-4">
                                    <label for="to date" class="form-label">To Date</label>
                                    <input class="form-control datepicker" placeholder="Please select date"
                                        type="date" onfocus="focused(this)" onfocusout="defocused(this)"
                                        name ="toDate" />
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
                                        <th>
                                            <input type="checkbox" name="checkall" id="ids">
                                        </th>
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
                                            <i class="fa-regular fa-user mx-1"></i> name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-envelope mx-1"></i> Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-phone mx-1"></i> Number
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-regular fa-id-card mx-1"></i> Pan No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-location-dot mx-1"></i> Address
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-location-dot mx-1"></i> City
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-location-dot mx-1"></i> Pincode
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-location-dot mx-1"></i> State
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-earth-americas mx-1"></i> Country
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

                                    @foreach ($userdetails as $user)
                                        <tr>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <input type="checkbox" name="id" class="checkboxclass"
                                                        value="{{ $user->id }}">
                                                </span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->id }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->name }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->email }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->phone }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->pan_no }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->address }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->city }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->pin_code }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->state }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->country }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $user->updated_at }}</span>
                                            </td>

                                        </tr>

                                </tbody>
                                @endforeach
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
                    url: "{{ route('admin.userfilters') }}",
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
                                html += '<input type="checkbox" name="id" class="checkboxclass" value="row.id">';
                                html += '</span>';
                                html +='</td>';   
                                
                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += i++;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.id;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.name;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.email;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.phone;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.pan_no;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.address;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.city;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.pin_code;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.state;
                                html += '</span></td>';

                                html += ' <td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.country;
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
                        $('#ids').click(function() {
                            $('.checkboxclass').prop('checked', $(this).prop(
                            'checked'));

                        });
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
