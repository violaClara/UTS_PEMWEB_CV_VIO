<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CV VIOLA</title>

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/flaticon_gerold.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/light-mode.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

   @yield('css') 
</head>
<body>

     <!-- Preloader Area Start -->
   <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
         <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="preloader-heading">
         <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
   </div>
   <!-- Preloader Area End -->

   <!-- start: Back To Top -->
   <div class="progress-wrap" id="scrollUp">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- end: Back To Top -->

   <!-- HEADER START -->
   <header class="tj-header-area header-absolute">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="index-2.html">
                     <img src="assets/img/logo/logo.png" alt="" />
                  </a>
               </div>

               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="mailto:violapramesti2003@gmail.com">violapramesti2003@gmail.com</a></li>
                  </ul>
               </div>


               <!-- Navigation Menu -->
                            <!-- Navigation Menu -->
                <nav class="main-menu d-none d-lg-block" style="font-family: Arial, sans-serif; margin-left: auto;">
                    <ul class="ul-reset" style="list-style: none; display: flex; gap: 20px; padding: 0; margin: 0;">
                        <li style="position: relative;">
                            <a href="{{ route('home') }}" style="text-decoration: none; color: white; font-weight: 600; padding: 10px 15px; display: block; border-radius: 5px; transition: all 0.3s ease;">
                                Home
                            </a>
                        </li>
                        <li style="position: relative;">
                            <a href="{{ route('portfolio') }}" style="text-decoration: none; color: white; font-weight: 600; padding: 10px 15px; display: block; border-radius: 5px; transition: all 0.3s ease;">
                                Portfolio
                            </a>
                        </li>
                        <li style="position: relative;">
                            <a href="{{ route('gallery') }}" style="text-decoration: none; color: white; font-weight: 600; padding: 10px 15px; display: block; border-radius: 5px; transition: all 0.3s ease;">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </nav>


               <div class="mobile-menu d-lg-none"></div>
               <div class="header-button">
                  <a href='https://www.linkedin.com/in/viola-pramesti-26bba5219' class="btn tj-btn-primary">Hire me!</a>

               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <header class="tj-header-area header-2 header-sticky sticky-out">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">
               <div class="logo-box">
                  <a href="index-2.html">
                     <img src="assets/img/logo/logo.png" alt="" />
                  </a>
               </div>
               <div class="header-info-list d-none d-md-inline-block">
                  <ul class="ul-reset">
                     <li><a href="mailto:violapramesti2003@gmail.com">violapramesti2003@gmail.com</a></li>
                  </ul>
               </div>
               <div class="mobile-menu d-lg-none"></div>
               <div class="header-button">
                  <a href="https://www.linkedin.com/in/viola-pramesti-26bba5219" class="btn tj-btn-primary">Hire me!</a>
               </div>
               
            </div>
         </div>
      </div>
   </header>
   <!-- HEADER END -->



   @yield('content')


     <!-- JSS here -->
<script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/appear.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/ScrollTrigger.min.js"></script>
   <script src="assets/js/lenis.min.js"></script>
   <script src="assets/js/lightcase.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/validate.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/main.js"></script>
</body>
</html>
