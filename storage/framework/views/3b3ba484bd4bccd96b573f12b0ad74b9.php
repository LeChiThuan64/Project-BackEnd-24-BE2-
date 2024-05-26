
<?php $__env->startSection('title', 'checkout'); ?>
<?php $__env->startSection('content'); ?>

<?php
 echo "kkkk:" . $qtyProduct
?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
						<div class="panel panel-default checkout-step-01">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										<span>1</span>Checkout Method
									</a>
								</h4>
							</div>
							<!-- panel-heading -->

							<div id="collapseOne" class="panel-collapse collapse in">

								<!-- panel-body  -->
								<div class="panel-body">
									<div class="row">

										<!-- guest-login -->
										<div class="col-md-6 col-sm-6 guest-login">
											<!-- <h4 class="checkout-subtitle">Guest or Register Login</h4> -->
											<p class="text title-tag-line">Select a payment method:</p>

											<!-- radio-form  -->
											<form id="checkoutFormB" role="form" method="post">
												<?php echo csrf_field(); ?>
												<input type="hidden" name="product_id" value="<?php echo e($product_id); ?>">
												<input type="hidden" id="redirectValueCheckout" name="redirectCheckout" value="<?php echo $redirectValue ?>">
												<input type="hidden" name="qtyProduct" value="<?php echo $qtyProduct ?>">
												<div class="radio radio-checkout-unicase">
													<input id="cash_payment" type="radio" name="cash_payment" value="cash_payment">
													<label class="radio-button guest-check" for="cash_payment">Pay cash upon receipt</label>
													<br>
													<input id="online_payment" type="radio" name="online_payment" value="online_payment" checked="true">
													<label class="radio-button" for="online_payment">online payment</label> <br>

													<label class="info-title" for="customerEmail">Email <span>*</span></label>
													<input type="email" class="form-control unicase-form-control text-input" id="customerEmail" name="customerEmail" placeholder="Nhập địa chỉ email của bạn" required>

													<label class="info-title" for="customerPhone">Số điện thoại <span>*</span></label>
													<input type="tel" class="form-control unicase-form-control text-input" id="customerPhone" name="customerPhone" placeholder="Nhập số điện thoại của bạn" required>

													<label class="info-title" for="orderContent">Nội dung đơn hàng <span>*</span></label>
													<textarea class="form-control unicase-form-control text-input" id="orderContent" name="orderContent" placeholder="Nhập nội dung đơn hàng của bạn" rows="4" required></textarea>
													
													<label class="info-title" for="shippingAddress">Địa chỉ nhận hàng <span>*</span></label>
													<input type="text" class="form-control unicase-form-control text-input" id="shippingAddress" name="shippingAddress" placeholder="Nhập địa chỉ nhận hàng của bạn" required>

													<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Continue</button>
												</div>

											</form>
											<!-- radio-form  -->

											<h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
											<p class="text title-tag-line ">Register with us for future convenience:</p>

											<ul class="text instruction inner-bottom-30">
												<li class="save-time-reg">- Fast and easy check out</li>
												<li>- Easy access to your order history and status</li>
											</ul>

										</div>
										<!-- guest-login -->

										<!-- already-registered-login -->

										<!-- already-registered-login -->

									</div>
								</div>
								<!-- panel-body  -->

							</div><!-- row -->
						</div>
						<!-- checkout-step-01  -->
						<!-- checkout-step-02  -->
						<div class="panel panel-default checkout-step-02">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
										<span>2</span>Billing Information
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
						<!-- checkout-step-02  -->

						<!-- checkout-step-03  -->
						<div class="panel panel-default checkout-step-03">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
										<span>3</span>Shipping Information
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
						<!-- checkout-step-03  -->

						<!-- checkout-step-04  -->
						<div class="panel panel-default checkout-step-04">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
										<span>4</span>Shipping Method
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
						<!-- checkout-step-04  -->

						<!-- checkout-step-05  -->
						<div class="panel panel-default checkout-step-05">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
										<span>5</span>Payment Information
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
						<!-- checkout-step-05  -->

						<!-- checkout-step-06  -->
						<div class="panel panel-default checkout-step-06">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
										<span>6</span>Order Review
									</a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
						<!-- checkout-step-06  -->

					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
					<div class="checkout-progress-sidebar ">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
								</div>
								<div class="">
									<ul class="nav nav-checkout-progress list-unstyled">
										<li><a href="#">Billing Address</a></li>
										<li><a href="#">Shipping Address</a></li>
										<li><a href="#">Shipping Method</a></li>
										<li><a href="#">Payment Method</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- checkout-progress-sidebar -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
		<div id="brands-carousel" class="logo-slider wow fadeInUp">

			<div class="logo-slider-inner">
				<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
					<div class="item m-t-15">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item m-t-10">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand3.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand6.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->
				</div><!-- /.owl-carousel #logo-slider -->
			</div><!-- /.logo-slider-inner -->

		</div><!-- /.logo-slider -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/checkout.blade.php ENDPATH**/ ?>