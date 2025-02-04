<footer class="footer footer-default">
    <div class="container-fluid">
      <div class="footer-top">
        <div class="row">
          <div class="mb-5 col-xl-3 col-lg-6 mb-lg-0">
            <div class="footer-logo">
                <!--Logo -->
                 <div class="logo-default">
                     <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                         <img class="img-fluid logo" src="template/assets/images/logo.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-hotstar">
                     <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                         <img class="img-fluid logo" src="template/assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-prime">
                     <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                         <img class="img-fluid logo" src="template/assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                     </a>
                 </div>
                 <div class="logo-hulu">
                     <a class="navbar-brand text-primary" href="./{{ route('index') }}">
                         <img class="img-fluid logo" src="template/assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
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
                <a href="blog/blog-listing.html" class="ms-3">Blog</a>
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
                <a href="view-all-{{ route('movie') }}" class="ms-3">Top trending</a>
              </li>
              <li class="mb-3">
                <a href="view-all-{{ route('movie') }}" class="ms-3">Recommended</a>
              </li>
              <li>
                <a href="view-all-{{ route('movie') }}" class="ms-3">Popular</a>
              </li>
            </ul>
          </div>
          <div class="mb-5 col-xl-2 col-lg-6 mb-lg-0">
            <h4 class="footer-link-title">About company</h4>
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
                <img src="template/assets/images/footer/google-play.webp" loading="lazy" alt="play-store" />
              </a>
              <br />
              <a class="ms-3 app-image" href="#">
                <img src="template/assets/images/footer/apple.webp" loading="lazy" alt="app-store" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
