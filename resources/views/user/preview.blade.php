<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      :root {
        --dark-cyan: hsl(158, 36%, 37%);
        --cream: hsl(30, 38%, 92%);
        --very-dark-blue: hsl(157, 30%, 24%);
        --dark-grayish-blue: hsl(228, 12%, 48%);
        --white: hsl(0, 0%, 100%);
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "poppins", sans-serif;
        background-color: var(--cream);
        height: 100vh;
        width: 100%;
      }

      main {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      main .card1 {
        width: 900px;
        background-color: var(--white);
        display: flex;
        border-radius: 12px;
        position: relative;
      }
      main .card1 .card__img,
      main .card1 .card__content {
        width: 50%;
      }
      main .card1 .card__img picture {
        width: 100%;
        height: 100%;
        display: block;
        position: relative;
      }
      /* main .card1 .card__img picture span {
    position: absolute;
    background-color: rgb(218, 185, 0);
    left: -40px;
    top: 5px;
    font-family: 'poppins', sans-serif;
    font-size: 20px;
    transform: rotate(-30deg);
    padding: 5px 20px;
    clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 0% 100%);
} */
      main .card1 .card__img picture a {
        position: absolute;
        overflow: hidden;
        width: 150px;
        height: 150px;
        top: -10px;
        left: -10px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      main .card1 .card__img picture a::before {
        content: "Ecom buyer";
        position: absolute;
        width: 150%;
        height: 40px;
        background-image: linear-gradient(
          45deg,
          #ffb144 0%,
          #ffb144 51%,
          #ffb144 100%
        );
        transform: rotate(-45deg) translateY(-20px);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.23);
      }

      main .card1 .card__img picture a::after {
        content: "";
        position: absolute;
        width: 10px;
        bottom: 0;
        left: 0;
        height: 10px;
        z-index: -1;
        box-shadow: 140px -140px #cc3f47;
        background-image: linear-gradient(
          45deg,
          #ff512f 0%,
          #f09819 51%,
          #ff512f 100%
        );
      }

      main .card1 .card__img picture img {
        width: 100%;
        height: 100%;
        border-radius: 12px 0px 0px 12px;
      }
      main .card1 .card__content .sample-images {
        display: flex;
        width: 180px;
        /* height: 110px; */
        justify-content: space-between;
        text-decoration: none;
      }
      main .card1 .card__content .sample-images li {
        list-style-type: none;
        cursor: pointer;
      }
      main .card1 .card__content .sample-images li img {
        width: 80px;
        height: 100%;
      }
      main .card1 .card__content .sample-images li.item-selected {
        border: 2px solid #e6aa57;
      }

      main .card1 .card__content {
        padding: 30px;
        display: flex;
        flex-direction: column;
        row-gap: 18px;
      }
      main .card1 .card__content .card__tag {
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 14px;
        color: var(--dark-grayish-blue);
      }
      main .card1 .card__content .card__title {
        font-family: "Fraunces", serif;
        text-transform: capitalize;
      }
      main .card1 .card__content .card__desc {
        font-size: 14px;
        color: var(--dark-grayish-blue);
        line-height: 24px;
      }
      main .card1 .card__content .card__price {
        display: flex;
        align-items: center;
        column-gap: 20px;
      }
      main .card1 .card__content .card__price h1 {
        color: var(--dark-cyan);
        font-family: "Fraunces", serif;
      }
      main .card1 .card__content .card__price s {
        font-size: 14px;
        color: var(--dark-grayish-blue);
      }
      main .card1 .card__content .card__btn {
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 10px;
        background-color: var(--dark-cyan);
        padding: 14px;
        outline: none;
        border: 0;
        border-radius: 10px;
        color: var(--white);
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: background1 200ms linear;
      }
      main .card1 .card__content .card__btn:hover {
        background-color: var(--very-dark-blue);
      }

      @media (max-width: 600px) {
        body {
          height: auto;
        }
        main {
          padding: 20px;
        }
        main .card1 {
          flex-direction: column;
        }
        main .card1 .card__img,
        main .card1 .card__content {
          width: 100%;
        }
        main .card1 .card__img picture img {
          border-radius: 12px 12px 0px 0px;
        }
        main .card1 .card__content {
          padding: 20px;
          row-gap: 16px;
        }
      }
    </style>
  </head>
  <body>

    {{-- @dd( $order->product_id); --}}
    <main>
        <form action="{{ route('orders.buynow') }}" method="POST">
            @csrf
      <div class="card1">
        <div class="card__img">
          <picture>
            <a href=""></a>

            <img
              id="featured"
              src="{{ asset('uploads/previewimages/' . $order->file) }}"
              alt=""
            />
          </picture>
        </div>
        <div class="card__content">
          <ul class="sample-images">
            <li class="item-selected">
              <img
                src="{{ asset('uploads/previewimages/' . $order->image) }}"
                alt=""
              />
            </li>
            <li class="">
              <img
                src="{{ asset('uploads/previewimages/' . $order->image_2) }}"
                alt=""
              />
            </li>
          </ul>
          <!-- <div class="sample-images">
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSmUs6Gurb98ITXJD6UwZEJ0PSrJcNcfkmUDcWFlSPmXJeNVd1f2_UveAqG7bVeINfgWmSC2KbpZwIBYCOvD5v8dlaoAtFd_sSj47I" alt="">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSspHTA-ozenqgNWD2U_3U_wDZuL1gXmVnvCgo91Fo6DTc1un8qbKaD77KKGOk0yYmx9HpBQHySBm1Jt3vX9NBYSn3m0dexzQ_GWnAZ" alt="">
                </div> -->
          <p class="card__tag">Garments & readymades</p>
          <h1 class="card__title">
            {{$order->name}}
          </h1>
          <p class="card__desc">
            {{$order->description}}
          </p>
          <div class="card__price">
            <h1>₹ {{$order->price}}</h1>
            <s>₹ {{$order->price}}</s>
          </div>

          <input type="hidden" name="product_id" value="{{ $order->product_id }}">
          <button class="card__btn" type="submit" value="submit">
            <img
              src="https://rvs-product-preview-card-component.vercel.app/images/icon-cart.svg"
              alt=""
            />
            Buy Now
          </button>
        </div>
      </div>
        </form>
    </main>
    <script>
      $(".card__content li").hover(function () {
        var url = $(this).children("img").attr("src");
        $(".item-selected").removeClass("item-selected");
        $(this).addClass("item-selected");
        $("#featured").attr("src", url);
      });
    </script>
  </body>
</html>
