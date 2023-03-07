@extends('layouts.app')

@section('title')
Bluzen | SMART Street Light Solution
@endsection

@section('content')
    <!-- Senction Content Start -->
    <div class="page-content">
        <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center" style="background-image:url({{asset('frontend')}}/images/old/banner/bnr-6.png);background-position:center">
            <div class="overlay-main bg-white opacity-0"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                        <div class="banner-title-outer2">
                            <div class="banner-title-name">
                                <h2 class="sx-title wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">SMART Street Light Solution</h2>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Senction Content End -->

    <!-- Section Worplace IT Start -->
    <div class="section-full  p-t110 p-b80 bg-white sx-about-bx3-outer">
        <div class="container">
          <div class="section-content">
            <div class="sx-about-bx3-content-wrap">
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="sx-about-bx3-media">
                    <div class="sx-dot-bx1">
                      <img src="{{asset('frontend')}}/images/old/about/dotted-pic2.png" alt="image">
                    </div>
                    <div class="sx-dot-bx2">
                      <img src="{{asset('frontend')}}/images/old/about/dotted-pic2.png" alt="image">
                    </div>
                    <div class="sx-ab3-img-outer">
                      <div class="sx-ab3-media">
                        <img src="{{asset('frontend')}}/images/old/about/p2.jpg" alt="media">
                      </div>
                    </div>
                    <div class="sx-ab-circle-box">
                      <div class="sx-ab-circle-box-content">
                        {{-- <span class="sx-exp">10 Years Experience</span> --}}
                        <div class="sx-exp-title-outer">
                          <span class="sx-exp-title-1">It</span>
                          <span class="sx-exp-title-2">Solutions</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="sx-about-bx3-content">
                    <h2 class="sx-title">SMART Street Light Solution</h2>
                    <p>BLUZEN has been providing metropolitan cities in Korea such as Seoul, Goyang, Sejong with smart street light system and operation services since 2015.</p>
                    <p>Global cities are adopting smart street light system as the core infrastructure of smart city and expecting to achieve remarkable reduction of energy consumption, maintenance efforts and prevention of light pollution. Public mobility services and public information such as air quality would be provided to citizen by the smart street light as well.</p>
                    <p>IoT Technologies for Smart Street Light Various experiences on IoT technologies, such as sensor, control, communication and remote monitoring, would be required for implementation and operation of Smart Street Light System.</p>
                    <p>Conceptual Architecture of Smart Street Light System Smart Street Light system is made up with Smart Device, Gateway, Wireless Communication Network and Remote Monitoring and Control Server System.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hilite-title text-left p-l50 text-uppercase">
              {{-- <strong>Mission</strong> --}}
            </div>
            <div class="sx-mv-bx1-content-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="sx-about-bx1-content">
                            <h2 class="sx-title mb-5">SMART Street Light</h2>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Increase Safety of Road Users</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Reduce Energy Consumption & Maintenance Cost</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Reduction of Light Pollution</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Public WIFI Hotspot Service</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Personal Mobility Charge Service</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Air Quality Information Service</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>City Surveillance Services</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>SOS Communication Service</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Intelligent CCTV & ITS Integration Service</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Traffic Information</p>
                            <p><i class="fa fa-solid fa-check-square m-r10"></i>Incident Information</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="sx-mv-bx1-media">
                            <div class="sx-dot-bx-right"><img src="{{asset('frontend')}}/images/old/about/dotted-pic.png" alt="image"></div>
                            <div class="sx-mv-img-outer">
                                <div class="sx-mv-img-section-2">
                                    <img src="{{asset('frontend')}}/images/smart/smart-street-lighting-1.png" alt="image">
                                </div>
                                <div class="sx-mv-img-section-1-wrap">
                                    {{-- <div class="sx-mv-video">
                                        <a href="https://www.youtube.com/watch?v=c1XNqw2gSbU" class="mfp-video circle">
                                            <i class="flaticon-play"></i>
                                        </a>
                                    </div> --}}
                                    <div class="sx-mv-img-section-1" style="background-image:url({{asset('frontend')}}/images/smart/smart-street-lighting-2.png)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Section Worplace IT End -->
@endsection
