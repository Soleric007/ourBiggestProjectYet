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



  <link href="template/assets/vendor/video/video-js.css" rel="stylesheet" />


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

<!-- Banner Start -->
<div class="iq-main-slider site-video">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="pt-0">
          <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
            class="video-js vjs-big-play-centered w-100" controls preload="auto" data-setup='{}'>
            <source src="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/sample-video.mp4" type="video/mp4" />
            <source src="https://templates.iqonic.design/streamit-dist/frontend/html/MY_VIDEO.webm" type="video/webm" />
          </video>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->

<div class="details-part">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <!-- Movie Description Start-->
        <div class="pt-0 pb-4 mt-4 trending-info">
          <div class="row">
            <div class="mb-auto col-md-9 col-12">
              <div class="d-block d-lg-flex align-items-center">
                <h2 class="my-0 trending-text fw-bold texture-text text-uppercase fadeInLeft animated d-inline-block"
                  data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                  Zombie Island
                </h2>
                <div class="slider-ratting d-flex align-items-center ms-lg-3 ms-0">
                  <ul class="p-0 m-0 ratting-start list-inline text-warning d-flex align-items-center justify-content-left">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                  </ul>
                  <span class="text-white ms-2">4.8 (imdb)</span>
                </div>
              </div>
              <ul class="flex-wrap p-0 mt-2 list-inline d-flex movie-tag">
                <li class="trending-list"><a class="text-primary" href="view-all-{{ route('movie') }}">Action</a></li>
                <li class="trending-list"><a class="text-primary" href="view-all-{{ route('movie') }}">Adventure</a></li>
                <li class="trending-list"><a class="text-primary" href="view-all-{{ route('movie') }}">Drama</a></li>
              </ul>
              <div class="flex-wrap mb-4 text-white d-flex align-items-center text-detail">
                <span class="badge bg-secondary">Horror</span>
                <span class="ms-3 font-Weight-500 genres-info me-1">1hr : 48mins</span>
                <span class="trending-year trending-year-list font-Weight-500 genres-info">
                  Feb 2017
                </span>
              </div>
              <div class="flex-wrap gap-4 mb-4 d-flex align-items-center">
                <ul class="p-0 list-inline share-icons music-play-lists mb-n2 mx-n2">
                  <li class="share">
                    <span><i class="fa-solid fa-share-nodes"></i></span>
                    <div class="share-box">
                      <svg width="15" height="40" viewBox="0 0 15 40" class="share-shape" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z"
                          fill="#191919"></path>
                      </svg>
                      <div class="d-flex align-items-center">
                        <a href="#" class="share-ico"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="share-ico"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="share-ico"><i class="fa-solid fa-link"></i></a>
                      </div>
                    </div>
                  </li>
                  <li><span><i class="fa-solid fa-heart"></i></span></li>
                  <li><span><i class="fa-solid fa-plus"></i></span></li>
                  <li><span><a href="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/video/trailer.mp4" download><i
                          class="fa-solid fa-download"></i></a></span></li>
                </ul>
                <div class="movie-detail-select">
                  <select name="movieselect" class="form-control movie-select select2-basic-single js-states">
                    <option value="1">Playlist</option>
                    <option value="2">Zombie Island</option>
                    <option value="3">Sand Dust</option>
                    <option value="4">Jumbo Queen</option>
                  </select>
                </div>
              </div>
              <ul class="flex-wrap gap-3 p-0 iq-blogtag list-unstyled d-flex align-items-center">
                <li class="mb-0 iq-tag-title text-primary">
                  <i class="fa fa-tags" aria-hidden="true"></i>
                  Tags:
                </li>
                <li><a class="title" href="view-all-{{ route('movie') }}">Action</a><span class="text-secondary">,</span></li>
                <li><a class="title" href="view-all-{{ route('movie') }}">Adventure</a><span class="text-secondary">,</span></li>
                <li><a class="title" href="view-all-{{ route('movie') }}">Drama</a><span class="text-secondary">,</span></li>
              </ul>
            </div>
            <div class="mt-4 mb-1 trailor-video col-md-3 col-12 mt-lg-0 mb-md-0 text-lg-right">
              <a data-fslightbox="html5-video" href="https://www.youtube.com/watch?v=QCGq1epI9pQ"
                class="video-open playbtn block-images position-relative playbtn_thumbnail">
                <img src="template/assets/images/genre/01.webp" class="attachment-medium-large size-medium-large wp-post-image"
                  alt="" loading="lazy" />
                <span class="content btn btn-transparant iq-button">
                  <i class="text-white fa fa-play me-2"></i>
                  <span>Trailer Link</span>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- Movie Description End -->        <!-- Movie Source Start -->
        <div class="content-details trending-info">
          <ul
            class="mb-5 text-center iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center justify-content-center list-inline"
            role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="pill"
                href="#description-01" role="tab" aria-selected="true">
                Description
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#review-01" role="tab"
                aria-selected="false">
                Rate &amp; Review
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#source-01" role="tab"
                aria-selected="false">
                Sources
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="description-01" class="tab-pane animated fadeInUp active show"
              role="tabpanel">
              <div class="description-content">
                <p>
                  Zombie Island is a 1998 direct-to-video animated comedy horror film
                  based on Hanna-Barbera's Scooby-Doo Saturday-morning cartoons. In the
                  film, Shaggy, Scooby, Fred, Velma, and Daphne reunite after a
                  year-long hiatus from Mystery, Inc. to investigate a bayou island said
                  to be haunted by the ghost of the pirate Morgan Moonscar. The film was
                  directed by Jim Stenstrum, from a screenplay by Glenn Leopold.
                </p>
              </div>
            </div>
            <div id="review-01" class="tab-pane animated fadeInUp" role="tabpanel">
              <div class="streamit-reviews">
                <div id="comments" class="comments-area validate-form">
                  <p class="mt-3 masvideos-noreviews">
                    There are no reviews yet.
                  </p>
                </div>
                <div class="review_form">
                  <div class="comment-respond">
                    <h3 class="my-2 fw-500">
                      Be the first to review “Zombie Island”
                    </h3>
                    <p class="comment-notes"><span>Your email address will not be
                        published.</span><span> Required fields are marked<span
                          class="required"> * </span></span></p>
                    <div class="mb-4 d-flex align-items-center"><label>Your
                        rating</label><div class="star ms-4 text-primary"><span><i
                            class="fa-regular fa-star"></i></span> <span><i
                            class="fa-regular fa-star"></i></span> <span><i
                            class="fa-regular fa-star"></i></span> <span><i
                            class="fa-regular fa-star"></i></span> <span><i
                            class="fa-regular fa-star"></i></span></div></div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mb-2">
                            Your review
                            <span class="required">
                              *
                            </span>
                          </label>
                          <textarea class="form-control" name="comment" cols="5"
                            rows="8" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mb-2">
                            Name
                            <span class="required">
                              *
                            </span>
                          </label>
                          <input class="form-control" name="author" type="text" value
                            size="30" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mb-2">
                            Email&nbsp;
                            <span class="required">
                              *
                            </span>
                          </label>
                          <input class="form-control" name="email" type="email" value
                            size="30" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="gap-2 mt-3 d-flex align-items-center">
                          <input class="mt-0 form-check-input" type="checkbox" value
                            id="check1" checked />
                          <label class="form-check-label" for="check1">
                            Save my name, email, and website in this browser for the
                            next time I comment.
                          </label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mt-4 form-submit">
                          <div class="iq-button">
                            <button name="submit" type="submit" id="submit"
                              class="btn text-uppercase position-relative"
                              value="Submit">
                              <span class="button-text">Submit</span>
                              <i class="fa-solid fa-play"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="source-01" class="tab-pane animated fadeInUp" role="tabpanel">
              <div class="source-list-content table-responsive">
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th>
                        Links
                      </th>
                      <th>
                        Quality
                      </th>
                      <th>
                        Language
                      </th>
                      <th>
                        Player
                      </th>
                      <th>
                        Date Added
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="{{ route('moviedetail') }}"
                            class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>
                          </a>
                        </div>
                      </td>
                      <td>
                        1080p
                      </td>
                      <td>
                        english
                      </td>
                      <td>
                        MusicBee
                      </td>
                      <td>
                        2021-11-28
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="{{ route('moviedetail') }}"
                            class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>
                          </a>
                        </div>
                      </td>
                      <td>
                        800p
                      </td>
                      <td>
                        english
                      </td>
                      <td>
                        5KPlayer
                      </td>
                      <td>
                        2021-11-25
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="{{ route('moviedetail') }}"
                            class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>
                          </a>
                        </div>
                      </td>
                      <td>
                        720p
                      </td>
                      <td>
                        English
                      </td>
                      <td>
                        MediaMonkey
                      </td>
                      <td>
                        2021-11-20
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Movie Source End -->      </div>
    </div>
  </div>
</div>

<div class="cast-tabs">
  <div class="container-fluid">
    <div class="content-details trending-info g-border iq-rtl-direction">
      <ul class="mb-5 iq-custom-tab tab-bg-fill d-flex nav nav-pills " role="tablist">
        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="pill" href="#cast-1" role="tab" aria-selected="true">Cast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#crew-1" role="tab" aria-selected="false">Crew</a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="cast-1" class="tab-pane animated fadeInUp active show" role="tabpanel">
          <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="list-inline swiper-wrapper">
              <li class="swiper-slide">
                <div class="m-0 cast-images row align-items-center position-relative">
                  <div class="p-0 col-4 img-box">
                    <img src="template/assets/images/genre/g1.webp" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description">
                    <h6 class="iq-title">
                      <a href="{{ route('persondetail') }}" tabindex="0">James Chinlund </a>
                    </h6>
                    <div class="my-2 video-time d-flex align-items-center">
                      <small class="text-white">As James</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="m-0 cast-images row align-items-center position-relative">
                  <div class="p-0 col-4 img-box">
                    <img src="template/assets/images/genre/g2.webp" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description">
                    <h6 class="iq-title">
                      <a href="{{ route('persondetail') }}" tabindex="0">James Earl Jones </a>
                    </h6>
                    <div class="my-2 video-time d-flex align-items-center">
                      <small class="text-white">As Jones</small>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div id="crew-1" class="tab-pane animated fadeInUp" role="tabpanel">
          <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="list-inline swiper-wrapper">
              <li class="swiper-slide">
                <div class="m-0 cast-images row align-items-center position-relative">
                  <div class="p-0 col-4 img-box">
                    <img src="template/assets/images/genre/g3.webp" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="{{ route('persondetail') }}" tabindex="0"> Jeff Nathanson </a>
                    </h6>
                    <div class="my-2 video-time d-flex align-items-center">
                      <small class="text-white">Writing</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="m-0 cast-images row align-items-center position-relative">
                  <div class="p-0 col-4 img-box">
                    <img src="template/assets/images/genre/g5.webp" class="person__poster--image img-fluid" alt="image"
                      loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="{{ route('persondetail') }}" tabindex="0"> Irene Mecchi </a>
                    </h6>
                    <div class="my-2 video-time d-flex align-items-center">
                      <small class="text-white">Writing</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="m-0 cast-images row align-items-center position-relative">
                  <div class="p-0 col-4 img-box">
                    <img src="template/assets/images/genre/g4.webp" class="person__poster--image img-fluid" alt="image"
                      loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="{{ route('persondetail') }}" tabindex="0"> Karen Gilchrist </a>
                    </h6>
                    <div class="my-2 video-time d-flex align-items-center">
                      <small class="text-white">Production</small>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 pt-2 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Movies Recommended For You</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
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

<section class="related-movie-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 pt-2 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Related Movies</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">giikre</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">YoShi</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">We Gare</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Avengers</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Chosfies</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Tf Oaler</a>
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
            <li class="swiper-slide">   <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
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

<section class="video-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 pt-2 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Related Videos</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">giikre</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">YoShi</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">We
              Gare</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Avengers</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Chosfies</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
      </div>
      <div class="card-description with-transition">
        <div class="cart-content">
          <div class="content-left">
            <h5 class="iq-title text-capitalize">
              <a href="{{ route('moviedetail') }}">Tf
              Oaler</a>
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
            <li class="swiper-slide">  <div class="iq-card card-hover">
    <div class="block-images position-relative w-100">
      <div class="img-box w-100">
        <a href="{{ route('moviedetail') }}" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
        <img src="template/assets/images/movies/related/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
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

<!-- Upcoming Start -->
<section class="upcomimg-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="px-3 pt-2 my-4 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 main-title text-capitalize">Upcoming</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
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
                            <span class="font-normal movie-time-text">1hr
                            : 22mins</span>
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
                            <span class="font-normal movie-time-text">2hr
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
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Upcoming End -->

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

  <script src="template/assets/vendor/video/video.min.js"></script>
  <script src="template/assets/vendor/videojs-youtube-master/youtube.js"></script>

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
