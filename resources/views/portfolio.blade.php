@extends('includes.main')

@section('pageSpecificStyles')
	<style type="text/css">

	</style>
@endsection
@section('pageSpecificContent')

	<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/blog_details_header_bg.jpg')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Photo Gallery</h2>
			<p>Give a helping hand for poor people</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Gallery</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- portfolio section -->
	<div class="xs-content-section-padding">
	<div class="container">
		<div class="xs-portfolio-grid">
			<div class="xs-portfolio-grid-item">
				<a href="assets/images/portfolio/gallery_1.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_1.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item">
				<a href="assets/images/portfolio/gallery_2.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_2.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item">
				<a href="assets/images/portfolio/gallery_3.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_3.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item">
				<a href="assets/images/portfolio/gallery_4.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_4.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item">
				<a href="assets/images/portfolio/gallery_5.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_5.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
			<div class="xs-portfolio-grid-item xs-portfolio-grid-item-w2">
				<a href="assets/images/portfolio/gallery_6.jpg" class="xs-single-portfolio-item xs-image-popup">
					<img src="assets/images/portfolio/gallery_6.jpg" alt="">
					<div class="xs-portfolio-content">
						<span class="icon-plus-button"></span>
					</div>
				</a><!-- .xs-single-portfolio-item END -->
			</div><!-- .xs-portfolio-grid-item END -->
		</div><!-- .xs-portfolio-grid END -->
	</div><!-- .container end -->
</div>	<!-- End portfolio section -->
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