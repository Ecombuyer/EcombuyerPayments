@extends('layouts.userlayout')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        .align-center {
            text-align: center;
            color: white;
            /* Text color */
            background-color: #007bff;
            /* Background color */
            padding: 10px;
            /* Add padding for better appearance */
        }
    </style>

    <div class="container-xl mt-3">
                <a class="btn btn-primary" style="border: 1px solid #fff;" href="{{ route('orders.index') }}"><i class="fa-solid fa-arrow-left" style="margin-right: 7px;" ></i>Back</a>
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-3 font-weight-bold">
                    <span style="color: #0054A6;">TRANSACTION</span> DETAILS
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                      <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th
                              class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"
                            >
                             S.no
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                            >
                            <i class="fa-regular fa-user mx-1"></i> User Id
                            </th>
                              <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                              >
                              <i class="fa-solid fa-box mx-1"></i>Product ID
                              </th>
                              <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                              >
                              <i class="fa-regular fa-user mx-1"></i> name
                              </th>
                              <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                              >
                              <i class="fa-solid fa-phone mx-1"></i> number
                              </th>
                              <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                              >
                              <i class="fa-regular fa-envelope mx-1"></i> email
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                <i class="fa-solid fa-cart-shopping"></i> order status
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                <i class="fa-solid fa-file-invoice-dollar"></i> payment status
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                <i class="fa-solid fa-money-bill-transfer"></i> Transaction id
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Payment method
                              </th>
                            </tr>
                          </thead>
                          <tbody>

                            @if (!empty($transaction_details))
                            @foreach ($transaction_details as $order)
                            <tr  >
                              <td class="align-middle text-center p-3">
                                <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $loop->index + 1 }}</span
                                >
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $order->user_id }}</span
                                >
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $order->product_id }}</span
                                >
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $order->user_name }}  </span
                                >
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $order->user_number }}</span
                                >
                              </td>
                              <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"
                                  >{{ $order->user_email }}</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="">
                                  <span class="badge rounded-pill bg-success" style="font-weight: 500; text-transform: capitalize;" >{{ $order->order_status }}</span>
                              </td>
                              <td class="align-middle text-center">
                                  <span class="badge rounded-pill bg-success" style="font-weight: 500; text-transform: capitalize;" >{{ $order->payment_status }}</span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"
                                    >{{ $order->transaction_id }}</span
                                  >
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold"
                                    >{{ $order->payment_method }}</span
                                  >
                                </td>
                            </tr>



                            @endforeach
                            @else
                            <tr class="text-center">

                                <td colspan="10" class="text-danger" >No Data Found</td>

                            </tr>
                             @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>






@endsection
