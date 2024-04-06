
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Mobile View</title>
    <style>
        /* The device with borders */
        body{
            /* overflow: hidden; */
        }
        .smartphone {
          position: relative;
          width: 360px;
          height: 669px;
          margin: auto;
          border: 16px #375262 solid;
          border-top-width: 60px;
          border-bottom-width: 60px;
          border-radius: 36px;
        }

        /* The horizontal line on the top of the device */
        .smartphone:before {
          content: '';
          display: block;
          width: 80px;
          height: 5px;
          position: absolute;
          top: -30px;
          left: 50%;
          transform: translate(-50%, -50%);
          background: linear-gradient(black,white);
          border-radius: 10px;
        }

        /* The circle on the bottom of the device */
        .smartphone:after {
          content: '';
          display: block;
          width: 35px;
          height: 35px;
          position: absolute;
          left: 50%;
          bottom: -65px;
          transform: translate(-50%, -50%);
          background:linear-gradient(black,white,black);
          border-radius: 50%;
        }

        /* The screen (or content) of the device */
        .smartphone .content {
          width: 330px;
          height: 550px;
          background: white;
        }
        .breadcrumb a{
            text-decoration: none;
            color: #375262;

        }
        .breadcrumb a i{
            font-size: 30px;

        }
        </style>
</head>
<body>
    <div class="smartphone mt-4">
        <div class="content">
          {{-- <iframe src="{{view('user.mobileview')}}" style="width:100%;border:none;height:100%"></iframe> --}}
          <iframe src="{{ $mobileViewUrl }}" style="width:100%;border:none;height:100%"></iframe>


        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active"  aria-current="page"><a href="#"><i class="fa-solid fa-mobile-screen-button mx-3"></i></a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-tablet-screen-button mx-3"></i></a></li>
                  <li class="breadcrumb-item "><a href="#"><i class="fa-solid fa-desktop mx-3"></i></a></li>
                </ol>
              </nav>
        </div>
      </div>

</body>
</html>



