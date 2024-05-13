@extends('layouts.adminlayout')
@section('content')
    <div class="content-body">
        <div class="container-fluid " style="margin-top: 7.8rem">
            <div class="row mx-4">
                @foreach ($paymenttype as $paymentgateway)
                    <div class="col-md-4 my-3">
                        <div class="card" style="border-radius: 25px ">
                            <div class="card-header">
                                <h5 class="card-title" style="text-transform: uppercase;color:rgb(139, 136, 136)">
                                    {{ $paymentgateway->payment_name }}</h5>
                            </div>
                            <div class="card-body my-3">

                                <p class="card-text text-dark d-inline" style="font-weight: 600 ">
                                    Status:
                                    @if ($paymentgateway->status === 1)
                                        <a href="javascript:void(0)" class="badge badge-success text-success">Active</a>
                                    @else
                                        <a href="javascript:void(0)"
                                            class="badge badge-rounded badge-danger text-danger">Inactive</a>
                                    @endif
                                </p>

                            </div>
                            <div class="card-footer" style="border-top: 1px solid rgb(223, 217, 217)">
                                <div class="d-sm-flex d-block">
                                    <form method="POST" action="{{ route('admin.paymentactive') }}"
                                        onsubmit="return false;">
                                        @csrf
                                        <input type="hidden" name="gateway_id" value="{{ $paymentgateway->id }}">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input toggle-submit" type="checkbox"
                                                id="toggle{{ $paymentgateway->id }}" name="status" value="1"
                                                {{ $paymentgateway->status ? 'checked' : '' }} style="">
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
