@php
use App\Models\Setting;
@endphp

@extends("layouts.client.layout")

@section("main")

{{-- main slider  --}}

<!-- Slider Area Start -->
<div id="rs-slider" class="slider-overlay-2 d-none d-sm-block">
    <div id="home-slider">
        <!-- Item 1 -->
        <div class="item active">
            <img src="/images/slider/home1/slider1.jpg" alt="Slide1" />
        </div>

        <!-- Item 2 -->
        <div class="item">
            <img src="/images/slider/home1/slider2.jpg" alt="Slide2" />
        </div>

        <!-- Item 3 -->
        <div class="item">
            <img src="/images/slider/home1/slider1.jpg" alt="Slide3" />
        </div>

    </div>
</div>
<!-- Slider Area End -->


<!-- Mobile Slider Area Start -->
<div id="rs-mobile-slider" class="slider-overlay-2 d-sm-none">
    <div id="home-slider-mobile">
        <!-- Item 1 -->
        <div class="item active">
            <img src="/images/slider/home1/slider1.jpg" alt="Slide1" />
        </div>

        <!-- Item 2 -->
        <div class="item">
            <img src="/images/slider/home1/slider2.jpg" alt="Slide2" />
        </div>

        <!-- Item 3 -->
        <div class="item">
            <img src="/images/slider/home1/slider2.jpg" alt="Slide3" />
        </div>

    </div>
</div>
<!-- Mobile Slider Area End -->

<!-- Services Start -->
<div class="rs-services rs-services-style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">Doctor's appointment</h4>
                        <p>We provide doctor's appointments and hospital assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-book rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">Medical Visa Process</h4>
                        <p>We assist you with the easiest way to process medical visa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-user rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">Air Ambulance</h4>
                        <p>We provide the best air ambulance facility for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">Online Consultation</h4>
                        <p>We offer the easiest way to consult with our doctors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- About Us Start -->
<div id="rs-about" class="rs-about sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>ABOUT US</h2>
            <p>Empathy Health Service provides Doctor’s appointments and Hospitals recommendations in Home and Abroad.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-img rs-animation-hover">
                    <img src="/images/about/about.jpg" alt="img02" />
                    <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=8fzlDcfX_Qo" title="Video Icon">
                    </a>
                    <div class="overly-border"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-desc">
                    <h3>WELCOME TO EMPATHY HEALTH SERVICE</h3>
                    <p>We provide proper medical options for the patients in Bangladesh, Thailand, India and Malaysia.</p>
                </div>
                <div id="accordion" class="rs-accordion-style1">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Our History
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Founded to bridge the gap in global healthcare, we connect patients to doctors and hospitals in Bangladesh, Thailand, India, and Malaysia, ensuring quality care since inception.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Our Mission
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                To provide patients with reliable medical options, seamless doctor appointments, and hospital recommendations at home and abroad, fostering trust and accessibility.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header mb-0" id="headingThree">
                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Our Vision
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                To be a leading global healthcare navigator, empowering patients with informed choices and personalized solutions for a healthier future.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

<!-- Hospital Start -->
<div id="rs-courses" class="rs-courses sec-color sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR PARTNER HOSPITALS</h2>
            <p>Collaborating with Renowned Medical Institutions Worldwide to Ensure Exceptional Healthcare Services.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/1.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">

                            <h4 class="course-title"><a href="https://wa.me/1332832670">Bamrungrad International Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">25 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Bangkok, Thailand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/2.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">

                            <h4 class="course-title"><a href="https://wa.me/1332832670">Bangkok Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">39 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Bangkok, Thailand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/3.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Samitivej Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">22 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Bangkok, Thailand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/4.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Intrarat Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">22 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Bangkok, Thailand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/5.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Med Park Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">22 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Bangkok, Thailand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/6.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Prince Court Medical center</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">22 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    kuala lumpur, Malaysia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/7.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Sun way medical Center</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">27 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    kuala lumpur, Malaysia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/8.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Subang Jaya Medical Center</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">24 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    kuala lumpur, Malaysia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/9.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Evercare Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">29 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/10.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Evercare Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">23 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Chittagong, Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="/images/team/11.jpg" alt="" />
                            <a class="image-link" href="https://wa.me/1332832670" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>

                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a href="https://wa.me/1332832670">Central Hospital</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">13 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

<!-- Team Doctor Start -->
<div id="rs-team" class="rs-team sec-color sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR DOCTORS</h2>
            <p>Our Doctors: Expert, compassionate specialists ensuring top-tier care worldwide.</p>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/12.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Pitsanu Kerdsinchai</h3>
                        <span class="subtitle">General Cardiology</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Pitsanu Kerdsinchai</a></h3>
                            <span class="team-title">General Cardiology</span>
                            <p class="team-desc">Hospital Name: Bumrungrad Hospital</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/17.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Apisamai Srirangson</h3>
                        <span class="subtitle">Psychiatry</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Apisamai Srirangson</a></h3>
                            <span class="team-title">Psychiatry</span>
                            <p class="team-desc">Bangkok Hospital</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/13.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Roekchai Tulyapronchote</h3>
                        <span class="subtitle">Neurology</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Roekchai Tulyapronchote</a></h3>
                            <span class="team-title">Neurology</span>
                            <p class="team-desc">Bumrungrad Hospital, Bankok, Thailand</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/14.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Teerapon Amornvesukit</h3>
                        <span class="subtitle">Urology</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Teerapon Amornvesukit</a></h3>
                            <span class="team-title">Urology (Genito-urinary)</span>
                            <p class="team-desc">Bumrungrad Hospital, Bankok, Thailand.</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/19.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Chanjira Satukijchai</h3>
                        <span class="subtitle">Neurology</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Chanjira Satukijchai</a></h3>
                            <span class="team-title">Neurology</span>
                            <p class="team-desc">Bangkok Hospital</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="/images/team/21.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Dr. Yodruk Prasert</h3>
                        <span class="subtitle">Neurosurgeon Microscopic surgery</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Dr. Yodruk Prasert</a></h3>
                            <span class="team-title">Neurosurgeon Microscopic surgery</span>
                            <p class="team-desc">Bangkok Hospital</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Counter Up Section Start-->
<div class="rs-counter pt-100 pb-70 bg3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="counter-content">
                    <h2 class="counter-title">ACHEIVEMENTS</h2>
                    <div class="counter-text">
                        <p>Connecting thousands of patients to world-class doctors and hospitals, ensuring accessible, affordable, and timely healthcare globally.</p>
                    </div>
                    <div class="counter-img rs-image-effect-shine">
                        <img src="/images/counter/1.jpg" alt="Counter Discussion">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-80">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">60</h2>
                            <h4 class="counter-desc">Doctors</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">15</h2>
                            <h4 class="counter-desc">Packages</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">9000</h2>
                            <h4 class="counter-desc">Patients</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">3675</h2>
                            <h4 class="counter-desc">Satisfied customer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Down Section End -->


<!-- Products Start -->
<div id="rs-products" class="rs-products sec-spacer sec-color">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR Packages</h2>
            <p>We provide doctor's appointments, packages and hospital assistance.</p>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">
            <div class="product-item">
                <div class="product-img">
                    <a href="#">
                        <img src="/images/products/1.jpg" alt="" />
                    </a>
                </div>
                <h4 class="product-title"><a href="https://wa.me/1332832670">Buy1 Get 1</a></h4>
                <span class="product-price">From: 15900 THB</span>
                <div class="product-btn">
                    <a href="https://wa.me/1332832670">Book Now</a>
                </div>
            </div>
            <div class="product-item">
                <div class="product-img">
                    <a href="#">
                        <img src="/images/products/2.jpg" alt="" />
                    </a>
                </div>
                <h4 class="product-title"><a href="https://wa.me/1332832670">Health Check up Packages </a></h4>
                <span class="product-price">From: 2750 THB</span>
                <div class="product-btn">
                    <a href="https://wa.me/1332832670">Book Now</a>
                </div>
            </div>
            <div class="product-item">
                <div class="product-img">
                    <a href="#">
                        <img src="/images/products/3.jpg" alt="" />
                    </a>
                </div>
                <h4 class="product-title"><a href="https://wa.me/1332832670">Health Packages</a></h4>
                <span class="product-price">From: 15000 THB</span>
                <div class="product-btn">
                    <a href="https://wa.me/1332832670">Book Now</a>
                </div>
            </div>
            <div class="product-item">
                <div class="product-img">
                    <a href="#">
                        <img src="/images/products/4.jpg" alt="" />
                    </a>
                </div>
                <h4 class="product-title"><a href="https://wa.me/1332832670">Diabetes Packages</a></h4>
                <span class="product-price">From: 4350 THB</span>
                <div class="product-btn">
                    <a href="https://wa.me/1332832670">Book Now</a>
                </div>
            </div>
        </div>
        <div class="view-btn">
            <a href="#">VIEW ALL</a>
        </div>
    </div>
</div>

<!-- Events Start 
<div id="rs-events" class="rs-events sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR PACKAGES</h2>
            <p>I feel the presence of the Almighty, who formed us in his own image, and the breath.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="event-item">
                        <div class="event-img">
                            <img src="/images/events/1.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 June 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">PRACTICE WORKSHOP 2018</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>12.30AM-05.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-img">
                            <img src="/images/events/2.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 April 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">CAMPUS EXAMINATION ROOM</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10.30AM-03.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-img">
                            <img src="/images/events/3.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 June 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">BEST GRADUATION CEREMONY</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10.30AM-03.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- Events End -->

<!-- Calltoaction Start -->
<div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
    <div class="container">
        <div class="rs-cta-inner text-center">
            <div class="sec-title mb-50 text-center">
                <h2 class="white-color">EMPATHY &amp; HEALTH SERVICE</h2>
                <p class="white-color">We provide doctor’s appointments, packages and hospital assistance.</p>
            </div>
            <a class="cta-button" href="#">Contact Us</a>
        </div>
    </div>
</div>
<!-- Calltoaction End -->

<!-- Latest News Start -->
<div id="rs-latest-news" class="rs-latest-news sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR LASTEST NEWS</h2>
            <p>Expanding our network to provide enhanced healthcare solutions globally.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="news-normal-block">
                    <div class="news-img">
                        <a href="#">
                            <img src="/images/blog/1.jpg" alt="" />
                        </a>
                    </div>
                    <div class="news-date">
                        <i class="fa fa-calendar-check-o"></i>
                        <span>June 28, 2017</span>
                    </div>
                    <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
                    <div class="news-desc">
                        <p>
                            Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                        </p>
                    </div>
                    <div class="news-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="news-list-block">
                    <div class="news-list-item">
                        <div class="news-img">
                            <a href="#">
                                <img src="/images/blog/2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="news-content">
                            <h5 class="news-title"><a href="blog-details.html">While the lovely valley team work</a></h5>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span>June 28, 2017</span>
                            </div>
                            <div class="news-desc">
                                <p>
                                    Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list-item">
                        <div class="news-img">
                            <a href="#">
                                <img src="/images/blog/3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="news-content">
                            <h5 class="news-title"><a href="blog-details.html">I must explain to you how all this idea</a></h5>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span>June 28, 2017</span>
                            </div>
                            <div class="news-desc">
                                <p>
                                    Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list-item">
                        <div class="news-img">
                            <a href="#">
                                <img src="/images/blog/4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="news-content">
                            <h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing a stroke</a></h5>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span>June 28, 2017</span>
                            </div>
                            <div class="news-desc">
                                <p>
                                    Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest News End -->

<!-- Newslatter Start -->
<!--
        <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-6">
                        <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="newslatter-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email Address">
                            <button type="submit" class="form-button">SUBSCRIBE</button>
                        </form>						
                    </div>
                </div>
            </div>
        </div>
-->

<!-- Testimonial Start -->
<div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2 class="white-color">WHAT PEOPLE SAYS</h2>
            <p class="white-color">rusted, compassionate care with seamless access to top doctors and hospitals worldwide.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="/images/testimonial/1.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Abu Jafar Raju</h4>
                            <p>
                                "Empathy Health Service made finding the right doctor easy and hassle-free. Truly dependable!"
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="/images/testimonial/2.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Jannatul Ferdausy</h4>
                            <p>
                                Excellent service! I received prompt hospital recommendations, and my treatment was seamless across borders.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="/images/testimonial/3.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Dr. Razaul Karim</h4>
                            <p>
                                A lifesaver! Their global network of doctors provided me with top-tier care and support.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="/images/testimonial/4.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Faraz Karim</h4>
                            <p>
                                Empathy Health Service helped me access world-class healthcare abroad. The process was smooth, and the care I received exceeded expectations.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="/images/testimonial/5.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Rabiul Islam</h4>
                            <p>
                                I’m grateful for their expert recommendations and personalized care. The doctors were outstanding, and I felt fully supported journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Partner Start -->
<div id="rs-partner" class="rs-partner pt-70 pb-70">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <a href="#"><img src="/images/partner/1.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="/images/partner/2.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="/images/partner/3.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="/images/partner/4.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="/images/partner/5.png" alt="Partner Image"></a>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->
@endsection