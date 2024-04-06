@extends('layouts.userlayout')
@section('content')


          <div class="container-xl">
            <div class="row row-deck row-cards" >
                <div class="col-3">
                    <a href="{{route('orders.create')}}" class="btn btn-primary">create new</a>
                    </div>
              <div class="col-12">
                <div class="card">

                  <div class="card-header">
                    <div>
                      <h1 class="card-title">PRODUCTS DETAILS</h1>

                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
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

                          <th class="w-1 text-center">Actions</th>
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

                                <td >
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



                                  </td>
                            </tr>
                        @endforeach
                    </tbody>




                    </table>
                  </div>
                  <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          {{-- <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left --> --}}
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                          prev
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection


