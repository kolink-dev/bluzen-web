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
                <h2 class="sx-title">Contact Us</h2>
                <hr>
            </div>
        </div>
        <!-- TITLE END -->
        <div class="section-content">
            <div class="col-md-12">

                <img src="{{asset('frontend/images/maps.png')}}" class="d-none d-md-block mb-5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" alt="">
                <img src="{{asset('frontend/images/maps-mobile.png')}}" class="d-md-none d-md-block wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" alt="">

            </div>
            <!-- CONTACT FORM-->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 m-b30 mt-5">
                    <div class="contact-home1-right">
                        <div class="contact-home-1-form sx-bg-light">
                            <h4 class="sx-title mb-5 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">Contact Us</h4>
                                <form class="cons-contact-form2 form-transparent" method="post" action="https://theme7x.com/itodo/form-handler2.php">
                                    <div class="row">
                                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">
                                            <label class="lb-color">First Name</label>
                                            <div class="input input-animate">
                                                <input type="text" name="firstname">
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">
                                            <label class="lb-color">Last Name</label>
                                            <div class="input input-animate">
                                                <input type="text" name="lastname">
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <label class="lb-color wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">Your Email*</label>
                                    <div class="input input-animate wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                        <input type="email" name="email" id="email" required>
                                        <span class="spin"></span>
                                    </div>

                                    <label class="lb-color wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">Write a message</label>
                                    <div class="input textarea input-animate wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">
                                        <textarea name="message" id="message"></textarea>
                                        <span class="spin"></span>
                                    </div>

                                    <div class="sx-btn-center text-left p-t10 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">
                                        <button type="submit" class="site-button sx-btn-primary icon">
                                            <i class="fa  fa-long-arrow-right"></i>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  m-b30">
                    <div class="contact-info">
                        <!-- TITLE START -->
                        <div class="section-head left"></div>
                        <!-- TITLE END -->

                        <div class="row sx-contact-form-icon-bx">

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="javascript:void(0);" id="bluzen-sg" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Pte Ltd Singapore</a>
                                        <p class="mb-contact-us">21 Bukit Batok Crescent, #13-73 WCEGA Tower, Singapore 658056</p>
                                        <p class="mb-contact-us">Tel: +65 6271 0177 / 070 7793 5095</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="javascript:void(0);" id="bluzen-vina" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Vina Co., Ltd Vietnam</a>
                                        <p class="mb-contact-us">23/38 Phuong Mai Street, Phuong Mai ward, Dong Da district, Ha Noi</p>
                                        <p class="mb-contact-us">Tel: +84 9 6517 3527 / 070 8844 5095</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="mailto:dennis@bluzen.com" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Group Thailand</a>
                                        <p class="mb-contact-us">155/18 Moo 2 Tumbot Tubma Muan Rayong 21000, Thailand, Pattaya, TH</p>
                                        <p class="mb-contact-us">Tel: +66 08 1663 6621</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="mailto:dennis@bluzen.com" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Malaysia Sdn Bhd</a>
                                        <p class="mb-contact-us">Sublot 87, Lot 14934 Block 11, Muara Tebas Land District,
                                            1st Floor, Stutong Parade, Jalan Setia Raja, 93250, Kuching, Sarawak.</p>
                                        <p class="mb-contact-us">Tel: +60-12-524-9171</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="1.1s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="mailto:dennis@bluzen.com" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Indonesia</a>
                                        <p class="mb-contact-us">PT BLUZEN GROUP INDONESIA</p>
                                        <p class="mb-contact-us">Jln Boulevard Barat Ruko Inkopal Blok G No.21 Kelapa Gading Jakarta Utara 19440 </p>
                                        <p class="mb-contact-us">Tel: +621 4585366</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 m-b30 ml-cp-5 wow fadeInLeft" data-wow-delay="1.3s" data-wow-duration="1s">
                                <div class="sx-icon-bx-5">
                                    <div class="sx-media sx-cp">
                                        <i class="flaticon-map-location ft-fafa25"></i>
                                    </div>
                                    <div class="sx-icon-bx-info">
                                        <a href="mailto:dennis@bluzen.com" class="sx-icon-bx-title sx-icon-bx-cp">Bluzen Korea</a>
                                        <p class="mb-contact-us">120-2702, Lakepalace, Jamsil-Ro 88, Songpa-Gu, Seoul, Korea, Seoul, KR</p>
                                        <p class="mb-contact-us">Tel: +82 02 4485095</p>
                                    </div>
                                </div>
                            </div>

                        </div>

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


