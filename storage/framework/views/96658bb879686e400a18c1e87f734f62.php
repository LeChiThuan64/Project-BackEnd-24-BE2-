
<?php $__env->startSection('title','theo dõi đơn hàng'); ?>
<?php $__env->startSection('content'); ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
				<li class='active'>Track your orders</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="track-order-page"> 
			<div class="row">
				<div class="col-md-12">
	<h2 class="heading-title">Your Orders</h2>
	<div class="table-responsive">
		<table class="table compare-table inner-top-vs">
			<tr>
				<td><strong>Ảnh</strong></td>
				<td><strong>Tên Sản Phẩm</strong></td>
				<td><strong>Giá</strong></td>
				<td><strong>Số lượng</strong></td>
				<td><strong>Thành tiền</strong></td>
				<td><strong>Đã thanh toán</strong></td>
				<td><strong>Trạng Thái</strong></td>
				<td><strong>Xác nhận đã nhận hàng</strong></td>
				<!-- <td><strong>Add To Cart</strong></td> -->
			</tr>

			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><img style ="width: 90%" src="<?php echo e(asset('app/images/products/'.$product['image'])); ?>" alt="<?php echo e($product['name']); ?>"></td>
				<td><?php echo e($product['name']); ?></td>
				<td><?php echo e($product['price']); ?></td>
				<td><?php echo e($product['quantity']); ?></td>
				<td><?php echo e($product['total']); ?></td>
				<td><?php echo e($product['created_at']); ?></td>
				<div class="btn-group">
				<td>
						<?php if($product['state'] == 0): ?>
						<button class="btn btn-danger state" value="<?php echo e($product['bill_id']); ?>">Đang Giao Hàng</button>	
						<?php endif; ?>
						<?php if($product['state'] == 1): ?>
						<button class="btn btn-success">Đã Nhận Hàng</button>	
						<?php endif; ?>
						
					</td>
					<td>
						<?php if($product['state'] == 0): ?>
						<button class="btn btn-warning confirm" value="<?php echo e($product['bill_id']); ?>">Xác Nhận</button>
						<?php endif; ?>
						<?php if($product['state'] == 1): ?>
						<button class="btn btn-primary">Đánh giá</button>	
						<?php endif; ?>			
					</td>
				</div>
				<!-- <td>
					<div class="action">
						<a class="lnk btn btn-primary" href="#">Add To Cart</a>
					</div>
				</td> -->
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
	
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
<?php $__env->stopSection(); ?>

	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/track-orders.blade.php ENDPATH**/ ?>