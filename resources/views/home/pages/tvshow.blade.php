<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StreamIT | Responsive Bootstrap 5 Template</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">

  <!-- Favicon -->
  <link rel="shortcut icon" href="template/assets/images/favicon.ico" />

  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="template/assets/css/core/libs.min.css" />

  <!-- font-awesome css -->
  <link rel="stylesheet" href="template/assets/vendor/font-awesome/css/all.min.css" />

  <!-- Iconly css -->
  <link rel="stylesheet" href="template/assets/vendor/iconly/css/style.css" />

  <!-- Animate css -->
  <link rel="stylesheet" href="template/assets/vendor/animate.min.css" />

  <!-- SwiperSlider css -->
  <link rel="stylesheet" href="template/assets/vendor/swiperSlider/swiper.min.css">





  <!-- Streamit Design System Css -->
  <link rel="stylesheet" href="template/assets/css/streamit.min%EF%B9%96v=5.2.1.css" />

  <!-- Custom Css -->
  <link rel="stylesheet" href="template/assets/css/custom.min%EF%B9%96v=5.2.1.css" />

  <!-- Rtl Css -->
  <link rel="stylesheet" href="template/assets/css/rtl.min%EF%B9%96v=5.2.1.css" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&amp;display=swap" rel="stylesheet">

</head>

<body class=" custom-header-relative">
  <span class="screen-darken"></span>
  <!-- loader Start -->
   <!-- loader Start -->
  <div class="loader simple-loader">
     <div class="loader-body">
        <img src="template/assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
      </div>
  </div>
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content">
      <!--Nav Start-->
      <!-- Start Header Section -->

      @include('home.sections.header')

      <!-- End Header Section -->     <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->

<section class="banner-container">
  <div class="movie-banner">
    <div class="swiper swiper-banner-container iq-rtl-direction" data-swiper="banner-detail-slider">
      <div class="swiper-wrapper">
        <div class="p-0 swiper-slide tv-show-1">
          <div class="movie-banner-image">
            <img src="template/assets/images/tv-show/banner-1.webp" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  vikingr
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="gap-3 slider-ratting d-flex align-items-center">
                    <ul class="p-0 m-0 ratting-start list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="flex-wrap gap-3 d-flex align-items-center movie-banner-time">
                    <span class="p-2 badge bg-secondary">
                      <i class="fa fa-eye"></i>
                      PG
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-time">
                      1hr : 44mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-year">
                      Feb 2018
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    Dinosaurs are a diverse group of reptiles of the clade Dinosauria.
                They first appeared during the Triassic period, between 243 and 233.23 million years ago, although the exact
                origin and timing of the evolution of dinosaurs is the subject of active research.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="{{ route('tvshowdetail') }}" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>        <div class="p-0 swiper-slide tv-show-2">
          <div class="movie-banner-image">
            <img src="template/assets/images/tv-show/banner-2.webp" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  the
                boys
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="gap-3 slider-ratting d-flex align-items-center">
                    <ul class="p-0 m-0 ratting-start list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="flex-wrap gap-3 d-flex align-items-center movie-banner-time">
                    <span class="p-2 badge bg-secondary">
                      <i class="fa fa-eye"></i>
                      G
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-time">
                      2hr : 42mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-year">
                      Nov 2017
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    The most brutal emperor in the history of world.He was the founder
                of the most contiguous empire of the world i.e. the Mongol empire.He made an army by himself by uniting some
                nomadic tribes and trained them.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="{{ route('tvshowdetail') }}" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>        <div class="p-0 swiper-slide tv-show-3">
          <div class="movie-banner-image">
            <img src="template/assets/images/tv-show/banner-3.webp" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  Breaking bad
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="gap-3 slider-ratting d-flex align-items-center">
                    <ul class="p-0 m-0 ratting-start list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="flex-wrap gap-3 d-flex align-items-center movie-banner-time">
                    <span class="p-2 badge bg-secondary">
                      <i class="fa fa-eye"></i>
                      PG-13
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-time">
                      2hr : 12mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="font-normal trending-year">
                      Dec 2018
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    Jumbo also known as Jumbo the Elephant and Jumbo the Circus
                Elephant, was a 19th-century male African bush elephant born in Sudan. Jumbo was exported to Jardin des Plantes,
                a zoo in Paris, and then transferred in 1865 to London Zoo in England. Despite public protest, Jumbo was sold to
                P. T. Barnum, who took him to the United States for exhibition in March 1882.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="{{ route('tvshowdetail') }}" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>      </div>
      <div class="swiper-banner-button-next">
        <i class="iconly-Arrow-Right-2 icli arrow-icon"></i>
      </div>
      <div class="swiper-banner-button-prev">
        <i class="iconly-Arrow-Left-2 icli arrow-icon"></i>
      </div>
    </div>
  </div>
</section>
<section class="recommended-block section-top-spacing">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">TV Popular Shows</h5>
        <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">CRW</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr :
                            12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Batte Wiire</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 22mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Goal</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr :
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Dandacg</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr
                            : 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">mexcan</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr :
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">oit moleld</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/popular/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Another Danger</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="recommended-block section-top-spacing">
  <div class="container-fluid">
    <section class="overflow-hidden">
      <div class="px-3 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Best Of International Shows</h5>
        <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">mortal nories</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr : 12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">advetre</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">net ailo</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">ariivaal</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr
                            45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">dramma</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr
                            55mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">aune</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr
                            25mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/latest/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">everest</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr
                            45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Shows We Recommend</h5>
        <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Giikre</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr : 12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Arrival</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 22mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Pricess</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Soull Meate</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr : 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Dangacg</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">crcikeft</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">2hr : 25mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                      <img src="template/assets/images/movies/recommended/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{ route('moviedetail') }}">Avengrs</a>
                          </h5>
                          <div class="my-2 movie-time d-flex align-items-center">
                            <span class="font-normal movie-time-text">1hr : 45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="{{ route('playlist') }}">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="gap-2 p-0 m-0 d-flex music-play-lists">
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <a href="" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-0 text-center share position-relative d-flex align-items-center">
                          <span class="bg-transparent w-100 h-100 d-inline-block">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class="overflow-hidden ">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>


            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>


  </main>

<!-- Start Footer Section -->

@include('home.sections.footer')

<!-- End Footer Section -->

  <div class="rtl-box">
      <a class="btn btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas"
          data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.875em" height="1.875em" viewBox="0 0 20 20" fill="white">
              <path fill-rule="evenodd"
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd" />
          </svg>
      </a>
      <div class="offcanvas offcanvas-end live-customizer on-rtl end" tabindex="-1" id="live-customizer"
          data-bs-scroll="true" data-bs-backdrop="false" aria-labelledby="live-customizer-label" aria-modal="true"
          role="dialog">
          <div class="gap-3 offcanvas-header">
              <div class="d-flex align-items-center">
                  <h5 class="offcanvas-title text-dark" id="live-customizer-label">Live Customizer</h5>
              </div>
              <div class="gap-1 d-flex align-items-center">
                  <button class="btn btn-icon text-primary" data-reset="settings" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Reset All Settings"
                      data-bs-original-title="Reset All Settings">
                      <span class="btn-inner">
                          <i class="fa-solid fa-arrows-rotate"></i>
                      </span>
                  </button>
                  <button type="button" class="px-0 shadow-none btn btn-icon btn-close text-reset text-dark" data-bs-dismiss="offcanvas" aria-label="Close">
                  </button>
              </div>
          </div>
          <div class="pt-0 offcanvas-body">
              <div class="modes row row-cols-2 gx-2">
                  <div class="col">
                      <div data-setting="attribute" class="text-center w-100">
                          <input type="radio" value="ltr" class="btn-check" name="theme_scheme_direction" data-prop="dir"
                              id="theme-scheme-direction-ltr" checked>
                          <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-direction-ltr">
                              LTR
                          </label>
                      </div>
                  </div>
                  <div class="col">
                      <div data-setting="attribute" class="text-center w-100">
                          <input type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir"
                              id="theme-scheme-direction-rtl">
                          <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-direction-rtl">
                              RTL
                          </label>
                      </div>
                  </div>
              </div>
              <div class="mt-3 modes">
                  <div class="mb-3 color-customizer">
                      <h6 class="mb-0 title-customizer">Color Customizer</h6>
                  </div>
                  <div class="row row-cols-2 gx-2">
                      <div class="mb-3 col">
                          <div data-setting="attribute" class="text-center w-100">
                              <input type="radio" value="dark" class="btn-check" name="theme_style_appearance"
                                  data-prop="data-bs-theme" id="theme-scheme-color-netflix" data-colors="{&quot;primary&quot;: &quot;#e50914&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#adafb8&quot;}" checked>
                              <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-netflix">
                                  Netflix
                              </label>
                          </div>
                      </div>
                      <div class="mb-3 col">
                          <div data-setting="attribute" class="text-center w-100">
                              <input type="radio" value="hotstar" class="btn-check" name="theme_style_appearance"
                                  data-prop="data-bs-theme" id="theme-scheme-color-hotstar" data-colors="{&quot;primary&quot;: &quot;#0959E4&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                              <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-hotstar">
                                  Hotstar
                              </label>
                          </div>
                      </div>
                      <div class="col">
                          <div data-setting="attribute" class="text-center w-100">
                              <input type="radio" value="amazonprime" class="btn-check" name="theme_style_appearance"
                                  data-prop="data-bs-theme" id="theme-scheme-color-prime" data-colors="{&quot;primary&quot;: &quot;#1A98FF&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                              <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-prime">
                                  Prime
                              </label>
                          </div>
                      </div>
                      <div class="col">
                          <div data-setting="attribute" class="text-center w-100">
                              <input type="radio" value="hulu" class="btn-check" name="theme_style_appearance"
                                  data-prop="data-bs-theme" id="theme-scheme-color-hulu" data-colors="{&quot;primary&quot;: &quot;#3ee783&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                              <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-hulu">
                                  Hulu
                              </label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>  <div id="back-to-top" style="display: none;">
     <a class="p-0 text-white border-0 btn bg-primary btn-sm position-fixed top rounded-circle" id="top" href="#top">
        <i class="fa-solid fa-chevron-up"></i>
     </a>
  </div>
  <!-- Wrapper End-->
  <!-- Library Bundle Script -->
  <script src="template/assets/js/core/libs.min.js"></script>
  <!-- Plugin Scripts -->


  <!-- SwiperSlider Script -->
  <script src="template/assets/vendor/swiperSlider/swiper.min.js"></script>




  <!-- fslightbox Script -->
  <script src="template/assets/js/plugins/fslightbox.js" defer></script>
  <!-- Lodash Utility -->
  <script src="template/assets/vendor/lodash/lodash.min.js"></script>
  <!-- External Library Bundle Script -->
  <script src="template/assets/js/core/external.min.js"></script>
  <!-- countdown Script -->
  <script src="template/assets/js/plugins/countdown.js"></script>
  <!-- utility Script -->
  <script src="template/assets/js/utility.js"></script>
  <!-- Setting Script -->
  <script src="template/assets/js/setting.js"></script>
  <script src="template/assets/js/setting-init.js" defer></script>
  <!-- Streamit Script -->
  <script src="template/assets/js/streamit.js" defer></script>
  <script src="template/assets/js/swiper.js" defer></script>
</body>

</html>
