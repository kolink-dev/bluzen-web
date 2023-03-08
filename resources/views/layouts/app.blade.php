<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="Bluzen, which was established in 2013, offers a wide range of technology services and solutions, from strategic IT consulting to solution implementation.">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('frontend')}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/images/favicon.png">
    <!-- PAGE TITLE HERE -->
    <title>@yield('title')</title>
    <link rel="canonical" href="http://localhost/bluzen/" />
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/fontawesome/css/font-awesome.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/loader.min.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/flaticon.min.css">
    <!-- WOW ANIMATE STYLE SHEET -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <!-- Feather STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/feather.css">
    <!-- IMAGE POPUP -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/lc_lightbox.css">
    <!-- SWIPER SLIDER CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/swiper-bundle.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!-- Particle css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/particle-theme.css">
    <!-- Swiper -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/swiper.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "{{route('home')}}",
          "logo": "{{asset('frontend')}}/images/footer-bluzen.png"
        }
    </script>
    @stack('script-google')
    @stack('heads')
</head>

<body>
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loading">
            <!-- <h2><img src="images/footer-logo.webp" alt="#"></h2> -->
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

	<div class="page-wraper">

        <!-- HEADER START -->
        @include('layouts.header')
        <!-- HEADER END -->


        @yield('content')

        @include('layouts.footer')

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


    </div>

    @stack('js')
    <!-- JAVASCRIPT  FILES ========================================= -->
    <!-- JQUERY.MIN JS -->
    <script src="{{asset('frontend')}}/js/jquery-3.6.1.min.js.js"></script>
    <!-- POPPER.MIN JS -->
    <script src="{{asset('frontend')}}/js/popper.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="{{asset('frontend')}}/js/magnific-popup.min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="{{asset('frontend')}}/js/counterup.min.js"></script>
    <!-- sticky header JS -->
    <script src="{{asset('frontend')}}/js/waypoints-sticky.min.js"></script>
    <!-- MASONRY  -->
    <script src="{{asset('frontend')}}/js/isotope.pkgd.min.js"></script>
    <!-- MASONRY  -->
    <script src="{{asset('frontend')}}/js/imagesloaded.pkgd.min.js"></script>
    <!-- OWL  SLIDER  -->
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
    <!--sticky content-->
    <script src="{{asset('frontend')}}/js/theia-sticky-sidebar.js"></script>
    <!-- WOW JS -->
    <script src="{{asset('frontend')}}/js/wow.js"></script>
    <!-- IMAGE POPUP -->
    <script src="{{asset('frontend')}}/js/lc_lightbox.lite.js" ></script>
    <!-- Swiper js -->
    <script src="{{asset('frontend')}}/js/swiper-bundle.min.js"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('frontend')}}/js/custom.js"></script>
     {{-- <script src="{{asset('frontend')}}/js/particle-theme.js"></script> --}}
    <script src="{{asset('frontend')}}/js/page-home-dark.js"></script>
    <script src="{{asset('frontend')}}/vendor/particles/particles.min.js"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/swiper.min.js"></script>
</body>
<!-- Developer By Afif Muhamad -->
</html>
