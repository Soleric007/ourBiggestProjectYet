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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&amp;display=swap"
        rel="stylesheet">

@vite('resources/css/app.css')
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
    <!-- loader END --> <!-- loader END -->
    <main class="main-content">
        <!--Nav Start-->
        <!--Nav End-->

        <!--bread-crumb-->
        <!--bread-crumb-->


        <div class="vh-100"
            style="background: url('template/assets/images/pages/01.webp'); background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px">
            <div class="container">
                <div class="row justify-content-center align-items-center height-self-center vh-100">
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <div class="user-login-card bg-body">
                            <h4 class="text-center mb-5">Create Your Account</h4>
                            <form method="POST" action="{{ route('register.store') }}">
                                @csrf
                                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">First Name</label>
                                        <input type="text" class="form-control rounded-0" name="first_name"
                                            :value="old('first_name')" required autofocus autocomplete="first_name">
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                                    </div>
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">Last Name</label>
                                        <input type="text" class="form-control rounded-0" name="last_name"
                                            :value="old('last_name')" required autofocus autocomplete="last_name">
                                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">Username *</label>
                                        <input type="text" class="form-control rounded-0" name="username"
                                            :value="old('username')" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />

                                    </div>
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">Email *</label>
                                        <input type="email" class="form-control rounded-0" name="email"
                                            :value="old('email')" required autofocus autocomplete="email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">Password *</label>
                                        <input type="password" class="form-control rounded-0" name="password" required
                                            autofocus autocomplete="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                    <div class="col">
                                        <label class="text-white fw-500 mb-2">Confirm Password *</label>
                                        <input type="password" class="form-control rounded-0"
                                            name="password_confirmation" required autofocus autocomplete="password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                    </div>
                                </div>
                                <label class="list-group-item d-flex align-items-center mt-5 mb-3 text-white"><input
                                        class="form-check-input m-0 me-2" type="checkbox">I've read and accept the <a
                                        href="{{ route('termsofuse') }}" class="ms-1">terms & conditions*</a></label>
                                <div class="row text-center">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="full-button">
                                            <div class="iq-button">
                                                <button type="submit" class="btn text-uppercase position-relative">
                                                    <span class="button-text">Sign Up</span>
                                                    <i class="fa-solid fa-play"></i>
                                                </button>
                                            </div>
                                            <p class="mt-2 mb-0 fw-normal">Already have an account?<a
                                                    href="{{ route('login') }}" class="ms-1">Login</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>



    <div class="rtl-box">
        <a class="btn btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas"
            data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.875em" height="1.875em" viewBox="0 0 20 20"
                fill="white">
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
                    <button class="btn btn-icon text-primary" data-reset="settings" data-bs-toggle="tooltip"
                        data-bs-placement="left" aria-label="Reset All Settings"
                        data-bs-original-title="Reset All Settings">
                        <span class="btn-inner">
                            <i class="fa-solid fa-arrows-rotate"></i>
                        </span>
                    </button>
                    <button type="button" class="btn btn-icon btn-close px-0 text-reset shadow-none text-dark"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>
            </div>
            <div class="offcanvas-body pt-0">
                <div class="modes row row-cols-2 gx-2">
                    <div class="col">
                        <div data-setting="attribute" class="text-center w-100">
                            <input type="radio" value="ltr" class="btn-check" name="theme_scheme_direction"
                                data-prop="dir" id="theme-scheme-direction-ltr" checked>
                            <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-direction-ltr">
                                LTR
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div data-setting="attribute" class="text-center w-100">
                            <input type="radio" value="rtl" class="btn-check" name="theme_scheme_direction"
                                data-prop="dir" id="theme-scheme-direction-rtl">
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
                                    data-prop="data-bs-theme" id="theme-scheme-color-netflix"
                                    data-colors="{&quot;primary&quot;: &quot;#e50914&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#adafb8&quot;}"
                                    checked>
                                <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-netflix">
                                    Netflix
                                </label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div data-setting="attribute" class="text-center w-100">
                                <input type="radio" value="hotstar" class="btn-check"
                                    name="theme_style_appearance" data-prop="data-bs-theme"
                                    id="theme-scheme-color-hotstar"
                                    data-colors="{&quot;primary&quot;: &quot;#0959E4&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                                <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-hotstar">
                                    Hotstar
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-setting="attribute" class="text-center w-100">
                                <input type="radio" value="amazonprime" class="btn-check"
                                    name="theme_style_appearance" data-prop="data-bs-theme"
                                    id="theme-scheme-color-prime"
                                    data-colors="{&quot;primary&quot;: &quot;#1A98FF&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                                <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-prime">
                                    Prime
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-setting="attribute" class="text-center w-100">
                                <input type="radio" value="hulu" class="btn-check" name="theme_style_appearance"
                                    data-prop="data-bs-theme" id="theme-scheme-color-hulu"
                                    data-colors="{&quot;primary&quot;: &quot;#3ee783&quot;, &quot;secondary&quot;: &quot;#adafb8&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                                <label class="btn dir-btn cutomizer-button w-100" for="theme-scheme-color-hulu">
                                    Hulu
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" style="display: none;">
        <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top"
            href="#top">
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
