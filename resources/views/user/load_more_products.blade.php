@extends('layouts.userlayout')
@section('content')
<div class="container-xl">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row row-deck row-cards">
        <div class="">
            <div class="card">
                <div class="card-body">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong> @if(session($message)) </strong>
                        <div class="alert alert-success"></div>
                            @endif
                    </span>
                @enderror
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ord as $key => $value)
                            <tr>
                                <td>
                                    <div class="demo_title">
                                        <h6>{{$value->name}}</h6>
                                        <h1>{{$value->name}}</h1>
                                    </div>
                                </td>
                                <td>
                                    <div class="tpn_card">
                                        {{-- <img src="{{ asset('uploads/products/' . $value->product_image) }}" class="w-100 mb-4" /> --}}
                                    </div>
                                </td>
                                <td>
                                    <p>{{$value->description}}</p>
                                </td>

                                <td>

                                    <!-- Preview button with eye icon -->
                                <a href="{{ route('preview', ['id' => $value->id]) }}" class="btn btn-info"><i class="fa fa-eye"></i> Preview</a>

                                <!-- Share button with share icon -->
                                <a href="{{ route('share', ['id' => $value->id]) }}" class="btn btn-success"><i class="fa fa-share"></i> Share</a>

                                <!-- Delete button with trash icon -->
                                {{-- <a href="{{ route('orders.destroy', $value->id) }}"  class="btn btn-primary"><i class="fa fa-edit"></i> Delete</a> --}}

                                {{-- <a href="{{url('/'.$count->id.'/edit')}}" class="btn btn-primary mx-1">Edit</a> --}}
                                 <a href="{{url('/'.$value->id.'/destory')}}" class="btn btn-danger mx-1">Delete</a>

                                <a href="{{url('/'.$value->id.'/edit')}}"  class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

@endsection
