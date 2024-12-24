<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/animate.css") }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/owl.carousel.css") }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/slick.css") }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/magnific-popup.css") }}">
    <!-- Offcanvas CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/off-canvas.css") }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("fonts/flaticon.css") }}">
    <!-- flaticon2 css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("fonts/fonts2/flaticon.css") }}">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/rsmenu-main.css") }}">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/rsmenu-transitions.css") }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/responsive.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    @yield("head")

    <script>
        $(document).ready(function () {
            // Apply Select2 with custom options to select elements with class 'custom-select'
            $('select').select2();
        });

    </script>

</head>
<body class="">


<!--Full width header Start-->
<div class="full-width-header">


    <!--Header Start-->
    <header id="rs-header" class="rs-header">

        <!-- Header Top Start -->
        <div class="rs-header-top py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="header-contact">
                            <div id="info-details" class="widget-text">
                                <i class="glyph-icon flaticon-email"></i>
                                <div class="info-text">
                                    <a href="mailto:info@domain.com">
                                        <span>{{ __("mail_us") }}</span>
                                        {{ \App\Models\Setting::key('site_email') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="header-contact pull-right">
                            <div id="phone-details" class="widget-text">
                                <i class="glyph-icon flaticon-phone-call"></i>
                                <div class="info-text">
                                    <a href="tel:4155551234">
                                        <span>{{ __("call_us") }}</span>
                                        +{{ \App\Models\Setting::key('site_phone_number') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="header-contact pull-right">
                            <div id="phone-details" class="widget-text">
                                <i class="fa-solid fa-globe"></i>
                                <div class="info-text">
                                    <form action="/change-lang" id="change-local-form">
                                        <script>
                                            const changeLang = () => {
                                                const form = document.querySelector("#change-local-form");
                                                form.submit();
                                            }
                                        </script>
                                        <input type="hidden" value="{{ url()->current() }}" name="current_url">
                                        <select onchange="changeLang()" name="lang" class="p-2">
                                            <option value="en" {{ app()->getLocale() == "en" ? "selected" : "" }}>
                                                English
                                            </option>
                                            <option value="bn" {{ app()->getLocale() == "bn" ? "selected" : "" }}>
                                                Bangla
                                            </option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Start -->
        @include("layouts.client.navbar")
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
<!--Full width header End-->

<div style="min-height: 50vh;">
    @yield("main")
</div>

@include("layouts.client.footer")

@include("layouts.client.sidebar")

<!-- Side Menu  -->
<div id="fixed-sidemenu" class="p-2 bg-blue-100">
    <ul>
        <li>
            <a title="Click to Contant on Whatsapp" target="_blank"
               href="{{ route('whatsapp') }}?text=Hello">
                <img width="40px" height="40px" src="{{ asset('/images/whatsapp-icon.png') }}" alt="">
            </a>
        </li>
        <li>
            <a title="Book An Appointment" target="_blank" href="{{ route('appointments.index') }}">
                <img width="40px" height="40px" src="{{ asset('/images/book-appointment-icon.png') }}" alt="">
            </a>
        </li>
    </ul>
</div>
<!-- End Side Menu  -->


<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- modernizr js -->
<script src="js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="js/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- slick.min js -->
<script src="js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- counter top js -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- magnific popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- rsmenu js -->
<script src="js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>