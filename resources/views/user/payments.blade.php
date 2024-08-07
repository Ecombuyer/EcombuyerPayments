<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico" />

    <title>Material Bootstrap Wizard by Creative Tim</title>

    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
      name="viewport"
    />
    <meta name="viewport" content="width=device-width" />

    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/assets/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- CSS Files -->
    <link href="{{ env('APP_URL') }}/assets/css/bootstrap1.min.css" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}/assets/css/material1-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->
    <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap");
      body {
        background-color: rgba(129, 130, 245, 0.938);
      }
      .container1 {
        position: relative;
      }

      .container1 .card1 {
        position: relative;
        width: 100%;
        height: 350px;
        background: #232323;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 20px;
      }

      .container1 .card1:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: grey;
        clip-path: circle(150px at 80% 20%);
        transition: 0.5s ease-in-out;
      }

      .container1 .card1:hover:before {
        clip-path: circle(300px at 80% -20%);
      }
	.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
    margin-bottom: 50px;
}

      .container1 .card1:after {
        content: "";
        position: absolute;
        top: 30%;
        left: -20%;
        font-size: 12em;
        font-weight: 800;
        font-style: italic;
        color: rgba(255, 255, 255, 0.04);
      }

      .container1 .card1 .imgBx {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        width: 100%;
        height: 100%;
        transition: 0.5s;
      }

      .container1 .card1:hover .imgBx {
        top: 0%;
        transform: translateY(-25%);
        /* bug  */
      }

      .container1 .card1 .imgBx img {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 20px;
        transform: translate(-50%, -50%);
        width: 150px;
      }

      .container1 .card1 .contentBx {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        text-align: center;
        transition: 1s;
        z-index: 90;
      }

      .container1 .card1:hover .contentBx {
        height: 200px;
      }

      .container1 .card1 .contentBx h2 {
        position: relative;
        font-weight: 400;
        letter-spacing: 1px;
        color: #fff;
      }

      .container1 .card1 .contentBx .size,
      .container1 .card1 .contentBx .color {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 8px 20px;
        transition: 0.5s;
        opacity: 0;
        visibility: hidden;
      }

      .container1 .card1:hover .contentBx .size {
        opacity: 1;
        visibility: visible;
        transition-delay: 0.5s;
      }

      .container1 .card1:hover .contentBx .color {
        opacity: 1;
        visibility: visible;
        transition-delay: 0.6s;
      }

      .container1 .card1 .contentBx .size span:hover {
        /* other bug */
        background: #b90000;
      }

      .container1 .card1 .contentBx .color span {
        width: 20px;
        height: 20px;
        background: #ff0;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
      }

      .container1 .card1 .contentBx a {
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 4px;
        margin-top: 10px;
        text-decoration: none;
        font-weight: 600;
        color: #111;
        opacity: 0;
        transform: translateY(50px);
        transition: 0.5s;
      }

      .container1 .card1:hover .contentBx a {
        opacity: 1;
        transform: translateY(0px);
        transition-delay: 0.7s;
      }
      .heading{
    color: rgb(53, 51, 51);
   
}
	  /* CSS for mobile devices */
@media only screen and (max-width: 992px) {
	
	.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
    margin-bottom: 5px;
}
.qrbox{
	margin-top: 2rem;
}
.form-control {
    height: 36px;
    padding: 15px 0;
    font-size: 14px;
    line-height: 1.42857;
}
}

    </style>
      <!-- <style>
        @import url("https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        .animationbox {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          animation: divcolor 4s forwards;
        }
  
        .introanimation {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          width: 300px;        
          background-color: black;
          /* border-radius: 50px; */
          padding: 2rem;
          animation: introanime 1s forwards;
          position: relative;
        }
  
        .introanimation h2{
          color: rgb(141, 137, 137);
          opacity: 0;
          animation: fadeIn 2s forwards 1s;
          position: absolute;
          text-align: center;
          text-transform: uppercase;
          font-family: "Bitter", serif;
          font-optical-sizing: auto;
          font-weight: bold;
          font-style: normal;
        }
  
        .introanimation img {
          width: 100px;
          opacity: 0;
          animation: fadeIn2 1s forwards 1s;
        }
  
        @keyframes introanime {
          0% {
            transform: scale(0) rotatey(90deg);
          }
          75%{
              transform: scale(1) rotateX(0deg);
              border: none;
          }
          100% {
            transform: scale(1) rotateX(0deg);
            /* border-radius: 50px; */
            border: 2px solid transparent;          
            border-image: linear-gradient(to right,#B120C9,#44b8be,#f58c2e);
            border-image-slice: 1;
          }
        }
        @keyframes fadeIn2 {
          0% {
            opacity: 0;
            transform: scale(0);
          }
  
          100% {
            opacity: 1;
            transform: scale(1);
          }
        }
        @keyframes divcolor {
          0% {
            background-color: white;
          }
          75% {
            background-color: black;
            transform: translateY(0px);
          }
          100% {
            background-color: black;
  
            transform: translateY(-1000px);
          }
        }
  
        @keyframes fadeIn {
          0% {
            opacity: 0;
            z-index: -5;
          }
  
          50% {
            opacity: 0;
            transform: translateY(0px);
          }
          75% {
            opacity: 1;
            transform: translateY(200px);
          }
          100% {
            opacity: 1;
            transform: translateY(170px);
          }
        }
        @media only screen and (max-width: 768px) {
          .introanimation {
          
          width: 250px;               
        }         
        }
      </style> -->
  </head>
  <body>
    <!-- <div class="animationbox" id="loader">
      <div class="introanimation">
        <img src="assets/img/Layer 1 (5).png" alt="" />
        <h2>
          Ecom Buyer <br />
          Payments
        </h2>
      </div>
    </div> -->
    <div class="image-container"  background:linear-gradient(to right, rgba(110, 110, 189, 0.938),rgba(73, 73, 179, 0.938),rgba(60, 62, 184, 0.938));" >
      <!--   Creative Tim Branding   -->
      <!-- <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a> -->

      <!--  Made With Material Kit  -->
      <!-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> -->

      <!--   Big container   -->
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <!--      Wizard container        -->
            <div class="wizard-container">
              <div
                class="card wizard-card"
                data-color="blue"
                id="wizardProfile"
                style="border-radius: 30px"
              >
                <form action="" method="">
                  <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                  <div class="wizard-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="font-weight: bold;" class="heading"><img src="assets/img/Layer 1 (5).png" alt="ecom" width="25px" style="margin: 7px 10px;" >Ecom Buyer</h3>
                    <h6  style="font-weight: 500;"><i class="fa-solid fa-lock" style="font-size: medium;padding: 0px 5px;"></i>Checkout</h6>
                  </div>
                  <div class="wizard-navigation">
                    <ul>
                      <!-- <li><a href="#about" data-toggle="tab">Summary</a></li> -->
                      <!-- <li>
                        <a href="#account" data-toggle="tab"
                          > Address</a
                        >
                      </li> -->
                      <li><a href="#address" data-toggle="tab">Payments</a></li>
                    </ul>
                  </div>

                  <div class="tab-content">
                    <div class="tab-pane" id="about">
                      <div class="row">
                        <!-- <h4 class="info-text"> Let's start with the basic information (with validation)</h4> -->
                        <div class="col-sm-5">
                          <div class="container1">
                            <div class="card1">
                              <div class="imgBx">
                                <img
                                  src="https://5.imimg.com/data5/SELLER/Default/2023/10/353710768/JP/CW/LI/9627695/men-formal-shirts-500x500.jpg"
                                  alt="nike-air-shoe"
                                />
                              </div>

                              <div class="contentBx">
                                <h2>Grey shirt</h2>

                                <div class="size">
                                  <h3 style="color: #fff; font-weight: bold">
                                    ₹1200
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa-solid fa-user"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Name</label>
                              <input
                                name="firstname"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>

                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa-solid fa-phone"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Mobile</label>
                              <input
                                name="lastname"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa-regular fa-envelope"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Email</label>
                              <input
                                name="lastname"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="account">
                      <!-- <h4 class="info-text"><i class="fa-solid fa-location-dot mx-3"></i> Delivery Address </h4> -->
                      <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                          <div class="col-sm-6">
                            <div class="form-group label-floating">
                              <label class="control-label"
                                >House Number, Apartment</label
                              >
                              <input
                                name="lastname"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group label-floating">
                              <label class="control-label"
                                >Area, Colony, Street, Sector</label
                              >
                              <input
                                name="lastname"
                                type="text"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div>
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">City</label>
                                <input
                                  name="lastname"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">State</label>
                                <input
                                  name="lastname"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Zipcode</label>
                                <input
                                  name="lastname"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Country</label>
                                <input
                                  name="lastname"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                          <!-- <h4 class="info-text">
                            Are you living in a nice area?
                          </h4> -->
                        </div>
                        <div class="col-sm-6 col-md-6  col-lg-6" style="display: flex; justify-content: space-around; align-items: flex-start;">
                         <img src="{{ asset('uploads/previewimages/' . $product->image) }}" alt="Product-img" width="200px" height="200px" style="object-fit: cover; padding-top: 10px; margin-left: 0px;">
						 <div >
							<h4 style="font-weight: bold;">Light Purple Plain Shirt</h4>							
							<div style="display: flex;justify-content: space-between;align-items: center;margin-top: 10px; font-weight: bold;">
								<span>Sub Total</span>
								<span> ₹ 1500</span>
							</div>
							<div style="display: flex;justify-content: space-between;align-items: center;margin-top: 10px; font-weight: bold;">
								<span style="text-wrap: wrap;">Delivery </span>
								<span>₹ 70</span>
							</div>
							
							<div style="display: flex;justify-content: space-between;align-items: center;margin-top: 10px; font-weight: bold;">
								<span>Taxes</span>
								<span>--</span>
							</div>
							<p style="color: rgb(168, 166, 166);font-weight: bold;">(Free delivery only for premium Users)</p>	
							<div style="display: flex;justify-content: space-between;align-items: center;margin-top: 10px; font-weight: bold; border-top: 1px solid rgb(180, 178, 178);padding-top: 10px;">
								<span>Total</span>
								<span>  ₹ 1570</span>
							</div>
						 </div>
                        </div> 
						<div class="col-sm-6 col-md-6 col-lg-6" style="display: flex; flex-direction: column;">
							<div style="display: flex; flex-direction: row;"  class="qrbox">
                
                <div style="display: flex; flex-direction: column; width: 50%;">
                  <span style="text-align: center;font-weight: bold;">[ <i class="fa-solid fa-qrcode" style="margin-right: 5px;"></i> Scan to Pay ]</span>
                    {{$pay}}
                </div>
								
								<div style="height: 100%; width: 50%; margin-top: 35px; margin-right: 1rem;">									
									<div style="display: flex; justify-content: space-between; margin-top: 10px;">
										<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="38px" baseProfile="basic"><path fill="#e64a19" d="M42.858,11.975c-4.546-2.624-10.359-1.065-12.985,3.481L23.25,26.927	c-1.916,3.312,0.551,4.47,3.301,6.119l6.372,3.678c2.158,1.245,4.914,0.506,6.158-1.649l6.807-11.789	C48.176,19.325,46.819,14.262,42.858,11.975z"/><path fill="#fbc02d" d="M35.365,16.723l-6.372-3.678c-3.517-1.953-5.509-2.082-6.954,0.214l-9.398,16.275	c-2.624,4.543-1.062,10.353,3.481,12.971c3.961,2.287,9.024,0.93,11.311-3.031l9.578-16.59	C38.261,20.727,37.523,17.968,35.365,16.723z"/><path fill="#43a047" d="M36.591,8.356l-4.476-2.585c-4.95-2.857-11.28-1.163-14.137,3.787L9.457,24.317	c-1.259,2.177-0.511,4.964,1.666,6.22l5.012,2.894c2.475,1.43,5.639,0.582,7.069-1.894l9.735-16.86	c2.017-3.492,6.481-4.689,9.974-2.672L36.591,8.356z"/><path fill="#1e88e5" d="M19.189,13.781l-4.838-2.787c-2.158-1.242-4.914-0.506-6.158,1.646l-5.804,10.03	c-2.857,4.936-1.163,11.252,3.787,14.101l3.683,2.121l4.467,2.573l1.939,1.115c-3.442-2.304-4.535-6.92-2.43-10.555l1.503-2.596	l5.504-9.51C22.083,17.774,21.344,15.023,19.189,13.781z"/></svg>
										<span style="font-weight: bold;">Google Pay</span>
									</div>
									<div style="display: flex; justify-content: space-between; margin-top: 10px;">
										<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="38px"><path fill="#4527a0" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"/><path fill="#fff" d="M32.267,20.171c0-0.681-0.584-1.264-1.264-1.264h-2.334l-5.35-6.25	c-0.486-0.584-1.264-0.778-2.043-0.584l-1.848,0.584c-0.292,0.097-0.389,0.486-0.195,0.681l5.836,5.666h-8.851	c-0.292,0-0.486,0.195-0.486,0.486v0.973c0,0.681,0.584,1.506,1.264,1.506h1.972v4.305c0,3.502,1.611,5.544,4.723,5.544	c0.973,0,1.378-0.097,2.35-0.486v3.112c0,0.875,0.681,1.556,1.556,1.556h0.786c0.292,0,0.584-0.292,0.584-0.584V21.969h2.812	c0.292,0,0.486-0.195,0.486-0.486V20.171z M26.043,28.413c-0.584,0.292-1.362,0.389-1.945,0.389c-1.556,0-2.097-0.778-2.097-2.529	v-4.305h4.043V28.413z"/></svg>
										<span style="font-weight: bold;">PhonePe</span>
									</div>
									<div style="display: flex;  justify-content: space-between; margin-top: 10px;">
										<img src="/assets/img/icons8-cash-on-delivery-64.png" alt="upi"width="30px" height="35px" >
										<span style="font-weight: bold; text-wrap: wrap;">Cash on Delivery</span>
									</div>
								</div>
							</div>
							
							<a href="{{$button}}" class="btn " style="background-color: rgba(129, 130, 245, 0.938); margin-top: 3rem;">Pay now</a>
						  </div>                       
                      </div>
                    </div>
                  </div>
                  <div class="wizard-footer">
                    <div class="pull-right">
                      <input
                        type="button"
                        class="btn btn-next btn-fill btn-wd"
                        name="next"
                        value="Next" style="background-color: rgba(129, 130, 245, 0.938); margin-bottom: 2rem;"
                      />
                      <!-- <input
                        type="button"
                        class="btn btn-finish btn-fill btn-wd"
                        name="finish"
                        value="Finish"
                      /> -->
                    </div>

                    <div class="pull-left">
                      <input
                        type="button"
                        class="btn btn-previous btn-fill btn-default btn-wd"
                        name="previous"
                        value="back" style="background-color: rgba(129, 130, 245, 0.938); margin-bottom: 2rem;"
                      />
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- wizard container -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!--  big container -->

      <!-- <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
	        </div>
	    </div> -->
    </div>
  </body>
  <!-- <script>   
    var myVar;
    function myFunction() {
        myVar = setTimeout(showPage, 4000);       
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
       
    }   
</script> -->
  <!--   Core JS Files   -->
  <script src="{{ env('APP_URL') }}/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="{{ env('APP_URL') }}/assets/js/bootstrap1.min.js" type="text/javascript"></script>
  <script src="{{ env('APP_URL') }}/assets/js/jquery1.bootstrap.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="assets/js/material-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
  <script src="{{ env('APP_URL') }}/assets/js/jquery1.validate.min.js"></script>
</html>
