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

{{-- @vite('resources/css/app.css') --}}
  </head>

<body class="  ">
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
      @include('home.sections.header')
      <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->


<div class="iq-banner-thumb-slider">
   <div class="slider">
      <div class="position-relative slider-bg d-flex justify-content-end">
         <div class="position-relative my-auto">
            <div class="horizontal_thumb_slider" data-swiper="slider-thumbs-ott">
               <div class="banner-thumb-slider-nav">
                  <div class="swiper-container " data-swiper="slider-thumbs-inner-ott">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="template/assets/images/movies/ott1.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                 <div class="block-description">
                                    <h6 class="iq-title fw-500 mb-0">The Hunter</h6>
                                    <span class="fs-12">2hr : 6mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="template/assets/images/movies/ott2.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                 <div class="block-description">
                                    <h6 class="iq-title fw-500 mb-0">The Mandalorian</h6>
                                    <span class="fs-12">2hr : 14mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide swiper-bg">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="template/assets/images/movies/ott3.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                 <div class="block-description">
                                    <h6 class="iq-title fw-500 mb-0">Better call saul</h6>
                                    <span class="fs-12">2hr : 55mins</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-prev swiper-button">
                     <i class="iconly-Arrow-Left-2 icli"></i>
                  </div>
                  <div class="slider-next swiper-button">
                     <i class="iconly-Arrow-Right-2 icli"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider-images" data-swiper="slider-images-ott">
            <div class="swiper-container" data-swiper="slider-images-inner-ott">
               <div class="swiper-wrapper m-0">
                  <div class="swiper-slide p-0">
                     <div class="slider--image block-images">
                        <img src="template/assets/images/movies/ott1.webp" loading="lazy" alt="banner" />
                     </div>
                     <div class="description">
                        <div class="row align-items-center h-100">
                           <div class="col-lg-6 col-md-12">
                              <div class="slider-content">
                                 <div class="d-flex align-items-center RightAnimate mb-3">
                                    <span
                                       class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">Pg</span>
                                    <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Adventure</a>
                                       </li>
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Thriller</a>
                                       </li>
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Drama</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <h1
                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                    The Hunter </h1>
                                 <p class="line-count-3 RightAnimate-two">After the death of their father, two siblings
                                    fight for the throne, thereby causing a civil war known as the Dance of the Dragons.
                                    Rhaenyra tries to hold the realm together as the tension rises following a tragic
                                    loss. Meanwhile, Daemon prepares for war.</p>
                                 <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                                    <div class="slider-ratting d-flex align-items-center">
                                       <ul
                                          class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                       </ul>
                                       <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                       <span class="ms-2">
                                          <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo"
                                             class="img-fluid">
                                       </span>
                                    </div>
                                    <span class="font-size-14 fw-500">2hr : 6mins</span>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a
                                          href="view-all-{{ route('movie') }}" class="text-decoration-none ms-1">Drama</a>
                                    </div>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">Starting: <a
                                          href="{{ route('persondetail') }}" class="text-decoration-none ms-1">Jeffrey Silver</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="RightAnimate-four">
                                 <div class="iq-button">
                                     <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                         <span class="button-text">stream now</span>
                                         <i class="fa-solid fa-play"></i>
                                     </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide p-0">
                     <div class="slider--image block-images">
                        <img src="template/assets/images/movies/ott2.webp" loading="lazy" alt="" />
                     </div>
                     <div class="description">
                        <div class="row align-items-center h-100">
                           <div class="col-lg-6 col-md-12">
                              <div class="slider-content">
                                 <div class="d-flex align-items-center RightAnimate mb-3">
                                    <span
                                       class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">NC-17</span>
                                    <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Animation</a>
                                       </li>
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Sci-Fi</a>
                                       </li>
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Action</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <h1
                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                    The Mandalorian </h1>
                                 <p class="line-count-3 RightAnimate-two">After the fall of the Galactic Empire, a lone
                                    gunfighter makes his way through the outer reaches of the lawless galaxy he show
                                    follows the adventures of a lone Mandalorian bounty hunter, Din Djarin, as he
                                    navigates the outer reaches of the galaxy, far from the authority of the New
                                    Republic.</p>
                                 <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                                    <div class="slider-ratting d-flex align-items-center">
                                       <ul
                                          class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                       </ul>
                                       <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                    </div>
                                    <span class="font-size-14 fw-500">2hr : 14mins</span>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a
                                          href="view-all-{{ route('movie') }}" class="text-decoration-none ms-1">Sci-Fi</a>
                                    </div>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">Starting:
                                       <a href="{{ route('persondetail') }}" class="text-decoration-none ms-1">James Chinlund</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="RightAnimate-four">
                                 <div class="iq-button">
                                     <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                         <span class="button-text">stream now</span>
                                         <i class="fa-solid fa-play"></i>
                                     </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide p-0">
                     <div class="slider--image block-images">
                        <img src="template/assets/images/movies/ott3.webp" loading="lazy" alt="" />
                     </div>
                     <div class="description">
                        <div class="row align-items-center h-100">
                           <div class="col-lg-6 col-md-12">
                              <div class="slider-content">
                                 <div class="d-flex align-items-center RightAnimate mb-3">
                                    <span
                                       class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">G</span>
                                    <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">History</a>
                                       </li>
                                       <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                          <a href="view-all-{{ route('movie') }}" class="text-decoration-none">Action</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <h1
                                    class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                    Better call saul </h1>
                                 <p class="line-count-3 RightAnimate-two">Ex-con artist Jimmy McGill turns into a
                                    small-time attorney and goes through a series of trials and tragedies, as he
                                    transforms into his alter ego Saul Goodman, a morally challenged criminal lawyer.
                                 </p>
                                 <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                                    <div class="slider-ratting d-flex align-items-center">
                                       <ul
                                          class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                       </ul>
                                    </div>
                                    <span class="font-size-14 fw-500">2hr : 55mins</span>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">genres:<a
                                          href="view-all-{{ route('movie') }}" class="text-decoration-none ms-1">horror</a>
                                    </div>
                                    <div class="text-primary font-size-14 fw-500 text-capitalize">Starting:<a href="#"
                                          class="text-decoration-none ms-1">Brenda Chapman</a>
                                       <span class="text-body">,</span>
                                       <a href="{{ route('persondetail') }}" class="text-decoration-none ms-1">Caleb
                                          Deschannelr</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="RightAnimate-four">
                                 <div class="iq-button">
                                     <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                         <span class="button-text">stream now</span>
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
</div>

<section class="continue-watching-block section-padding-top">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
            <h5 class="main-title text-capitalize mb-0">continue watching</h5>
         </div>
         <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline">
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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
                                  <img src="template/assets/images/continue-watch/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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
                                  <img src="template/assets/images/continue-watch/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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
                                  <img src="template/assets/images/continue-watch/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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
                                  <img src="template/assets/images/continue-watch/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">45 of 157 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 100%"></div>
                              </div>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-watching-block">
                      <div class="block-images position-relative">
                          <div class="iq-image-box overly-images">
                              <a href="{{ route('moviedetail') }}" class="d-block">
                                  <img src="template/assets/images/continue-watch/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                              </a>
                          </div>
                          <div class="iq-preogress">
                              <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                              <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                                  <div class="progress-bar" style="width: 100%"></div>
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

<div class="top-ten-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
            <h5 class="main-title text-capitalize mb-0">top ten movies to watch</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="position-relative swiper swiper-card iq-top-ten-block-slider" data-slide="6" data-laptop="6"
            data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false"
            data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper mb-5 list-inline">
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/01.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">1</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/02.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">2</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/03.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">3</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/04.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">4</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/05.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">5</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/06.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">6</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/07.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">7</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/08.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">8</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/09.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">9</span>
                          </div>
                      </div>
                  </div>               </li>
               <li class="swiper-slide">
                  <div class="iq-top-ten-block">
                      <div class="block-image position-relative">
                          <div class="img-box">
                              <a class="overly-images" href="{{ route('moviedetail') }}">
                                  <img src="template/assets/images/top-ten-number/10.webp" alt="movie-card" class="img-fluid object-cover">
                              </a>
                              <span class="top-ten-numbers texture-text">10</span>
                          </div>
                      </div>
                  </div>               </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </section>
   </div>
</div>

<div class="streamit-block">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">giikre</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 12mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">YoShi</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 22mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">We Gare</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Avengers</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 45mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Chosfies</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Tf Oaler</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Another Danger</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
</div>

<div class="streamit-card-height-block d-none">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">giikre</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 12mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">YoShi</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 22mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">We Gare</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Avengers</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 38mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Chosfies</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 10mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Tf Oaler</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 40mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                       <div class="iq-card card-hover iq-card-style-2">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/related/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Another Danger</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 40mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
</div>

<div class="verticle-slider section-padding-bottom">
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
                              <img src="template/assets/images/top-10/01.webp" class="img-fluid" alt="" loading="lazy">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="{{ route('tvshowdetail') }}">lostti n sacee</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <span class="text-body">2hr : 30mins</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-bg">
                        <div class="block-images position-relative ">
                           <div class="img-box slider--image">
                              <img src="template/assets/images/top-10/02.webp" class="img-fluid" alt="" loading="lazy">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="{{ route('tvshowdetail') }}">Ret Seap</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <span class="text-body">3hr : 0min</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-bg">
                        <div class="block-images position-relative">
                           <div class="img-box slider--image">
                              <img src="template/assets/images/top-10/03.webp" class="img-fluid" alt="" loading="lazy">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="{{ route('tvshowdetail') }}">X-Men</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <span class="text-body">1hr : 45mins</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-bg">
                        <div class="block-images position-relative">
                           <div class="img-box slider--image">
                              <img src="template/assets/images/top-10/04.webp" class="img-fluid" alt="" loading="lazy">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="{{ route('tvshowdetail') }}">Logan</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <span class="text-body">1hr : 22mins</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-bg">
                        <div class="block-images position-relative">
                           <div class="img-box slider--image">
                              <img src="template/assets/images/top-10/05.webp" class="img-fluid" alt="" loading="lazy">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="{{ route('tvshowdetail') }}">Black Queen</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
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
                     <div class="slider--image block-images"><img src="template/assets/images/top-10/01.webp"
                           loading="lazy" alt="" /></div>
                     <div class="description">
                        <div class="block-description">
                           <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
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
                           <h2 class="iq-title mb-3"><a href="{{ route('tvshowdetail') }}">lostti n sacee</a></h2>
                           <div class="d-flex align-items-center gap-3 mb-3">
                              <div class="slider-ratting d-flex align-items-center">
                                 <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                 </ul>
                                 <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                              </div>
                              <span class="text-body">2hr : 30mins</span>
                           </div>
                           <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                           <div class="iq-button">
                               <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                   <span class="button-text">play now</span>
                                   <i class="fa-solid fa-play"></i>
                               </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="slider--image block-images"><img src="template/assets/images/top-10/02.webp"
                           loading="lazy" alt="" /></div>
                     <div class="description">
                        <div class="block-description">
                           <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
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
                           <h2 class="iq-title mb-3"><a href="{{ route('tvshowdetail') }}">Ret Seap</a></h2>
                           <div class="d-flex align-items-center gap-3 mb-3">
                              <div class="slider-ratting d-flex align-items-center">
                                 <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                 </ul>
                                 <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                              </div>
                              <span class="text-body">3hr 0min</span>
                           </div>
                           <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                           <div class="iq-button">
                               <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                   <span class="button-text">play now</span>
                                   <i class="fa-solid fa-play"></i>
                               </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="slider--image block-images"><img src="template/assets/images/top-10/03.webp"
                           loading="lazy" alt="" /></div>
                     <div class="description">
                        <div class="block-description">
                           <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
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
                           <h2 class="iq-title mb-3"><a href="{{ route('tvshowdetail') }}">X Men</a></h2>
                           <div class="d-flex align-items-center gap-3 mb-3">
                              <div class="slider-ratting d-flex align-items-center">
                                 <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                 </ul>
                                 <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                              </div>
                              <span class="text-body">1hr : 45mins</span>
                           </div>
                           <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                           <div class="iq-button">
                               <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                   <span class="button-text">play now</span>
                                   <i class="fa-solid fa-play"></i>
                               </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="slider--image block-images"><img src="template/assets/images/top-10/04.webp"
                           loading="lazy" alt="" /></div>
                     <div class="description">
                        <div class="block-description">
                           <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
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
                           <h2 class="iq-title mb-3"><a href="{{ route('tvshowdetail') }}">Logan</a></h2>
                           <div class="d-flex align-items-center gap-3 mb-3">
                              <div class="slider-ratting d-flex align-items-center">
                                 <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                 </ul>
                                 <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                              </div>
                              <span class="text-body">1hr : 22mins</span>
                           </div>
                           <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                           <div class="iq-button">
                               <a href="#" class="btn text-uppercase position-relative">
                                   <span class="button-text">play now</span>
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
                           <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
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
                           <h2 class="iq-title mb-3"><a href="{{ route('tvshowdetail') }}">Black Queen</a></h2>
                           <div class="d-flex align-items-center gap-3 mb-3">
                              <div class="slider-ratting d-flex align-items-center">
                                 <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                 </ul>
                                 <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                              </div>
                              <span class="text-body">1hr : 45mins</span>
                           </div>
                           <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                           <div class="iq-button">
                               <a href="{{ route('videodetail') }}" class="btn text-uppercase position-relative">
                                   <span class="button-text">play now</span>
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

<div class="favourite-person-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">your favourite personality</h5>
            <a href="{{ route('allpersonality') }}" class="text-primary iq-view-all text-decoration-none">View All</a>
         </div>
         <div class="position-relative swiper swiper-card" data-slide="11" data-laptop="11" data-tab="4" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline personality-card">
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/01.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">john Abraham</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/02.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Leena burton</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/03.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Lorina williams </a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/04.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Davina decorous</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/05.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Thomas bailey</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/06.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelly Reilly</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/07.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">smith Jonas</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/08.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">angel louis</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/09.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Millar joseph</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/10.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">mark wilson</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/11.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelley walker</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                  </div>               </li>
               <li class="swiper-slide">
                  <img src="template/assets/images/cast/12.webp" alt="personality" class="img-fluid object-cover mb-4 rounded">
                  <div class="text-center">
                      <h6 class="mb-0">
                          <a href="{{ route('persondetail') }}" class="font-size-14 text-decoration-none cast-title text-capitalize">Amy Sedaris</a>
                      </h6>
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                  </div>               </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </section>
   </div>
</div>

<div class="popular-movies-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">popular movies</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">CRW</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 12mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Batte Wiire</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 22mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Goal</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Dandacg</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">mexcan</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">oit moleld</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/popular/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Dragon Fire</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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

<div class="tab-slider">
   <div class="slider">
      <div class="position-relative swiper swiper-card" data-slide="1" data-laptop="1" data-tab="1" data-mobile="1"
         data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true"
         data-effect="fade">
         <ul class="p-0 swiper-wrapper m-0 list-inline">
            <li class="swiper-slide tab-slider-banner p-0">
               <div class="tab-slider-banner-images">
                  <img src="template/assets/images/tab-slider/01.webp" alt="tab-slider-background">
               </div>
               <div class="block-images position-relative w-100">
                  <div class="container-fluid">
                     <div class="row align-items-center min-vh-100 h-100 my-4">
                        <div class="col-md-5 col-lg-5 col-xxl-5">
                           <div class="tab-left-details">
                              <div class="d-flex align-items-center gap-3 mb-4">
                                 <a href="https://templates.iqonic.design/streamit-dist/frontend/html/javascriptvoid(0);"><img
                                       src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                       alt=""></a>
                                 <h5 class="text-gold"><span class="text-primary">#4</span> in Series Today</h5>
                              </div>
                              <h1 class="mb-2 fw-500 text-capitalize texture-text">The hunter</h1>
                              <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                 sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                 linked with land</p>
                              <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                 <li class="font-size-18">Nov 2022</li>
                                 <li class="font-size-18">Season 1</li>
                              </ul>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">stream
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-1 col-lg-2 col-xxl-3">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                           <div class="tab-block">
                              <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                              <div class="tab-bottom-bordered border-0">
                                 <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" data-bs-toggle="pill"
                                          data-bs-target="#pills-series1-season-one" type="button" role="tab"
                                          aria-selected="false">Season 1</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series1-season-two" type="button" role="tab"
                                          aria-selected="false">Season 2</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series1-season-three" type="button" role="tab"
                                          aria-selected="false">Season 3</button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content iq-tab-fade-up">
                                 <div class="tab-pane fade show active" id="pills-series1-season-one" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/01.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Fire and Blood</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/02.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> - The
                                                Pointy Endr</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/03.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - You
                                                Win or You Die</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/04.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                Black Queen</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series1-season-two" role="tabpanel" tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/05.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Valar Morghulis</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/06.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Blackwater</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/07.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - The
                                                Ghost of Harrenhal</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/08.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                Garden of Bones</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series1-season-three" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/09.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Mhysa</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/10.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Second Sons</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/11.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - The
                                                Climb</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/12.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                Kissed by Fire</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="swiper-slide tab-slider-banner p-0">
               <div class="tab-slider-banner-images">
                  <img src="template/assets/images/tab-slider/02.webp" alt="tab-slider-background">
               </div>
               <div class="block-images position-relative w-100">
                  <div class="container-fluid">
                     <div class="row align-items-center min-vh-100 h-100 my-4">
                        <div class="col-md-5 col-lg-5 col-xxl-5">
                           <div class="tab-left-details">
                              <div class="d-flex align-items-center gap-3 mb-4">
                                 <a href="https://templates.iqonic.design/streamit-dist/frontend/html/javascriptvoid(0);"><img
                                       src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                       alt=""></a>
                                 <h5 class="text-gold"><span class="text-primary">#4</span> in Series Yesterday</h5>
                              </div>
                              <h1 class="mb-2 fw-500 text-capitalize texture-text">Pirates of Dayones</h1>
                              <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                 sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                 linked with land</p>
                              <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                 <li class="font-size-18">Nov 2022</li>
                                 <li class="font-size-18">Season 1</li>
                              </ul>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">stream
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-1 col-lg-2 col-xxl-3">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                           <div class="tab-block">
                              <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                              <div class="tab-bottom-bordered border-0">
                                 <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" data-bs-toggle="pill"
                                          data-bs-target="#pills-series2-season-one" type="button" role="tab"
                                          aria-selected="false">Season 1</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series2-season-two" type="button" role="tab"
                                          aria-selected="false">Season 2</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series2-season-three" type="button" role="tab"
                                          aria-selected="false">Season 3</button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content iq-tab-fade-up">
                                 <div class="tab-pane fade show active" id="pills-series2-season-one" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/13.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> - The
                                                Curse of the Black Pearl</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/14.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Dead Man's Chest</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/15.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - At
                                                World's End</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/16.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - On
                                                Stranger Tides</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series2-season-two" role="tabpanel" tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/17.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Dead Men Tell No Tales</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/18.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Tales of the Code</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/19.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                Romance Dawn</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/20.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                Man in the Straw Hat</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series2-season-three" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/21.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Tell No Tales</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/22.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> - The
                                                Pirates Are Coming</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/23.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - Eat
                                                at Baratie!</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/24.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                Chef and the Chore Boy</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="swiper-slide tab-slider-banner p-0">
               <div class="tab-slider-banner-images">
                  <img src="template/assets/images/tab-slider/03.webp" alt="tab-slider-background">
               </div>
               <div class="block-images position-relative w-100">
                  <div class="container-fluid">
                     <div class="row align-items-center min-vh-100 h-100 my-4">
                        <div class="col-md-5 col-lg-5 col-xxl-5">
                           <div class="tab-left-details">
                              <div class="d-flex align-items-center gap-3 mb-4">
                                 <a href="https://templates.iqonic.design/streamit-dist/frontend/html/javascriptvoid(0);"><img
                                       src="template/assets/images/movies/trending-label.webp" class="img-fluid"
                                       alt=""></a>
                                 <h5 class="text-gold"><span class="text-primary">#4</span> in Series tomorrow</h5>
                              </div>
                              <h1 class="mb-2 fw-500 text-capitalize texture-text">peaky blinders</h1>
                              <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                 sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                 linked with land</p>
                              <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                 <li class="font-size-18">Nov 2022</li>
                                 <li class="font-size-18">Season 1</li>
                              </ul>
                              <div class="iq-button">
                                  <a href="{{ route('moviedetail') }}" class="btn text-uppercase position-relative">
                                      <span class="button-text">stream
                                                            now</span>
                                      <i class="fa-solid fa-play"></i>
                                  </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-1 col-lg-2 col-xxl-3">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                           <div class="tab-block">
                              <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                              <div class="tab-bottom-bordered border-0">
                                 <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" data-bs-toggle="pill"
                                          data-bs-target="#pills-series3-season-one" type="button" role="tab"
                                          aria-selected="false">Season 1</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series3-season-two" type="button" role="tab"
                                          aria-selected="false">Season 2</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" data-bs-toggle="pill"
                                          data-bs-target="#pills-series3-season-three" type="button" role="tab"
                                          aria-selected="false">Season 3</button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content iq-tab-fade-up">
                                 <div class="tab-pane fade show active" id="pills-series3-season-one" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/25.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Episode 1</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/26.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Episode 2</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/27.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                Episode 3</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/28.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                Episode 4</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series3-season-two" role="tabpanel" tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/29.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Episode 1</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/30.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Episode 2</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/31.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                Episode 3</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/32.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                Episode 4</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="pills-series3-season-three" role="tabpanel"
                                    tabindex="0">
                                    <ul class="list-inline m-0 p-0">
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/33.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                Episode 1</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/34.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                Episode 2</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/35.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                Episode 3</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                       <li class="d-flex align-items-center gap-3">
                                          <div class="image-box flex-shrink-0">
                                             <img src="template/assets/images/tv-show/season/36.webp" alt="image-icon"
                                                class="img-fluid rounded">
                                          </div>
                                          <div class="image-details">
                                             <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                Episode 4</h6>
                                             <small>45 mins</small>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
         <div class="joint-arrows">
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </div>
   </div>
</div>

<div class="movie-geners-block">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">movie geners</h5>
            <a href="{{ route('allgenre') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline geners-card">
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/01.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">action</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/02.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">adventure</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/03.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">animation</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/04.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">Crime</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/05.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">horror</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/06.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">mystery</a></h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="iq-card-geners card-hover-style-two">
                         <div class="block-images position-relative w-100">
                             <div class="img-box rounded position-relative">
                                 <img src="template/assets/images/genre/07.webp" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                 <div class="blog-description">
                                     <h6 class="mb-0 iq-title"><a href="" class="text-decoration-none text-capitalize line-count-2 p-2">romance</a></h6>
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
</div>

<div class="recommended-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">recommended for you</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <li class="swiper-slide">
                       <div class="iq-card card-hover">
                         <div class="block-images position-relative w-100">
                           <div class="img-box w-100">
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Giikre</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 12mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Arrival</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 22mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Pricess</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Soull Meate</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 30mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Dangacg</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 45mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">crcikeft</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">2hr : 25mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                             <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                             <img src="template/assets/images/movies/recommended/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                           </div>
                           <div class="card-description with-transition">
                             <div class="cart-content">
                               <div class="content-left">
                                 <h5 class="iq-title text-capitalize">
                                   <a href="{{ route('moviedetail') }}">Avengrs</a>
                                 </h5>
                                 <div class="movie-time d-flex align-items-center my-2">
                                   <span class="movie-time-text font-normal">1hr : 45mins</span>
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
                             <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fas fa-share-alt"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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
                               <li class="share position-relative d-flex align-items-center text-center mb-0">
                                 <span class="w-100 h-100 d-inline-block bg-transparent">
                                   <i class="fa-regular fa-heart"></i>
                                 </span>
                                 <div class="share-wrapper">
                                   <div class="share-boxs d-inline-block">
                                     <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                     </svg>
                                     <div class=" overflow-hidden">
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

<div class="top-pics-block">
   <div class="container-fluid">
      <section class="overflow-hidden">
         <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
            <h5 class="main-title text-capitalize mb-0">Top pics for you</h5>
            <a href="view-all-{{ route('movie') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 swiper-wrapper m-0  list-inline">
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Frzzen</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">2hr : 12mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">The Crew</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 22mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Cromeus</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 30mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Reodg</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 30mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">guiility</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 30mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">syyvcihonic</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 30mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
                  <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
        <img src="template/assets/images/movies/top-picks/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">tittanc</a>
            </h5>
            <div class="movie-time d-flex align-items-center my-2">
              <span class="movie-time-text font-normal">1hr : 30mins</span>
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
        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fas fa-share-alt"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <li class="share position-relative d-flex align-items-center text-center mb-0">
            <span class="w-100 h-100 d-inline-block bg-transparent">
              <i class="fa-regular fa-heart"></i>
            </span>
            <div class="share-wrapper">
              <div class="share-boxs d-inline-block">
                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                </svg>
                <div class=" overflow-hidden">
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
          <div class="offcanvas-header gap-3">
              <div class="d-flex align-items-center">
                  <h5 class="offcanvas-title text-dark" id="live-customizer-label">Live Customizer</h5>
              </div>
              <div class="d-flex gap-1 align-items-center">
                  <button class="btn btn-icon text-primary" data-reset="settings" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Reset All Settings"
                      data-bs-original-title="Reset All Settings">
                      <span class="btn-inner">
                          <i class="fa-solid fa-arrows-rotate"></i>
                      </span>
                  </button>
                  <button type="button" class="btn btn-icon btn-close px-0 text-reset shadow-none text-dark" data-bs-dismiss="offcanvas" aria-label="Close">
                  </button>
              </div>
          </div>
          <div class="offcanvas-body pt-0">
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
              <div class="modes mt-3">
                  <div class="color-customizer mb-3">
                      <h6 class="mb-0 title-customizer">Color Customizer</h6>
                  </div>
                  <div class="row row-cols-2 gx-2">
                      <div class="col mb-3">
                          <div data-setting="attribute" class="text-center w-100">
                              <input type="radio" value="dark" class="btn-check" name="theme_style_appearance"
                                  data-prop="data-bs-theme" id="theme-scheme-color-netflix" data-colors="{&quot;primary&quot;: &quot;#e50914&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#adafb8&quot;}" checked>
                              <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-netflix">
                                  Netflix
                              </label>
                          </div>
                      </div>
                      <div class="col mb-3">
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
     <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top" href="#top">
        <i class="fa-solid fa-chevron-up"></i>
     </a>
  </div>
  <!-- Wrapper End-->
  <!-- Library Bundle Script -->
  <script src="template/assets/js/core/libs.min.js"></script>
  <!-- Plugin Scripts -->


  <!-- SwiperSlider Script -->
  <script src="template/assets/vendor/swiperSlider/swiper.min.js"></script>




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
