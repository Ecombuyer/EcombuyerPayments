<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body{

        }
        .product-image--list {
        display: flex;
        justify-content: flex-start;
        list-style-type: none;
        padding: 5px;

        }
        .product-image--list li {
        margin: 0 5px;
        border: 2px solid #eaeaea;
        border-radius: 5px;
        -webkit-transition: all ease 0.25s;
        transition: all ease 0.25s;
        }
       .product-image--list li.item-selected {
      box-shadow: 1px 1px 1px #888888;
      border: 2px solid #FFC500;
      -webkit-transition: all ease 0.25s;
      transition: all ease 0.25s;
      }
      .product-image--item {
      max-width: 40px;
      max-height: 40px;
      }
      .card-img{
        width: 80%;
        height: 150px;
        margin: 0 auto; /* Added */
        margin-top: 10px;
        margin-bottom: 10px; /* Added */
      }
      #buynow{
        font-weight: 600;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
      }
</style>
</head>
<body>

@php

    $order = App\Models\Product::where('id', $order)->get()->first();
@endphp
    <div class="container-fluid">
        <div class="row card w-100  mt-4" style="margin-left: 1px; border-radius: 20px;" >
          <div class="col-md-6">
            <img
              class="card-img"
              src="{{ asset('uploads/previewimages/' . $order->file) }}"
              id="featured"
              alt="Vans"
            />
            <div class="d-flex justify-content-start">
              <!-- <a href="#" class="card-link text-danger like">
                      <i class="fas fa-heart"></i>
                    </a> -->
              <ul class="product-image--list">
                <li class="item-selected">
                  <img
                    src="{{ asset('uploads/previewimages/' . $order->image) }}"
                    class="product-image--item"
                  />
                </li>
                <li>
                  <img
                    src="{{ asset('uploads/previewimages/' . $order->image_2) }}"
                    class="product-image--item"
                  />
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">{{ $order->name }}</h4>
              <div class="price text-success">
                <h5 class="mt-1">₹ {{ $order->price }}</h5>
              </div>
              <p class="card-text">
                {!! $order->description !!}
              </p>

              <div class="">
                {{-- <a href="#" class="btn btn-warning mt-1 px-3 py-2" id="buynow"
                  ><i class="fas fa-shopping-cart mx-1"></i>Buy Now</a
                > --}}
                <button class="btn btn-warning mt-1 px-3 py-2" data-toggle="modal" data-target="#createOrderModal">
                    <i class = "fas fa-shopping-cart mx-1"></i> Buynow</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="createOrderModal" tabindex="-1" role="dialog" aria-labelledby="createOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                    <h5 class="modal-title" id="createOrderModalLabel">Place Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orders.placeorder') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label> Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    @error('name')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                    @error('email')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobileno" id="mobileno" oninput="validateFirstDigit()" maxlength="10" class="form-control">
                                    <div id="error-message" style="color: red;"></div>


                                    @error('mobileno')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if($order->type =='physicalproduct' )
                                <div>
                                    <label>Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                    @error('address')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @endif

                                <div class="mb-3">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Product</label><br/>
                                            <label>{{ $order->name }}</label>
                                        </div>
                                        <div class="col-6">
                                            <label>Total</label><br/>
                                            <label>{{ $order->price }}</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="payment-box">
                                            <div class="upper-box">
                                                {{-- <div class="payment-options">
                                                    <ul>
                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment-group" value="onlinepayment" id="payment-1" checked="checked">
                                                                <label for="payment-1">Online Payments<span class="small-text"></span></label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment-group" value="cashondelivery" id="payment-2">
                                                                <label for="payment-2">Cash On Delivery<span class="small-text"></span></label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                {{-- <div>
                                                    <p>Select a bank:</p>
                                                    @foreach($banks as $bank)
                                                        <div>
                                                            <input type="radio" id="{{ $bank }}" name="payment-group" value="{{ $bank }}">
                                                            <label for="{{ $bank }}">{{ $bank }}</label>
                                                        </div>


                                                    @endforeach
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">


                                <input type="hidden" name="selleruserid" id="seeleruserid"
                                    value="{{ $order->user_id }}">
                                <input type="hidden" name="productid" id="productid"
                                    value="{{ $order->product_id }}">
                                    <input type="hidden" name="productname" id="productname"
                                    value="{{ $order->name }}">
                                    <input type="hidden" name="productprice" id="productprice"
                                    value="{{ $order->price }}">
                                    <input type="hidden" name="type" id="type"
                                    value="{{ $order->type }}">
                                <button type="submit" class="btn btn-success add-product">Save</button>
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>





</body>
<script>
    $("button").on('click', function() {
        $('#createOrderModal').modal('toggle');
    });
</script>
<script>
  $('.product-image--list li').hover(function() {
  var url = $(this).children('img').attr('src');
  $('.item-selected').removeClass('item-selected');
  $(this).addClass('item-selected');
  $('#featured').attr('src', url);
 });
</script>


<script>
    function validateFirstDigit() {
        var input = document.getElementById('mobileno');
        var firstDigit = input.value.charAt(0);
        if (isNaN(firstDigit) || firstDigit < 6 || firstDigit > 9) {
            document.getElementById('error-message').textContent = 'The first digit must be in the range 6-9';
            input.value = ''; // Clear the input field
        } else {
            document.getElementById('error-message').textContent = '';
        }
    }
    </script>


</html>
