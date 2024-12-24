@php
    use App\Models\Setting;
@endphp

@extends("layouts.client.layout")

@section("head")
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("main")

    {{--  main slider  --}}
    <div id="hero-carousel">
        @foreach($mainSlides as $mainSlide)
            <a href="{{ $mainSlide->link }}">
                <img style="max-height: 320px; width: 100%;" src="/images/{{ $mainSlide->image }}" alt=""/>
            </a>
        @endforeach
    </div>
    {{--  end main slider  --}}



    {{--  Services Section  --}}
    <section class="mt-[600px]">
        <div class="row row-cols-1 row-cols-md-2 g-3 pb-5 bg-primary px-5 justify-content-around">
            <h3 class="text-center col-lg-12 mb-5 mt-3" style="">
                <span class="p-2 px-5 rounded text-white" style="border-bottom: 2px solid #ffffff;">
                    {{ __("Our Services") }}
                </span>
            </h3>

            <!-- Service Card 1 -->
            @foreach($services as $service)
                <a href="{{ route('blogs.show', ['blogIdentifier' => $service->blog->slug]) }}"
                   style=""
                   class="service mx-1 px-0 flex align-items-center justify-content-start mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                    <img style="max-width: 50px; min-height:50px; margin-right: 5px; object-fit: fill;"
                         src="/images/{{ $service->image }}" alt="">
                    <strong>{{ $service->name }}</strong>
                </a>
            @endforeach
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '2']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Pathology sample collection at Home</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '3']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Hospital Admission</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '4']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Emergency Patient Support</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '5']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Air and Ground Ambulance Support</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '6']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Medical Visa process</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '7']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Hotel and apartment booking</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '8']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Nursing Care At Home</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '9']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Medicine & Medical Equipment Supply</strong>--}}
            {{--            </a>--}}
            {{--            <a href="{{ route('blogs.show', ['blogIdentifier' => '10']) }}"--}}
            {{--               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"--}}
            {{--               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">--}}
            {{--                <strong>Physiotherapy At Home</strong>--}}
            {{--            </a>--}}
        </div>
    </section>
    {{-- End Services Section  --}}

    <br>


    <!-- Hospitals Slider -->
    <div id="rs-courses" class="rs-courses sec-color sec-spacer  py-0 pt-2">
        <div class="row mx-1 justify-content-center">
            <div class="mb-3 text-center">
                <h3 class="mb-0" style="border-bottom: 3px solid #0056a9!important;">
                    {{ __("Top Hospitals") }}
                </h3>
                <div>
                    <small>
                        {{ Setting::key("homepage_top_hospital_slider_title_text") }}
                    </small>
                </div>
            </div>
            <div class="col-12">
                <div id="" class="hospital-carousel" data-loop="true" data-items="4"
                     data-margin="30"
                     data-autoplay="false" data-autoplay-timeout="1000" data-smart-speed="1200" data-dots="false"
                     data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false"
                     data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false"
                     data-ipad-device-dots="false" data-md-device="4" data-md-device-nav="false"
                     data-md-device-dots="false">
                    @foreach($hospitals as $hospital)
                        <div class="cource-item rounded border"
                             onclick="window.location='{{ route('hospitals.show', ['id' => $hospital->slug ]) }}'"
                             style="cursor: pointer; width: 13rem; overflow: hidden; "
                        >
                            <div class="cource-img pb-0 mb-0"
                                 style="max-height: 130px; min-height: 130px; overflow: hidden; display: flex;">
                                <img src="/images/{{ $hospital->image }}" alt=""
                                     style="margin: auto; "/>
                            </div>
                            <div class="course-body p-0 text-left flex">
                                <small href="{{ route('hospitals.show', ['id' => $hospital->id]) }}"
                                       class="course-category p-1 text-center">
                                    {{ $hospital->name }}
                                    <sup class="fa-solid fa-circle text-dark" style="font-size: .3em!important;"></sup>
                                    <small class="text-secondary">{{ $hospital->city->name ?? "" }}</small>
                                    <i class="fa-solid fa-location-dot text-danger"
                                       style="font-size: .8em!important;"></i>
                                </small>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Hospitals Slider -->


    <!-- Doctors Slider -->
    <div id="rs-courses" class="rs-courses sec-color sec-spacer mt-3 mb-5 py-1 pt-2">
        <div class="row py-2 mx-1 justify-content-center">
            <div class="text-center mb-3">
                <h3 class="mb-0" style="border-bottom: 3px solid #0056a9!important;">
                    {{ __("Top Doctors") }}
                </h3>
                <small>
                    {{ Setting::key("homepage_top_doctor_slider_title_text") }}
                </small>
            </div>
            <div class="col-12">
                <div class="doctor-carousel owl-carousel py-2" data-loop="true" data-items="6" data-margin="30"
                     data-autoplay="true" data-autoplay-timeout="500" data-smart-speed="1000" data-dots="true"
                     data-nav="false" data-nav-speed="true" data-mobile-device="2" data-mobile-device-nav="true"
                     data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                     data-ipad-device-dots="true" data-md-device="6" data-md-device-nav="false"
                     data-md-device-dots="true">
                    @foreach($doctors as $doctor)
                        <a href="{{ route('doctors.show', ['id' => $doctor->slug ]) }}" class="top-doctor">
                            <img class="doctor-img" src="/images/{{ $doctor->profile_picture }}" alt=""/>
                            <div class="mt-2">
                                <strong>
                                    {{ $doctor->firstname ." ". $doctor->lastname }}
                                </strong>
                                <small>
                                    {{ $doctor?->city?->country->icon_symbol ?? "" }}
                                </small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Slider -->

    <!-- About Us -->
    <div class="container-fluid py-2 bg-white">
        <h2 class="bg-white text-center underline mb-1">About Us</h2>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="img-border">
                    <img style="max-height: 250px" class="img-fluid" src="/images/aboutus.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="h-100">
                    <div class="mt-4" style="line-height: 20px;">
                        About Us – Empathy Health Service
                        At Empathy Health Service, we are dedicated to bridging the gap between patients and world-class
                        healthcare facilities. Our mission is to ensure that every individual receives the care and
                        guidance they need, no matter where they are.

                        We specialize in:

                        Doctor’s Appointments: Connecting patients with experienced doctors across a wide range of
                        specialties.
                        Hospital Recommendations: Providing tailored hospital recommendations both locally and
                        internationally to suit your medical needs.
                        Our extensive network spans across Bangladesh, Thailand, India, and Malaysia, offering patients
                        the opportunity to explore the best medical options available.
                    </div>
                    <a class="btn btn-primary rounded-pill mt-3 py-2 px-4" href="{{ route('about-us') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->


    <!-- Testimonial Start -->
    <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2 class="">WHAT PEOPLE SAYS</h2>
                <p class="">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div  class="testimonial-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                        <div class="testimonial-item">
                            <div class="testi-img">
                                <img src="images/testimonial/1.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-desc">
                                <h4 class="testi-name">Luise Henrikes</h4>
                                <p>
                                    Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testi-img">
                                <img src="images/testimonial/2.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-desc">
                                <h4 class="testi-name">Aliana D’suza</h4>
                                <p>
                                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testi-img">
                                <img src="images/testimonial/3.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-desc">
                                <h4 class="testi-name">Aliana D’suza</h4>
                                <p>
                                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testi-img">
                                <img src="images/testimonial/4.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-desc">
                                <h4 class="testi-name">Aliana D’suza</h4>
                                <p>
                                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testi-img">
                                <img src="images/testimonial/5.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-desc">
                                <h4 class="testi-name">Aliana D’suza</h4>
                                <p>
                                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Hero Slider -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#hero-carousel").owlCarousel({
                navigation: true, // Show next and prev buttons
                slideSpeed: 2000,
                paginationSpeed: 2000,
                items: 1,
                loop: true,
                itemsDesktop: false,
                itemsDesktopSmall: false,
                itemsTablet: false,
                itemsMobile: false,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                dots: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                // animateOut: 'slideOutRight',
                // animateIn: 'slideInRight',
            });
        });
    </script>


    <!-- Doctor Slider -->
    <script type="text/javascript">
        setTimeout(() => {
            $('.doctor-carousel').each(function () {
                var owlCarousel = $(this),
                    loop = owlCarousel.data('loop'),
                    items = owlCarousel.data('items'),
                    margin = owlCarousel.data('margin'),
                    stagePadding = owlCarousel.data('stage-padding'),
                    autoplay = owlCarousel.data('autoplay'),
                    autoplayTimeout = owlCarousel.data('autoplay-timeout'),
                    smartSpeed = owlCarousel.data('smart-speed'),
                    dots = owlCarousel.data('dots'),
                    nav = owlCarousel.data('nav'),
                    navSpeed = owlCarousel.data('nav-speed'),
                    xsDevice = owlCarousel.data('mobile-device'),
                    xsDeviceNav = owlCarousel.data('mobile-device-nav'),
                    xsDeviceDots = owlCarousel.data('mobile-device-dots'),
                    smDevice = owlCarousel.data('ipad-device'),
                    smDeviceNav = owlCarousel.data('ipad-device-nav'),
                    smDeviceDots = owlCarousel.data('ipad-device-dots'),
                    mdDevice = owlCarousel.data('md-device'),
                    mdDeviceNav = owlCarousel.data('md-device-nav'),
                    mdDeviceDots = owlCarousel.data('md-device-dots');

                owlCarousel.owlCarousel({
                    loop: (loop ? true : false),
                    items: 6,
                    lazyLoad: true,
                    margin: (margin ? margin : 0),
                    //stagePadding: (stagePadding ? stagePadding : 0),
                    autoplay: true,
                    autoplayTimeout: 1500,
                    dots: false,
                    nav: false,
                    // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    navSpeed: (navSpeed ? true : false),
                    responsiveClass: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 3000,
                    smartSpeed: 6000,
                    slideSpeed: 500,
                    responsive: {
                        0: {
                            items: 2,
                            nav: false,
                            dots: false
                        },
                        768: {
                            items: 4,
                            nav: false,
                            dots: false
                        },
                        992: {
                            items: 5,
                            nav: false,
                            dots: false
                        }
                    }
                });

            });
        }, 1000)
    </script>


    <!-- Hospital Slider -->
    <script type="text/javascript">
        setTimeout(() => {
            $('.hospital-carousel').each(function () {
                var owlCarousel = $(this),
                    loop = owlCarousel.data('loop'),
                    items = owlCarousel.data('items'),
                    margin = owlCarousel.data('margin'),
                    stagePadding = owlCarousel.data('stage-padding'),
                    autoplay = owlCarousel.data('autoplay'),
                    autoplayTimeout = owlCarousel.data('autoplay-timeout'),
                    smartSpeed = owlCarousel.data('smart-speed'),
                    dots = owlCarousel.data('dots'),
                    nav = owlCarousel.data('nav'),
                    navSpeed = owlCarousel.data('nav-speed'),
                    xsDevice = owlCarousel.data('mobile-device'),
                    xsDeviceNav = owlCarousel.data('mobile-device-nav'),
                    xsDeviceDots = owlCarousel.data('mobile-device-dots'),
                    smDevice = owlCarousel.data('ipad-device'),
                    smDeviceNav = owlCarousel.data('ipad-device-nav'),
                    smDeviceDots = owlCarousel.data('ipad-device-dots'),
                    mdDevice = owlCarousel.data('md-device'),
                    mdDeviceNav = owlCarousel.data('md-device-nav'),
                    mdDeviceDots = owlCarousel.data('md-device-dots');

                owlCarousel.owlCarousel({
                    loop: (loop ? true : false),
                    items: 6,
                    lazyLoad: true,
                    margin: (margin ? margin : 0),
                    //stagePadding: (stagePadding ? stagePadding : 0),
                    autoplay: true,
                    autoplayTimeout: 1500,
                    dots: false,
                    nav: false,
                    // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    navSpeed: (navSpeed ? true : false),
                    responsiveClass: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 3000,
                    smartSpeed: 6000,
                    slideSpeed: 500,
                    responsive: {
                        0: {
                            items: 2,
                            nav: false,
                            dots: false
                        },
                        768: {
                            items: 4,
                            nav: false,
                            dots: false
                        },
                        992: {
                            items: 5,
                            nav: false,
                            dots: false
                        }
                    }
                });

            });
        }, 1000)
    </script>


    <!-- Testimonial Slider -->
    <script type="text/javascript">
        setTimeout(() => {
            $('.testimonial-carousel').each(function () {
                var owlCarousel = $(this),
                    loop = owlCarousel.data('loop'),
                    items = owlCarousel.data('items'),
                    margin = owlCarousel.data('margin'),
                    stagePadding = owlCarousel.data('stage-padding'),
                    autoplay = owlCarousel.data('autoplay'),
                    autoplayTimeout = owlCarousel.data('autoplay-timeout'),
                    smartSpeed = owlCarousel.data('smart-speed'),
                    dots = owlCarousel.data('dots'),
                    nav = owlCarousel.data('nav'),
                    navSpeed = owlCarousel.data('nav-speed'),
                    xsDevice = owlCarousel.data('mobile-device'),
                    xsDeviceNav = owlCarousel.data('mobile-device-nav'),
                    xsDeviceDots = owlCarousel.data('mobile-device-dots'),
                    smDevice = owlCarousel.data('ipad-device'),
                    smDeviceNav = owlCarousel.data('ipad-device-nav'),
                    smDeviceDots = owlCarousel.data('ipad-device-dots'),
                    mdDevice = owlCarousel.data('md-device'),
                    mdDeviceNav = owlCarousel.data('md-device-nav'),
                    mdDeviceDots = owlCarousel.data('md-device-dots');

                owlCarousel.owlCarousel({
                    loop: (loop ? true : false),
                    items: 2,
                    lazyLoad: true,
                    margin: (margin ? margin : 0),
                    //stagePadding: (stagePadding ? stagePadding : 0),
                    autoplay: true,
                    autoplayTimeout: 1500,
                    dots: true,
                    nav: false,
                    // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    navSpeed: (navSpeed ? true : false),
                    responsiveClass: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 3000,
                    smartSpeed: 6000,
                    slideSpeed: 500,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false,
                            dots: false
                        },
                        768: {
                            items: 2,
                            nav: false,
                            dots: false
                        },
                        992: {
                            items: 2,
                            nav: false,
                            dots: false
                        }
                    }
                });

            });
        }, 1000)
    </script>
@endsection