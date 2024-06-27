<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rosario's Fashion</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/ecom.css" />
  </head>
  <body>
   
    <section id="header">
        <a href="#"><img src="{{ env('APP_URL') }}/assets/Images/logo.png" class="logo" alt="logo" /></a>
        <div>
          <ul id="navbar">
            <li><a  href="{{route('home')}}">Home</a></li>
            <!--<li><a class="active" href="shop.html">Shop</a></li>-->
            <!--<li><a href="blog.html">Blog</a></li>-->
            <li><a href="{{route('aboutpage')}}">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
          </ul>
        </div>
        <div id="mobile">
          <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
          <i id="bar" class="fa-solid fa-bars"></i>
        </div>
      </section>
    <section id="pagedetails" class="section-p1">
      <form action="{{ route('orders.buynow') }}" method="POST">
        @csrf
        <div class="single-pro-image">
            <img src="{{ asset('uploads/previewimages/' . $order->file) }}" width="100%"  id="mainimg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{ asset('uploads/previewimages/' . $order->file) }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('uploads/previewimages/' . $order->image) }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('uploads/previewimages/' . $order->image_2) }}" width="100%" class="small-img" alt="">
                </div>
                {{-- <div class="small-img-col">
                    <img src="Images/Products/f4.jpg" width="100%" class="small-img" alt="">
                </div> --}}
            </div>
        </div>
        <div class="single-pro-details">
            <h6> {{$order->name}}</h6>
            
            <h2>${{$order->price}}</h2>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1">
            <input type="hidden" name="product_id" value="{{ $order->product_id }}">
            <input type="hidden" name="selleruserid" id="selleruserid"
            value="{{ $order->user_id }}">
        <input type="hidden" name="productid" id="productid"
            value="{{ $order->product_id }}">
            <input type="hidden" name="productname" id="productname"
            value="{{ $order->name }}">
            <input type="hidden" name="productprice" id="productprice"
            value="{{ $order->price }}">
            <input type="hidden" name="type" id="type"
            value="{{ $order->type }}">
            

            <button class="normal">Buy Now</button>
            
            <h4>Product Details</h4>
            <span>{{$order->description}}</span>
        </div>
      </form>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Aesthitic Collection New Arrivals! Get your new favorite shirt now.</p>
        <div class="pro-container">
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n1.jpg" alt="" />
            <div class="des">
              <span>Louis Philippe</span>
              <h5>Casual Blue Shirt</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 800</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n2.jpg" alt="" />
            <div class="des">
              <span>Louis Philippe</span>
              <h5>Checked Shirts</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 900</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n3.jpg" alt="" />
            <div class="des">
              <span>Louis Philippe</span>
              <h5>Casual White Shirts</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 830</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n4.jpg" alt="" />
            <div class="des">
              <span>Roadster</span>
              <h5>Printed Shirt</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 430</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n5.jpg" alt="" />
            <div class="des">
              <span>Flying Machine</span>
              <h5>Denim Shirt</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 1200</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n6.jpg" alt="" />
            <div class="des">
              <span>Flying Machine</span>
              <h5>Formal Jeans</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 900</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n7.jpg" alt="" />
            <div class="des">
              <span>Flying Machine</span>
              <h5>Denim Jackets</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 980</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
          <div class="pro">
            <img src="{{env('APP_URL')}}/assets/Images/Products/n8.jpg" alt="" />
            <div class="des">
              <span>Flying Machine</span>
              <h5>Black Casual Shirt</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>₹ 780</h4>
            </div>
          <a href="" class="cart"><i class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
          </div>
        </div>
      </section>
    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for News Letter</h4>
        <p>
          Get E-Mail updates about our latest shop and
          <span>Special Offer</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your Email Address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>
    <footer class="section-p1">
      <div class="col">
        <img src="{{env('APP_URL')}}/assets/Images/logo.png" class="logo" alt="" />
        <h4 class="cont">Contact</h4>
        <p><strong>Address:</strong>N0.1234 Bishop Road, Trichy, TN</p>
        <p><strong>Phone:</strong>+91 82487 58508, (0431) 123 4567</p>
        <p><strong>Address:</strong>10.00am - 08.00pm Mon-Sat</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or google play</p>
        <div class="row">
          <img src="{{env('APP_URL')}}/assets/Images/Pay/app.jpg" alt="" />
          <img src="{{env('APP_URL')}}/assets/Images/Pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Gateway</p>
        <img src="{{env('APP_URL')}}/assets/Images/Pay/pay.png" alt="" />
      </div>
      <div class="copyright">
        <p>&#169; 2024, Melvin Rosario. All rights reserved.</p>
      </div>
    </footer>
    <script>
        var mainImg = document.getElementById('mainimg');
        var smallImg = document.getElementsByClassName('small-img');
        
        smallImg[0].onclick = function(){
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            mainImg.src = smallImg[3].src;
        }
    </script>

    <script src="{{env('APP_URL')}}/assets/js/ecom.js"></script>
  </body>
</html>




