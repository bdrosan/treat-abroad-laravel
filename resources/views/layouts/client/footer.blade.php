<br><br><br><br>
<!-- Footer Start -->
<footer id="rs-footer" class="border-top mt-15 rs-footer bg-white text-primary">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc bg-white text-primary">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            {{ \App\Models\Setting::key("site_address") }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            {{ \App\Models\Setting::key("site_phone_number") }}<br>
                            {{ \App\Models\Setting::key("site_phone_number_2") }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            {{ \App\Models\Setting::key("site_email") }}<br>
                            {{ \App\Models\Setting::key("site_email_2") }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->