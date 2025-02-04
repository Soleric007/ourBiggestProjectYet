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

@vite('resources/css/app.css')
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

<section id="home-banner-slider" class="p-0 overflow-hidden iq-main-slider swiper banner-home-swiper"
   data-swiper="home-banner-slider">
   <div class="p-0 m-0 slider swiper-wrapper home-slider">
      <div class="p-0 swiper-slide slide s-bg-1">
         <div class="banner-home-swiper-image">
            <img src="template/assets/images/movies/banner1.webp" alt="banner-home-swiper-image">
         </div>
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center iq-ltr-direction h-100">
                  <div class="col-lg-7 col-md-12">
                     <h1 class="mb-0 texture-text big-font-5 letter-spacing-1 line-count-1 text-uppercase RightAnimate">
                        another
                        danger
                     </h1>
                     <div class="flex-wrap d-flex align-items-center r-mb-23 RightAnimate-two">
                        <div class="slider-ratting d-flex align-items-center">
                           <ul
                              class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star-half" aria-hidden="true"></i>
                              </li>
                           </ul>
                           <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                           <span class="ms-2">
                              <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid">
                           </span>
                        </div>
                        <span class="p-2 mx-3 text-white badge rounded-0 text-uppercase bg-secondary">action</span>
                        <span class="font-size-14 fw-500 time">2hr : 6mins</span>
                     </div>
                     <p class="line-count-3 RightAnimate-two"> Piracy is an act of robbery or criminal violence by ship
                        or
                        boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing
                        cargo and
                        other valuable items or properties.
                     </p>
                     <div class="trending-list RightAnimate-three">
                        <div class="text-primary genres fw-500"> Genres:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action
                           </a>
                        </div>
                        <div class="text-primary tag fw-500"> Tag:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action,
                           </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2">
                              Adventure, </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Horror
                           </a>
                        </div>
                     </div>
                     <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                <span class="button-text">play now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                     <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none"
                        tabindex="0">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                           x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                           enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                           <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 ">
                           </polygon>
                           <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                        </svg>
                        <span class="w-trailor text-uppercase"> Watch Trailer </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="p-0 swiper-slide slide s-bg-1">
         <div class="banner-home-swiper-image">
            <img src="template/assets/images/movies/banner2.webp" alt="banner-home-swiper-image">
         </div>
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center iq-ltr-direction h-100">
                  <div class="col-lg-7 col-md-12">
                     <h1 class="mb-0 texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate">
                        Bumblebee </h1>
                     <div class="flex-wrap d-flex align-items-center r-mb-23 RightAnimate-two">
                        <div class="slider-ratting d-flex align-items-center">
                           <ul
                              class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star-half" aria-hidden="true"></i>
                              </li>
                           </ul>
                           <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                           <span class="ms-2">
                              <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid">
                           </span>
                        </div>
                        <span class="p-2 mx-3 text-white badge rounded-0 text-uppercase bg-secondary">action</span>
                        <span class="font-size-14 fw-500 time">2hr : 6mins</span>
                     </div>
                     <p class="line-count-3 RightAnimate-two">Optimus Prime sends Autobot scout B-127 to Earth to form a
                        base where they can regroup. Later, the scout befriends a girl named Charlie, who names him
                        Bumblebee.
                     </p>
                     <div class="trending-list RightAnimate-three">
                        <div class="text-primary genres fw-500"> Genres:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action
                           </a>
                        </div>
                        <div class="text-primary tag fw-500"> Tag:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action,
                           </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2">
                              Adventure, </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Horror
                           </a>
                        </div>
                     </div>
                     <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                <span class="button-text">play now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                     <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none"
                        tabindex="0">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                           x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                           enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                           <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 ">
                           </polygon>
                           <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                        </svg>
                        <span class="w-trailor text-uppercase"> Watch Trailer </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="p-0 swiper-slide slide s-bg-1">
         <div class="banner-home-swiper-image">
            <img src="template/assets/images/movies/banner3.webp" alt="banner-home-swiper-image">
         </div>
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center iq-ltr-direction h-100">
                  <div class="col-lg-7 col-md-12">
                     <h1 class="mb-0 texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate">
                        another
                        danger
                     </h1>
                     <div class="flex-wrap d-flex align-items-center r-mb-23 RightAnimate-two">
                        <div class="slider-ratting d-flex align-items-center">
                           <ul
                              class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                              <li>
                                 <i class="fa fa-star-half" aria-hidden="true"></i>
                              </li>
                           </ul>
                           <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                           <span class="ms-2">
                              <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid">
                           </span>
                        </div>
                        <span class="p-2 mx-3 text-white badge rounded-0 text-uppercase bg-secondary">action</span>
                        <span class="font-size-14 fw-500 time">2hr : 6mins</span>
                     </div>
                     <p class="line-count-3 RightAnimate-two"> Piracy is an act of robbery or criminal violence by ship
                        or
                        boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing
                        cargo and
                        other valuable items or properties.
                     </p>
                     <div class="trending-list RightAnimate-three">
                        <div class="text-primary genres fw-500"> Genres:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action
                           </a>
                        </div>
                        <div class="text-primary tag fw-500"> Tag:
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Action,
                           </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2">
                              Adventure, </a>
                           <a href="view-all-{{ route('movie') }}" class="text-white fw-normal text-decoration-none ms-2"> Horror
                           </a>
                        </div>
                     </div>
                     <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                <span class="button-text">play now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                     <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none"
                        tabindex="0">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                           x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                           enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                           <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 ">
                           </polygon>
                           <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                        </svg>
                        <span class="w-trailor text-uppercase"> Watch Trailer </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="swiper-banner-button-prev swiper-nav" id="home-banner-slider-prev">
      <i></i>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none"
         stroke="currentColor">
         <circle r="20" cy="22" cx="22"></circle>
      </svg>
   </div>
   <div class="swiper-banner-button-next swiper-nav" id="home-banner-slider-next">
      <i></i>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none"
         stroke="currentColor">
         <circle r="20" cy="22" cx="22"></circle>
      </svg>
   </div>
   <div class="swiper-pagination"></div>
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none"
         stroke="currentColor">
         <circle r="20" cy="22" cx="22" id="test"></circle>
      </symbol>
   </svg>
</section>

<section class="continue-watching-block">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="px-2 mb-4 d-flex align-items-center justify-content-between px-md-3">
            <h5 class="mb-0 main-title text-capitalize">continue watching</h5>
         </div>
         <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="p-0 m-0 swiper-wrapper list-inline">
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 50%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">120 of 130 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 30%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 90%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 20%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">45 of 157 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 20%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">45 of 157 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 75%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </div>
   </div>
</section>

<div class="upcomimg-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">Upcoming Movies</h5>
            <a href="view-all-{{ route('movie') }}" class="flex-none text-primary iq-view-all text-decoration-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 m-0 swiper-wrapper list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                             <img src="template/assets/images/movies/upcoming/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">dinoosaur</a>
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
                             <img src="template/assets/images/movies/upcoming/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">godilla</a>
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
                             <img src="template/assets/images/movies/upcoming/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">batter caill</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">1hr : 55mins</span>
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
                             <img src="template/assets/images/movies/upcoming/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">the co nouerllng</a>
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
                             <img src="template/assets/images/movies/upcoming/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">fast furious</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">2hr : 45mins</span>
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
                             <img src="template/assets/images/movies/upcoming/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">spiderman</a>
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
                             <img src="template/assets/images/movies/upcoming/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">onepeoc</a>
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
               </ul>
               <div class="swiper-button swiper-button-next"></div>
               <div class="swiper-button swiper-button-prev"></div>
            </div>
         </div>
      </section>
   </div>
</div>

<div class="latest-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">latest Movies</h5>
            <a href="view-all-{{ route('movie') }}" class="flex-none text-primary iq-view-all text-decoration-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
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
                             <img src="template/assets/images/movies/latest/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">net ailo</a>
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
                             <img src="template/assets/images/movies/latest/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">ariivaal</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">2hr : 45mins</span>
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
                                   <span class="font-normal movie-time-text">1hr : 55mins</span>
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
                                   <span class="font-normal movie-time-text">1hr : 25mins</span>
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
      </section>
   </div>
</div>

<div class="verticle-slider section-padding-bottom">
   <div class="container-fluid">
      <div class="slider">
         <div class="slider-flex position-relative">
            <div class="slider--col position-relative">
               <div class="vertical-slider-prev swiper-button"><i class="iconly-Arrow-Up-2 icli"></i></div>
               <div class="slider-thumbs" data-swiper="slider-thumbs">
                  <div class="swiper-container " data-swiper="slider-thumbs-inner">
                     <div class="swiper-wrapper top-ten-slider-nav">
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative ">
                              <div class="img-box slider--image">
                                 <img src="template/assets/images/top-10/06.webp" class="img-fluid" alt=""
                                    loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title">wars of dragons</h6>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                    <span class="text-body">2hr : 14mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative ">
                              <div class="img-box slider--image">
                                 <img src="template/assets/images/top-10/07.webp" class="img-fluid" alt=""
                                    loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title">the Escape</h6>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                    <span class="text-body">1hr : 45mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative">
                              <div class="img-box slider--image">
                                 <img src="template/assets/images/top-10/08.webp" class="img-fluid" alt=""
                                    loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title">X-Men</h6>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                    <span class="text-body">1hr : 45mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative">
                              <div class="img-box slider--image">
                                 <img src="template/assets/images/top-10/09.webp" class="img-fluid" alt=""
                                    loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title">Logan</h6>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                    <span class="text-body">1hr : 22mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative">
                              <div class="img-box slider--image">
                                 <img src="template/assets/images/top-10/05.webp" class="img-fluid" alt=""
                                    loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title">Black Queen</h6>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                    <span class="text-body">1hr : 45mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="vertical-slider-next swiper-button"><i class="iconly-Arrow-Down-2 icli"></i></div>
            </div>
            <div class="slider-images" data-swiper="slider-images">
               <div class="swiper-container " data-swiper="slider-images-inner">
                  <div class="swiper-wrapper ">
                     <div class="swiper-slide">
                        <div class="slider--image block-images"><img src="template/assets/images/top-10/06.webp"
                              loading="lazy" alt="" /></div>
                        <div class="description">
                           <div class="block-description">
                              <ul class="flex-wrap pb-1 mb-0 mb-1 ps-0 list-inline d-flex align-items-center movie-tag">
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Comedy</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Romance</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Action</a>
                                 </li>
                              </ul>
                              <h2 class="mb-3 iq-title"><a href="{{ route('tvshowdetail') }}">wars of dragons</a></h2>
                              <div class="gap-3 mb-3 d-flex align-items-center">
                                 <div class="slider-ratting d-flex align-items-center">
                                    <ul
                                       class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                 </div>
                                 <span class="text-body">2hr : 14mins</span>
                              </div>
                              <p class="mb-3 t-0 line-count-2">The point of using Lorem Ipsum is that it has a
                                 more-or-less normal
                                 distribution of letters, as opposed to using 'Content here.</p>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">play
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="slider--image block-images"><img src="template/assets/images/top-10/07.webp"
                              loading="lazy" alt="" /></div>
                        <div class="description">
                           <div class="block-description">
                              <ul class="flex-wrap pb-1 mb-0 mb-1 ps-0 list-inline d-flex align-items-center movie-tag">
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Comedy</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Romance</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Action</a>
                                 </li>
                              </ul>
                              <h2 class="mb-3 iq-title"><a href="{{ route('tvshowdetail') }}">the Escape</a></h2>
                              <div class="gap-3 mb-3 d-flex align-items-center">
                                 <div class="slider-ratting d-flex align-items-center">
                                    <ul
                                       class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                 </div>
                                 <span class="text-body">1hr : 45mins</span>
                              </div>
                              <p class="mb-3 t-0 line-count-2">The point of using Lorem Ipsum is that it has a
                                 more-or-less normal
                                 distribution of letters, as opposed to using 'Content here.</p>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">play
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="slider--image block-images"><img src="template/assets/images/top-10/08.webp"
                              loading="lazy" alt="" /></div>
                        <div class="description">
                           <div class="block-description">
                              <ul class="flex-wrap pb-1 mb-0 mb-1 ps-0 list-inline d-flex align-items-center movie-tag">
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Comedy</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Romance</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Action</a>
                                 </li>
                              </ul>
                              <h2 class="mb-3 iq-title"><a href="{{ route('tvshowdetail') }}">X-Men</a></h2>
                              <div class="gap-3 mb-3 d-flex align-items-center">
                                 <div class="slider-ratting d-flex align-items-center">
                                    <ul
                                       class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                 </div>
                                 <span class="text-body">1hr : 45mins</span>
                              </div>
                              <p class="mb-3 t-0 line-count-2">The point of using Lorem Ipsum is that it has a
                                 more-or-less normal
                                 distribution of letters, as opposed to using 'Content here.</p>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">play
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="slider--image block-images"><img src="template/assets/images/top-10/09.webp"
                              loading="lazy" alt="" /></div>
                        <div class="description">
                           <div class="block-description">
                              <ul class="flex-wrap pb-1 mb-0 mb-1 ps-0 list-inline d-flex align-items-center movie-tag">
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Comedy</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Romance</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Action</a>
                                 </li>
                              </ul>
                              <h2 class="mb-3 iq-title"><a href="{{ route('tvshowdetail') }}">Logan</a></h2>
                              <div class="gap-3 mb-3 d-flex align-items-center">
                                 <div class="slider-ratting d-flex align-items-center">
                                    <ul
                                       class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                 </div>
                                 <span class="text-body">1hr : 22mins</span>
                              </div>
                              <p class="mb-3 t-0 line-count-2">The point of using Lorem Ipsum is that it has a
                                 more-or-less normal
                                 distribution of letters, as opposed to using 'Content here.</p>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">play
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="slider--image block-images"><img src="template/assets/images/top-10/05.webp"
                              loading="lazy" alt="" /></div>
                        <div class="description">
                           <div class="block-description">
                              <ul class="flex-wrap pb-1 mb-0 mb-1 ps-0 list-inline d-flex align-items-center movie-tag">
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Comedy</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Romance</a>
                                 </li>
                                 <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                    <a href="view-all-{{ route('movie') }}" class="text-white text-decoration-none">Action</a>
                                 </li>
                              </ul>
                              <h2 class="mb-3 iq-title"><a href="{{ route('tvshowdetail') }}">Black Queen</a></h2>
                              <div class="gap-3 mb-3 d-flex align-items-center">
                                 <div class="slider-ratting d-flex align-items-center">
                                    <ul
                                       class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                 </div>
                                 <span class="text-body">1hr : 45mins</span>
                              </div>
                              <p class="mb-3 t-0 line-count-2">The point of using Lorem Ipsum is that it has a
                                 more-or-less normal
                                 distribution of letters, as opposed to using 'Content here.</p>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">play
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="suggested-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">suggested-block</h5>
            <a href="view-all-{{ route('movie') }}" class="flex-none text-primary iq-view-all text-decoration-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 m-0 swiper-wrapper list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                             <img src="template/assets/images/movies/suggested/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">choflief</a>
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



                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                             <img src="template/assets/images/movies/suggested/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">lost</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">3hr : 0min</span>
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
                             <img src="template/assets/images/movies/suggested/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">red hamald</a>
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
                             <img src="template/assets/images/movies/suggested/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">pandap</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">2hr : 45mins</span>
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
                             <img src="template/assets/images/movies/suggested/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">femllaeemll</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">1hr : 55mins</span>
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
                             <img src="template/assets/images/movies/suggested/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">ragnarorr</a>
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
                             <img src="template/assets/images/movies/suggested/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">sonil</a>
                                 </h5>
                                 <div class="my-2 movie-time d-flex align-items-center">
                                   <span class="font-normal movie-time-text">2hr : 15mins</span>
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
</div>

<section id="parallex" class="parallax-window bg-attachment-fixed"
   style="background:url(template/assets/images/parallax/parallex.webp) fixed;">
   <div class="container-fluid h-100">
      <div class="row align-items-center justify-content-center h-100 parallaxt-details">
         <div class="col-xl-5 col-lg-12 col-md-12 r-mb-23">
            <div class="text-start">
               <h2 class="mb-0 big-font-5 text-uppercase texture-text">bailey</h2>
               <div class="flex-wrap my-4 d-flex align-items-center r-mb-23">
                  <div class="slider-ratting d-flex align-items-center">
                     <ul
                        class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                        <li>
                           <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                           <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                           <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                           <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                           <i class="fa fa-star-half" aria-hidden="true"></i>
                        </li>
                     </ul>
                     <span class="text-white ms-2 font-size-14 fw-500">4.2</span>
                     <span class="ms-2">
                        <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid">
                     </span>
                  </div>
                  <span class="p-2 mx-3 text-white badge rounded-0 text-uppercase bg-secondary">15+</span>
                  <span class="font-size-14 fw-500">2hr : 6mins</span>
               </div>
               <h4 class="mb-2 iq-title fw-bold">
                  Movie of the year
               </h4>
               <p class="mb-5 line-count-2 w-75">Baileys Irish Cream is an Irish cream liqueur an alcoholic beverage
                  flavoured with cream, cocoa, and Irish whiskey made by Diageo at Republic of Ireland and in
                  Mallusk, Northern Ireland.
               </p>
               <div class="parallax-buttons">
                  <div class="iq-button">
                      <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                          <span class="button-text">play now</span>
                          <i class="fa-solid fa-play"></i>
                      </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-5 col-xl-7 col-lg-12 col-md-12 mt-xl-0">
            <div class="parallax-img">
               <a href="{{ route('moviedetail') }}">
                  <img src="template/assets/images/parallax/parallex.webp" class="img-fluid w-100" loading="lazy"
                     alt="bailey">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="tranding-tab-slider section-padding">
   <div class="container-fluid">
      <div class="p-0 m-0 row">
         <div id="iq-trending" class="overflow-hidden s-margin iq-tvshow-tabs iq-trending-tabs">
            <div class="px-0 d-flex align-items-center justify-content-between px-md-3">
               <h5 class="mb-0 main-title text-capitalize">Trending</h5>
            </div>
            <div class="trending-contens position-relative ">
               <div id="gallery-top" class="swiper gallery-thumbs" data-swiper="gallery-top">
                  <ul
                     class="m-0 swiper-wrapper list-inline trending-swiper-padding trending-slider-nav align-items-center ">
                     <li class="swiper-slide">
                        <a href="javascript:void(0);">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/ott1.webp" alt="" />
                           </div>
                        </a>
                     </li>
                     <li class="swiper-slide">
                        <a href="javascript:void(0);">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/ott2.webp" alt="" />
                           </div>
                        </a>
                     </li>
                     <li class="swiper-slide">
                        <a href="javascript:void(0);">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/ott3.webp" alt="" />
                           </div>
                        </a>
                     </li>
                     <li class="swiper-slide">
                        <a href="javascript:void(0);">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/banner1.webp" alt="" />
                           </div>
                        </a>
                     </li>
                     <li class="swiper-slide">
                        <a href="javascript:void(0);" tabindex="0">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/banner2.webp" alt="" />
                           </div>
                        </a>
                     </li>
                     <li class="swiper-slide">
                        <a href="javascript:void(0);" tabindex="0">
                           <div class="movie-swiper position-relative">
                              <img src="template/assets/images/movies/banner3.webp" alt="" />
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <div id="gallery-bottom" class="swiper trending-tab-slider swiper-no-swiping"
                  data-swiper="gallery-bottom">
                  <ul class="p-0 m-0 swiper-wrapper list-inline d-flex align-items-center trending-slider">
                     <li class="p-0 swiper-slide slider-big-img-1">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/ott1.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-1" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-1" aria-controls="trending-data-1" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-2" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-2" aria-controls="trending-data-2" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-3" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-3" aria-controls="trending-data-3" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-4" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-4" aria-controls="trending-data-4" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-1-content">
                                 <div id="trending-data-1" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-1" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-2" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-2" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control select2-basic-single js-states season-select">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/episodes/01.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/episodes/02.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/episodes/03.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/episodes/04.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/episodes/05.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-3" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-3" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/season/01.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-4" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-4" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/02.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/03.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/04.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/05.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/06.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                     <li class="swiper-slide slider-big-img-2">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/ott2.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-5" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-5" aria-controls="trending-data-5" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-6" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-6" aria-controls="trending-data-6" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-7" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-7" aria-controls="trending-data-7" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-8" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-8" aria-controls="trending-data-8" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-2-content">
                                 <div id="trending-data-5" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-5" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-6" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-6" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control season-select select2-basic-single js-states">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/01.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/02.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/03.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/04.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/05.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-7" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-7" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/episodes/01.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-8" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-8" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner1.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                     <li class="swiper-slide slider-big-img-3">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/ott3.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-9" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-9" aria-controls="trending-data-9" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-10" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-10" aria-controls="trending-data-10" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-11" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-11" aria-controls="trending-data-11" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-12" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-12" aria-controls="trending-data-12" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-3-content">
                                 <div id="trending-data-9" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-9" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-10" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-10" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control season-select select2-basic-single js-states">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/25.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/26.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/27.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/28.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/29.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-11" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-11" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/season/35.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-12" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-12" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/30.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/31.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/32.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/33.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/34.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                     <li class="swiper-slide slider-big-img-4">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/banner1.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-13" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-13" aria-controls="trending-data-13" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-14" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-14" aria-controls="trending-data-14" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-15" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-15" aria-controls="trending-data-15" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-16" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-16" aria-controls="trending-data-16" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-4-content">
                                 <div id="trending-data-13" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-13" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-14" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-14" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control season-select select2-basic-single js-states">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/11.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/12.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/13.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/14.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/15.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-11" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-15" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/episodes/01.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-16" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-16" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner1.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                     <li class="swiper-slide slider-big-img-5">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/banner2.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-5" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-17" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-17" aria-controls="trending-data-17" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-18" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-18" aria-controls="trending-data-18" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-19" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-19" aria-controls="trending-data-19" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-20" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-20" aria-controls="trending-data-20" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-5-content">
                                 <div id="trending-data-17" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-17" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-18" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-18" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control season-select select2-basic-single js-states">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/16.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/17.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/18.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/19.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/20.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-19" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-19" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/episodes/01.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-20" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-20" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner1.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                     <li class="swiper-slide slider-big-img-6">
                        <div class="trending-tab-slider-image">
                           <img src="template/assets/images/movies/banner3.webp" alt="trending-tab-slider-image">
                        </div>
                        <div class="tranding-block position-relative">
                           <div class="trending-custom-tab">
                              <div class="tab-title-info position-relative">
                                 <ul class="text-center trending-pills iq-custom-tab flex-nowrap d-flex nav nav-pills justify-content-md-center align-items-center list-inline"
                                    id="trending-tab-5" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active" id="trending-data-tab-21" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-21" aria-controls="trending-data-21" role="tab"
                                          aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-22" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-22" aria-controls="trending-data-22" role="tab"
                                          aria-selected="false">Episodes</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-23" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-23" aria-controls="trending-data-23" role="tab"
                                          aria-selected="false">Trailers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link" id="trending-data-tab-24" data-bs-toggle="pill"
                                          data-bs-target="#trending-data-24" aria-controls="trending-data-24" role="tab"
                                          aria-selected="false">Similar Like This</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content trending-content" id="trending-tab-5-content">
                                 <div id="trending-data-21" class="tab-pane fade show active" role="tabpanel"
                                    aria-labelledby="trending-data-tab-21" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap text-white d-flex align-items-center text-detail">
                                          <span>3 Seasons</span>
                                          <span class="trending-year">2023</span>
                                       </div>
                                       <div class="flex-wrap gap-3 mb-4 d-flex align-items-center series">
                                          <a href="javascript:void(0);"><img
                                                src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                                alt=""></a>
                                          <span class="text-gold">#2 in Series Today</span>
                                       </div>
                                       <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                          has a more-or-less normal distribution of letters, as opposed to using
                                          'Content here.</p>
                                       <div class="p-btns">
                                          <div class="iq-button">
                                             <a href="{{ route('tvshowdetail') }}"
                                                class="btn text-uppercase position-relative">
                                                <span class="button-text">Play Now</span>
                                                <i class="fa-solid fa-play"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="mt-4 trending-list">
                                          <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                Moura, Boyd Holbrook, Joanna</span>
                                          </div>
                                          <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                Action, Thriller, Biography</span>
                                          </div>
                                          <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                Forceful</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-22" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-22" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                       <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                       </h1>
                                       <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                                          <span class="season_date ms-2">
                                             2 Seasons
                                          </span>
                                          <span class="trending-year">Feb 2019</span>
                                       </div>
                                       <div class="mb-4 iq-custom-select d-inline-block sea-epi">
                                          <select name="cars"
                                             class="form-control season-select select2-basic-single js-states">
                                             <option value="season1">Season 1</option>
                                             <option value="season2">Season 2</option>
                                             <option value="season3">Season 3</option>
                                          </select>
                                       </div>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/21.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E01</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/22.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E02</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/23.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E03</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/24.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E04</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/tv-show/season/25.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">S01E05</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                          </ul>
                                          <div class="swiper-button swiper-button-next"></div>
                                          <div class="swiper-button swiper-button-prev"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-23" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-23" tabindex="0">
                                    <div
                                       class="text-center trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mt-2 trending-text big-title text-uppercase texture-text">Watch
                                          Trailer</h3>
                                       <div class="mt-5 episodes-contens">
                                          <div
                                             class="overflow-hidden tab-watch-trailer-container d-inline-block rounded-3">
                                             <div class="overflow-hidden tab-watch-trailer position-relative rounded-3">
                                                <img src="template/assets/images/tv-show/episodes/01.webp"
                                                   class="trailer-image" alt="trailer-image">
                                                <a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4"
                                                   class="video-open playbtn text-decoration-none" tabindex="0">
                                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                      width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                      enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                      <polygon class="triangle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10"
                                                         points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                      <circle class="circle" fill="none" stroke-width="7"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                      </circle>
                                                   </svg>
                                                   <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="trending-data-24" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="trending-data-tab-24" tabindex="0">
                                    <div
                                       class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                       <h3 class="mb-5 trending-text big-title text-uppercase texture-text">Recommended
                                          For You</h3>
                                       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                          data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                          data-loop="false" data-navigation="true" data-pagination="true">
                                          <ul class="p-0 m-0 swiper-wrapper list-inline">
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-2</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 1, 2022</span>
                                                            <span class="text-primary run-time">45min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 1 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/ott3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-3</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 8, 2022</span>
                                                            <span class="text-primary run-time">35min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 2 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner1.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-4</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 15, 2022</span>
                                                            <span class="text-primary run-time">36min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 3 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner2.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-5</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 4 </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                             </li>
                                             <li class="swiper-slide">
                                                <div class="episode-block">
                                                    <div class="block-image position-relative">
                                                        <a href="{{ route('episode') }}">
                                                            <img src="template/assets/images/movies/banner3.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                        </a>
                                                        <div class="episode-number">Seasons 1-6</div>
                                                        <div class="episode-play">
                                                            <a href="{{ route('episode') }}" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 epi-desc">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <span class="text-white border-gredient-left rel-date">October 22, 2022</span>
                                                            <span class="text-primary run-time">41min</span>
                                                        </div>
                                                        <a href="{{ route('episode') }}">
                                                            <h5 class="mb-0 text-white epi-name"> Episode 5 </h5>
                                                        </a>
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
                           </div>
                        </div>
                     </li>
                  </ul>
                  <div class="swiper-arrow swiper-button-next">
                     <i class="fa-solid fa-chevron-right"></i>
                  </div>
                  <div class="swiper-arrow swiper-button-prev">
                     <i class="fa-solid fa-chevron-left"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="recommended-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">Recommended TV Show</h5>
            <a href="view-all-{{ route('movie') }}" class="flex-none text-primary iq-view-all text-decoration-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
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
      </section>
   </div>
</div>

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


    <!-- Select2 Script -->
    <script src="template/assets/js/plugins/select2.js" defer></script>


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
