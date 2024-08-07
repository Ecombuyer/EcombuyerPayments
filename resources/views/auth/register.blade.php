<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ env('APP_URL') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/assets/img/favicon.png">
    <title>
        Register
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ env('APP_URL') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ env('APP_URL') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ env('APP_URL') }}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            {{-- <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
        Argon Dashboard 2
      </a> --}}
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>

        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Register with</h5>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                            <div class="col-3 ms-auto px-1">
                                <a class="btn btn-outline-light w-100" href="javascript:;">
                                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                                                <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047">
                                                </circle>
                                                <path
                                                    d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z"
                                                    fill="#FFFFFF"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-3 px-1">
                                <a class="btn btn-outline-light w-100" href="javascript:;">
                                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(7.000000, 0.564551)" fill="#000000"
                                                fill-rule="nonzero">
                                                <path
                                                    d="M40.9233048,32.8428307 C41.0078713,42.0741676 48.9124247,45.146088 49,45.1851909 C48.9331634,45.4017274 47.7369821,49.5628653 44.835501,53.8610269 C42.3271952,57.5771105 39.7241148,61.2793611 35.6233362,61.356042 C31.5939073,61.431307 30.2982233,58.9340578 25.6914424,58.9340578 C21.0860585,58.9340578 19.6464932,61.27947 15.8321878,61.4314159 C11.8738936,61.5833617 8.85958554,57.4131833 6.33064852,53.7107148 C1.16284874,46.1373849 -2.78641926,32.3103122 2.51645059,22.9768066 C5.15080028,18.3417501 9.85858819,15.4066355 14.9684701,15.3313705 C18.8554146,15.2562145 22.5241194,17.9820905 24.9003639,17.9820905 C27.275104,17.9820905 31.733383,14.7039812 36.4203248,15.1854154 C38.3824403,15.2681959 43.8902255,15.9888223 47.4267616,21.2362369 C47.1417927,21.4153043 40.8549638,25.1251794 40.9233048,32.8428307 M33.3504628,10.1750144 C35.4519466,7.59650964 36.8663676,4.00699306 36.4804992,0.435448578 C33.4513624,0.558856931 29.7884601,2.48154382 27.6157341,5.05863265 C25.6685547,7.34076135 23.9632549,10.9934525 24.4233742,14.4943068 C27.7996959,14.7590956 31.2488715,12.7551531 33.3504628,10.1750144">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-3 me-auto px-1">
                                <a class="btn btn-outline-light w-100" href="{{ route('google-auth') }}">
                                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                                <path
                                                    d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                    fill="#4285F4"></path>
                                                <path
                                                    d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                    fill="#34A853"></path>
                                                <path
                                                    d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                    fill="#FBBC05"></path>
                                                <path
                                                    d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                    fill="#EB4335"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="mt-2 position-relative text-center">
                                <p
                                    class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                    or
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                                @csrf()
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter Your Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="your@email.com">
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pan card</label>
                                    <div class="input-group input-group-flat">
                                        <input id="Pancard" type="text"
                                            class="form-control @error('Pancard') is-invalid @enderror" name="Pancard"
                                            required autocomplete="new-Pancard" placeholder="AF*****">
                                        @error('Pancard')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone no</label>
                                    <div class="input-group input-group-flat">
                                        <input id="phone-confirm" type="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            required autocomplete="new-phone" placeholder="+91-**********">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group input-group-flat">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="Enter Your Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group input-group-flat">
                                        <input id="password-confirm" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Re-enter Your Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    
                  </label>


                </div> --}}
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="checkbox" value=""
                                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to the <a class="text-dark font-weight-bolder" data-toggle="modal"
                                                data-target="#exampleModalLong">Terms and Conditions</a>
                                        </label>

                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="btn btn-primary" >Large modal</button> --}}

                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="btn btn-primary" >
                                            Launch demo modal
                                        </button> --}}

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <strong>
                                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                                Registration
                                                            </h5>
                                                        </strong>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true" data-dismiss="modal"><i
                                                                    class="fa-solid fa-x"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <h1>Terms & Conditions</h1>

                                                        <ul>
                                                            <li><strong>Users must register with accurate and current
                                                                    information to access Headlink Payments'
                                                                    services.</strong>
                                                                <ul>
                                                                    <li>Registration signifies acceptance of these terms
                                                                        and the commitment to provide truthful
                                                                        information.</li>
                                                                    <li>Users are responsible for maintaining the
                                                                        confidentiality of their account credentials and
                                                                        for all activities under their account.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Completion of KYC Details and Acceptance of
                                                                    Contract</strong>
                                                                <ul>
                                                                    <li>Users agree to provide necessary Know Your
                                                                        Customer (KYC) information as required by
                                                                        regulatory standards.</li>
                                                                    <li>Completion of KYC signifies acceptance of the
                                                                        service contract with Headlink Payments,
                                                                        including terms and conditions.</li>
                                                                    <li>Failure to provide accurate KYC details may
                                                                        result in account suspension or termination.
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Access to Dashboard</strong>
                                                                <ul>
                                                                    <li>Upon registration and KYC approval, users gain
                                                                        access to Headlink Payments' dashboard for
                                                                        payment processing and management.</li>
                                                                    <li>The dashboard provides tools for transaction
                                                                        monitoring, reporting, and account management.
                                                                    </li>
                                                                    <li>Users are responsible for ensuring the security
                                                                        of their dashboard access and must report any
                                                                        unauthorized access immediately.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Contents of the Website of Headlink</strong>
                                                                <ul>
                                                                    <li>The contents of Headlink Payments' website are
                                                                        for informational purposes and do not constitute
                                                                        legal advice.</li>
                                                                    <li>Headlink Payments reserves the right to update,
                                                                        modify, or remove website content without prior
                                                                        notice.</li>
                                                                    <li>Users must not engage in unauthorized use,
                                                                        reproduction, or distribution of website
                                                                        content.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>API Integration with Headlink</strong>
                                                                <ul>
                                                                    <li>API integration with Headlink Payments requires
                                                                        adherence to integration guidelines provided by
                                                                        Headlink.</li>
                                                                    <li>Users must ensure API security, data encryption,
                                                                        and compliance with PCI DSS standards during
                                                                        integration.</li>
                                                                    <li>Headlink Payments may provide technical support
                                                                        for API integration based on service agreements.
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Fraudulent Transactions</strong>
                                                                <ul>
                                                                    <li>Headlink Payments employs fraud detection and
                                                                        prevention measures but does not guarantee
                                                                        absolute protection against fraudulent
                                                                        transactions.</li>
                                                                    <li>Users must report suspicious activities promptly
                                                                        to enable investigation and mitigation by
                                                                        Headlink Payments.</li>
                                                                    <li>Headlink Payments may suspend or terminate
                                                                        accounts involved in fraudulent activities.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Representations & Warranties</strong>
                                                                <ul>
                                                                    <li>Users represent that they have the authority to
                                                                        enter into agreements and perform transactions
                                                                        through Headlink Payments.</li>
                                                                    <li>Users warrant the accuracy of information
                                                                        provided during registration, KYC, and
                                                                        transaction processes.</li>
                                                                    <li>Headlink Payments makes no warranties regarding
                                                                        specific outcomes of transactions or business
                                                                        activities conducted through its services.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Confidentiality</strong>
                                                                <ul>
                                                                    <li>Confidential information shared between Headlink
                                                                        Payments and users is protected and may not be
                                                                        disclosed without consent, except as required by
                                                                        law.</li>
                                                                    <li>Users must safeguard confidential data such as
                                                                        account credentials, transaction details, and
                                                                        API keys.</li>
                                                                    <li>Headlink Payments may use aggregated and
                                                                        anonymized data for analytics, improvement, or
                                                                        marketing purposes.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Indemnification & Remedy</strong>
                                                                <ul>
                                                                    <li>Users agree to indemnify and hold Headlink
                                                                        Payments harmless from any claims, losses, or
                                                                        damages arising from their use of the services.
                                                                    </li>
                                                                    <li>Headlink Payments' liability is limited to the
                                                                        extent permitted by law, and remedies for
                                                                        service issues are subject to the terms of the
                                                                        service agreement.</li>
                                                                    <li>Disputes or claims must be addressed through
                                                                        mutual negotiation and may involve mediation or
                                                                        arbitration if unresolved.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Limitation of Liability Disclaimer</strong>
                                                                <ul>
                                                                    <li>Headlink Payments disclaims liability for
                                                                        indirect, incidental, consequential, or punitive
                                                                        damages arising from service use, except for
                                                                        direct damages resulting from gross negligence
                                                                        or willful misconduct.</li>
                                                                    <li>Headlink Payments' total liability under any
                                                                        circumstance is limited to the fees paid by the
                                                                        user for the specific service causing the
                                                                        liability.</li>
                                                                    <li>Users acknowledge and accept the limitations of
                                                                        liability as outlined in these terms and
                                                                        conditions.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Data Protection</strong>
                                                                <ul>
                                                                    <li>Headlink Payments adheres to data protection
                                                                        laws and standards to secure user data and
                                                                        privacy.</li>
                                                                    <li>Users' personal and financial data is processed
                                                                        securely and may be used for transaction
                                                                        processing, account management, and compliance
                                                                        purposes.</li>
                                                                    <li>Users have rights to access, update, or delete
                                                                        their data as per applicable data protection
                                                                        regulations.</li>
                                                                </ul>
                                                            </li>

                                                            <li><strong>Miscellaneous</strong>
                                                                <ul>
                                                                    <li>These terms constitute the entire agreement
                                                                        between users and Headlink Payments regarding
                                                                        payment gateway services.</li>
                                                                    <li>Headlink Payments may update these terms with
                                                                        prior notice to users, and continued use of
                                                                        services implies acceptance of updated terms.
                                                                    </li>
                                                                    <li>Any disputes or legal matters are subject to the
                                                                        jurisdiction and laws of the governing authority
                                                                        where Headlink Payments is registered or
                                                                        operates.</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="d-flex justify-content-end align-items-center mb-0">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="modal-footer">
                                                        
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" name="submit"
                                            class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Already have an account? <a
                                            href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign
                                            in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    {{-- <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer> --}}
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ env('APP_URL') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        $('#myModal').on('click', function() {
            modal.show();
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ env('APP_URL') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
