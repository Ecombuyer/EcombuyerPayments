<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <link href="{{ env('APP_URL') }}dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        #payment-type {
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <script src="{{ env('APP_URL') }}dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                    aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href=".{{ env('APP_URL') }}">
                        <img src="./static/logo.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image">
                    </a>
                </h1>
                <!-- Mobile Nav Bar Template  -->
                <div class="navbar-nav flex-row d-lg-none">
                    <div class="d-none d-lg-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url(./static/avatars/000m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ session()->get('username') }}</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href=".{{ env('APP_URL') }}/profile.html" class="dropdown-item">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href=".{{ env('APP_URL') }}/settings.html" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" class="dropdown-item" value="Logout">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar for mobile and desktop devices -->
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('orders.index')}}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Extra
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href=".{{ env('APP_URL') }}/empty.html">
                                            Empty page
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Create
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="{{ route('orders.create') }}">
                                            Orders
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="">
                                            New Orders
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Payments
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="{{ route('user.paymentmethod') }}">
                                            Payments type
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <!--Setting -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                   Setting
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="">
                                            Setting
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <!--End -->

                    </ul>
                </div>
            </div>
        </aside>
        <!-- desktop Nav bar Top Navbar -->
        <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Last updates</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-red d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon text-muted" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url(data:image/png;base64,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)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{session()->get('username')}}</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href=".{{ env('APP_URL') }}/profile.html" class="dropdown-item">Profile</a>
                            <a href=".{{ env('APP_URL') }}/settings.html" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" class="dropdown-item" value="Logout">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="page-body">
                @yield('content')
            </div>
        </div>
        <div class="page-wrapper">
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center justify-content-center">

                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 ">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item ">
                                    Copyright &copy; 2023
                                    <a href=".{{ env('APP_URL') }}" class="link-secondary">Ecom Buyer</a>.
                                    All rights reserved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ env('APP_URL') }}dist/libs/apexcharts/dist/apexcharts.min.js?1692870487" defer></script>
    <script src="{{ env('APP_URL') }}dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487" defer></script>
    <script src="{{ env('APP_URL') }}dist/libs/jsvectormap/dist/maps/world.js?1692870487" defer></script>
    <script src="{{ env('APP_URL') }}dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487" defer></script>
    <!-- Tabler Core -->
    <script src="{{ env('APP_URL') }}dist/js/tabler.min.js?1692870487" defer></script>
    <script src="{{ env('APP_URL') }}dist/js/demo.min.js?1692870487" defer></script>
    <script>
        class WebShare {
            constructor({
                success = () => {},
                error = (e) => {
                    console.log('Web Share API error', e);
                }
            } = {}) {
                this.elements = document.querySelectorAll('.share-module');
                this.isSupported = navigator.share !== undefined;
                this.success = success;
                this.error = error;
                this.init();
            }

            init() {
                this.elements.forEach(element => {
                    const template = this.isSupported ? element.querySelector('.is-supported').innerHTML :
                        element.querySelector('.not-supported').innerHTML;
                    const data = {
                        url: element.dataset.url,
                        title: element.dataset.title,
                        text: element.dataset.text
                    };
                    element.innerHTML = this.compileTemplate(template, data);

                    if (this.isSupported) {
                        element.querySelector('.js-share').addEventListener('click', (e) => {
                            e.preventDefault();
                            navigator.share({
                                title: data.title,
                                text: data.text,
                                url: data.url
                            }).then(() => {
                                this.success();
                            }).catch((error) => {
                                this.error(error);
                            });
                        });
                    }
                });
            }

            compileTemplate(template, scope) {
                return template.replace(/\{\{(\w+)\}\}/g, (match, key) => scope[key]);
            }
        }

        new WebShare({
            success: () => {
                document.getElementById('output').innerHTML = 'Thanks for sharing!';
            }
        });
    </script>
<script src="./dist/libs/tinymce/tinymce.min.js?1692870487" defer></script>
<!-- Tabler Core -->
<script src="./dist/js/tabler.min.js?1692870487" defer></script>
<script src="./dist/js/demo.min.js?1692870487" defer></script>
    {{-- image script --}}

</body>

</html>
