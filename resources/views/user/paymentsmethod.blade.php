@extends('layouts.userlayout')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">HOME</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">PAYMENT GATEWAY</a></li>
            </ol>
        </div>
        <div class="row">
            @foreach ($paymenttype as $paymentgateway)
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $paymentgateway->Paymentgateway }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="card-footer-link mb-4 mb-sm-0">
                                <p class="card-text text-dark d-inline">
                                    Status:
                                    @if ($paymentgateway->status === 1)
                                        <a href="javascript:void(0)"
                                            class="badge badge-rounded badge-success text-success">Active</a>
                                    @else
                                        <a href="javascript:void(0)"
                                            class="badge badge-rounded badge-danger text-danger">Inactive</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-sm-flex justify-content-between align-items-center">
                            <div class="d-sm-flex d-block">
                                <form method="POST" action="{{ route('user.paymentactive') }}"
                                    onsubmit="return false;">
                                    @csrf
                                    <input type="hidden" name="gateway_id" value="{{ $paymentgateway->id }}">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input toggle-submit" type="checkbox"
                                            id="toggle{{ $paymentgateway->id }}" name="status" value="1"
                                            {{ $paymentgateway->status ? 'checked' : '' }}>
                                        <label class="form-check-label" for="toggle{{ $paymentgateway->id }}"></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script>
                const toggleSwitches = document.querySelectorAll('.toggle-submit');
                toggleSwitches.forEach(function(toggleSwitch) {
                    toggleSwitch.addEventListener('change', function() {
                        this.closest('form').submit();
                    });
                });
            </script>
        </div>
    </div>
</div>
@endsection








