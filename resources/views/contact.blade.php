@extends("layouts.client.layout")

@section("main")
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Contact</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Cantact</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>

        <div class="contact-page-section sec-spacer">
        	<div class="container">
        		<div class="googleMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.04797977097!2d90.38281627592744!3d23.745668388956897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ba185de429%3A0x1590d1e02bb4bee9!2sLABAID%20CANCER%20HOSPITAL%20%26%20SUPER%20SPECIALITY%20CENTRE!5e0!3m2!1sen!2sbd!4v1735565434452!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>House # 1/B, Green Corner (4th floor), Green Road </p>
    						<p>Dhaka-1205, Bangladesh</p>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:+8801332832670">+8801332832670</a>
    						<a href="tel:+8801332832671">+8801332832671</a>
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:empathyhealths@gmail.com"><p>empathyhealths@gmail.com</p></a>
    						<a href="#"><p>www.tophospitalsupportbd.com</p></a>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Leave Comment</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="mailer.php">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name*</label>
										<input name="fname" id="fname" class="form-control" type="text" data-has-listeners="true">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="lname" id="lname" class="form-control" type="text" data-has-listeners="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email" data-has-listeners="true">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="subject" id="subject" class="form-control" type="text" data-has-listeners="true">
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control" data-has-listeners="true"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now" data-has-listeners="true">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>

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