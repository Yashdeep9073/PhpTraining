<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin: 20px auto;
    }

    .append-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .append-buttons button {
      display: inline-block;
      cursor: pointer;
      border: 1px solid #007aff;
      color: #007aff;
      text-decoration: none;
      padding: 4px 10px;
      border-radius: 4px;
      margin: 0 10px;
      font-size: 13px;
    }
  </style>
</head>

<body>
  <!-- Swiper -->

  <div #swiperRef="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://wallpapers.com/images/featured/aesthetic-pixel-art-background-0ax4fopcqzot21lj.webp" alt=""></div>
      <div class="swiper-slide"><img src="https://wallpapers.com/images/featured/aesthetic-pixel-art-background-0ax4fopcqzot21lj.webp" alt=""></div>
      <div class="swiper-slide"><img src="https://wallpapers.com/images/featured/aesthetic-pixel-art-background-0ax4fopcqzot21lj.webp" alt=""></div>
      <div class="swiper-slide"><img src="https://wallpapers.com/images/featured/aesthetic-pixel-art-background-0ax4fopcqzot21lj.webp" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

  </script>
</body>

</html>
