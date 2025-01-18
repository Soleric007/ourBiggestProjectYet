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

    <!-- End Header Section -->     <!--Nav End-->

      <!--bread-crumb-->
      <div class="iq-breadcrumb" style="background-image: url(template/assets/images/pages/01.webp);">
         <div class="container-fluid">
            <div class="row align-items-center">
                  <div class="col-sm-12">
                      <nav aria-label="breadcrumb" class="text-center">
                          <h2 class="title">Contact Us</h2>
                          <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="./{{ route('index') }}">Home</a></li>
                              <li class="breadcrumb-item active">Contact Us</li>
                          </ol>
                      </nav>
                  </div>
              </div>
         </div>
      </div>      <!--bread-crumb-->


<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="title-box">
          <h2>Create With Us</h2>
          <p class="mb-0">To learn more about how Streamit can help you, contact us.</p>
        </div>
        <form class="mb-5 mb-lg-0">
          <div class="row">
            <div class="mb-4 col-md-6 mb-lg-5">
              <input type="text" class="form-control font-size-14" placeholder="Your Name*" required>
            </div>
            <div class="mb-4 col-md-6 mb-lg-5">
              <input type="text" class="form-control font-size-14" placeholder="Last Name*" required>
            </div>
            <div class="mb-4 col-md-6 mb-lg-5">
              <input type="tel" class="form-control font-size-14" maxlength="140" minlength="10" placeholder="Phone Number*" required>
            </div>
            <div class="mb-4 col-md-6 mb-lg-5">
              <input type="email" class="form-control font-size-14" placeholder="Your Email*" required>
            </div>
            <div class="mb-4 col-md-12 mb-lg-5">
              <textarea class="form-control font-size-14" cols="40" rows="10" placeholder="Your Message"></textarea>
            </div>
            <div class="col-md-12">
              <div class="iq-button">
                <button type="submit" class="btn">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-1 d-none d-lg-block"></div>
      <div class="col-lg-3">
        <div class="pb-4 mb-4 border-bottom">
          <h5>Come See Us</h5>
          <span>Townhouse Agency Consoling. LLC 50 ean 2 See, 41A Xo New York NY 20159</span>
        </div>
        <div class="pb-4 mb-4 border-bottom">
          <h5>Get In Touch</h5>
          <a class="text-primary">support@streamit.com</a>
          <p class="mb-0">(144) 1234 4567</p>
        </div>
        <div>
          <h5>Follow Us</h5>
          <ul class="p-0 m-0 mt-4 list-unstyled widget_social_media">
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
</div>

<div class="map">
  <div class="p-0 container-fluid">
    <iframe loading="lazy" class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902543.2003194243!2d-118.04220880485131!3d36.56083290513502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80be29b9f4abb783%3A0x4757dc6be1305318!2sInyo%20National%20Forest!5e0!3m2!1sen!2sin!4v1576668158879!5m2!1sen!2sin" height="600" allowfullscreen=""></iframe>
  </div>
</div>

<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="title-box">
          <h3 class="fw-500">To Learn More About How Streamit Can Help You, Contact Us. We'd Be Happy To Take On The Challenge!</h3>
        </div>
      </div>
      <div class="col-lg-2 d-none d-lg-block"></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="gap-3 mb-3 rounded contact-box d-flex mb-lg-0">
          <img src="template/assets/images/pages/box-pattern.webp" class="top-0 img-fluid position-absolute end-0" alt="pattern">
          <div class="text-white icon-wrapper rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 10 17" fill="none">
              <path d="M4.22501 8.70833C4.86668 7.55 6.10001 6.86667 6.81668 5.84167C7.57501 4.76667 7.15001 2.75833 5.00001 2.75833C3.59168 2.75833 2.90001 3.825 2.60835 4.70833L0.450012 3.8C1.04168 2.025 2.65001 0.5 4.99168 0.5C6.95001 0.5 8.29168 1.39167 8.97501 2.50833C9.55835 3.46667 9.90001 5.25833 9.00001 6.59167C8.00001 8.06667 7.04168 8.51667 6.52501 9.46667C6.31668 9.85 6.23335 10.1 6.23335 11.3333H3.82501C3.81668 10.6833 3.71668 9.625 4.22501 8.70833ZM6.66668 14.6667C6.66668 15.5833 5.91668 16.3333 5.00001 16.3333C4.08335 16.3333 3.33335 15.5833 3.33335 14.6667C3.33335 13.75 4.08335 13 5.00001 13C5.91668 13 6.66668 13.75 6.66668 14.6667Z" fill="currentColor"></path>
            </svg>
          </div>
          <div style="z-index: 1;">
            <h6 class="mb-4 font-size-18 fw-500">For General Enquiries</h6>
            <p class="mb-1 font-size-14">Call On: <span class="text-primary">(144) 1234 4567</span>
            </p>
            <p class="mb-0">Mail: <a href="mailto:info@medyapim.com" class="text-white fw-500">info@enquiries.com</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gap-3 mb-3 rounded contact-box d-flex mb-lg-0">
          <img src="template/assets/images/pages/box-pattern.webp" class="top-0 img-fluid position-absolute end-0" alt="pattern">
          <div class="text-white icon-wrapper rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M8 0.5C3.85833 0.5 0.5 3.85833 0.5 8V13.8333C0.5 14.75 1.25 15.5 2.16667 15.5H5.5V8.83333H2.16667V8C2.16667 4.775 4.775 2.16667 8 2.16667C11.225 2.16667 13.8333 4.775 13.8333 8V8.83333H10.5V15.5H13.8333C14.75 15.5 15.5 14.75 15.5 13.8333V8C15.5 3.85833 12.1417 0.5 8 0.5ZM3.83333 10.5V13.8333H2.16667V10.5H3.83333ZM13.8333 13.8333H12.1667V10.5H13.8333V13.8333Z" fill="currentColor"></path>
            </svg>
          </div>
          <div style="z-index: 1;">
            <h6 class="mb-4 font-size-18 fw-500">For user support</h6>
            <p class="mb-1 font-size-14">Call On: <span class="text-primary">(144) 4321 4567</span>
            </p>
            <p class="mb-0">Mail: <a href="mailto:info@medyapim.com" class="text-white fw-500">support@enquiries.com</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gap-3 rounded contact-box d-flex">
          <img src="template/assets/images/pages/box-pattern.webp" class="top-0 img-fluid position-absolute end-0" alt="pattern">
          <div class="text-white icon-wrapper rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path d="M16.8416 8.50829L9.48329 1.14996C9.17496 0.841626 8.74996 0.666626 8.30829 0.666626H2.33329C1.41663 0.666626 0.666626 1.41663 0.666626 2.33329V8.30829C0.666626 8.74996 0.841626 9.17496 1.15829 9.48329L8.51663 16.8416C9.16663 17.4916 10.225 17.4916 10.875 16.8416L16.85 10.8666C17.5 10.2166 17.5 9.16663 16.8416 8.50829ZM9.69163 15.6666L2.33329 8.30829V2.33329H8.30829L15.6666 9.69163L9.69163 15.6666Z" fill="white"></path>
              <path d="M4.41663 5.66663C5.10698 5.66663 5.66663 5.10698 5.66663 4.41663C5.66663 3.72627 5.10698 3.16663 4.41663 3.16663C3.72627 3.16663 3.16663 3.72627 3.16663 4.41663C3.16663 5.10698 3.72627 5.66663 4.41663 5.66663Z" fill="currentColor"></path>
            </svg>
          </div>
          <div style="z-index: 1;">
            <h6 class="mb-4 font-size-18 fw-500">For sales Support</h6>
            <p class="mb-1 font-size-14">Call On: <span class="text-primary">(144) 1234 1234</span>
            </p>
            <p class="mb-0">Mail: <a href="mailto:info@medyapim.com" class="text-white fw-500">user@enquiries.com</a>
            </p>
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
