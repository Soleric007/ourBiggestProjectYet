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

    <!-- End Header Section -->   <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->

<section class="section-padding-bottom">
    <div class="profile-box">
        <div class="container-fluid">
            <div class="flex-wrap gap-2 d-flex align-items-center justify-content-between">
                <div class="gap-3 d-flex align-items-center">
                    <div class="account-logo d-flex align-items-center position-relative">
                        <img src="template/assets/images/pages/profile.webp" class="object-cover img-fluid rounded-3" alt="profile">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </div>
                    <div>
                        <h6 class="text-white font-size-18 text-capitalize fw-500">admin</h6>
                        <span class="text-white font-size-14 fw-500">admin@admin.com</span>
                    </div>
                </div>
                <div class="iq-button">
                    <a href="pricing-plan.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Subscription</span>
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <div class="container-fluid">
            <div class="content-details iq-custom-tab-style-two">
                <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#watchlist" role="tab" aria-selected="false">Watchlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false">Favorites</a>
                    </li>
                </ul>
                <div class="px-0 tab-content">
                    <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="my-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 main-title text-capitalize">My playlist</h5>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 5</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">2 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 6</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 7</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">50 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Playlist</span>
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="watchlist" class="tab-pane animated fadeInUp" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="my-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 main-title text-capitalize">My watchlist</h5>
                            </div>
                           <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Watchlist</span>
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="favorites" class="tab-pane animated fadeInUp" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="my-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 main-title text-capitalize">My favourite</h5>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/01.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/02.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/03.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/04.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/05.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 5</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">2 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/06.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 6</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 col">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="top-0 bottom-0 position-absolute start-0 end-0"></a>
                                                <img src="template/assets/images/movies/playlist/07.webp" alt="movie-card" class="object-cover border-0 img-fluid w-100 d-block">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 7</a> </h5>
                                                <div class="gap-3 d-flex align-items-center">
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="gap-1 d-flex align-items-center font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">50 Views</span>
                                                    </div>

                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Playlist</span>
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
</section>

<div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="border-0 modal-content">
      <div class="border-0 modal-header">
        <div>
            <h1 class="modal-title text-capitalize fs-5 fw-500">Create new Playlist</h1>
            <p class="mb-0">Please fill in all information below to create new playlist.</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label class="mb-2 text-white fw-500">Name *</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="mb-2 text-white fw-500">Description</label>
                <textarea class="form-control" cols="5"></textarea>
            </div>
            <div class="form-group">
                <label class="mb-2 text-white fw-500">Privacy</label>
                <select class="form-control">
                    <option>Public</option>
                    <option>Private</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-white fw-500">Playlist Thumbnail</label>
                <small class="my-2 d-block">Support *.webp, *webp, *.gif, *.webp. Maximun upload file size: 5mb.</small>
                <input type="file" class="form-control">
            </div>
            <div class="gap-3 form-group d-flex align-items-center">
                <button class="btn btn-sm btn-light text-uppercase fw-medium">cancel</button>
                <button class="btn btn-sm btn-primary text-uppercase fw-medium">save</button>
            </div>
        </form>
      </div>
    </div>
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
