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
          <li><a  href="{{route('homepage')}}">Home</a></li>
          <!--<li><a  href="shop.html">Shop</a></li>-->
          <!--<li><a  href="blog.html">Blog</a></li>-->
          <li><a class="active" href="{{route('aboutpage')}}">About</a></li>
          <li><a href="contact.html">Cart</a></li>
          <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
          <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fa-solid fa-bars"></i>
      </div>
    </section>
    <section id="page-header" class="about-header" style="background-image: url('../assets/Images/about/aboutbanner.png')";>
      <h2>#Know Us</h2>
      <p>We are the new gen of fashion</p>
    </section>
    <section id="about-head" class="section-p1">
        <img src="{{ env('APP_URL') }}/assets/Images/about/a6.jpg" alt="" >
        <div>
            <h2>Who we Are?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam possimus incidunt dolore assumenda provident laborum, rerum, eaque animi sunt nesciunt ratione adipisci cupiditate neque nam, et soluta mollitia ut doloribus unde minus eos sequi? Nesciunt adipisci cupiditate maiores optio? Ipsum totam mollitia, reiciendis nesciunt atque molestias error aspernatur voluptas perspiciatis ex quia quod porro minima nulla laudantium! At tempore nobis, voluptatum temporibus molestias autem corrupti architecto est quam voluptates eaque ut molestiae quo ratione repellat aliquam consequuntur consectetur, obcaecati quia. Distinctio assumenda velit doloribus qui ducimus, atque, illum impedit repudiandae laudantium minus omnis, dolores vitae in quis error voluptate. Minima.    </p>
            <br>
            <marquee bgcolor="#ccc" loop="5" scrollamount="5" width="100%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit repellendus quibusdam doloremque soluta. Accusantium numquam magni dolore harum culpa consequatur voluptatem ipsam impedit aliquid, perspiciatis cumque sequi similique sapiente?</marquee>
        </div>
    </section>
    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay loop src="{{ env('APP_URL') }}/assets/Images/about/1.mp4"></video>
        </div>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f1.png" alt="" />
          <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f2.png" alt="" />
          <h6>Online Order</h6>
        </div>
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f3.png" alt="" />
          <h6>Save Money</h6>
        </div>
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f4.png" alt="" />
          <h6>Promotions</h6>
        </div>
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f5.png" alt="" />
          <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
          <img src="{{ env('APP_URL') }}/assets/Images/features/f6.png" alt="" />
          <h6>F24/7 Support</h6>
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
      
    </script>

    <script src="{{ env('APP_URL') }}/assets/js/ecom.js"></script>
  </body>
</html>
