@extends('layouts.userlayout')
@section('content')
    <div class="card-body createcountry">

        <form action="{{route('orders.placeorder')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label> Name</label>
                <input type="text" name="name" id="name" class="form-control" >
                @error('name') <span class="text text-danger">{{$message}}</span>@enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" >
                @error('email') <span class="text text-danger">{{$message}}</span>@enderror
            </div>

            <div>
                <label>Mobile Number</label>n
                <input type="text" name="mobileno" id="mobileno"  class="form-control">
                @error('mobileno') <span class="text text-danger">{{$message}}</span>@enderror
            </div>

            <div class="mb-3">

                <input type="hidden" name="s" id="userid" value="{{$userid}}">
                <input type="hidden" name="selleruserid" id="seeleruserid" value="{{$order->user_id}}">
                <input type="hidden" name="productid" id="productid" value="{{$order->product_id}}">

                <button type="submit" class="btn btn-success add-product">Save</button>
                <a href="{{route('orders.buynow')}}" type="submit" class="btn btn-danger mx-1">Cancel</a>
            </div>
        </form>
    </div>

@endsection
