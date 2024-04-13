@extends('layouts.userlayout')
@section('content')
    <main class="main-content position-relative border-radius-lg ">

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                                        <h5 class="font-weight-bolder">
                                            $53,000
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                        <h5 class="font-weight-bolder">
                                            2,300
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                        <h5 class="font-weight-bolder">
                                            +3,462
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                        <h5 class="font-weight-bolder">
                                            $103,430
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100 ">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-uppercase">Create <span style="color: #0054A6;">Payment Link</span></h6>
                        </div>
                        <div class="card-body p-3">
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-primary" style="margin-right: 10px;">Overview</span><span>A
                                    payment gateway link is a secure URL provided by payment gateway providers for online
                                    transactions. Customers click on the link to enter payment details and complete
                                    purchases securely. Businesses benefit from streamlined payment processes and enhanced
                                    security features.</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-primary" style="margin-right: 10px;">Step 1 </span><span>
                                    Click the below<span class="badge bg-gradient-primary mx-2"> select </span> Button for
                                    Create Payment Link</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-primary" style="margin-right: 10px;">Step 2 </span><span>
                                    Fill the Required <span style="color: red;">*</span> Fields in the Payment link
                                    Form</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge  bg-gradient-primary" style="margin-right: 10px;">Step 3 </span>Click
                                the<span class="badge bg-gradient-primary mx-2"> Generate Link </span></span>
                            </div>
                            <button type="button" class="btn  bg-gradient-primary"
                                style="margin-top: 20px;">SELECT</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-uppercase">Create <span style="color: #0054A6; ">Payment Link</span> with
                                products</h6>
                        </div>
                        <div class="card-body p-3">
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-dark"style="margin-right: 10px;">Overview</span><span>A
                                    payment gateway link for products is a secure URL that businesses create to enable
                                    customers to purchase specific products online. Customers can click on the link, enter
                                    payment details, and complete the transaction securely, simplifying the buying process
                                    and enhancing sales for businesses.</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-dark" style="margin-right: 10px;">Step 1 </span><span> Click
                                    the below<span
                                        style="background: #0054A6; color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;">
                                        Choose </span> Button for Create Payment Link Link (with Products)</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-dark" style="margin-right: 10px;">Step 2 </span><span> Fill
                                    the Required <span style="color: red;">*</span> Fields in the Payment link Form</span>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="badge bg-gradient-dark" style="margin-right: 10px;">Step 3 </span>Click
                                the<span class="bg-primary px-1"
                                    style="color: #fff; padding: 3px 2px; margin: 0 5px;border-radius: 3px;"> Generate the
                                    Link </span></span>
                            </div>
                            <button type="button" class="btn bg-gradient-primary"
                                style="margin-top: 20px;">Choose</button>
                        </div>

                    </div>
                </div>
                <!-- dl -->

                <!-- dl -->
                <div class="col-lg-4">
                    <div class="card card-carousel overflow-hidden h-100 p-0">
                        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner border-radius-lg h-100">
                                <div class="carousel-item h-100 active"
                                    style="background-image: url('../assets/img/carousel-1.jpg');
      background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Get started with Argon</h5>
                                        <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="background-image: url('../assets/img/carousel-2.jpg');
      background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                        <p>That’s my skill. I’m not really specifically talented at anything except for the
                                            ability to learn.</p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="background-image: url('../assets/img/carousel-3.jpg');
      background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-trophy text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                        <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-4 font-weight-bold">
                                    <span style="color: #0054A6;">PRODUCTS</span> DETAILS
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                        S.no
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        User Id
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Product ID
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Product name
                                                    </th>
                                                    <!-- <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                    >
                                                    Product Description
                                                    </th> -->
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Product Price
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Transaction
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Product Image
                                                    </th>
                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Product Type
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $loop->index + 1 }}</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $order->user_id }}</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $order->product_id }}</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $order->name }}</span>
                                                        </td>
                                                        <!-- <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold"
                                                            >loremffndsofnon</span
                                                        >
                                                        </td> -->
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $order->price }}</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <a class="badge bg-primary" href="{{route('orders.transaction',$order->product_id)}}"  style="font-weight: 500; text-transform: capitalize; text-decoration: underline; background-color: #c9c8c3;">Details</a>

                                                          </td>

                                                        <td class="align-middle text-center">
                                                            <div class="">
                                                                <div>
                                                                    @if ($order->image)
                                                                        <img src="{{ asset('uploads/previewimages/' . $order->image) }}"
                                                                            class="avatar avatar-sm me-3"
                                                                            alt="user2" />
                                                                    @else
                                                                        <span>No image found!</span>
                                                                    @endif
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $order->type }}</span>
                                                        </td>
                                                        <td class="align-middle text-center w-1">
                                                            <a href="{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}"
                                                                class="text-white font-weight-bold text-xs mx-1  bg-primary"
                                                                data-toggle="tooltip" data-original-title="Edit user"
                                                                style=" padding: 7px; border-radius: 10px;">
                                                                <i class="fa-regular fa-eye "
                                                                    style="margin-right: 3px"></i> Preview
                                                            </a>
                                                            <a class="share-module " data-toggle="tooltip"
                                                                data-original-title="Edit user"
                                                                data-title="{{ $order->name }}"
                                                                data-text="{{ $order->description }}"
                                                                data-url="{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}"
                                                                >
                                                                <template class="is-supported">
                                                                    <a
                                                                        class="text-white font-weight-bold text-xs mx-1  bg-gradient-success js-share" style="border-radius:10px;padding: 7px;" >
                                                                        <i
                                                                            class="fa-solid fa-share"
                                                                            style="margin-right: 5px" ></i>Share</a>
                                                                </template>
                                                                <template class="not-supported">
                                                                    <pre>@Html.Partial('_Social.html')</pre>
                                                                </template>

                                                            </a>

                                                            <a href="{{ url('/' . $order->id . '/edit') }}"
                                                                class="text-white font-weight-bold text-xs mx-1  bg-gradient-warning"
                                                                data-toggle="tooltip" data-original-title="Edit user"
                                                                style=" padding: 7px; border-radius: 10px;">
                                                                <i class="fa-regular fa-pen-to-square"
                                                                    style="margin-right: 3px"></i> Edit
                                                            </a>
                                                            <a href="{{ url('/' . $order->id . '/destory') }}"
                                                                class="text-white font-weight-bold text-xs mx-1 bg-gradient-danger"
                                                                data-toggle="tooltip" data-original-title="Edit user"
                                                                style=" padding: 7px; border-radius: 10px;">
                                                                <i class="fa-solid fa-trash-can"
                                                                    style="margin-right: 3px"></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center">
                                        <a href="{{route('orders.index')}}" class="font-weight-bold text-xs mx-3 text-decoration-underline">Show More...</a>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection
