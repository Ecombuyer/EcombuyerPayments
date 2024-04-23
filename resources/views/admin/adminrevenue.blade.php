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
                            <span style="color: #0054A6;">REVENUE</span> DETAILS
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
                                    <label for="status" class="form-label">Choose Year</label>
                                    <select id="inputState" class="form-select" name="Year">
                                        <option selected disabled>Select Year...</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Choose Month</label>
                                    <select id="inputState" class="form-select" name="month">
                                        <option selected disabled>Select Month...</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
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
                                            <i class="fa-solid fa-plus mx-1"></i> Month
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i> Total Sales
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <i class="fa-solid fa-box mx-1"></i> Total Revenue
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($revenue as $rev)
                                        <tr>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $rev->created_at->format('Y/m/d') }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $rev->product_price }}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ ($rev->product_price * $commissionFee) / 100 }}</span>
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
                    url: "{{ route('admin.revenuefilter') }}",
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
                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += i++
                                html += '</span></td>';

                                html += '<td class="align-middle text-center p-3">';
                                html +=
                                    '<span class="text-secondary text-xs font-weight-bold">';
                                html += row.user_id;
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
@endsection
