
<?php $__env->startSection('title','Sản phẩm yêu thích'); ?>
<?php $__env->startSection('content'); ?>
	<!-- ============================================== HEADER : END ============================================== -->
	<div class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-inner">
				<ul class="list-inline list-unstyled">
					<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
					<li class='active'>Wishlist</li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->

	<div class="body-content">
		<div class="container">
			<div class="my-wishlist-page">
				<div class="row">
					<div class="col-md-12 my-wishlist">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="4" class="heading-title">My Wishlist</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td class="col-md-2">
											<?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<img src="<?php echo e(asset("app/images/products/$image->name")); ?>" alt="imga">
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</td>
										<td class="col-md-7">
											<div class="product-name"><a href="<?php echo e(url("detail/$product->id")); ?>"><?php echo e($product->name); ?></a></div>
											<div class="rating">
												<i class="fa fa-star rate"></i>
												<i class="fa fa-star rate"></i>
												<i class="fa fa-star rate"></i>
												<i class="fa fa-star rate"></i>
												<i class="fa fa-star non-rate"></i>
												<span class="review">( 06 Reviews )</span>
											</div>
											<div class="price">
												$<?php echo e($product->price); ?>

												<span>$900.00</span>
											</div>
										</td>
										<td class="col-md-2">
											<a href="#" class="btn-upper btn btn-primary">Add to cart</a>
										</td>
										<td class="col-md-1 close-btn">
											<a href="#" class=""><i class="fa fa-times"></i></a>
										</td>
									</tr>		
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.sigin-in-->
			<!-- ============================================== BRANDS CAROUSEL ============================================== -->
			<div id="brands-carousel" class="logo-slider wow fadeInUp">

				<div class="logo-slider-inner">
					<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
						<div class="item m-t-15">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand1.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item m-t-10">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand2.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand3.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand4.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand5.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand6.png')); ?>" src="<?php echo e(asset('app\images\blank.gif')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand2.png')); ?>" src="<?php echo e(asset('app\images\blank.gif}')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand4.png')); ?>" src="<?php echo e(asset('app\images\blank.gif}')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand1.png')); ?>" src="<?php echo e(asset('app\images\blank.gif}')); ?>" alt="">
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo e(asset('app/images/brands/brand5.png')); ?>" src="<?php echo e(asset('app\images\blank.gif}')); ?>" alt="">
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
	<script>
		$(document).ready(function () {
			$(".changecolor").switchstylesheet({ seperator: "color" });
			$('.show-theme-options').click(function () {
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function () {
			$('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->



</body>

</html>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/my-wishlist.blade.php ENDPATH**/ ?>