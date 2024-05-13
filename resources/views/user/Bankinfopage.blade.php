@extends('layouts.userlayout')
@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .bankimg {
            width: 25rem;
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


    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-7" style="margin: 7rem 0px;">
                <div class="card" style="border-radius: 30px">
                    <div class="card-header">

                        <p class="text-uppercase text-secondary"><img src="./assets/img/bankfavicon.png"
                                alt=""class="mx-2" alt="" style="width: 3rem;">Bank Details</p>

                    </div>
                    <div class="card-body" style="margin-top: -2rem;">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <img src="./assets/img/bankimg.png" class="bankimg">
                        </div>
                        <form class="`" action="{{ route('user.bank_details') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Bank Name</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-solid fa-building-columns"></i></span>
                                            <input type="text" class="form-control" name ="bankname" id ="bankname"  value="{{ @$bank_details->bank_name ? $bank_details->bank_name : '' }}" placeholder="enter bank name"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Account Holder Name</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-circle-user"></i></span>
                                            <input type="text" class="form-control" name ="acc_holder_name" id ="acc_holder_name" value="{{ @$bank_details->account_holder_name ? $bank_details->account_holder_name : '' }}" placeholder="enter account name"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Account No</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-circle-user"></i></span>
                                            <input type="number" class="form-control" id="acc_number" name="acc_number" value="{{ @$bank_details->account_number ? $bank_details->account_number : '' }}"
                                                placeholder="enter your account no" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">Re-enter your Account No</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-regular fa-circle-user"></i></span>
                                            <input type="text" class="form-control" id="acc_number" name="acc_number" value="{{ @$bank_details->account_number ? $bank_details->account_number : '' }}"
                                                placeholder="Confirm account no" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="name" class="text-sm text-secondary"
                                        style="font-size: 13px; font-weight: 600;">IFSC</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text" id=""><i
                                                    class="fa-solid fa-building-columns"></i></span>
                                            <input type="text" class="form-control"  id="ifsc_code" name="ifsc_code" value="{{ @$bank_details->ifsc_code ? $bank_details->ifsc_code : '' }}" placeholder="HDFC0000128"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary text-uppercase float-end mt-2" type="">Submit</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- * print in input script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var accountNoInput = document.getElementById('account-no');

            accountNoInput.addEventListener('input', function() {
                var value = this.value;
                var maskedValue = value.replace(/\d/g, '*'); // Replace digits with *

                // Update the input value with maskedValue
                this.value = maskedValue;
            });
        });
    </script>
@endsection
