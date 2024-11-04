@extends("layouts.client.layout")

@section("head")
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("main")
    <div class="row justify-content-center mb-5" id="search-section">
        <img height="400px" src="/images/{{ \App\Models\Setting::key("homepage_banner_image") }}" id="search-section-bg"
             alt="">
        <section class="search-section col-lg-12">
            <div class="container">
                <h2 class="mb-4">
                    {{ __(\App\Models\Setting::key("homepage_search_field_label")) }}
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form method="get" action="{{ route("doctors.index") }}">
                            <div class="search-box d-flex">
                                <select name="city_id" id="city-selector" class="form-control p-2 w-50 mx-2"
                                        aria-label="Select Location">
                                    <option value="-1" selected>All City</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" {{ $city->id == request()->get("city_id", null) ? "selected" : "" }}>
                                            {{ $city->name }} - {{ $city->doctors->count() }}
                                        </option>
                                    @endforeach
                                </select>
                                <select name="speciality_id" id="speciality-selector" class="form-control p-2 w-50 mx-2"
                                        aria-label="Select Specialty">
                                    <option value="-1" selected>All Speciality</option>
                                    @foreach($specialities as $speciality)
                                        <option value="{{ $speciality->id }}" {{ $speciality->id == request()->get("speciality_id", null) ? "selected" : "" }}>
                                            {{ $speciality->name }} - {{ $speciality->doctors->count() }}
                                        </option>
                                    @endforeach
                                </select>
                                <button class="btn search-btn text-white">
                                    Search <i class="fa-solid fa-magnifying-glass text-white mx-2"></i>
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
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer; border-bottom-right-radius: 5%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Card 2 -->
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer;border-radius: 2%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer;border-radius: 2%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer;border-radius: 2%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 5 -->
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer;border-radius: 2%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Card 6 -->
            <div class="col-lg-2">
                <div class="card rounded text-center"
                     style="background: rgba(255,244,234,0.98);border: 1px solid #ffffff;box-shadow: 0px 0px 5px #cdcdcd;cursor: pointer;border-radius: 2%!important;width: 180px;height: 50px;line-height: 40px;">
                    <div class="row g-0">
                        <div class="col-12 text-center mx-1">
                            <p>
                                <i class="fa-solid fa-calendar-check" style="font-size: 1rem;"></i>
                                Book Appointment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Sesvices Section  --}}

    <br>


    <!-- Hospitals Slider -->
    <div id="rs-courses" class="rs-courses sec-color sec-spacer  py-0 pt-2">
        <div class="row mx-1 justify-content-center">
            <h3 style="border-bottom: 3px solid #0056a9!important;">Top Hospitals</h3>
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
            <h3 style="border-bottom: 3px solid #0056a9!important;">Top Doctors</h3>
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