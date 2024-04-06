@extends('layouts.userlayout')
@section('content')
<div class="container-xl">
    <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Sales</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                        <div>Conversion rate</div>
                        <div class="ms-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                            <span class="visually-hidden">75% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Revenue</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 me-2">$4,300</div>
                        <div class="me-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="chart-revenue-bg" class="chart-sm"></div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">New clients</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2">6,782</div>
                        <div class="me-auto">
                            <span class="text-yellow d-inline-flex align-items-center lh-1">
                                0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="chart-new-clients" class="chart-sm"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Active users</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2">2,986</div>
                        <div class="me-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="chart-active-users" class="chart-sm"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                            <path d="M12 3v3m0 12v3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132 Sales
                                    </div>
                                    <div class="text-secondary">
                                        12 waiting payments
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M17 17h-11v-14h-2" />
                                            <path d="M6 5l14 1l-1 7h-13" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        78 Orders
                                    </div>
                                    <div class="text-secondary">
                                        32 shipped
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        623 Shares
                                    </div>
                                    <div class="text-secondary">
                                        16 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132 Likes
                                    </div>
                                    <div class="text-secondary">
                                        21 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 id="payment-type">Choose The <span style="color: #0054A6; margin: 0px 10px;"> Payment Link </span> Types</h2>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Create Payment Link</h3>

                    <div class="card">
                        <div class="card-body">
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-dark-lt ms-auto" style="margin-right: 10px;">Overview</span><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cumque odio impedit porro ab nostrum. Id, reiciendis. Debitis, vitae ullam.</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-dark-lt ms-auto" style="margin-right: 10px;">Step 1 </span><span> Click the below<span style="background: #0054A6; color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;"> Choose </span> Button for Create Payment Link</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-dark-lt ms-auto" style="margin-right: 10px;">Step 2 </span><span> Fill the Required <span style="color: red;">*</span> Fields in the Payment link Form</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-dark-lt ms-auto" style="margin-right: 10px;">Step 3 </span>Click the<span style="background: #0054A6; color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;"> Generate the Link </span></span>
                            </div>

                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" style="margin-top: 20px;">Choose</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Create Payment Link <span class="badge badge-sm bg-rss-lt ms-auto">with products</span></h3>

                    <div class="card">
                        <div class="card-body">
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-green-lt ms-auto" style="margin-right: 10px;">Overview</span><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cumque odio impedit porro ab nostrum. Id, reiciendis. Debitis, vitae ullam.</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-green-lt ms-auto" style="margin-right: 10px;">Step 1 </span><span> Click the below<span style="background: #0054A6; color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;"> Choose </span> Button for Create Payment Link (with Products) </span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-green-lt ms-auto" style="margin-right: 10px;">Step 2 </span><span> Fill the Required <span style="color: red;">*</span> Fields in the Payment link Form</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge badge-sm bg-green-lt ms-auto" style="margin-right: 10px;">Step 3 </span>Click the<span style="background: #0054A6; color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;"> Generate the Link </span></span>
                            </div>

                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" style="margin-top: 20px;">Choose</button>
                </div>
            </div>
        </div>
    </div>
     @php
     $user = Auth::user();
        $userid =  $user->id;
        use App\Models\Product;
        $orders = App\Models\Product::where('status', '=', '1')
        ->where('user_id',$userid)
        ->limit(4)
        ->get();

        @endphp
        <div class="row row-deck row-cards mt-5" >
          <div class="col-12">
            <div class="card">

              <div class="card-header">
                <div>
                  <h1 class="card-title">PRODUCTS DETAILS</h1>

                </div>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable table-hover">
                  <thead>
                    <tr>
                        <th class="">Sno</th>

                      <th class="">User Id</th>
                      <th class="">Product ID</th>
                      <th class="">product Name</th>

                      <th>Product Description</th>
                      <th class="">Product Price</th>
                      <th class="">Transaction</th>
                      <th class="">Product Image</th>

                      {{-- <th class="w-1 text-center">Actions</th> --}}
                    </tr>
                  </thead>


                  <tbody>
                    @foreach ($orders as $order)

                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $order->user_id }}</td>
                            <td>{{ $order->product_id }}</td>
                            <td>{{ $order->name }}</td>

                            <td><div style="position: relative;overflow: auto;width: 235px !important;height: 120px !important;text-wrap: wrap; text-">{{ strip_tags($order->description) }}</div></td>
                            <td>{{ $order->price }}</td>
                            <td> <a href="{{route('orders.transaction',$order->product_id)}}" class="btn btn-no-underline mx-2"> Transaction</a></td>
                            <td>
                                <div class="card" style="width: 50%;">
                                @if ($order->image)
                                    <img class="card-img" style="width: 200px"  src="{{ asset('uploads/previewimages/' . $order->image) }}"
                                       >
                                @else
                                    <span>No image found!</span>
                                @endif
                            </div>
                            </td>

                            {{-- <td >
                                <div class=" mx-0 d-flex">
                                    <a href="{{url('/'.$order->product_id.'/'.$order->name.'/show')}}" role="button" class="btn btn-primary mx-2"><i class="fa-regular fa-eye " style="margin-right: 5px"></i> Preview</a>

                                <div class="share-module" data-title="{{ $order->name }}" data-text="{{ $order->description }}" data-url="{{url('/'.$order->product_id.'/'.$order->name.'/show')}}">
                                    <template class="is-supported">
                                        <button class="btn btn-primary mx-2 js-share"><i class="fa-solid fa-share" style="margin-right: 5px"></i>Share</button>
                                    </template>
                                    <template class="not-supported">
                                        <pre>@Html.Partial('_Social.html')</pre>
                                    </template>
                                </div>



                                <a href="{{url('/'.$order->id.'/edit')}}" class="btn btn-primary mx-2 " role="button"><i class="fa-regular fa-pen-to-square" style="margin-right: 5px"></i> Edit</a>
                                <a href="{{url('/'.$order->id.'/destory')}}" class="btn btn-danger mx-2 "role="button"> <i class="fa-solid fa-trash-can" style="margin-right: 5px"></i> Delete</a>


                                </div>



                              </td> --}}
                        </tr>
                    @endforeach
                </tbody>




                </table>
              </div>
              <div class="card-footer d-flex align-items-center">
                <a href="{{route('load_more_products')}}" class="">Show More...</a>
              </div>
            </div>
          </div>
        </div>





</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection
