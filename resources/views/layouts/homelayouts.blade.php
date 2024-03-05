<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{env('APP_URL')}}assets/img/favicon.png" rel="icon">
  <link href="{{env('APP_URL')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{env('APP_URL')}}homepage_assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}homepage_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}homepage_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}homepage_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}homepage_assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}homepage_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{env('APP_URL')}}homepage_assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{env('APP_URL')}}homepage_assets/img/logo.png" alt="">
        <span>Ecom Buyer</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Developer Portal</a></li>
          <li><a class="nav-link scrollto" href="#services">Resources</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Support</a></li>
          
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li class="dropdown"><a href="#"><span>Collect Payments</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Payment Gateway</a></li>
                  <li><a href="#">Payment Links</a></li>
                  <li><a href="#">UPI QR code</a></li>
                  <li><a href="#">Auto Collect</a></li>
                  <li><a href="#">Easy Split</a></li>
                </ul>
              <li class="dropdown"><a href="#"><span>Reccuring Payments</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Subscription</a></li>
                  <li><a href="#">UPI Autopay</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Make Payouts</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Payouts</a></li>
                  <li><a href="#">vendor Payouts</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Verifty Idendity</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Complete Verification Suite</a></li>
                  <li><a href="#">Bank Account Verifications</a></li>
                  <li><a href="#">UPI Id Verification</a></li>
                  <li><a href="#">PAN Verification</a></li>
                  <li><a href="#">GST Verification</a></li>
                  <li><a href="#">[New] KYC Link</a></li>
                  <li><a href="#">UPI Id from Phone Number</a></li>
                  <li><a href="#">Aadhaar Verification</a></li>
                 
                </ul>
              </li>
            </ul>
          </li>

          <!-- <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li> -->

         
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="{{env('APP_URL')}}homepage_assets/img/logo.png" alt="">
          <span>FlexStart</span>
        </a>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
          darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
  class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{env('APP_URL')}}homepage_assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/aos/aos.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{env('APP_URL')}}homepage_assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{env('APP_URL')}}homepage_assets/js/main.js"></script>

</body>

</html>