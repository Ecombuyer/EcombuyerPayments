@extends('layouts.userlayout')
@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .bankimg {
            width: 35rem;
            margin-bottom: 2rem;
            filter: drop-shadow(10px 3px 10px rgb(139, 138, 138));
            /* box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px; */
        }

        @media only screen and (max-width: 767px) {
            .bankimg {

                width: 20rem;

            }
        }
    </style>

    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-7" style="margin: 7rem 0px;">
                <div class="card" style="border-radius: 30px">
                    <div class="card-header">

                        <p class="text-uppercase text-secondary"><img
                                src="{{ asset('/assets/img/complaints/icons8-customer-service-96.png') }}" class="mx-2"
                                alt="" style="width: 4rem;"></i>Customer Complaints</p>

                    </div>
                    <form class="`" id="filter-form" action="{{ route('user.complaintsbooked') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body" style="margin-top: -2rem;">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <!-- <img src="/assets/img/bankimg.png" class="bankimg"> -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">User Name</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-circle-user"></i></span>
                                            <input type="text" class="form-control" name ="username" id ="username"
                                                placeholder="Enter user name" aria-label="Username"
                                                value ="{{ $userprofile->name ? $userprofile->name : '' }}"aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Mobile</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-solid fa-phone"></i></span>
                                            <input type="tel" class="form-control" name ="usermobileno"
                                                id ="usermobileno" placeholder="Enter mobile no" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Email</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-envelope"></i></span>
                                            <input type="email" class="form-control" name ="useremail" id ="useremail"
                                                placeholder="enter email" aria-label="Username"
                                                value ="{{ $userprofile->email ? $userprofile->email : '' }}"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <span class="text-secondary text-sm mx-2">(Optional)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="example-text-input" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Complient About</label>
                                    <div class="form-group">
                                        <select class="form-control" name ="complaints_type" id ="complaints_type">
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
                                </div>
                                <input type="hidden" name="userid" id="userid" value="{{ $userprofile->id }}">
                                <div class="col-md-12">
                                    <label for="exampleFormControlTextarea1" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Complaints</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name ="complaints" rows="8"
                                            placeholder="describe the Complaint"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary text-uppercase float-end mt-2" type="submit"
                                id="filter">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            document.getElementById("filter-form").reset();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#filter').on('click', function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var formData = $('#filter-form').serialize();
                console.log('Form data:', formData);

                function ajaxget() {

                    // var userid = $(document).getElementByid('userid').val;
                    // alert(userid)
                    $.ajax({
                        type: "post",
                        url: "{{ route('user.complaintsbooked') }}",
                        dataType: "json",
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // console.log(response);




                        }
                    });
                }
                ajaxget();
                // setInterval(ajaxget, 3000);
            });

        });
    </script>


@endsection
