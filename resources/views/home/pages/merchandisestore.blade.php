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


  <!-- Sweetlaert2 css -->
  <link rel="stylesheet" href="template/assets/vendor/sweetalert2/sweetalert2.min.css"/>



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

<body class="">
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

    <!-- End Header Section -->

      <!-- ==================
      Cart Sidebar
      ========================= -->
      <div class="border-0 offcanvas offcanvas-end sidebar-cart" tabindex="-1" id="offcanvasCart">
          <div class="py-4 offcanvas-header">
              <h5 class="offcanvas-title">Shopping Cart (3)</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="py-5 offcanvas-body">
              <div class="sidebar-cart-content d-flex flex-column justify-content-between">
                  <div class="cart-items-container">
                      <ul class="m-0 cart-items-list list-inline">
                          <li class="pb-4 mb-4 cart-item border-bottom">
                              <div class="gap-3 cart-item-block d-flex">
                                  <div class="flex-shrink-0 image">
                                      <img src="template/assets/images/shop/product/02.webp" width="90" alt="product-image"
                                          class="object-cover img-fluid">
                                  </div>
                                  <div class="cart-block-content position-relative flex-grow-1 pe-5">
                                      <h6 class="mb-36 text-capitalize">Believe Mask</h6>
                                      <span class="text-primary small">$13.00</span>
                                      <div class="mt-3">
                                          <div class="border border-white btn-group iq-qty-btn rounded-0" data-qty="btn"
                                              role="group">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-minus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3"
                                                      fill="none">
                                                      <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                              <input type="text" class="border-0 btn btn-sm btn-outline-light input-display"
                                                  data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2"
                                                  value="2" title="Qty">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-plus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8"
                                                      fill="none">
                                                      <path
                                                          d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="top-0 position-absolute end-0">
                                          <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="pb-4 mb-4 cart-item border-bottom">
                              <div class="gap-3 cart-item-block d-flex">
                                  <div class="flex-shrink-0 image">
                                      <img src="template/assets/images/shop/product/04.webp" width="90" alt="product-image"
                                          class="object-cover img-fluid">
                                  </div>
                                  <div class="cart-block-content position-relative flex-grow-1 pe-5">
                                      <h6 class="mb-36 text-capitalize">Black Cap</h6>
                                      <span class="text-primary small">$18.00</span>
                                      <div class="mt-3">
                                          <div class="border border-white btn-group iq-qty-btn rounded-0" data-qty="btn"
                                              role="group">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-minus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3"
                                                      fill="none">
                                                      <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                              <input type="text" class="border-0 btn btn-sm btn-outline-light input-display"
                                                  data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2"
                                                  value="2" title="Qty">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-plus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8"
                                                      fill="none">
                                                      <path
                                                          d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="top-0 position-absolute end-0">
                                          <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="cart-item">
                              <div class="gap-3 cart-item-block d-flex">
                                  <div class="flex-shrink-0 image">
                                      <img src="template/assets/images/shop/product/05.webp" width="90" alt="product-image"
                                          class="object-cover img-fluid">
                                  </div>
                                  <div class="cart-block-content position-relative flex-grow-1 pe-5">
                                      <h6 class="mb-36 text-capitalize">Boxing Gloves</h6>
                                      <span class="text-primary small">$18.00</span>
                                      <div class="mt-3">
                                          <div class="border border-white btn-group iq-qty-btn rounded-0" data-qty="btn"
                                              role="group">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-minus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3"
                                                      fill="none">
                                                      <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                              <input type="text" class="border-0 btn btn-sm btn-outline-light input-display"
                                                  data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2"
                                                  value="2" title="Qty">
                                              <button type="button"
                                                  class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-plus">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8"
                                                      fill="none">
                                                      <path
                                                          d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="top-0 position-absolute end-0">
                                          <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="pt-5 mt-5 cart-progress-container border-top">
                      <div class="flex-wrap gap-3 d-flex align-items-center justify-content-between">
                          <h5 class="m-0 fw-bold">Subtotal</h5>
                          <h5 class="m-0 fw-bold">$49.00</h5>
                      </div>
                      <div class="gap-3 mt-4 d-grid">
                          <a href="shop/checkout.html" class="text-white btn bg-primary text-uppercase fw-medium w-100">
                              <span class="button-text small">checkout</span>
                          </a>

                          <a href="shop/cart.html" class="btn bg-light text-uppercase fw-medium w-100 text-dark">
                              <span class="button-text small">view cart</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>      <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->

<div class="position-relative swiper swiper-slide-space-0" data-swiper="home-banner-slider">
   <div class="p-0 m-0 slider swiper-wrapper home-slider">
      <a class="swiper-slide slide" href="shop/product-detail.html">
         <img src="template/assets/images/shop/slider-01.webp" class="img-fluid" alt="slider-img" />
      </a>
      <a class="swiper-slide slide" href="shop/product-detail.html">
         <img src="template/assets/images/shop/slider-02.webp" class="img-fluid" alt="slider-img" />
      </a>
      <a class="swiper-slide slide" href="shop/product-detail.html">
         <img src="template/assets/images/shop/slider-03.webp" class="img-fluid" alt="slider-img" />
      </a>
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
</div>

<section class="category-slider-block">
   <div class="container-fluid">
      <div class="text-center">
         <h4 class="my-4 mt-md-3 mt-sm-3">Best Selling Categories</h4>
      </div>
      <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2"
         data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
         <ul class="p-0 m-0 list-inline swiper-wrapper">
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/01.webp"
                       class="img-fluid"
                       alt="catImg-01"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">

                              Activeman
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/02.webp"
                       class="img-fluid"
                       alt="catImg-02"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                          Avengers
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/03.webp"
                       class="img-fluid"
                       alt="catImg-03"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Disney
                              World
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/04.webp"
                       class="img-fluid"
                       alt="catImg-04"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Fantasia
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/05.webp"
                       class="img-fluid"
                       alt="catImg-05"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Galaxy
                              Heaven
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/06.webp"
                       class="img-fluid"
                       alt="catImg-06"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Ghost
                              Spider
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/07.webp"
                       class="img-fluid"
                       alt="catImg-07"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Harry
                              David
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/08.webp"
                       class="img-fluid"
                       alt="catImg-08"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Haunted
                              Halloween
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/09.webp"
                       class="img-fluid"
                       alt="catImg-09"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Studios
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/11.webp"
                       class="img-fluid"
                       alt="catImg-10"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Monster-House
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="https://templates.iqonic.design/streamit-dist/frontend/html/template/assets/images/shop/categories/12.webp"
                       class="img-fluid"
                       alt="catImg-11"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         Quid Game
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/14.webp"
                       class="img-fluid"
                       alt="catImg-12"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         The
                              Madrid
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
            <li class="swiper-slide slide-item">
               <div class="category-inner position-relative">
                 <div class="category_image">
                   <a href="shop/shop.html">
                     <img
                       src="template/assets/images/shop/categories/15.webp"
                       class="img-fluid"
                       alt="catImg-13"
                     />
                   </a>
                   <div class="category-details">
                     <h5 class="category-title">
                       <a href="https://templates.iqonic.design/streamit-dist/frontend/html/shop-category.html">
                         The-Champion
                       </a>
                     </h5>
                   </div>
                 </div>
               </div>            </li>
         </ul>
         <div class="swiper-button swiper-button-next"></div>
         <div class="swiper-button swiper-button-prev"></div>
      </div>
   </div>
</section>

<section>
   <div class="container-fluid p-xl-0">
      <div class="row gx-lg-0">
         <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="product-box left-1-productbox ">
               <a href="shop/shop.html" class="card-link"></a>
               <div class="card-img-overlay product-card-img-overlay"
                  style="background-image: url(template/assets/images/shop/card/01.webp);">
               </div>
               <div class="card-body w-100">
                  <h5 class="card-title">Ghost Spider </h5>
                  <h4 class="parent-heading">Monster-House</h4>
                  <div class="iq-button link-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-capitalize position-relative">
                          <span class="button-text">Shop
                                    Now</span>
                      </a>
                  </div>
               </div>
            </div>
            <div class="product-box left-2-productbox">
               <a href="shop/shop.html" class="card-link"></a>
               <div class="mt-4 card-img-overlay product-card-img-overlay mt-lg-0 mt-md-4"
                  style="background-image: url(template/assets/images/shop/card/02.webp);">
               </div>
               <div class="card-body w-100">
                  <h5 class="card-title">Harry David </h5>
                  <h4 class="parent-heading">Warner Bros Films</h4>
                  <div class="iq-button link-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-capitalize position-relative">
                          <span class="button-text">Shop Now</span>
                      </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4 col-lg-4 col-md-6 mt-md-0">
            <div class="center-productbox product-box">
               <a href="shop/shop.html" class="card-link"></a>
               <div class="card-img-overlay product-card-img-overlay"
                  style="background-image: url(template/assets/images/shop/card/03.webp);">
               </div>
               <div class="card-body w-100">
                  <h5 class="card-title">Avengers </h5>
                  <h4 class="parent-heading">Marvel Studios</h4>
                  <div class="iq-button link-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-capitalize position-relative">
                          <span class="button-text">Shop
                                    Now</span>
                      </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4 col-lg-4 col-md-12 d-flex flex-column mt-lg-0 mt-md-4">
            <div class="product-box right-1-productbox">
               <a href="shop/shop.html" class="card-link"></a>
               <div class="card-img-overlay product-card-img-overlay md-mt-5"
                  style="background-image: url(template/assets/images/shop/card/04.webp);">
               </div>
               <div class="card-body w-100">
                  <h5 class="card-title">Harry David </h5>
                  <h4 class="parent-heading">Warner Bros Films</h4>
                  <div class="iq-button link-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-capitalize position-relative">
                          <span class="button-text">Shop
                                    Now</span>
                      </a>
                  </div>
               </div>
            </div>
            <div class="product-box right-2-productbox">
               <a href="shop/shop.html" class="card-link"></a>
               <div class="mt-4 card-img-overlay product-card-img-overlay mt-lg-0 mt-md-4"
                  style="background-image: url(template/assets/images/shop/card/05.webp);">
               </div>
               <div class="card-body w-100">
                  <h5 class="card-title">Fantasia </h5>
                  <h4 class="parent-heading">Disney World</h4>
                  <div class="iq-button link-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-capitalize position-relative">
                          <span class="button-text">Shop
                                    Now</span>
                      </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="newest-product-block section-padding-top">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">Newest Products</h5>
            <a href="shop/view-all-product.html" class="flex-none text-primary iq-view-all text-decoration-none">Want
               More?</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 m-0 swiper-wrapper list-inline">
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         Sale!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/01.webp" class="img-fluid w-100" alt="productImg-01"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Bag Pack</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del>$28.00</del>$25.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star-half text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/02.webp" class="img-fluid w-100" alt="productImg-02"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Believe Mask</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$13.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         Sale!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/03.webp" class="img-fluid w-100" alt="productImg-03"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Black Bow</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$18.00 – $45.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         New!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/04.webp" class="img-fluid w-100" alt="productImg-04"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Black Cap</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del>$20.00</del>$18.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/05.webp" class="img-fluid w-100" alt="productImg-05"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Boxing Gloves</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$17.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/06.webp" class="img-fluid w-100" alt="productImg-06"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Carry Bag</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$18.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
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

<section class="section-padding-bottom">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6">
            <div class="categorie-about-left">
               <div class="categorie-about-image">
                  <img src="template/assets/images/shop/card/capton-america.webp" class="img-fluid" alt="shop">
               </div>
               <div class="pt-3 mb-4 text-left ">
                  <h4 class="mb-2 line-count-1">Captain America</h4>
                  <p class="mt-2 mb-4 line-count-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                     industry.</p>
                  <div class="iq-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-uppercase position-relative">
                          <span class="button-text">view
                                    collection</span>
                          <i class="fa-solid fa-play"></i>
                      </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="categorie-about-right">
               <div class="categorie-about-image">
                  <img src="template/assets/images/shop/card/deadpool.webp" class="img-fluid" alt="shop">
               </div>
               <div class="pt-3 mb-4 text-left ">
                  <h4 class="mb-2 line-count-1">Dead Pool</h4>
                  <p class="mt-2 mb-4 line-count-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                     industry.</p>
                  <div class="iq-button">
                      <a href="https://templates.iqonic.design/streamit-dist/frontend/html/%7B%7Bpath%7D%7Dshop/shop.html" class="btn text-uppercase position-relative">
                          <span class="button-text">view
                                    collection</span>
                          <i class="fa-solid fa-play"></i>
                      </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section-padding"
   style="background:url(template/assets/images/shop/card/bg-img.webp); background-position: center center; background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 ">
            <img src="template/assets/images/shop/card/multipal.webp" class="img-fluid" alt="">
         </div>
         <div class="mt-4 col-lg-6 col-md-12 mt-md-0">
            <!--Logo -->
            <div class="logo-default">
                <a class="navbar-brand text-primary" href="././index.html">
                    <img class="img-fluid logo" src="template/assets/images/logo.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <div class="logo-hotstar">
                <a class="navbar-brand text-primary" href="././index.html">
                    <img class="img-fluid logo" src="template/assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <div class="logo-prime">
                <a class="navbar-brand text-primary" href="././index.html">
                    <img class="img-fluid logo" src="template/assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <div class="logo-hulu">
                <a class="navbar-brand text-primary" href="././index.html">
                    <img class="img-fluid logo" src="template/assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <h2 class="mt-3 mb-3"> Wear Streamit, Buy Streamit and Love Streamit </h2>
            <p class="mb-4 line-count-3">Buy exclusive streamit products from our store and get amazing benefits.</p>
            <div class="iq-button">
                <a href="shop/product-detail.html" class="btn text-uppercase position-relative">
                    <span class="button-text">shop now</span>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="best-product-block section-padding-top">
   <div class="container-fluid">
      <div class="overflow-hidden">
         <div class="px-3 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">Best Sellers</h5>
            <a href="shop/view-all-product.html" class="flex-none text-primary iq-view-all text-decoration-none">Want
               More?</a>
         </div>
         <div class="card-style-slider">
            <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3"
               data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
               data-pagination="true">
               <ul class="p-0 m-0 swiper-wrapper list-inline">
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         Sale!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/01.webp" class="img-fluid w-100" alt="productImg-01"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Bag Pack</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del>$28.00</del>$25.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star-half text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/02.webp" class="img-fluid w-100" alt="productImg-02"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Believe Mask</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$13.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         Sale!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/03.webp" class="img-fluid w-100" alt="productImg-03"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Black Bow</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$18.00 – $45.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <span class="onsale bg-primary">
                         New!
                       </span>
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/04.webp" class="img-fluid w-100" alt="productImg-04"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Black Cap</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del>$20.00</del>$18.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/05.webp" class="img-fluid w-100" alt="productImg-05"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Boxing Gloves</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$17.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                           </div>
                         </div>
                       </div>
                     </div>
                  </li>
                  <li class="swiper-slide">
                     <div class="product-block">
                       <div class="image-wrap">
                         <a href="shop/product-detail.html">
                           <div class="product-image">
                             <img src="template/assets/images/shop/product/06.webp" class="img-fluid w-100" alt="productImg-06"
                               loading="lazy" />
                           </div>
                         </a>
                         <div class="buttons-holder">
                           <ul class="p-0 m-0 list-unstyled">
                             <li>
                                   <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                     <i class="fa-solid fa-eye"></i>
                                   </a>
                             </li>
                             <li>
                               <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                             </li>
                             <li>
                               <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                 <i class="fa-solid fa-basket-shopping"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                       <div class="product-caption">
                         <h5 class="product__title">
                           <a href="shop/product-detail.html" class="title-link">
                             Carry Bag</a>
                         </h5>
                         <div class="price-detail">
                           <div class="price">
                             <del></del>$18.00
                           </div>
                         </div>
                         <div class="container-rating">
                           <div class="star-rating text-primary">
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
                                           <span>
                                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                           </span>
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

<div class="product_container">
   <div class="row gx-0">
      <div class="col-lg-6 shop-contact-one">
         <a href="javascript:void(0);">
            <div class="channel-logo border-gredient-left">
               <h5>Our Multiple Locations</h5>
            </div>
         </a>
         <div class="my-4 row">
            <div class="col-lg-6 col-md-12">
               <h5 class="mb-3">Australia:</h5>
               <p>24 Isaac Road. Ellendale, Tasmania 7140</p>
            </div>
            <div class="col-lg-6 col-md-12">
               <h5 class="mb-3">Australia: </h5>
               <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
            </div>
         </div>
         <div class="gap-3 d-flex align-items-center">
            <h5 class="m-0">Working Hours: </h5>
            <i class="text-primary shop_store_time"> Mon – Fri : 09:00 AM to 06:00 PM</i>
         </div>
      </div>
      <div class="shop-contact col-lg-6 col-md-12">
         <img class="img-fluid h-100 w-100" src="template/assets/images/shop/card/location.webp" alt="">
      </div>
   </div>
</div>
<div class="modal fade" id="woosq-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered positon-relative">
      <div class="border-0 modal-content rounded-0">
         <div class="p-0 modal-body">
            <button type="button" class="btn-close position-absolute end-0" data-bs-dismiss="modal"
               aria-label="Close"></button>
            <div class="row align-items-center">
               <div class="col-md-6">
                  <img src="template/assets/images/shop/product/01.webp" class="object-cover" alt="shop-img">
               </div>
               <div class="col-md-6">
                  <div class="entry-summary p-md-4">
                     <h3>Bag Pack</h3>
                     <div class="review">
                                   <span>
                                     <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                   </span>
                                   <span>
                                     <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                   </span>
                                   <span>
                                     <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                   </span>
                                   <span>
                                     <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                   </span>
                                   <span>
                                     <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                   </span>
                     </div>
                     <h4 class="mt-3 text-white price"><del class="text-body fw-normal me-1">$48.00</del>$28.00 </h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                     </p>
                     <ul class="flex-wrap gap-3 p-0 pt-0 pb-5 m-0 list-inline d-flex align-items-center pt-md-4">
                        <li>
                           <div class="border border-white btn-group iq-qty-btn rounded-0" data-qty="btn" role="group">
                                        <button type="button" class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-minus">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                            <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                            </svg>
                                        </button>
                                        <input type="text" class="border-0 btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty">
                                        <button type="button" class="text-white border-0 btn btn-sm btn-outline-light iq-quantity-plus">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                            <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                        </li>
                        <li>
                           <div class="iq-button">
                            <a href="#" class="btn btn-sm text-uppercase position-relative cart-btn">
                                <span class="button-text">add to cart</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                            </div>
                        </li>
                     </ul>
                     <div class="gap-2 d-flex align-items-center">
                        <span class="text-white fw-semibold">SKU :</span>
                        <span>Bag Pack</span>
                     </div>
                     <div class="gap-2 d-flex align-items-center">
                        <span class="text-white fw-semibold">Category :</span>
                        <span class="text-primary">Uptight Birds</span>
                     </div>
                     <div class="gap-2 d-flex align-items-center">
                        <span class="text-white fw-semibold">Tags :</span>
                        <span class="text-primary">Costume,</span>
                        <span class="text-primary">Lighting</span>
                     </div>
                  </div>
               </div>
            </div>
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

  <!-- Sweet-alert Script -->
  <script src="template/assets/vendor/sweetalert2/sweetalert2.min.js" async></script>
  <script src="template/assets/js/plugins/sweet-alert.js" defer></script>

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
