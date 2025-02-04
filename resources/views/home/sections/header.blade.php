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
                        <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                            <img class="img-fluid logo" src="template/assets/images/logo.webp" loading="lazy"
                                alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-hotstar">
                        <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                            <img class="img-fluid logo" src="template/assets/images/logo-hotstar.webp" loading="lazy"
                                alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-prime">
                        <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                            <img class="img-fluid logo" src="template/assets/images/logo-prime.webp" loading="lazy"
                                alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-hulu">
                        <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                            <img class="img-fluid logo" src="template/assets/images/logo-hulu.webp" loading="lazy"
                                alt="streamit" />
                        </a>
                    </div>

                </div>
                <nav id="navbar_main"
                    class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mega-menu-content py-xl-0">
                    <div class="container-fluid p-lg-0">
                        <div class="px-0 offcanvas-header">
                            <div class="navbar-brand ms-3">
                                <!--Logo -->
                                <div class="logo-default">
                                    <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                                        <img class="img-fluid logo" src="template/assets/images/logo.webp"
                                            loading="lazy" alt="streamit" />
                                    </a>
                                </div>
                                <div class="logo-hotstar">
                                    <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                                        <img class="img-fluid logo" src="template/assets/images/logo-hotstar.webp"
                                            loading="lazy" alt="streamit" />
                                    </a>
                                </div>
                                <div class="logo-prime">
                                    <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                                        <img class="img-fluid logo" src="template/assets/images/logo-prime.webp"
                                            loading="lazy" alt="streamit" />
                                    </a>
                                </div>
                                <div class="logo-hulu">
                                    <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                                        <img class="img-fluid logo" src="template/assets/images/logo-hulu.webp"
                                            loading="lazy" alt="streamit" />
                                    </a>
                                </div>
                            </div>
                            <button type="button" class="px-3 btn-close float-end" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#homePages" role="button"
                                    aria-expanded="false" aria-controls="homePages">
                                    <span class="item-name">Home</span>
                                    <span class="menu-icon">
                                        <i class="fa fa-caret-down toggledrop-desktop right-icon"
                                            aria-hidden="true"></i>
                                        <span class="toggle-menu">
                                            <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                            <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </a>
                                <ul class="sub-nav mega-menu-item collapse justify-content-center list-unstyled"
                                    id="homePages">
                                    <li class="nav-item">
                                        <a class="p-0 nav-link active" href="./{{ route('index') }}">
                                            <img src="template/assets/images/mega-menu/new-home.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">OTT Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="p-0 nav-link " href="{{ route('home') }}">
                                            <img src="template/assets/images/mega-menu/home.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="p-0 nav-link " href="{{ route('movie') }}">
                                            <img src="template/assets/images/mega-menu/movie.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">Movie</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="p-0 nav-link " href="{{ route('tvshow') }}">
                                            <img src="template/assets/images/mega-menu/tv-show.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">TV Show</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="p-0 nav-link " href="{{ route('video') }}">
                                            <img src="template/assets/images/mega-menu/video.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">Video</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="p-0 nav-link " href="{{ route('merchandisestore') }}">
                                            <img src="template/assets/images/mega-menu/shop-home.webp" alt="img"
                                                class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block ">Merchandise Store</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#features" role="button"
                                    aria-expanded="false" aria-controls="homePages">
                                    <span class="item-name">Features</span>
                                    <span class="menu-icon">
                                        <i class="fa fa-caret-down toggledrop-desktop right-icon"
                                            aria-hidden="true"></i>
                                        <span class="toggle-menu">
                                            <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                            <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse list-unstyled" id="features">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('restrictedcontent') }}"> Restricted
                                            Content </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('relatedmerchandise') }}"> Related
                                            Merchandise </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('playlist') }}"> Playlist </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('genre') }}"> Geners </a>
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
                                <a class="nav-link" data-bs-toggle="collapse" href="#pages" role="button"
                                    aria-expanded="false" aria-controls="homePages">
                                    <span class="item-name">Pages</span>
                                    <span class="menu-icon">
                                        <i class="fa fa-caret-down toggledrop-desktop right-icon"
                                            aria-hidden="true"></i>
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
                                        <a class="nav-link" data-bs-toggle="collapse" href="#error-page"
                                            role="button" aria-expanded="false" aria-controls="error-page">
                                            <span class="item-name">Error Page</span>
                                            <span class="menu-icon">
                                                <i class="fa fa-caret-right toggledrop-desktop right-icon"
                                                    aria-hidden="true"></i>
                                                <span class="toggle-menu">
                                                    <i class="text-white fa fa-plus arrow-active"
                                                        aria-hidden="true"></i>
                                                    <i class="text-white fa fa-minus arrow-hover"
                                                        aria-hidden="true"></i>
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
                                <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button"
                                    aria-expanded="false" aria-controls="blog">
                                    <span class="item-name">Blog</span>
                                    <span class="menu-icon">
                                        <i class="fa fa-caret-down toggledrop-desktop right-icon"
                                            aria-hidden="true"></i>
                                        <span class="toggle-menu">
                                            <i class="text-white fa fa-plus arrow-active" aria-hidden="true"></i>
                                            <i class="text-white fa fa-minus arrow-hover" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse list-unstyled" id="blog">
                                    <li class="nav-item">
                                        <a class="nav-link " href="blog/blog-listing.html"> Listing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blog-grid"
                                            role="button" aria-expanded="false" aria-controls="blog-grid">
                                            <span class="item-name">Blog Grid</span>
                                            <span class="menu-icon">
                                                <i class="fa fa-caret-right toggledrop-desktop right-icon"
                                                    aria-hidden="true"></i>
                                                <span class="toggle-menu">
                                                    <i class="text-white fa fa-plus arrow-active"
                                                        aria-hidden="true"></i>
                                                    <i class="text-white fa fa-minus arrow-hover"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse list-unstyled" id="blog-grid">
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/one-column.html"> 1 Column </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/two-column.html"> 2 Column </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/three-column.html"> 3 Column </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/four-column.html"> 4 Column </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blog-sidebar"
                                            role="button" aria-expanded="false" aria-controls="blog-sidebar">
                                            <span class="item-name">Blog Sidebar</span>
                                            <span class="menu-icon">
                                                <i class="fa fa-caret-right toggledrop-desktop right-icon"
                                                    aria-hidden="true"></i>
                                                <span class="toggle-menu">
                                                    <i class="text-white fa fa-plus arrow-active"
                                                        aria-hidden="true"></i>
                                                    <i class="text-white fa fa-minus arrow-hover"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse list-unstyled" id="blog-sidebar">
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/left-sidebar.html"> Left Sidebar </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/right-sidebar.html"> Right Sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blog-single"
                                            role="button" aria-expanded="false" aria-controls="blog-single">
                                            <span class="item-name">Blog Single</span>
                                            <span class="menu-icon">
                                                <i class="fa fa-caret-right toggledrop-desktop right-icon"
                                                    aria-hidden="true"></i>
                                                <span class="toggle-menu">
                                                    <i class="text-white fa fa-plus arrow-active"
                                                        aria-hidden="true"></i>
                                                    <i class="text-white fa fa-minus arrow-hover"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse list-unstyled" id="blog-single">
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-template.html"> Blog Template
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-detail.html"> Standard </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-audio.html"> Audio </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-{{ route('video') }}"> Video
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-link.html"> Link </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-quote.html"> Quote </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="blog/blog-gallery.html"> Gallery </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#shop" role="button"
                                    aria-expanded="false" aria-controls="shop">
                                    <span class="item-name">Shop</span>
                                    <span class="menu-icon">
                                        <i class="fa fa-caret-down toggledrop-desktop right-icon"
                                            aria-hidden="true"></i>
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
                                        <a class="nav-link " href="{{ route('ordertracking') }}"> Order Tracking </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- container-fluid.// -->
                </nav>
                <div class="right-panel">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn">
                            <span class="navbar-toggler-icon"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav align-items-center ms-auto mb-xl-0">
                            <li class="nav-item dropdown iq-responsive-menu">
                                <div class="search-box">
                                    <a href="#" class="p-0 nav-link" id="search-drop"
                                        data-bs-toggle="dropdown">
                                        <div class="btn-icon btn-sm rounded-pill btn-action">
                                            <span class="btn-inner">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                    </circle>
                                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="p-0 m-0 dropdown-menu dropdown-search iq-search-bar"
                                        style="width: 20rem;">
                                        <li class="p-0">
                                            <div class="mb-0 form-group input-group">
                                                <input type="text" class="border-0 form-control"
                                                    placeholder="Search...">
                                                <button type="submit" class="search-submit">
                                                    <svg class="icon-15" width="15" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                        </circle>
                                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown" id="itemdropdown1">
                                <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                


                                <ul class="p-0 m-0 border-0 dropdown-menu dropdown-menu-end dropdown-user"
                                    aria-labelledby="navbarDropdown">
                                    @if (Route::has('login'))
                                        @auth
                                            <li class="gap-3 mb-3 user-info d-flex align-items-center">
                                                <img src="template/assets/images/user/user1.webp" class="img-fluid"
                                                    alt="" loading="lazy">
                                                <span class="text-white font-size-14 fw-500 text-capitalize">{{$user->first_name . " " . $user->last_name}}</span>
                                            </li>
                                            <li>
                                                <a href="{{ route('playlist') }}"
                                                    class="gap-3 iq-sub-card d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 22" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <h6 class="mb-0 font-size-14 fw-normal">My Account</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('playlist') }}"
                                                    class="gap-3 iq-sub-card d-flex align-items-center">
                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                <a href="{{ route('pricingplan') }}"
                                                    class="gap-3 iq-sub-card d-flex align-items-center">
                                                    <svg width="16" height="16" stroke-width="1.5"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.58737 8.23597L11.1849 3.00376C11.5183 2.33208 12.4817 2.33208 12.8151 3.00376L15.4126 8.23597L21.2215 9.08017C21.9668 9.18848 22.2638 10.0994 21.7243 10.6219L17.5217 14.6918L18.5135 20.4414C18.6409 21.1798 17.8614 21.7428 17.1945 21.3941L12 18.678L6.80547 21.3941C6.1386 21.7428 5.35909 21.1798 5.48645 20.4414L6.47825 14.6918L2.27575 10.6219C1.73617 10.0994 2.03322 9.18848 2.77852 9.08017L8.58737 8.23597Z"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <h6 class="mb-0 font-size-14 fw-normal">Subscription</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="gap-2 mt-1 iq-sub-card iq-logout-2 d-flex justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path
                                                                d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                        <h6 class="mb-0 font-size-14 fw-normal">Logout</h6>
                                                    </button>
                                                </form>
                                            </li>
                                        @else
                                            <li class="py-1">
                                                <a class="btn text-white" href="{{route('login')}}">Login</a>
                                            </li>
                                            <li class="py-1">
                                                <a class="btn text-white" href="{{route('register')}}">Register</a>
                                            </li>
                                        @endauth
                                    @endif




                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
