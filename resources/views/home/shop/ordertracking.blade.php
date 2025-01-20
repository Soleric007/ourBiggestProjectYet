<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StreamIT | Responsive Bootstrap 5 Template</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../template/assets/images/favicon.ico" />

  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="../template/assets/css/core/libs.min.css" />

  <!-- font-awesome css -->
  <link rel="stylesheet" href="../template/assets/vendor/font-awesome/css/all.min.css" />

  <!-- Iconly css -->
  <link rel="stylesheet" href="../template/assets/vendor/iconly/css/style.css" />

  <!-- Animate css -->
  <link rel="stylesheet" href="../template/assets/vendor/animate.min.css" />






  <!-- Streamit Design System Css -->
  <link rel="stylesheet" href="../template/assets/css/streamit.min%EF%B9%96v=5.2.1.css" />

  <!-- Custom Css -->
  <link rel="stylesheet" href="../template/assets/css/custom.min%EF%B9%96v=5.2.1.css" />

  <!-- Rtl Css -->
  <link rel="stylesheet" href="../template/assets/css/rtl.min%EF%B9%96v=5.2.1.css" />

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
        <img src="../template/assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
      </div>
  </div>
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content">
      <!--Nav Start-->
      <header class="header-center-home header-default header-sticky">
         <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
            <div class="container-fluid navbar-inner">
               <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                  <div class="gap-3 d-flex gap-xl-0 align-items-center">
                     <div>
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main"
                           aria-controls="navbar_main"
                           class="p-1 pt-0 d-xl-none btn btn-primary rounded-pill toggle-rounded-btn">
                           <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                              <path fill="currentColor"
                                 d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                           </svg>
                        </button>
                     </div>
                     <!--Logo -->
                     <div class="logo-default">
                         <a class="navbar-brand text-primary" href="{{ route('index') }}">
                             <img class="img-fluid logo" src="../template/assets/images/logo.webp" loading="lazy" alt="streamit" />
                         </a>
                     </div>
                     <div class="logo-hotstar">
                         <a class="navbar-brand text-primary" href="{{ route('index') }}">
                             <img class="img-fluid logo" src="../template/assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                         </a>
                     </div>
                     <div class="logo-prime">
                         <a class="navbar-brand text-primary" href="{{ route('index') }}">
                             <img class="img-fluid logo" src="../template/assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                         </a>
                     </div>
                     <div class="logo-hulu">
                         <a class="navbar-brand text-primary" href="{{ route('index') }}">
                             <img class="img-fluid logo" src="../template/assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
                         </a>
                     </div>

                  </div>
                  <!-- Horizontal Menu Start -->
                  <nav id="navbar_main" class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0">
                    <div class="container-fluid p-lg-0">
                      <div class="px-0 offcanvas-header">
                        <div class="navbar-brand ms-3">
                          <!--Logo -->
                          <div class="logo-default">
                              <a class="navbar-brand text-primary" href="{{ route('index') }}">
                                  <img class="img-fluid logo" src="../template/assets/images/logo.webp" loading="lazy" alt="streamit" />
                              </a>
                          </div>
                          <div class="logo-hotstar">
                              <a class="navbar-brand text-primary" href="{{ route('index') }}">
                                  <img class="img-fluid logo" src="../template/assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                              </a>
                          </div>
                          <div class="logo-prime">
                              <a class="navbar-brand text-primary" href="{{ route('index') }}">
                                  <img class="img-fluid logo" src="../template/assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                              </a>
                          </div>
                          <div class="logo-hulu">
                              <a class="navbar-brand text-primary" href="{{ route('index') }}">
                                  <img class="img-fluid logo" src="../template/assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
                              </a>
                          </div>
                        </div>
                        <button type="button" class="px-3 btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="collapse" href="#homePages" role="button" aria-expanded="false" aria-controls="homePages">
                            <span class="item-name">Home</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          <ul class="sub-nav collapse list-unstyled" id="homePages">
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('index') }}"> OTT Home </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('home') }}"> Home </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('movie') }}"> Movie </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('tvshow') }}"> TV Show </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('video') }}"> Video </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('merchandisestore') }}"> Merchandise Store </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="collapse" href="#features" role="button" aria-expanded="false" aria-controls="homePages">
                            <span class="item-name">Features</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          <ul class="sub-nav collapse list-unstyled" id="features">
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('restrictedcontent') }}"> Restricted Content </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('relatedmerchandise') }}"> Related Merchandise </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('playlist') }}"> Playlist </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('genre') }}"> Genres </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('cast') }}"> Cast </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('tags') }}"> Tags </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false" aria-controls="homePages">
                            <span class="item-name">Pages</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          <ul class="sub-nav collapse list-unstyled" id="pages">
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('about') }}"> About Us </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('contact') }}"> Contact Us </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('faq') }}"> FAQ </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('privacypolicy') }}"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('pricingplan') }}"> Pricing Plan </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('comingsoon') }}"> Coming Soon </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#error-page" role="button" aria-expanded="false" aria-controls="error-page">
                                <span class="item-name">Error Page</span>
                                <span class="menu-icon">
                                  <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                  <span class="toggle-menu">
                                    <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                    <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                  </span>
                                </span>
                              </a>
                              <ul class="sub-nav collapse list-unstyled" id="error-page">
                                <li class="nav-item">
                                  <a class="nav-link " href="{{ route('error') }}"> Error Page 1 </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="{{ route('error') }}"> Error Page 2 </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
                            <span class="item-name">Blog</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          <ul class="sub-nav collapse list-unstyled" id="blog">
                            <li class="nav-item">
                              <a class="nav-link " href="../blog/blog-listing.html"> Listing </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#blog-grid" role="button" aria-expanded="false" aria-controls="blog-grid">
                                <span class="item-name">Blog Grid</span>
                                <span class="menu-icon">
                                  <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                  <span class="toggle-menu">
                                    <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                    <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                  </span>
                                </span>
                              </a>
                              <ul class="sub-nav collapse list-unstyled" id="blog-grid">
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/one-column.html"> 1 Column </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/two-column.html"> 2 Column </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/three-column.html"> 3 Column </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/four-column.html"> 4 Column </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#blog-sidebar" role="button" aria-expanded="false" aria-controls="blog-sidebar">
                                <span class="item-name">Blog Sidebar</span>
                                <span class="menu-icon">
                                  <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                  <span class="toggle-menu">
                                    <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                    <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                  </span>
                                </span>
                              </a>
                              <ul class="sub-nav collapse list-unstyled" id="blog-sidebar">
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/left-sidebar.html"> Left Sidebar </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/right-sidebar.html"> Right Sidebar </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#blog-single" role="button" aria-expanded="false" aria-controls="blog-single">
                                <span class="item-name">Blog Single</span>
                                <span class="menu-icon">
                                  <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                  <span class="toggle-menu">
                                    <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                    <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                  </span>
                                </span>
                              </a>
                              <ul class="sub-nav collapse list-unstyled" id="blog-single">
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-template.html"> Blog Template </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-detail.html"> Standard </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-audio.html"> Audio </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-{{ route('video') }}"> Video </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-link.html"> Link </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-quote.html"> Quote </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="../blog/blog-gallery.html"> Gallery </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="collapse" href="#shop" role="button" aria-expanded="false" aria-controls="shop">
                            <span class="item-name">Shop</span>
                            <span class="menu-icon">
                              <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                              <span class="toggle-menu">
                                <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                              </span>
                            </span>
                          </a>
                          <ul class="sub-nav collapse list-unstyled" id="shop">
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('shop') }}"> Shop </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('myaccount') }}"> My Account Page </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('cart') }}"> Cart Page </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('wishlist') }}"> Wishlist Page </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('checkout') }}"> Checkout Page </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="{{ route('ordertracking') }}"> Order Tracking </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- container-fluid.// -->
                  </nav>
                  <!-- Horizontal Menu End -->            <div class="right-panel">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn">
                           <span class="navbar-toggler-icon"></span>
                        </span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav align-items-center ms-auto mb-xl-0">
                           <li class="nav-item dropdown iq-responsive-menu">
                              <div class="search-box">
                                 <a href="#" class="p-0 nav-link" id="search-drop" data-bs-toggle="dropdown">
                                    <div class="btn-icon btn-sm rounded-pill btn-action">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                             </circle>
                                             <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round">
                                             </path>
                                          </svg>
                                       </span>
                                    </div>
                                 </a>
                                 <ul class="p-0 m-0 dropdown-menu dropdown-search iq-search-bar" style="width: 20rem;">
                                    <li class="p-0">
                                       <div class="mb-0 form-group input-group">
                                          <input type="text" class="border-0 form-control" placeholder="Search...">
                                          <button type="submit" class="search-submit">
                                             <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                   stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                             </svg>
                                          </button>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                           <li class="nav-item dropdown" id="itemdropdown1">
                              <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <div class="btn-icon rounded-pill user-icons">
                                    <span class="btn-inner">
                                       <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </div>
                              </a>
                              <ul class="p-0 m-0 border-0 dropdown-menu dropdown-menu-end dropdown-user"
                                 aria-labelledby="navbarDropdown">
                                 <li class="gap-3 mb-3 user-info d-flex align-items-center">
                                    <img src="../template/assets/images/user/user1.webp" class="img-fluid" alt="" loading="lazy">
                                    <span class="text-white font-size-14 fw-500 text-capitalize">Jenny</span>
                                 </li>
                                 <li>
                                    <a href="{{ route('playlist') }}" class="gap-3 iq-sub-card d-flex align-items-center">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 22" fill="none">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">My Account</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="{{ route('playlist') }}" class="gap-3 iq-sub-card d-flex align-items-center">
                                       <svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="m0 0h24v24h-24z" fill="#fff" opacity="0"
                                             transform="matrix(-1 0 0 -1 24 24)" />
                                          <path
                                             d="m19 11h-6v-6a1 1 0 0 0 -2 0v6h-6a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z"
                                             fill="currentColor" />
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Watchlist</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pricingplan') }}" class="gap-3 iq-sub-card d-flex align-items-center">
                                       <svg width="16" height="16" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.58737 8.23597L11.1849 3.00376C11.5183 2.33208 12.4817 2.33208 12.8151 3.00376L15.4126 8.23597L21.2215 9.08017C21.9668 9.18848 22.2638 10.0994 21.7243 10.6219L17.5217 14.6918L18.5135 20.4414C18.6409 21.1798 17.8614 21.7428 17.1945 21.3941L12 18.678L6.80547 21.3941C6.1386 21.7428 5.35909 21.1798 5.48645 20.4414L6.47825 14.6918L2.27575 10.6219C1.73617 10.0994 2.03322 9.18848 2.77852 9.08017L8.58737 8.23597Z"
                                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Subscription</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="{{ route('login') }}"
                                       class="gap-2 mt-1 iq-sub-card iq-logout-2 d-flex justify-content-center">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                          fill="none">
                                          <path
                                             d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                             fill="currentColor"></path>
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Logout</h6>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>      <!--Nav End-->

      <!--bread-crumb-->
      <div class="iq-breadcrumb" style="background-image: url(../template/assets/images/pages/01.webp);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">Order Tracking</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                              <li class="breadcrumb-item active">Order Tracking</li>
                          </ol>
                      </nav>
                  </div>
              </div>
         </div>
      </div>      <!--bread-crumb-->

<section class="section-padding">
    <div class="container">
        <div class="pb-0 mb-3 main-cart mb-md-5 pb-md-5">
            <ul
                class="flex-wrap gap-3 cart-page-items d-flex justify-content-center list-inline align-items-center gap-md-5">
                <li class="cart-page-item">
                    <span class=" cart-pre-number border-radius rounded-circle me-1"> 1 </span>
                    <span class="cart-page-link ">
                        Shopping Cart </span>
                </li>
                <li class="cart-page-item">
                    <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="cart-page-item">
                    <span class=" cart-pre-number border-radius rounded-circle me-1"> 2 </span>
                    <span class="cart-page-link ">
                        Checkout </span>
                </li>
                <li class="cart-page-item">
                    <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="cart-page-item active">
                    <span class="cart-pre-heading badge bg-primary cart-pre-number border-radius rounded-circle me-1"> 3 </span>
                    <span class="cart-page-link ">
                        Order Summary </span>
                </li>
            </ul>
        </div>
        <div class="order">
            <p class="thank">Thank you. Your order has been received.</p>
            <ul class="details list-inline">
                <li class="detail">ORDER NUMBER:<strong>15823</strong></li>
                <li class="detail">DATE:<strong>June 22, 2022</strong></li>
                <li class="detail">EMAIL:<strong>jondoe@gmail.com</strong></li>
                <li class="detail">TOTAL:<strong>$25.00</strong></li>
                <li class="detail">PAYMENT METHOD:<strong>Direct bank transfer</strong></li>
            </ul>
        </div>
        <h5 class="order_details">Order Details</h5>
        <div class="row">
            <div class="col-lg-8">
                <section class="maintable">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="order_item">
                                <td>
                                    Bag Pack <strong class="product-quantity">×&nbsp;1</strong>
                                </td>
                                <td class="text-end">
                                    <span class="amount"><bdi><span>$</span>25.00</bdi></span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order_item">
                                <th>Subtotal:</th>
                                <td class="text-end"><span class="amount text-primary"><span>$</span>25.00</span></td>
                            </tr>
                            <tr class="order_item">
                                <th>Payment method:</th>
                                <td class="text-end">Direct bank transfer</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td class="text-end"><span class="amount text-primary"><span>$</span>25.00</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </section>
            </div>
            <div class="col-lg-4">
                <div class="bill_section">
                    <address>
                        <div class="table-responsive bill_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Billing address </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="label-name">Name</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">test</td>
                                    </tr>
                                    <tr>
                                        <td class="label-name">Company</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">test</td>
                                    </tr>
                                    <tr>
                                        <td class="label-name">Country</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">US</td>
                                    </tr>
                                    <tr>
                                        <td class="label-name">Address</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">dccc</td>
                                    </tr>
                                    <tr>
                                        <td class="label-name">E-mail</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">jondoe@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="label-name">Phone</td>
                                        <td class="seprator"><span>:</span></td>
                                        <td class="last-name">96465216515</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>

  </main>

  <footer class="footer footer-default">
    <div class="container-fluid">
      <div class="footer-top">
        <div class="row">
          <div class="mb-5 col-xl-3 col-lg-6 mb-lg-0">
            <div class="footer-logo">
                <!--Logo -->
                 <div class="logo-default">
                     <a class="navbar-brand text-primary" href="{{ route('index') }}">
                         <img class="img-fluid logo" src="../template/assets/images/logo.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-hotstar">
                     <a class="navbar-brand text-primary" href="{{ route('index') }}">
                         <img class="img-fluid logo" src="../template/assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-prime">
                     <a class="navbar-brand text-primary" href="{{ route('index') }}">
                         <img class="img-fluid logo" src="../template/assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-hulu">
                     <a class="navbar-brand text-primary" href="{{ route('index') }}">
                         <img class="img-fluid logo" src="../template/assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
            </div>
            <p class="mb-4 font-size-14">Email us: <span class="text-white">customer@streamit.com</span>
            </p>
            <p class="mb-1 text-uppercase letter-spacing-1 font-size-14">customer services</p>
            <p class="mb-0 text-white contact">+ (480) 555-0103</p>
          </div>
          <div class="mb-5 col-xl-2 col-lg-6 mb-lg-0">
            <h4 class="footer-link-title">Quick Links</h4>
            <ul class="list-unstyled footer-menu">
              <li class="mb-3">
                <a href="{{ route('about') }}" class="ms-3">about us</a>
              </li>
              <li class="mb-3">
                <a href="../blog/blog-listing.html" class="ms-3">Blog</a>
              </li>
              <li class="mb-3">
                <a href="{{ route('pricingplan') }}" class="ms-3">Pricing Plan</a>
              </li>
              <li>
                <a href="{{ route('faq') }}" class="ms-3">FAQ</a>
              </li>
            </ul>
          </div>
          <div class="mb-5 col-xl-2 col-lg-6 mb-lg-0">
            <h4 class="footer-link-title">Movies to watch</h4>
            <ul class="list-unstyled footer-menu">
              <li class="mb-3">
                <a href="../view-all-{{ route('movie') }}" class="ms-3">Top trending</a>
              </li>
              <li class="mb-3">
                <a href="../view-all-{{ route('movie') }}" class="ms-3">Recommended</a>
              </li>
              <li>
                <a href="../view-all-{{ route('movie') }}" class="ms-3">Popular</a>
              </li>
            </ul>
          </div>
          <div class="mb-5 col-xl-2 col-lg-6 mb-lg-0">
            <h4 class="footer-link-title">About company</h4d>
            <ul class="list-unstyled footer-menu">
              <li class="mb-3">
                <a href="{{ route('contact') }}" class="ms-3">contact us</a>
              </li>
              <li class="mb-3">
                <a href="{{ route('privacypolicy') }}" class="ms-3">privacy policy</a>
              </li>
              <li>
                <a href="{{ route('termsofuse') }}" class="ms-3">Terms of use</a>
              </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-6">
            <h4 class="footer-link-title">Subscribe Newsletter</h4>
            <div class="mailchimp mailchimp-dark">
              <div class="mt-4 mb-3 input-group">
                <input type="text" class="mb-0 form-control font-size-14" placeholder="Email*" aria-describedby="button-addon2">
                <div class="iq-button">
                  <button type="submit" class="btn btn-sm" id="button-addon2">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="mt-5 d-flex align-items-center">
              <span class="font-size-14 me-2">Follow Us:</span>
                <ul class="p-0 m-0 list-unstyled widget_social_media">
                  <li>
                    <a href="https://www.facebook.com/" class="position-relative">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/" class="position-relative">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://github.com/" class="position-relative">
                      <i class="fab fa-github"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" class="position-relative">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom border-top">
        <div class="row align-items-center">
          <div class="col-md-6">
            <ul class="flex-wrap p-0 menu list-inline d-flex align-items-center">
              <li class="menu-item">
                <a href="#"> Terms Of Use </a>
              </li>
              <li id="menu-item-7316" class="menu-item">
                <a href="{{ route('privacypolicy') }}"> Privacy-Policy </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('faq') }}"> FAQ </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('playlist') }}"> Watch List </a>
              </li>
            </ul>
            <p class="font-size-14">© <span class="currentYear"></span> <span class="text-primary">STREAMIT</span>. All Rights Reserved. All videos and shows on this platform are trademarks of, and all related images and content are the property of, Streamit Inc. Duplication and copy of this is strictly prohibited.</p>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <h6 class="pb-1 font-size-14">Download Streamit Apps </h6>
            <div class="d-flex align-items-center">
              <a class="app-image" href="#">
                <img src="../template/assets/images/footer/google-play.webp" loading="lazy" alt="play-store" />
              </a>
              <br />
              <a class="ms-3 app-image" href="#">
                <img src="../template/assets/images/footer/apple.webp" loading="lazy" alt="app-store" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
  <script src="../template/assets/js/core/libs.min.js"></script>
  <!-- Plugin Scripts -->






  <!-- Lodash Utility -->
  <script src="../template/assets/vendor/lodash/lodash.min.js"></script>
  <!-- External Library Bundle Script -->
  <script src="../template/assets/js/core/external.min.js"></script>
  <!-- countdown Script -->
  <script src="../template/assets/js/plugins/countdown.js"></script>
  <!-- utility Script -->
  <script src="../template/assets/js/utility.js"></script>
  <!-- Setting Script -->
  <script src="../template/assets/js/setting.js"></script>
  <script src="../template/assets/js/setting-init.js" defer></script>
  <!-- Streamit Script -->
  <script src="../template/assets/js/streamit.js" defer></script>
  <script src="../template/assets/js/swiper.js" defer></script>
</body>

</html>
