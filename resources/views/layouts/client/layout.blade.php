<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Empathy Health Service | Hospital assistance | Cheap medical tourism packages</title>
    <meta name="description" content="Empathy Health Service provides Doctor's appointments and Hospitals recommendations in Home and Abroad. We provide proper medical options for the patients in Bangladesh, Thailand, India and Malaysia.">
    <meta name="keywords" content="Doctors appointment, Physiotherapy (sample collection) Home Emergency Patient Support, Hospital Admission Support, Online Consultation, Nursing Care at Home, Medicine & Medical Equipment Supply">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <!-- Offcanvas CSS -->
    <link rel="stylesheet" type="text/css" href="/css/off-canvas.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <!-- flaticon2 css  -->
    <link rel="stylesheet" type="text/css" href="fonts/fonts2/flaticon.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="/css/rsmenu-main.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="/css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home5">
    <!--Preloader area start here-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>

    <!--Full width header Start-->
    <div class="full-width-header">

        <!-- Toolbar Start -->
        <div class="rs-toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="rs-toolbar-left">
                            <div class="welcome-message">
                                <i class="glyph-icon flaticon-placeholder"></i>
                                <span>Empathy Health Service, BD</span>
                            </div>
                            <div class="welcome-message">
                                <i class="glyph-icon flaticon-phone-call"></i>
                                <span><a href="tel:+8801332832670">+8801332832670</a></span>
                            </div>
                            <div class="welcome-message">
                                <i class="glyph-icon flaticon-email"></i>
                                <span><a href="mailto:empathyhealths@gmail.com">empathyhealths@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-toolbar-right">
                            <form action="/change-lang" id="change-local-form">
                                <script>
                                    const changeLang = () => {
                                        const form = document.querySelector('#change-local-form');
                                        form.submit();
                                    }
                                </script>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-translate" viewBox="0 0 16 16">
                                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z" />
                                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31" />
                                </svg>
                                <input type="hidden" value="{{ url()->current() }}" name="current_url">
                                <select onchange="changeLang()" name="lang" class="">
                                    <option value="en" {{ app()->getLocale() == "en" ? "selected" : "" }}>
                                        English
                                    </option>
                                    <option value="bn" {{ app()->getLocale() == "bn" ? "selected" : "" }}>
                                        বাংলা
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container relative">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <div class="logo-area">
                                <a href="/"><img src="/images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <div class="main-menu">
                                <!-- <div id="logo-sticky" class="text-center">
                                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                                    </div> -->
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                @include('layouts.client.navbar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
    </div>
    <!--Full width header End-->
    @yield('main')
    <!-- Footer Start -->
    <footer id="rs-footer" class="bg3 rs-footer">
        <div class="container">
            <!-- Footer Address -->
            <div>
                <div class="row footer-contact-desc">
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Address</h4>
                            <p class="contact-desc">
                                House # 1/B, Green Corner (4th floor),<br>
                                Green Road, Dhaka-1205, Bangladesh
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-phone"></i>
                            <h4 class="contact-title">Phone Number</h4>
                            <p class="contact-desc">
                                01332832670<br>
                                01332832671
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Email Address</h4>
                            <p class="contact-desc">
                                empathyhealths@gmail.com<br>
                                www.tophospitalsupportbd.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="about-widget">
                            <img src="/images/logo.png" alt="Footer Logo">
                            <p>Empathy Health Service connects patients to top doctors and hospitals in Bangladesh, Thailand, India, and Malaysia,</p>
                            <p class="margin-remove">providing reliable, healthcare options.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">RECENT POSTS</h5>
                        <div class="recent-post-widget">
                            <div class="post-item">
                                <div class="post-date">
                                    <span>20</span>
                                    <span>Jan</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">Empathy Service connects </a></h5>
                                    <span class="post-category">to top doctors and hospitals.</span>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>Jan</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">The doctors were outstanding</a></h5>
                                    <span class="post-category">throughout my treatment journey.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">OUR SITEMAP</h5>
                        <ul class="sitemap-widget">
                            <li class="active"><a href="/"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                            <li><a href="courses-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses Details</a></li>
                            <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                            <li><a href="events-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events Details</a></li>
                            <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                            <li><a href="blog-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Details</a></li>
                            <li><a href="teachers.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a></li>
                            <li><a href="teachers-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers Details</a></li>
                            <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                            <li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error 404</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">NEWSLETTER</h5>
                        <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                        <form class="news-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email">
                            <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="footer-share">
                    <ul>
                        <li><a href="https://www.facebook.com/empathyhealthservice"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/@EmpathyHealthService"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/empathyhealthservice"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://wa.me/1332832670"><i class="fa-brands fa-whatsapp"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© {{date('Y')}} <a href="#">Empathy Health Service</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle">
        <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
        <div class="canvas-logo">
            <a href="/"><img src="/images/logo-white.png" alt="logo"></a>
        </div>
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <!--Home Menu Start-->
            <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="/">Home One<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--Home Menu End-->

            <!--About Menu Start-->
            <li class="menu-item-has-children"><a href="#">About Us</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="/">About One<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--About Menu End-->

            <!--Pages Menu Start-->
            <li class="menu-item-has-children"><a href="#">Pages</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--Pages Menu End-->

            <!--Courses Menu Star-->
            <li class="menu-item-has-children"><a href="#">Courses</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--Courses Menu End-->

            <!--Events Menu Star-->
            <li class="menu-item-has-children"><a href="#">Events</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--Events Menu End-->

            <!--blog Menu Star-->
            <li class="menu-item-has-children"><a href="#">Blog</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
                </ul>
            </li>
            <!--blog Menu End-->
            <li><a href="contact.html">Contact<span class="icon"></span></a></li>
        </ul>
        <div class="search-wrap">
            <label class="screen-reader-text">Search for:</label>
            <input type="search" placeholder="Search..." name="s" class="search-input" value="">
            <button type="submit" value="Search"><i class="fa fa-search"></i></button>
        </div>
    </nav>
    <!-- Canvas Menu end -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="eg: Computer Technology" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="/js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- slick.min js -->
    <script src="/js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="/js/wow.min.js"></script>
    <!-- counter top js -->
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- magnific popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- rsmenu js -->
    <script src="/js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- main js -->
    <script src="/js/main.js"></script>
</body>

</html>