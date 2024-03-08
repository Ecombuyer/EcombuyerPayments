<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
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

<body class=" d-flex flex-column">
    <script src="{{env('APP_URL')}}dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
                        </div>
                        <div class="card card-md" id="card-body">
                            <div class="card-body">
                                <div class="text-center"><img src="{{env('APP_URL')}}dist/img/software/ecomorangelogo.png" height="250px" style="margin-top: -100px;margin-bottom: -100px;" alt=""></div>
                                <h2 class="h2 text-center mb-4">Create to your account</h2>
                                <form action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                                    @csrf()
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your@email.com">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">PanCard No</label>
                                        <div class="input-group input-group-flat">
                                            <input id="Pancard" type="text" class="form-control @error('Pancard') is-invalid @enderror" name="Pancard" required autocomplete="new-Pancard" placeholder="AF*****">
                                            @error('Pancard')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Phone</label>
                                        <div class="input-group input-group-flat">
                                            <input id="phone-confirm" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-phone" placeholder="+91-**********">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">
                                            Password
                                        </label>
                                        <div class="input-group input-group-flat">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group input-group-flat">
                                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter Your Name">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="mb-2 mt-4">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                            <span class="form-check-label">Remember me on this device</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-secondary mt-3">
                            Alreday have an account? <a href="{{ route('login') }}" tabindex="-1"> Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="{{env('APP_URL')}}dist/img/software/register.png" height="700px" class="d-block mx-auto" alt="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{env('APP_URL')}}dist/js/tabler.min.js?1692870487" defer></script>
    <script src="{{env('APP_URL')}}dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>