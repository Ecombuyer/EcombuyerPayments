@extends('layouts.userlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<div class="container">
<table class="table table-bordered">
    <thead class="responsive">
      <tr>
        <th scope="col">SNO</th>
        <th scope="col">ORDER_ID</th>
        <th scope="col">PRODUCT ID</th>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">NUMBER</th>
        <th scope="col">ORDER STATUS</th>
        <th scope="col">PAYMENT STATUS</th>
        <th scope="col">PAYMENT METHOD</th>
        <th scope="col">TRANSACTION ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orderdetails as $order )
            <th>{{$loop->index + 1}}</th>
            <th>{{$order->order_id}}</th>
            <th>{{$order->product_id}}</th>
            <th>{{$order->user_id}}</th>
            <th>{{$order->user_name}}</th>
            <th>{{$order->user_email}}</th>
            <th>{{$order->user_number}}</th>
            <th>{{$order->order_status}}</th>
            <th>{{$order->payment_status}}</th>
            <th>{{$order->payment_method}}</th>
            <th>{{$order->transaction_id}}</th>
        @endforeach
    </tbody>
</table>
</div>
@endsection