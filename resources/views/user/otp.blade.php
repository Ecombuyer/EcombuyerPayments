<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OTP - Verify</title>
    <!-- CSS files -->
    <link href="{{env('APP_URL')}}dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="{{env('APP_URL')}}dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="{{env('APP_URL')}}dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="{{env('APP_URL')}}dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="{{env('APP_URL')}}dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        #card-body {
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        }
    </style>
</head>
<body class="d-flex flex-column">
    <script src="{{env('APP_URL')}}dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg"
                                    height="36" alt=""></a>
                        </div>
                        <div class="card card-md" id="card-body">
                            <div class="card-body">
                                <div class="text-center"><img
                                        src="{{env('APP_URL')}}dist/img/software/ecomorangelogo.png" height="250px"
                                        style="margin-top: -100px;margin-bottom: -100px;" alt=""></div>
                                <h2 class="h2 text-center mb-4">Enter an OTP</h2>
                                <form action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                                    @csrf()
                                    <div class="mb-3">
                                        <h3 class="card-title">Send to +91-{{$user->phone}}</h3>
                                        <p class="card-subtitle">Enter Four Digit OTP</p>
                                        <div>
                                            <input type="text" class="form-control" placeholder="OTP" name="otp">
                                            <small class="form-hint">
                                                Please input the OTP (One-Time Password)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button id="resend" class="btn btn-danger" disabled>
                                            Resend
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="{{env('APP_URL')}}dist/img/software/register.png" height="700px"
                        class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        // Countdown timer
        var countdown = document.getElementById('resend');
        var timer = 15; // 1 minute
        var interval = setInterval(function () {
            var minutes = Math.floor(timer / 60);
            var seconds = timer % 60;
            countdown.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
            timer--;

            if (timer < 0) {
                clearInterval(interval);
                countdown.innerHTML = "Resend";
                document.getElementById('resend').disabled = false;
            }
        }, 1000);
    </script>
    <script src="{{env('APP_URL')}}dist/js/tabler.min.js?1692870487" defer></script>
    <script src="{{env('APP_URL')}}dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>