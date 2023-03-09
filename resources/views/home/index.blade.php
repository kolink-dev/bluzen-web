@extends('layouts.app')

@section('title')
Bluzen | We support your growth through digital transformation
@endsection
@push('script-google')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "ImageObject",
        "contentUrl": "{{asset('frontend')}}/images/project/health-campus.jpg",
        "license": "{{route('home')}}",
        "acquireLicensePage": "{{route('home')}}",
        "creditText": "HCMC Gets Connected",
        "creator": {
            "@type": "Person",
            "name": "HCMC Gets Connected"
        },
        "copyrightNotice": "Clara Kent"
        }
    </script>
@endpush
@section('content')

@include('component.side-navigator')

      <!-- CONTENT START -->
      <section id="top" class="pa-hero pa-centered-section pa-full-height pa-image-back pushable-content" style="background-image: url({{asset('frontend')}}/images/hero-dark.jpg);">
        <div class="pa-absolute-fill pa-gradient-back-v1" style="opacity: 0;"></div><!-- Increase opacity to overlay hero with a gradient -->
        <div id="particles-js"></div>

        <div class="container pa-hero-content text-center">
            <div class="col-md-8">
                <div class="text-left">
                    <h2 class="text-white f-70 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">Innovative IT</h2>
                    <br>
                    <h2 class="text-white f-70 wow fadeInDown" style="margin-top:-30px" data-wow-delay=".5s" data-wow-duration="1s">Services for Success</h2>
                    <!-- <h2 class="pa-h2-v2-hero-subhead pa-white">The Coolest Modern HTML Template is Here! Welcome to <strong>Particle</strong> by Skilltech Web Design</h2> -->
                    <h4 class="text-silver wow fadeInDown" data-wow-delay=".8s" data-wow-duration="2s">We support your growth through digital transformation</h4>
                    <img src="{{asset('frontend')}}/images/footer-bluzen.png" width="200" class="image-logo-banner mt-5 wow fadeInDown"  data-wow-delay=".8s" data-wow-duration="2s" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT END -->

    <!-- OUR SERVICES SECTION START -->
    <section id="about-us" class="p-b30"></section>
    <div class="section-full pt-0 top-2 p-b80 sx-our-services-outer">
        <div class="container">
            <!-- TITLE START -->
            <div class="apos_ment wow wow fadeInDown" data-wow-delay="0s" data-wow-duration="1s">
                <h1 class="text-center">
                    <span class="gold-text">About Bluzen<span>
                </h1>
                <img class="apos1-home" src="{{asset('frontend')}}/img/apos1.png" title="">
                <img class="apos2-home" src="{{asset('frontend')}}/img/apos2.png" title="">
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <span class="text-center span-about wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">
                            Bluzen, which was established in 2013, offers a wide range of technology services and solutions, from strategic IT consulting to solution implementation.
                            This covers IT infrastructure acquisition and management in businesses, either in collaboration with your team or through our experts.
                            Bluzen has teams of professionals around Southeast Asia working with businesses in varying industries across government, construction, automobile, manufacturing, retail, healthcare and logistics.
                            Today, Bluzen has supported more than 100 organizations through our office across Southeast Asia.
                        </span>
                    </div>
                    <!-- <div class="col-md-6">

                    </div> -->
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content mt-5">
                <div class="sx-our-services-bx">
                    <div class="row">
                        <!-- Block one -->
                        <div class="col-lg-3 col-md-12 wow fadeInDown"  data-wow-duration="2s" data-wow-duration="1.5s">
                            <div class="sx-service-bx-1 bx-2p">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-service-bx-icon scale-in-center">
                                <span class="sx-text-primary">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="19.868 38.586 160.264 121.194" viewBox="19.868 38.586 160.264 121.194" height="90" width="90" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--ub0u9g-8vfzi0"><defs><style>#comp-l4d2j53d svg [data-color="1"] {fill: #0f4bb9;}</style></defs><title id="svgcid--ub0u9g-8vfzi0"></title>
                                    <g>
                                        <path d="M149.73 83.547c-2.538-25.284-24.211-44.961-49.73-44.961S52.808 58.263 50.269 83.547c-17.67 3.837-30.401 19.54-30.401 37.674 0 21.261 17.297 38.559 38.559 38.559h83.146c21.261 0 38.559-17.297 38.559-38.559 0-18.135-12.732-33.838-30.402-37.674zm-8.157 64.423H58.427a26.755 26.755 0 0 1-16.198-5.482l21.237-21.114 13.181 13.19 36.505-35.875 8.081 8.047 6.076-30.357-30.353 6.177 8.281 8.243-28.512 28.025-13.236-13.239-28.56 28.399a26.646 26.646 0 0 1-3.252-12.763c0-13.887 10.85-25.598 24.701-26.661l5.452-.419v-5.488l-.003-.16C61.868 67.486 78.992 50.395 100 50.395c21.047 0 38.171 17.078 38.172 38.069l-.004 5.677 5.453.419c13.851 1.063 24.701 12.774 24.701 26.661 0 14.749-11.999 26.749-26.749 26.749z" fill="#0f4bb9" data-color="1"></path>
                                    </g>
                                </svg>
                                    <!-- <i class="flaticon-security"></i> -->
                                </span>
                                </div>
                                <div class="icon-content">
                                <h4 class="sx-tilte">Workplace IT</h4>
                                <div class="h-350-left">
                                    <p>Making it easier for your teams to work together and share information is a surefire way to boost productivity and gain a competitive edge.</p>
                                </div>
                                <div class="sx-center-btn mt-3-mb">
                                    <a href="{{route('workplace')}}" class="site-button-circle">
                                    <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Block Two -->
                        <div class="col-lg-3 col-md-12 wow fadeInDown" data-wow-duration="2s" data-wow-duration="1.5s">
                            <div class="sx-service-bx-1 bx-2p">
                                <div class="sx-icon-box-wraper">
                                    <div class="sx-service-bx-icon scale-in-center">
                                    <span class="sx-text-primary">
                                        <!-- <i class="flaticon-coding"></i> -->
                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="37.5 33 125 134" viewBox="37.5 33 125 134" height="90" width="90" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-55jfi235gbs7">
                                                <defs>
                                                    <style>
                                                    #comp-l4d2j53o svg [data-color="1"] {
                                                        fill: #0f4bb9;
                                                    }
                                                    </style>
                                                </defs>
                                                <title id="svgcid-55jfi235gbs7"></title>
                                                <g>
                                                    <path d="M94.846 167H44.841a2.943 2.943 0 0 1-2.941-2.945v-2.945c0-.282.04-.561.119-.831l14.707-50.061a2.944 2.944 0 0 1 2.822-2.114h20.59c1.306 0 2.453.861 2.822 2.114l14.707 50.061c.079.27.119.549.119.831v2.945a2.942 2.942 0 0 1-2.94 2.945zm-46.939-5.89H91.78l-13.841-47.116h-16.19L47.907 161.11z" fill="#0f4bb9" data-color="1"></path>
                                                    <path d="M77.197 111.049h-5.883v-2.945c0-11.063 5.498-17.669 14.707-17.669h11.766c3.298 0 7.517-2.035 9.693-4.003l1.303-1.178 1.655.588c1.632.581 3.305.876 4.974.876 8.182 0 14.84-6.663 14.84-14.855.001-9.46-8.994-16.942-18.71-14.326l-1.531-5.685a20.713 20.713 0 0 1 5.402-.733c11.427 0 20.723 9.306 20.723 20.744s-9.296 20.744-20.723 20.744a20.44 20.44 0 0 1-5.33-.712c-3.101 2.295-7.826 4.429-12.294 4.429H86.022c-7.293 0-8.824 6.406-8.824 11.779v2.946z" fill="#0f4bb9" data-color="1"></path>
                                                    <path d="M52.387 99.288C43.621 97.075 37.5 89.199 37.5 80.138c0-5.622 2.42-10.965 6.567-14.691a24.857 24.857 0 0 1-1.079-7.254c0-13.831 11.239-25.082 25.054-25.082 5.234 0 10.261 1.618 14.538 4.677l-3.421 4.791A19.006 19.006 0 0 0 68.042 39c-10.571 0-19.171 8.61-19.171 19.193 0 2.446.467 4.85 1.389 7.146l.866 2.155-1.893 1.344a13.896 13.896 0 0 0-5.85 11.299c0 6.36 4.294 11.885 10.443 13.438l-1.439 5.713z" fill="#0f4bb9" data-color="1"></path>
                                                    <path d="M115.367 62.498l-5.711-1.412c.343-1.392.517-2.837.517-4.295 0-9.871-8.022-17.902-17.883-17.902a17.823 17.823 0 0 0-15.026 8.193l-4.941-3.198C76.726 37.069 84.19 33 92.291 33c13.105 0 23.766 10.673 23.766 23.791 0 1.933-.231 3.852-.69 5.707z" fill="#0f4bb9" data-color="1"></path>
                                                    <path d="M61.947 75.19a16.172 16.172 0 0 1-.915-5.381c0-8.931 7.257-16.196 16.178-16.196 3.226 0 6.34.948 9.007 2.741l-3.278 4.889a10.246 10.246 0 0 0-5.729-1.74c-5.676 0-10.295 4.624-10.295 10.307 0 1.175.195 2.328.582 3.425l-5.55 1.955z" fill="#0f4bb9" data-color="1"></path>
                                                    <path d="M159.559 167h-58.83v-5.89h55.888v-23.558h-2.941a2.939 2.939 0 0 1-2.447-1.311l-10.893-16.357h-1.367v14.724a2.943 2.943 0 0 1-2.941 2.945h-5.883a2.939 2.939 0 0 1-2.447-1.311l-10.893-16.357h-1.367v14.724a2.943 2.943 0 0 1-2.941 2.945h-5.883a2.939 2.939 0 0 1-2.447-1.311l-10.893-16.357h-1.367v-5.89h2.941c.984 0 1.902.492 2.447 1.311l10.893 16.357h1.367V116.94a2.943 2.943 0 0 1 2.941-2.945h5.883c.984 0 1.902.492 2.447 1.311l10.893 16.357h1.367v-14.724a2.943 2.943 0 0 1 2.941-2.945h5.883c.984 0 1.902.492 2.447 1.311l10.893 16.357h4.309a2.943 2.943 0 0 1 2.941 2.945v29.448a2.943 2.943 0 0 1-2.941 2.945z" fill="#0f4bb9" data-color="1"></path>
                                                    <path fill="#0f4bb9" d="M150.734 149.331v5.89h-8.824v-5.89h8.824z" data-color="1"></path>
                                                    <path fill="#0f4bb9" d="M136.026 149.331v5.89h-8.824v-5.89h8.824z" data-color="1"></path>
                                                    <path fill="#0f4bb9" d="M121.319 149.331v5.89h-8.824v-5.89h8.824z" data-color="1"></path>
                                                </g>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="icon-content">
                                    <h4 class="sx-tilte">Factory Infra Solutions</h4>
                                    <div class="h-200-left">
                                        <p>In order to start a stable business and smooth business operation at an overseas plant, it is essential to construct a network timely from the factory building design stage, and to establish efficient operation, maintenance, and technical support system.</p>
                                    </div>
                                    <div class="sx-center-btn mt-3-mb">
                                        <a href="{{route('factory-infra-solutions')}}" class="site-button-circle">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Block Three -->
                        <div class="col-lg-3 col-md-12 wow fadeInDown" data-wow-duration="2s" data-wow-duration="1.5s">
                            <div class="sx-service-bx-1 bx-2p">
                                <div class="sx-icon-box-wraper">
                                    <div class="sx-service-bx-icon scale-in-center">
                                    <span class="sx-text-primary">
                                        <!-- <i class="flaticon-smart-contracts"></i> -->
                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="27.8 27.775 144.4 144.525" viewBox="27.8 27.775 144.4 144.525" height="90" width="90" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-vrwfy-v0xq51">
                                            <defs>
                                                <style>
                                                #comp-l4d2j5401 svg [data-color="1"] {
                                                    fill: #0f4bb9;
                                                }
                                                </style>
                                            </defs>
                                            <title id="svgcid-vrwfy-v0xq51"></title>
                                            <g>
                                                <path d="M27.8 151.9c0 11.2 9.1 20.4 20.4 20.4H137c11.2 0 20.4-9.1 20.4-20.4s-9.1-20.4-20.4-20.4h-5.6v-3.9c0-6-4.9-10.9-10.9-10.9h-7.9l-.1-.7 56-69.9v41h-13c-.7 0-1.3.4-1.7 1l-10.6 21.2H137c-1 0-1.9.8-1.9 1.9 0 1 .8 1.9 1.9 1.9h33.3c1 0 1.9-.8 1.9-1.9V40.7c0-.2 0-.4-.1-.6V40c-.1-.2-.2-.4-.3-.5v-.1l-11.1-11.1c-.7-.7-1.9-.7-2.6 0l-51.2 51.2-4.2-26.5c-.5-3.8-3.9-6.7-7.7-6.7H54.1c-4.3 0-7.8 3.5-7.8 7.8v77.5c-10.4.9-18.5 9.7-18.5 20.3zm81.1-35.2H50V54.1c0-2.3 1.8-4.1 4.1-4.1h40.8c2 0 3.8 1.5 4 3.5l10 63.2zm59.6-26v18.5h-21.1l9.3-18.5h11.8zM111.8 111l-4.4-27.7c.5 0 1-.2 1.3-.5l50.6-50.6 8.6 8.6-56.1 70.2zm16 20.5H50v-11.1h70.6c4 0 7.2 3.2 7.2 7.2v3.9zm-96.3 20.4c0-9.2 7.5-16.7 16.7-16.7H137c9.2 0 16.7 7.5 16.7 16.7s-7.5 16.7-16.7 16.7H48.1c-9.2-.1-16.6-7.5-16.6-16.7zm64.3-54.3c.4-.4.6-1 .5-1.6l-5.2-34.3c-.3-2.5-2.5-4.3-5-4.3H62.5c-2.8 0-5.1 2.3-5.1 5.1v30.1c0 .9.7 1.7 1.7 1.8l35.2 3.7h.2c.4 0 .9-.2 1.3-.5zm-3.5-3.4-31.2-3.3V62.5c0-.8.6-1.4 1.4-1.4h23.6c.7 0 1.3.5 1.4 1.2l4.8 31.9zm-31.2 11.4h11.1c1 0 1.9.8 1.9 1.9s-.8 1.9-1.9 1.9H61.1c-1 0-1.9-.8-1.9-1.9s.9-1.9 1.9-1.9zm63 44.4h7.4c1 0 1.9.8 1.9 1.9s-.8 1.9-1.9 1.9h-7.4c-1 0-1.9-.8-1.9-1.9s.9-1.9 1.9-1.9zM87 150h7.4c1 0 1.9.8 1.9 1.9s-.8 1.9-1.9 1.9H87c-1 0-1.9-.8-1.9-1.9S86 150 87 150zm-37 0h7.4c1 0 1.9.8 1.9 1.9s-.8 1.9-1.9 1.9H50c-1 0-1.9-.8-1.9-1.9S49 150 50 150z" fill="#0f4bb9" data-color="1"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="icon-content">
                                    <h4 class="sx-tilte">Overseas Construction Site</h4>
                                    <div class="h-200-left">
                                        <p>To work with Factory ERP system leader “ISC”, Bluzen is providing Total Factory Solution of IT Infra and ERP System by professional technicians. This enables you to build a systematic and rapid IT environment just like an automated factory.</p>
                                    </div>
                                    <div class="sx-center-btn mt-3-mb">
                                        <a href="{{route('overseas-construction-site')}}" class="site-button-circle">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 wow fadeInDown" data-wow-duration="2s" data-wow-duration="1.5s">
                            <div class="sx-service-bx-1 bx-2p">
                                <div class="sx-icon-box-wraper">
                                    <div class="sx-service-bx-icon scale-in-center">
                                    <span class="sx-text-primary">
                                        <!-- <i class="flaticon-smart-contracts"></i> -->
                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="57.5 15 85 170.2" viewBox="57.5 15 85 170.2" height="90" width="90" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--8eaijyweccaj">
                                            <defs>
                                                <style>
                                                #comp-l4d2j54c svg [data-color="1"] {
                                                    fill: #0f4bb9;
                                                }
                                                </style>
                                            </defs>
                                            <title id="svgcid--8eaijyweccaj"></title>
                                            <g>
                                                <path d="M97.5 15h6v28h-6V15z" fill="#0f4bb9" data-color="1"></path>
                                                <path d="M78.9 46.4l-7.3-12.7 5.5-3.1 7.2 12.6-5.4 3.2z" fill="#0f4bb9" data-color="1"></path>
                                                <path d="M105.1 66.4v6.3c9.3 0 17.3 7.5 17.3 17.2 0 .1-.1 0-.1 0h6.3c.2-12.8-10.2-23.5-23.3-23.8l-.2.3z" fill="#0f4bb9" data-color="1"></path>
                                                <path d="M100 50.8c-23.5 0-42.5 19-42.5 42.4 0 6.8 1.6 13.5 4.8 19.6 2.1 4.8 4.9 9.5 7.9 13.9 3.7 5.7 6.9 10.5 6.9 15.9v28.1c0 1.7 1.4 1.9 3.1 1.9h6.4c.5 5.9 6.3 12.6 13.4 12.6s12.9-6.6 13.4-12.6h6.4c1.8 0 3.1 0 3.1-1.9v-28.1c0-5.4 3.2-10.3 7-15.9 3.1-4.5 5.9-9.3 8-14.3 3-5.9 4.6-12.5 4.6-19.1 0-23.5-19-42.5-42.5-42.5zm0 127.9c-3.7 0-6.6-3.7-7.1-6.3h14.2c-.5 2.6-3.4 6.3-7.1 6.3zm17-12.2H83.9V158H117v8.5zm0-10.2H83.9v-6H117v6zm0-7.7H83.9v-5.1H117v5.1zm15.2-40h-.8v1.2c-1.7 4.8-4.2 9.1-7.1 13.3-4 6-7.1 11.1-7.4 18.7H83.6c-.3-7.6-3.8-12.7-7.7-18.7-2.6-4-5.5-8-7.2-12.9v-.3c-2.5-5.1-4.4-10.9-4.4-16.7 0-20 16.1-36.1 36-36.1s36 15.6 36 35.6c-.1 5.8-1.5 11.6-4.1 15.9z" fill="#0f4bb9" data-color="1"></path>
                                                <path d="M121.5 46.4l-5.4-3.1 7.2-12.6 5.4 3.1-7.2 12.6z" fill="#0f4bb9" data-color="1"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="icon-content">
                                    <h4 class="sx-tilte">Smart Street Light Solutions</h4>
                                    <div class="h-200-left">
                                        <p>Global cities are adopting smart street light system as the core infrastructure of smart city and expecting to achieve remarkable reduction of energy consumption, maintenance efforts and prevention of light pollution.</p>
                                    </div>
                                    <div class="sx-center-btn mt-3-mb">
                                        <a href="{{route('smart-street')}}" class="site-button-circle">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- COUNTER START -->
            <div class="counter-blocks bg-count pt-4-1 mt-5">
                <div class="text-center mb-5 mt-5">
                   <h2 class="bl-count-font wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s">Bluzen in Numbers</h2>
                </div>
                <div class="container">
                    <div class="row when-item-four wow fadeInDown" data-wow-delay=".8s" data-wow-duration="2s">
                        <div class="col-xl-3-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title text-white">
                                    <span class="counter">9</span>
                                    <span class="sx-cont-before">+</span>
                                </h2>
                                <div class="sx-count-info sx-count-info2 text-white">Years of Experience</div>
                            </div>
                        </div>
                        <div class="col-xl-3-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title text-white">
                                    <span class="counter">500</span>
                                    <span class="sx-cont-before">+</span>
                                </h2>
                                <div class="sx-count-info sx-count-info2 text-white">Clients Served</div>
                            </div>
                        </div>
                        <div class="col-xl-3-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title text-white">
                                    <span class="counter">30</span>
                                    <span class="sx-cont-before">+</span>
                                </h2>
                                <div class="sx-count-info sx-count-info2 text-white">IT Professionals</div>
                            </div>
                        </div>
                        <div class="col-xl-3-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title text-white">
                                <!-- <span class="sx-cont-before">+</span> -->
                                <span class="counter">9</span>
                                <!-- <span class="sx-cont-after">K</span> -->
                                </h2>
                                <div class="sx-count-info sx-count-info2 text-white">Asian Cities</div>
                            </div>
                        </div>
                        <div class="col-xl-3-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title text-white">
                                <span class="counter">200</span>
                                </h2>
                                <div class="sx-count-info sx-count-info2 text-white">Partners</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- COUNTER END -->

        <!-- SECTION OUR CLIENTS START -->
        <section class="mb-5" id="our-clients" ></section>
        <div class="section-full p-t60 p-b50 mobile-page-padding">
            <div class="container">
                <div class="c3_top">
                    <h1 data-aos="fade-left" class="wow fadeInDown">Our Clients</h1>
                    <!-- <span data-aos="fade-left" class="aos-init aos-animate"></span> -->
                    <!-- <p data-aos="fade-left" data-aos-delay="100" class="aos-init aos-animate">삼성전자 공식 온라인 파트너 ㈜포디아이의 제품을 구입하실 수 있는 스토어 입니다. <br>포디아이만의 다양한 혜택을 만나보세요. </p> -->
                </div>
                <div class="section-content mt-4">
                    <div class="sx-box m-b30">
                        <div class="icon-font container wow fadeInUp">
                            <div class="row">
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/daelim.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/hyundai.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/daewoo.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/naver.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/sk-ecoplant.webp">
                                </div>
                                <div class="icon-font-block2 border-re border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/samsung.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/korea-it.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/sdk.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/cyberlogic.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/pantos.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/shinhan.webp">
                                </div>
                                <div class="icon-font-block2 border-re border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/lg.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/cj.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/penta.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/nps.webp">
                                </div>
                                <div class="icon-font-block2 border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/nonghyup.webp">
                                </div>
                                <div class="icon-font-block2">
                                    <img src="{{asset('frontend')}}/images/clients/the-shilla.webp">
                                </div>
                                <div class="icon-font-block2 border-re border-bt border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/lg-chem.webp">
                                </div>
                                <div class="icon-font-block2 border-bt">
                                    <img src="{{asset('frontend')}}/images/clients/dongah.webp">
                                </div>
                                <div class="icon-font-block2 border-bt border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/gs.webp">
                                </div>
                                <div class="icon-font-block2 border-bt">
                                    <img src="{{asset('frontend')}}/images/clients/enzan.webp">
                                </div>
                                <div class="icon-font-block2 border-bt border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/hyundai-eng.webp">
                                </div>
                                <div class="icon-font-block2 border-re border-bt border-re-mb">
                                    <img src="{{asset('frontend')}}/images/clients/amore.webp" class="min-top-20">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION OUR CLIENTS END -->

        <!-- SECTION OUR Partners START -->
        <section class="mb-5" id="our-partners"></section>
        <div class="section-full p-t10 p-b40 mobile-page-padding">
            <div class="container">
            <hr>
                <div class="c3_top mt-4 wow fadeInDown">
                    <h1>Our Partners</h1>
                </div>
                <!-- ====== start clients ====== -->
                <section class="clients style-5 pb-100 mt-4">
                    <div class="content">
                        <div class="clients-slider5 wow fadeInLeft">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/dell.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/hewlett.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/kaspersky.png" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/cisco.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/ibm.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/fortinet.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clients-slider5 wow fadeInRight" dir="rtl">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/juniper.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/singtel.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/sangfor.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/alhua.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/doalltech.png" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/apc.webp" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="img">
                                        <img src="{{asset('frontend')}}/images/partners/m-1.webp" alt="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== end clients ====== -->
            </div>
        </div>
        <!-- SECTION OUR Partners End -->

        <!-- Contact Us START -->
            <div class="counter-blocks bg-contact wow fadeInUp">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 col-12 mt-2 wow fadeInUp">
                            <div class="mb-contact">
                            <h2 class="cp-h2">Are You Ready to Grow Your Business?</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-center wow fadeInDown">
                            <a href="{{route('contact-us')}}" class="site-button site-button2 sx-btn-primary icon sx-btn-lg">
                                <i class="fa  fa-long-arrow-right"></i>
                                Contact Us
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Contact Us END -->

        <section class="mb-2" id="our-projects"></section>
        <div class="section-full p-t60 p-b60 bg-white mobile-page-padding">
            <!-- Project START -->
            <div class="container">
                <div class="section-content">
                <!-- TITLE START -->
                     <div class="c3_top mt-4 mb-4 wow fadeInDown">
                        <h1 data-aos="fade-left" class="aos-init aos-animate">Our Projects</h1>
                    </div>
                <!-- TITLE END -->
                    <div class="container mt-4">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="masonry-item m-b30 m-b30p wow fadeInUp">
                                <div class="p-3 hover-animation-1">
                                    <div class="testimonial-user mt-4 info">
                                        <div class="text-center mb-3">
                                            <img src="{{asset('frontend')}}/images/project/get_connected.png" alt="">
                                        </div>
                                        <h6 class="testimonial-name bold-text-project">
                                            <a href="https://www.linkedin.com/posts/bluzen_bluzenvn-hcmc-gsmetro-activity-6894875692547342336-vxt2" target="_blank">
                                                HCMC Gets Connected
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="testimonial-text h-200">
                                        <p>
                                            The Ho Chi Minh Metro (HCMC Metro) is a project by GS E&C to alleviate the severe traffic congestion in the city of Ho Chi Minh and providing the Vietnamese
                                            a completely new and convenient way of moving in the near future.
                                            It is an extensive rapid transit network of elevated railways that is scheduled to start its operation in 2024 to serve the city and its surrounding provinces.
                                            <!-- Bluzen has been supporting the IT infrastructure of this monumental project. Headed by Mr Nathan of Bluzen Vietnam, our team provides IT infrastructure and maintenance services to the GS E&C offices.
                                            Read more at <a href="https://bit.ly/3AFN6OM" target="_blank">https://bit.ly/3AFN6OM</a> or you can reach out to Mr Nathan (nathan@bluzen.com) to learn more. -->
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <!-- COLUMNS 2 -->
                            <div class="masonry-item m-b30 m-b30p bottom-proj-mb right-line-mb wow fadeInDown">
                                <div class="p-3 hover-animation-1">
                                    <div class="testimonial-user-info mt-4">
                                        <div class="text-center mb-3">
                                            <img src="{{asset('frontend')}}/images/project/health-campus.jpg" alt="">
                                        </div>
                                        <h6 class="testimonial-name bold-text-project">
                                            <a href="https://www.linkedin.com/posts/bluzen_bluzen-itsupportservices-technology-activity-6883951480320208896-07x-/" target="_blank">
                                            Woodlands Health Campus
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="testimonial-text h-200">
                                        <p>
                                        Bluzen is honoured to support the IT Infrastructure of SDK in the construction of the Woodlands Health Campus - an integrated health hub that encompasses SMART technology, green space for healing as well as setting a strong ecosystem for community care.
                                        The 7.66-hectare WHC will use SMART technology and AI to increase productivity and improve the quality of patient.
                                        <!-- care. Read more at <a href="http://bitly.ws/nizF" target="_blank">http://bitly.ws/nizF</a>. -->
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <!-- COLUMNS 3 -->
                            <div class="masonry-item re-bd-pr m-b30 h-100 bottom-proj-mb right-line-mb wow fadeInUp">
                                <div class="p-3 hover-animation-1">
                                    <div class="testimonial-user-info mt-4">
                                        <div class="text-center mb-3">
                                            <img src="{{asset('frontend')}}/images/project/east-project.png" alt="">
                                        </div>
                                        <h6 class="testimonial-name bold-text-project">
                                            <a href="https://www.linkedin.com/posts/bluzen_changieastproject-enzankoubou-bluzensg-activity-6876357199438991360-hA0S" target="_blank">
                                                Changi East Project
                                            </a>
                                        </h6>
                                    </div>
                                    <div class="testimonial-text h-200">
                                        <p>
                                            Bluzen is proud to be a part of the Changi East Project by providing IT hardware support to Enzan Koubou Co. Ltd.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project END -->
        </div>
    </div>
    @include('component.script.clients-slider')
    @include('component.script.navigator-side')
@endsection
