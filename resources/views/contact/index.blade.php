@extends('layouts.app')

@section('title')
Bluzen | Contact Us
@endsection

@push('heads')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
@endpush

@section('content')
<!-- Section Content Start -->
<div class="page-content">
    <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center" style="background-image:url({{asset('frontend')}}/images/old/banner/contact-us.png);background-position:center">
        <div class="overlay-main bg-white opacity-0"></div>
            <div class="container">
                <div class="sx-bnr-inr-entry">
                    <div class="banner-title-outer2">
                        <div class="banner-title-name">
                            <h2 class="sx-title wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">Get In Touch</h2>
                        </div>
                    </div>
                </div>
            </div>
        {{-- <div class="sx-bnr-outline-text">
            <h1> We Are Solutions</h1>
        </div> --}}
    </div>
</div>
<!-- Section Content End -->

<!-- Section Contact Us Start -->
<div class="section-full p-t100 p-b70 bg-white mobile-page-padding">
    <!-- Content START -->
    <div class="container">
      <div class="section-content">
        <!-- TITLE START -->
        <div class="section-head center">
            <div class="sx-head-l-title wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">
                <h2 class="sx-title mb-5">Contact Us</h2>
                <hr>
            </div>
        </div>
        <!-- TITLE END -->
        <div class="section-content">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row sx-contact-form-icon-bx">
                            <div class="text-center m-b30 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                                <h3>Bluzen Group</h3>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="mb-contact-us sx-icon-bx-title sx-icon-bx-cp">Bluzen Pte Ltd Singapore</p>
                                        <p class="mb-contact-us">21 Bukit Batok Crescent, #13-73 WCEGA Tower, Singapore 658056</p>
                                        <p class="mb-contact-us">Tel: +65 6271 0177 / 070 7793 5095</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="mb-contact-us sx-icon-bx-title sx-icon-bx-cp">Bluzen Vina Co., Ltd Vietnam</p>
                                        <p class="mb-contact-us">23/38 Phuong Mai Street, Phuong Mai ward, Dong Da district, Ha Noi</p>
                                        <p class="mb-contact-us">Tel: +84 9 6517 3527 / 070 8844 5095</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="mb-contact-us sx-icon-bx-title sx-icon-bx-cp">Bluzen Group Thailand</p>
                                        <p class="mb-contact-us">155/18 Moo 2 Tumbot Tubma Muan Rayong 21000, Thailand, Pattaya, TH</p>
                                        <p class="mb-contact-us">Tel: +66 08 1663 6621</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="mb-contact-us sx-icon-bx-title sx-icon-bx-cp">Bluzen Malaysia Sdn Bhd</p>
                                        <p class="mb-contact-us">Sublot 87, Lot 14934 Block 11, Muara Tebas Land District,
                                            1st Floor, Stutong Parade, Jalan Setia Raja, 93250, Kuching, Sarawak.</p>
                                        <p class="mb-contact-us">Tel: +60-12-524-9171</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Indonesia</p>
                                        <p class="mb-contact-us">PT BLUZEN GROUP INDONESIA</p>
                                        <p class="mb-contact-us">Jln Boulevard Barat Ruko Inkopal Blok G No.21 Kelapa Gading Jakarta Utara 19440 </p>
                                        <p class="mb-contact-us">Tel: +621 4585366</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 m-b20 ml-cp-5 wow fadeInLeft" data-wow-delay="1.1s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <p class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Korea</p>
                                        <p class="mb-contact-us">120-2702, Lakepalace, Jamsil-Ro 88, Songpa-Gu, Seoul, Korea, Seoul, KR</p>
                                        <p class="mb-contact-us">Tel: +82 02 4485095</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- <img src="{{asset('frontend/images/maps.png')}}" class="d-none d-md-block mb-5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" alt=""> --}}
                        <img src="{{asset('frontend/images/maps-v2.png')}}" class="m-t80 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" alt="">
                    </div>

                </div>

            </div>
            <!-- CONTACT FORM-->
            <div class="justify-content-center">
                <div class="col-md-12 m-b80 m-t80">
                    <div class="row">
                        <div class="col-md-6"><img src="{{asset('frontend/images/it-engineer.png')}}" alt=""></div>
                        <div class="col-md-6"><img src="{{asset('frontend/images/internship.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Content END -->
</div>

<!-- Section Contact Us End -->
@endsection


