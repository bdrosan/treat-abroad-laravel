@php use App\Models\Setting; @endphp
<br><br><br><br>
<!-- Footer Start -->
{{--<footer id="rs-footer" class="border-top mt-15 rs-footer bg-white text-primary">--}}
{{--    <div class="container">--}}
{{--        <!-- Footer Address -->--}}
{{--        <div>--}}
{{--            <div class="row footer-contact-desc bg-white text-primary">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="contact-inner">--}}
{{--                        <i class="fa fa-map-marker"></i>--}}
{{--                        <h4 class="contact-title">Address</h4>--}}
{{--                        <p class="contact-desc">--}}
{{--                            {{ \App\Models\Setting::key("site_address") }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="contact-inner">--}}
{{--                        <i class="fa fa-phone"></i>--}}
{{--                        <h4 class="contact-title">Phone Number</h4>--}}
{{--                        <p class="contact-desc">--}}
{{--                            {{ \App\Models\Setting::key("site_phone_number") }}<br>--}}
{{--                            {{ \App\Models\Setting::key("site_phone_number_2") }}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="contact-inner">--}}
{{--                        <i class="fa fa-map-marker"></i>--}}
{{--                        <h4 class="contact-title">Email Address</h4>--}}
{{--                        <p class="contact-desc">--}}
{{--                            {{ \App\Models\Setting::key("site_email") }}<br>--}}
{{--                            {{ \App\Models\Setting::key("site_email_2") }}<br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<!-- Footer End -->


<div class="container-fluid bg-primary  text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"
     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; position:absolute;">
    <div class="container py-5 text-light ">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt mx-3"></i>{{ Setting::key("site_address") }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt mx-3"></i>{{ Setting::key("site_phone_number") }}</p>
                <p class="mb-2"><i class="fa fa-envelope mx-3"></i>{{ Setting::key("site_email") }}</p>
                <div class="d-flex pt-2">
{{--                    <a class="btn btn-square btn-outline-light rounded-circle mx-1"--}}
{{--                       href="https://www.facebook.com/shebaruit"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a class="btn btn-square btn-outline-light rounded-circle mx-1"--}}
{{--                       href="https://www.youtube.com/@shebaruit?sub_confirmation=1"><i class="fab fa-youtube"></i></a>--}}
{{--                    <a class="btn btn-square btn-outline-light rounded-circle mx-0"--}}
{{--                       href="https://www.linkedin.com/company/shebaru-it"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                    <a class="btn btn-square btn-outline-light rounded-circle mx-1" href="https://wa.me/1711981051"><i--}}
{{--                                class="fab fa-whatsapp"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class=" mb-4 text-light">Quick Links</h5>
                <a class="btn btn-link text-light px-2" href="/about-us">About Us</a>
                <a class="btn btn-link text-light px-2" href="service">Our Services</a>
                <a class="btn btn-link text-light px-2" href="{{ route('admin.login') }}">Admin Login</a>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <h5 class=" mb-4 text-light">Important Links</h5>
                <a class="btn btn-link text-light px-2" href="contact">Contact Us</a>
                <a class="btn btn-link text-light px-2" href="service">Our Services</a>
                <a class="btn btn-link text-light px-2" href="">Terms &amp; Condition</a>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p class="">please provide your email here, you will get offer!</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-light w-100 py-3 ps-4 pe-5 text-light" type="text"
                           placeholder="Your email">
                    <button type="button" class="btn btn-success py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-light">
                    © <a href="{{ Setting::key('site_url') }}">{{ Setting::key('site_name') }}</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end text-light">
                    Designed By <a href="{{ Setting::key('site_url') }}">{{ Setting::key('site_name') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>