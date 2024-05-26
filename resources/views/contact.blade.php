@extends('app')
@section('title','Bản Đồ OOI DJ')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('home') }}">Home</a></li>
				<li class='active'>Contact</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="contact-page">
			<div class="row">

				<div class="col-md-12 contact-map outer-bottom-vs">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.474978921173!2d106.75548381069105!3d10.851432489257293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1715652367520!5m2!1svi!2s"
					 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-md-9 contact-form">
					<div class="col-md-12 contact-title">
						<h4>Contact Form</h4>
					</div>
					<div class="col-md-4 ">
						<form class="register-form" role="form">
							<div class="form-group">
								<label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
								<input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<form class="register-form" role="form">
							<div class="form-group">
								<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
								<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<form class="register-form" role="form">
							<div class="form-group">
								<label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
								<input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title">
							</div>
						</form>
					</div>
					<div class="col-md-12">
						<form class="register-form" role="form">
							<div class="form-group">
								<label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
								<textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
							</div>
						</form>
					</div>
					<div class="col-md-12 outer-bottom-small m-t-20">
						<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
					</div>
				</div>
				<div class="col-md-3 contact-info">
					<div class="contact-title">
						<h4>Information</h4>
					</div>
					<div class="clearfix address">
						<span class="contact-i"><i class="fa fa-map-marker"></i></span>
						<span class="contact-span">BÌNH DƯƠNG</span>
					</div>
					<div class="clearfix phone-no">
						<span class="contact-i"><i class="fa fa-mobile"></i></span>
						<span class="contact-span">+(84) 0789895746<</span>
					</div>
					<div class="clearfix email">
						<span class="contact-i"><i class="fa fa-envelope"></i></span>
						<span class="contact-span"><a href="#">flipmart@themesground.com</a></span>
					</div>
				</div>
			</div><!-- /.contact-page -->
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
		<div id="brands-carousel" class="logo-slider wow fadeInUp">

			<div class="logo-slider-inner">
				<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
					<div class="item m-t-15">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item m-t-10">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand3.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand6.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="{{asset('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->
				</div><!-- /.owl-carousel #logo-slider -->
			</div><!-- /.logo-slider-inner -->

		</div><!-- /.logo-slider -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
	<!-- ============================================================= FOOTER ============================================================= -->
	@endsection

	<script>
		$(document).ready(function() {
			$(".changecolor").switchstylesheet({
				seperator: "color"
			});
			$('.show-theme-options').click(function() {
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
			$('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->



</div>
</body>

</html>