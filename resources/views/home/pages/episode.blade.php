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

    <!-- End Header Section -->      <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->

<!-- Banner Start -->
<div class="iq-main-slider site-video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
                        class="video-js vjs-big-play-centered w-100" controls preload="auto"
                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=QCGq1epI9pQ"}], "youtube": { "iv_load_policy": 1 } }'>
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
       <div class="pt-0 pb-4 mt-4 trending-info">
            <div class="row">
                <div class="mb-auto col-md-9 col-12">
                    <div class="d-md-flex">
                        <h2 class="mt-0 trending-text fw-bold texture-text text-uppercase fadeInLeft animated"
                        data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                         Football 3
                        </h2>
                        <div class="gap-2 slider-ratting d-flex align-items-center ms-md-3 ms-0">
                            <ul class="p-0 m-0 ratting-start list-inline text-primary d-flex align-items-center justify-content-left">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                            </ul>
                            <span class="text-white">3.3  <img src="template/assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid ms-2"></span>
                        </div>
                    </div>
                    <ul class="flex-wrap p-0 mt-2 list-inline d-flex movie-tag">
                        <li class="font-size-18">S01E03</li>
                        <li class="font-size-18">Football 3</li>
                        <li class="font-size-18">1.2K views</li>
                    </ul>
                    <ul class="p-0 m-0 mb-3 list-inline share-icons music-play-lists">
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
                        <li><span><i class="fa-solid fa-download"></i></span></li>

                    </ul>
                </div>
                <div class="mt-4 mb-1 trailor-video col-md-3 col-12 mt-lg-0 mb-md-0 text-lg-right">
                    <a href="https://www.youtube.com/watch?v=QCGq1epI9pQ"
                        class="video-open playbtn block-images position-relative playbtn_thumbnail">
                        <img src="template/assets/images/genre/01.webp"
                        class="attachment-medium-large size-medium-large wp-post-image" alt="" loading="lazy" />
                        <span class="content btn btn-transparant iq-button">
                        <i class="text-white fa fa-play me-2"></i>
                        <span>Trailer Link</span>
                        </span>
                    </a>
                </div>
            </div>
       </div>
       <!-- Movie Source Start -->
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
                         <a href="movie-detail.html"
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
                         <a href="movie-detail.html"
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
                         <a href="movie-detail.html"
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
       <!-- Movie Source End -->    </div>
</div>


<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
        <div class="px-3 pt-2 my-4 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 main-title text-capitalize">Latest Episodes</h5>
        </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="2" data-mobile="2"
          data-mobile-sm="1" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 m-0 swiper-wrapper list-inline">
            <li class="swiper-slide">
              <div class="episode-block">
                  <div class="block-image position-relative">
                      <a href="episode.html">
                          <img src="template/assets/images/tv-show/episodes/01.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                      </a>
                      <div class="episode-number">S01E01</div>
                      <div class="episode-play">
                          <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                      </div>
                  </div>
                  <div class="p-3 epi-desc">
                      <div class="mb-3 d-flex align-items-center justify-content-between">
                          <span class="text-white border-gredient-left rel-date">October 1, 2020</span>
                          <span class="text-primary run-time">45min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="mb-0 text-white epi-name"> Zombie Island 1 </h5>
                      </a>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="episode-block">
                  <div class="block-image position-relative">
                      <a href="episode.html">
                          <img src="template/assets/images/tv-show/episodes/02.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                      </a>
                      <div class="episode-number">S01E02</div>
                      <div class="episode-play">
                          <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                      </div>
                  </div>
                  <div class="p-3 epi-desc">
                      <div class="mb-3 d-flex align-items-center justify-content-between">
                          <span class="text-white border-gredient-left rel-date">October 8, 2020</span>
                          <span class="text-primary run-time">35min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="mb-0 text-white epi-name"> Zombie Island 2 </h5>
                      </a>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="episode-block">
                  <div class="block-image position-relative">
                      <a href="episode.html">
                          <img src="template/assets/images/tv-show/episodes/03.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                      </a>
                      <div class="episode-number">S01E03</div>
                      <div class="episode-play">
                          <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                      </div>
                  </div>
                  <div class="p-3 epi-desc">
                      <div class="mb-3 d-flex align-items-center justify-content-between">
                          <span class="text-white border-gredient-left rel-date">October 15, 2020</span>
                          <span class="text-primary run-time">36min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="mb-0 text-white epi-name"> Zombie Island 3 </h5>
                      </a>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
             <div class="episode-block">
                 <div class="block-image position-relative">
                     <a href="episode.html">
                         <img src="template/assets/images/tv-show/episodes/04.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                     </a>
                     <div class="episode-number">S01E04</div>
                     <div class="episode-play">
                         <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                     </div>
                 </div>
                 <div class="p-3 epi-desc">
                     <div class="mb-3 d-flex align-items-center justify-content-between">
                         <span class="text-white border-gredient-left rel-date">October 22, 2020</span>
                         <span class="text-primary run-time">41min</span>
                     </div>
                     <a href="episode.html">
                         <h5 class="mb-0 text-white epi-name"> Zombie Island 4 </h5>
                     </a>
                 </div>
             </div>
            </li>
            <li class="swiper-slide">
             <div class="episode-block">
                 <div class="block-image position-relative">
                     <a href="episode.html">
                         <img src="template/assets/images/tv-show/episodes/01.webp" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                     </a>
                     <div class="episode-number">S01E04</div>
                     <div class="episode-play">
                         <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                     </div>
                 </div>
                 <div class="p-3 epi-desc">
                     <div class="mb-3 d-flex align-items-center justify-content-between">
                         <span class="text-white border-gredient-left rel-date">October 22, 2020</span>
                         <span class="text-primary run-time">41min</span>
                     </div>
                     <a href="episode.html">
                         <h5 class="mb-0 text-white epi-name"> Zombie Island 4 </h5>
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

  <script src="template/assets/vendor/video/video.min.js"></script>
  <script src="template/assets/vendor/videojs-youtube-master/youtube.js"></script>



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
