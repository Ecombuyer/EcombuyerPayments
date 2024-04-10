@extends('layouts.adminlayout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title">Dashboard</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="nav-link" href="">User</a>

                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="{{ route('manager') }}">manager</a>
                    </li>
                    <li class="list-group-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                </ul>
                {{-- <a href="{{ route('homepage') }}" class="btn btn-secondary" type="button">homepage</a> --}}
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                    <i class="bi bi-list"></i>
                </button>
                <div class="card-header">{{ __('Dashboard') }}</div>

                {{-- <div class="card-body">
                    You are a Admin User.
                </div> --}}


                @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
                {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> --}}

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Users</div>
                                <div class="card-body">
                                    <h5 class="card-title">1234</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Sales</div>
                                <div class="card-body">
                                    <h5 class="card-title">5678</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">Revenue</div>
                                <div class="card-body">
                                    <h5 class="card-title">9012</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
