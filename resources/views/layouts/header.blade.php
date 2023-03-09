<header class="header-style2 site-header mobile-sider-drawer-menu full-navbar">
<div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar">
      <div class="container clearfix p-10">
        <div class="logo-header">
          <div class="logo-header-inner logo-header-one">
            <a href="{{route('home')}}">
              <img src="{{asset('frontend')}}/images/logo.webp" alt="">
            </a>
          </div>
        </div>
        <!-- NAV Toggle Button -->
        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar icon-bar-first"></span>
          <span class="icon-bar icon-bar-two"></span>
          <span class="icon-bar icon-bar-three"></span>
        </button>
        <!-- EXTRA NAV -->
        <div class="extra-nav">
          <div class="extra-cell">
            <ul class="list-unstyled social-bx d-flex flex-wrap align-content-center">
              <li>
                <a target="_blank" title="Linkedln" class="font-linkdin" href="https://www.linkedin.com/company/bluzen">
                  <i class="feather-linkedin"></i>
                </a>
              </li>
              <li>
                <a target="_blank" title="Facebook" class="font-linkdin" href="https://www.facebook.com/bluzenSG/?locale=ko_KR">
                  <i class="feather-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- EXTRA Nav -->
        <!-- MAIN NAVIGATION -->
        <div class="header-nav navbar-collapse collapse d-flex justify-content-center collapse ">
          <ul class="nav navbar-nav ">
            <li class="@if (Route::is('home'))active @endif">
              <a href="{{route('home')}}">Home</a>
            </li>
            @if (Route::is('home') == false )
                <li>
                    <a href="{{route('home')}}#about-us">About Us</a>
                    <ul class="sub-menu">
                    <li class="d-md-none d-md-block">
                        <a href="{{route('home')}}#about-us">About</a>
                    </li>
                    <li>
                        <a href="{{route('home')}}#our-clients">Our Clients</a>
                    </li>
                    <li>
                        <a href="{{route('home')}}#our-partners">Our Partners</a>
                    </li>
                    <li>
                        <a href="{{route('home')}}#our-projects">Our Projects</a>
                    </li>
                    </ul>
                </li>
            @else
                <li>
                    <a href="#about-us">About Us</a>
                    <ul class="sub-menu">

                    <li>
                        <a href="#our-clients">Our Clients</a>
                    </li>
                    <li>
                        <a href="#our-partners">Our Partners</a>
                    </li>
                    <li>
                        <a href="#our-projects">Our Projects</a>
                    </li>
                    </ul>
                </li>
            @endif

            <li class="@if (Route::is('services-solution','workplace',
                'overseas-construction-site','factory-infra-solutions','smart-street'))active @endif">
              <a href="services-solution">Services & Solutions</a>
              <ul class="sub-menu">
                <li class="d-md-none d-md-block @if (Route::is('services-solution'))active @endif">
                  <a href="services-solution">Services</a>
                </li>
                <li class="@if (Route::is('workplace'))active @endif">
                  <a href="{{route('workplace')}}">Workplace IT</a>
                </li>
                <li class="@if (Route::is('overseas-construction-site'))active @endif">
                  <a href="{{route('overseas-construction-site')}}">Overseas Construction Site</a>
                </li>
                <li>
                  <a href="{{route('factory-infra-solutions')}}">Factory Infra Solutions</a>
                </li>
                <li>
                  <a href="{{route('smart-street')}}">SMART Street Light Solution</a>
                </li>
              </ul>
            </li>
            <li class="@if (Route::is('contact-us'))active @endif">
              <a href="{{route('contact-us')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
