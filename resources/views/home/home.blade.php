<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rosario's Fashion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/ecom.css" />
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/Images/logo.png" type="">
</head>

<body>
    <section id="header">
        <a href="#"><img src="{{ env('APP_URL') }}/assets/Images/logo.png" class="logo" alt="logo" /></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="{{route('homepage')}}">Home</a></li>
                <!--<li><a href="shop.html">Shop</a></li>-->
                <!--<li><a href="blog.html">Blog</a></li>-->
                <li><a href="{{route('aboutpage')}}">About</a></li>
                <li><a href="{{route('login')}}">Get Started</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>
    <section id="hero" class="" style="background-image: url('../assets/Images/hero4.png');";>
        <h4 class="fade-up">Trust-in-offer</h4>
        <h2 class="fade-up"class="fade-up">Super Value deals</h2>
        <h1 class="fade-up">On all products</h1>
        <p class="fade-up">Save more with coupons &amp; up to 70%</p>
        <button class="fade-up" style="background-image: url('../assets/Images/button.png');">Shop Now</button>
    </section>
    <section id="feature" class="section-p1" class="">
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f1.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f2.png" alt="" />
            <h6>Online Order</h6>
        </div>
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f3.png" alt="" />
            <h6>Save Money</h6>
        </div>
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f4.png" alt="" />
            <h6>Promotions</h6>
        </div>
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f5.png" alt="" />
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box fade-up">
            <img src="{{ env('APP_URL') }}/assets/Images/features/f6.png" alt="" />
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section id="product1" class="section-p1" class="fade-up">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            @foreach ($orders as $order)
                <div class="pro fade-up" onclick="window.location.href ='{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}'">
                    @if ($order->image)
                        <img src="{{ asset('uploads/previewimages/' . $order->image) }}" alt="" />
                    @else
                        <span>No image found!</span>
                    @endif

                    <div class="des">
                        <span>Zara</span>
                        <h5>Printed Aesthetics Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ {{ $order->price }}</h4>
                    </div>
                    <a href="{{ url('/' . $order->product_id . '/' . $order->name . '/show') }}" class="cart"><i
                            class="fa-solid fa-cart-shopping" style="margin-right: 10px;"></i>Buynow</a>
                </div>
            @endforeach

           
        </div>
    </section>
   
    <section id="sm-banner" class="section-p1">
        <div class="banner-box" style="background-image: url('../assets/Images/banner/b17.jpg');">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on scale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2" style="background-image: url('../assets/Images/banner/b10.jpg');">
            <h4>Spring / Summer</h4>
            <h2>Upcoming season</h2>
            <span>The best classic dress is on scale at cara</span>
            <button class="white">Collections</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box" style="background-image: url('../assets/Images/banner/b7.jpg');">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% Off</h3>
        </div>
        <div class="banner-box banner-box2" style="background-image: url('../assets/Images/banner/b4.jpg');">
            <h2>NEW FOOTWARE COLLECTION</h2>
            <h3>Spring / Summer Exclusive Offer - 2024</h3>
        </div>
        <div class="banner-box banner-box3" style="background-image: url('../assets/Images/banner/b18.jpg');">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1"
        style=" background-image: url('../assets/Images/banner/b14.png');">
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
            <img src="{{ env('APP_URL') }}/assets/Images/logo.png" class="logo" alt="" />
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
                <img src="{{ env('APP_URL') }}/assets/Images/Pay/app.jpg" alt="" />
                <img src="{{ env('APP_URL') }}/assets/Images/Pay/play.jpg" alt="" />
            </div>
            <p>Secured Payment Gateway</p>
            <img src="{{ env('APP_URL') }}/assets/Images/Pay/pay.png" alt="" />
        </div>
        <div class="copyright">
            <p>&#169; 2024, Melvin Rosario. All rights reserved.</p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {

            function fadeUpContent() {
                $('.fade-up').each(function() {
                    var position = $(this).offset().top;
                    var windowHeight = $(window).height();
                    var scrollPosition = $(window).scrollTop();

                    if (position < scrollPosition + windowHeight - 50) {
                        $(this).addClass('show');
                    }
                });
            }
            fadeUpContent();
            $(window).scroll(function() {
                fadeUpContent();
            });
        });
    </script>
    <script src="{{ env('APP_URL') }}/assets/js/ecom.js"></script>
</body>

</html>
