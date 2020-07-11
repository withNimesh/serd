@extends('includes.main')

@section('pageSpecificStyles')
	<style type="text/css">

	</style>
@endsection
@section('pageSpecificContent')


	<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/event_bg.jpg')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Events</h2>
			<p>Give a helping hand for poor people</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Events</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- event single section -->
	<section class="xs-content-section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="xs-event-banner">
					<img src="assets/images/event/event-banner.jpg" alt="">
				</div>
				<div class="row">
					<div class="col-lg-8 xs-event-wraper">
						<div class="xs-event-content">
							<h4>Event Detalis</h4>
							<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore ete dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<!-- horizontal tab -->
						<div class="xs-horizontal-tabs">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#facilities" role="tab">Facilities</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#mapLocation" role="tab">Map Location</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#contactUs" role="tab">Contact us</a>
		</li>
	</ul><!-- .nav-tabs END -->

	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane fade show active" id="facilities" role="tabpanel">
			<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore ete dolore magna aliqua.</p>
			<div class="row">
				<div class="col-md-6">
					<ul class="xs-unorder-list circle green-icon">
						<li>Assisting senior consultants in projects </li>
						<li>Share best practices and knowledge.</li>
						<li>Assisting senior consultants in projects </li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="xs-unorder-list circle green-icon">
						<li>Collaborate with technology, informations security, and business partners </li>
						<li>Find and address performance issues.</li>
					</ul>
				</div>
			</div>
		</div><!-- #facilities END -->
		<div class="tab-pane" id="mapLocation" role="tabpanel">
			<div id="xs-map"></div>
		</div><!-- #mapLocation END -->
		<div class="tab-pane" id="contactUs" role="tabpanel">
			<div class="xs-contact-form-wraper">
				<form action="#" method="POST" id="xs-contact-form" class="xs-contact-form">
					<div class="input-group">
						<input type="text" name="name" id="xs-name" class="form-control" placeholder="Enter Your Name.....">
						<div class="input-group-append">
							<div class="input-group-text"><i class="fa fa-user"></i></div>
						</div>
					</div><!-- .input-group END -->
					<div class="input-group">
						<input type="email" name="email" id="xs-email" class="form-control" placeholder="Enter Your Email.....">
						<div class="input-group-append">
							<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
						</div>
					</div><!-- .input-group END -->
					<div class="input-group massage-group">
						<textarea name="massage" placeholder="Enter Your Message....." id="xs-massage" class="form-control" cols="30" rows="10"></textarea>
						<div class="input-group-append">
							<div class="input-group-text"><i class="fa fa-pencil"></i></div>
						</div>
					</div><!-- .input-group END -->
					<button class="btn btn-success" type="submit" id="xs-submit">submit</button>
				</form><!-- .xs-contact-form #xs-contact-form END -->
			</div>
		</div><!-- #contactUs END -->
	</div>
</div>						<!-- End horizontal tab -->
						<div class="row xs-mb-60">
							<div class="col-md-6 xs-about-feature">
								<h3>Event Mission</h3>
								<p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p>
							</div>
							<div class="col-md-6 xs-about-feature">
								<h3>Event Vission</h3>
								<p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p>
							</div>
						</div>
						<div class="xs-about-feature xs-mb-30">
							<h3>Our Vission</h3>
							<p class="lead">The Globian Fund for Charities seeks positive change around the world through support of non-profit organizations dedicated to social, cultural.</p>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="xs-service-promo">
									<span class="icon-water color-orange"></span>
									<h5>Pure Water <br>For Poor People</h5>
								</div>
							</div>
							<div class="col-md-4">
								<div class="xs-service-promo">
									<span class="icon-groceries color-red"></span>
									<h5>Healty Food <br>For Poor People</h5>
								</div>
							</div>
							<div class="col-md-4">
								<div class="xs-service-promo">
									<span class="icon-open-book color-green"></span>
									<h5>Pure Education <br>For Every Children</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<!-- horizontal tab -->
						<div class="xs-event-schedule-widget">
	<div class="media xs-event-schedule">
		<div class="d-flex xs-evnet-meta-date">
			<span class="xs-event-date">25</span>
			<span class="xs-event-month">May</span>
		</div>
		<div class="media-body">
			<h5>Braille Literacy is for the Blind</h5>
		</div>
	</div>
	<ul class="list-group xs-list-group">
		<li class="d-flex justify-content-between">
			Organized by: 
			<span>Robert Slim</span>
		</li>
		<li class="d-flex justify-content-between">
			Start: 
			<span>9.30 am</span>
		</li>
		<li class="d-flex justify-content-between">
			Venue: 
			<span>National Zoo, NY</span>
		</li>
		<li class="d-flex justify-content-between">
			Phone:  
			<span>91 260 5524</span>
		</li>
		<li class="d-flex justify-content-between">
			Email: 
			<span>charity@example.com</span>
		</li>
	</ul>
</div><!-- .xs-event-schedule-widget END -->
<div class="xs-countdown-timer timer-style-2 xs-mb-30" data-countdown="2020/02/07"></div>
<div class="xs-event-schedule-widget">
	<h3 class="widget-title">Event Sponsor</h3>
	<ul class="xs-event-sponsor clearfix">
		<li><a href="#"><img src="assets/images/partner/client_5.png" alt=""></a></li>
		<li><a href="#"><img src="assets/images/partner/client_4.png" alt=""></a></li>
		<li><a href="#"><img src="assets/images/partner/client_3.png" alt=""></a></li>
		<li><a href="#"><img src="assets/images/partner/client_1.png" alt=""></a></li>
	</ul>
</div><!-- .xs-event-schedule-widget END -->						<!-- End horizontal tab -->
					</div>
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End event single section -->
</main>

@endsection
@section('pageSpecificScript')
	<script>
        $(document).ready(function () {
            var owl = $('.testmonial_active');
            owl.trigger('stop.owl.autoplay');
        });
	</script>
@endsection