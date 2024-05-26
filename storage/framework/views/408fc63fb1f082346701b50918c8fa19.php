
<?php $__env->startSection('title','ThuanLamProduct'); ?>
<?php $__env->startSection('content'); ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
				<li class='active'>Compare</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="product-comparison">
			<div>
				<h1 class="page-title text-center heading-title">Product Comparison</h1>
				<div class="table-responsive">
					<table class="table compare-table inner-top-vs">
						<tr>
							<td><strong>Ảnh</strong></td>
							<td><strong>Tên Sản Phẩm</strong></td>
							<td><strong>Giá</strong></td>
							<td><strong>description</strong></td>
							<td><strong>Xóa</strong></td>
							<!-- <td><strong>Add To Cart</strong></td> -->
						</tr>

						<?php $__currentLoopData = session('compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><img src="<?php echo e(asset('app/images/products/'.$product['image'])); ?>" alt="<?php echo e($product['name']); ?>"></td>
							<td><?php echo e($product['name']); ?></td>
							<td><?php echo e($product['price']); ?></td>
							<td><?php echo e($product['description'] ?? 'No description available'); ?></td>
							<td>
								<a href="#" class="remove-icon" onclick="return confirmRemove(<?php echo e($id); ?>);">
									<i class="fa fa-times"></i>
								</a>

							</td>
							<!-- <td>
								<div class="action">
									<a class="lnk btn btn-primary" href="#">Add To Cart</a>
								</div>
							</td> -->
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================= FOOTER ============================================================= -->

<?php $__env->stopSection(); ?>
<script>
	function confirmRemove(id) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
        removeFromCompare(id);
        return true;
    }
    return false;
}

	function removeFromCompare(id) {
		window.location.href = `/remove-from-compare/${id}`;
	}


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



</body>

</html>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/productComparison.blade.php ENDPATH**/ ?>