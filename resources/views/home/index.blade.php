@php
    use App\Models\Setting;
@endphp

@extends("layouts.client.layout")

@section("head")
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("main")

    {{--  main slider  --}}
    @if( !!Setting::key("homepage_show_slide") && $sliderHospitals->count() )
    <div id="owl-carousel">
        @foreach($sliderHospitals as $hospital)
            <img style="max-height: 320px" src="/images/{{ $hospital->image }}" alt=""/>
        @endforeach
    </div>
    @endif
    {{--  end main slider  --}}

    <div class="row justify-content-center mb-5 pt-0" id="search-section">
        <img height="400px" src="/images/{{ Setting::key("homepage_banner_image") }}" id="search-section-bg" alt="">
        <section class="search-section col-lg-12">
            <div class="container">
                <h2 class="mb-4">
                    {{ __(Setting::key("homepage_search_field_label")) }}
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form method="get" action="{{ route("doctors.index") }}">
                            <div class="search-box d-flex">
                                <select name="country_id" id="city-selector" class="form-control p-2 w-50 mx-2"
                                        aria-label="Select Country">
                                    <option value="-1" selected>{{ __("Select Country") }}</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ $country->id == request()->get("country_id", null) ? "selected" : "" }}>
                                            {{ $country->name }} - {{ $country->doctors->count() }}
                                        </option>
                                    @endforeach
                                </select>
                                <select name="speciality_id" id="speciality-selector" class="form-control p-2 w-50 mx-2"
                                        aria-label="Select Specialty">
                                    <option value="-1" selected>{{ __("All Speciality") }}</option>
                                    @foreach($specialities as $speciality)
                                        <option value="{{ $speciality->id }}" {{ $speciality->id == request()->get("speciality_id", null) ? "selected" : "" }}>
                                            {{ $speciality->name }} - {{ $speciality->doctors->count() }}
                                        </option>
                                    @endforeach
                                </select>
                                <button class="btn search-btn text-white">
                                    {{ __("Search") }} <i class="fa-solid fa-magnifying-glass text-white mx-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{--  Sesvices Section  --}}
    <section class="mt-[600px]">
        <div class="row row-cols-1 row-cols-md-2 g-3 pb-5 bg-primary px-5 justify-content-around">
            <h3 class="text-center col-lg-12 mb-5 mt-3" style="">
                <span class="p-2 px-5 rounded text-white" style="border-bottom: 2px solid #ffffff;">Our Services</span>
            </h3>

            <!-- Service Card 1 -->
            <a href="{{ route('blogs.show', ['blogIdentifier' => '1']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Doctors appointment</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '2']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Pathology sample collection at Home</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '3']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Hospital Admission</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '4']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Emergency Patient Support</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '5']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Air and Ground Ambulance Support</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '6']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Medical Visa process</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '7']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Hotel and apartment booking</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '8']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Nursing Care At Home</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '9']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Medicine & Medical Equipment Supply</strong>
            </a>
            <a href="{{ route('blogs.show', ['blogIdentifier' => '10']) }}"
               style="border: 1.5px solid rgba(255,0,0,0.67); display: flex; border-radius: 5px; background: #ffffff; color: black"
               class="mx-1 flex align-items-center justify-content-center mb-2 col-lg-2 col-md-5 col-sm-5 col-xs-12 mb-2">
                <strong>Physiotherapy At Home</strong>
            </a>
        </div>
    </section>
    {{-- End Sesvices Section  --}}

    <br>


    <!-- Hospitals Slider -->
    <div id="rs-courses" class="rs-courses sec-color sec-spacer  py-0 pt-2">
        <div class="row mx-1 justify-content-center">
            <div class="mb-3 text-center">
                <h3 class="mb-0" style="border-bottom: 3px solid #0056a9!important;">Top Hospitals</h3>
                <div>
                    <small>
                        {{ Setting::key("homepage_top_hospital_slider_title_text") }}
                    </small>
                </div>
            </div>
            <div class="col-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="6" data-margin="30"
                     data-autoplay="false" data-autoplay-timeout="1000" data-smart-speed="1200" data-dots="true"
                     data-nav="false" data-nav-speed="true" data-mobile-device="1" data-mobile-device-nav="true"
                     data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                     data-ipad-device-dots="true" data-md-device="6" data-md-device-nav="false"
                     data-md-device-dots="true">
                    @foreach($hospitals as $hospital)
                        <div class="cource-item rounded border"
                             onclick="window.location='{{ route('hospitals.show', ['id' => $hospital->slug ]) }}'"
                             style="cursor: pointer; width: 200px; overflow: hidden; "
                        >
                            <div class="cource-img pb-0 mb-0">
                                <img src="/images/{{ $hospital->image }}" alt=""/>
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
                <h3 class="mb-0" style="border-bottom: 3px solid #0056a9!important;">Top Doctors</h3>
                <small>
                    {{ Setting::key("homepage_top_doctor_slider_title_text") }}
                </small>
            </div>
            <div class="col-12">
                <div class="doctor-carousel owl-carousel py-2" data-loop="true" data-items="6" data-margin="30"
                     data-autoplay="true" data-autoplay-timeout="500" data-smart-speed="1000" data-dots="true"
                     data-nav="false" data-nav-speed="true" data-mobile-device="1" data-mobile-device-nav="true"
                     data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                     data-ipad-device-dots="true" data-md-device="6" data-md-device-nav="false"
                     data-md-device-dots="true">
                    @foreach($doctors as $doctor)
                        <a href="{{ route('doctors.show', ['id' => $doctor->slug ]) }}" class="top-doctor text-center">
                            <img class="doctor-img" src="/images/{{ $doctor->profile_picture }}" alt=""/>
                            <strong>
                                {{ $doctor->qualification }}. {{ $doctor->firstname }}
                            </strong>
                            <small>
                                {{ $doctor?->city?->country->icon_symbol ?? "" }}
                            </small>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Slider -->

    <!-- About Us -->
    <div class="container-fluid py-2 bg-white">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="img-border">
                    <img class="img-fluid" src="/assets/img/about.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="h-100">
                    <h2 class="bg-white text-start text-success pe-3">About Us</h2>
                    <div>
                        <small>Best Hospital Booking Site</small>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('about-us') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

    <script type="text/javascript">
        $('.rs-carousel').each(function () {
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
                items: 4,
                lazyLoad: true,
                margin: (margin ? margin : 0),
                //stagePadding: (stagePadding ? stagePadding : 0),
                autoplay: true,
                autoplayTimeout: 500,
                dots: (dots ? true : false),
                nav: false,
                // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                navSpeed: (navSpeed ? true : false),
                responsiveClass: true,
                slideTransition: 'linear',
                autoplaySpeed: 3000,
                smartSpeed: 6000,
                slideSpeed: 200,
                responsive: {
                    0: {
                        items: (xsDevice ? xsDevice : 1),
                        nav: false,
                        dots: false
                    },
                    768: {
                        items: (smDevice ? smDevice : 4),
                        nav: false,
                        dots: false
                    },
                    992: {
                        items: (mdDevice ? mdDevice : 4),
                        nav: false,
                        dots: false
                    }
                }
            });

        });
    </script>
    <!-- Courses End -->

    <!-- Main Slider -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#owl-carousel").owlCarousel({
                navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                items: 1,
                itemsDesktop: false,
                itemsDesktopSmall: false,
                itemsTablet: false,
                itemsMobile: false,
                nav:true,

                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                // animateOut: 'slideOutRight',
                // animateIn: 'slideInRight',
            });
        });
    </script>

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
                    items: 4,
                    lazyLoad: true,
                    margin: (margin ? margin : 0),
                    //stagePadding: (stagePadding ? stagePadding : 0),
                    autoplay: true,
                    autoplayTimeout: 500,
                    dots: (dots ? true : false),
                    nav: false,
                    // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    navSpeed: (navSpeed ? true : false),
                    responsiveClass: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 3000,
                    smartSpeed: 6000,
                    slideSpeed: 200,
                    responsive: {
                        0: {
                            items: (xsDevice ? xsDevice : 1),
                            nav: false,
                            dots: false
                        },
                        768: {
                            items: (smDevice ? smDevice : 4),
                            nav: false,
                            dots: false
                        },
                        992: {
                            items: (mdDevice ? mdDevice : 4),
                            nav: false,
                            dots: false
                        }
                    }
                });

            });
        }, 1000)
    </script>
@endsection