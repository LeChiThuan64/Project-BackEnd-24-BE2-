
<?php $__env->startSection('title','Vỏ Hàng á Nhennnnn'); ?>
<?php $__env->startSection('content'); ?>



<?php if(session('success_message')): ?>
    <div class="alert alert-success" id="success-alert">
        <?php echo e(session('success_message')); ?>

    </div>
<?php endif; ?>


<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item"> <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input"> </th>
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-edit item">description</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-sub-total item">Subtotal</th>
									<th class="cart-total last-item">Grandtotal</th>
									<!-- <th class="cart-total last-item">Checkout</th> -->
									<th class="cart-romove item">Remove</th>
								</tr>
							</thead><!-- /thead -->
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="<?php echo e(url('/')); ?>" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
												<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs update-cart">Update shopping cart</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productId => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr data-id="<?php echo e($product['id']); ?>">
									<td> <input class="form-check-input mt-0" id="checkbox-<?php echo e($product['id']); ?>" type="checkbox" value="" aria-label="Checkbox for following text input"> </td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="<?php echo e(url('detail/'.$product['id'])); ?>">
											<img src="<?php echo e(asset('app/images/products/p' . $product['id'] . '.jpg')); ?>" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="<?php echo e(url('detail/'.$product['id'])); ?>"><?php echo e($product['name']); ?></a></h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-8">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->
										<div class="cart-product-info">
											<span class="product-color">COLOR:<span>Blue</span></span>
										</div>
									</td>
									<td class="cart-product-edit"><a style="text-decoration: none;" href="<?php echo e(url('detail/'.$product['id'])); ?>" class="product-edit"><?php echo e($product['description']); ?></a></td>
									<td class="cart-product-quantity">
										<div class="quant-input" id="quant-input-<?php echo e($product['id']); ?>">
											<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
											</div>
											<input type="text" name="qtyProduct" value="<?php echo e($product['quantity']); ?>">
										</div>
									</td>
									<td class="cart-product-sub-total">
										<span class="cart-sub-total-price" id="cart-sub-total-price-<?php echo e($product['id']); ?>"><?php echo e($product['price']); ?>


										</span>
									</td>
									<td class="cart-product-grand-total">
										<span class="cart-grand-total-price" id="cart-grand-total-price-<?php echo e($product['id']); ?>">
											<?php echo e($product['price'] * $product['quantity']); ?>

										</span>
									</td>

									<!-- <td>
										<form action="<?php echo e(url('/checkout')); ?>" method="post">
											<?php echo csrf_field(); ?>
											<input type="hidden" name="qtyProduct-<?php echo e($product['id']); ?>" value="<?php echo e($product['quantity']); ?>">
											<input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
											<div class="voucher" style="font-weight: bold; text-align: right; color: #0077cc;">
											</div>
											<input type="hidden" name="qty" value="<?php echo e($product['quantity']); ?>">
											<input type="hidden" name="product_id" class="product-id" value="<?php echo e($product['id']); ?>">

											<input type="hidden" id="redirectValue-<?php echo e($product['id']); ?>" name="redirect" value="">
											<button class="btn btn-primary checkout-btn-child">Thanh toán</button>
										</form>

									</td> -->
									<td class="romove-item remove-cooke"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>

								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody><!-- /tbody -->
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->
				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Estimate shipping and tax</span>
									<p>Enter your destination to get shipping and tax.</p>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label class="info-title control-label">Country <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>India</option>
											<option>SriLanka</option>
											<option>united kingdom</option>
											<option>saudi arabia</option>
											<option>united arab emirates</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">State/Province <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>TamilNadu</option>
											<option>Kerala</option>
											<option>Andhra Pradesh</option>
											<option>Karnataka</option>
											<option>Madhya Pradesh</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">Zip/Postal Code</label>
										<input type="text" class="form-control unicase-form-control text-input" placeholder="">
									</div>
									<div class="pull-right">
										<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Discount Code</span>
									<p>Enter your coupon code if you have one..</p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th>
									<!-- <div class="luaChon"style="font-weight: bold; text-align: right; color: #0077cc;">lựa chọn vocher
										<input type="radio" id="option1" name="options" value="1">
										<label for="option1">Option 1</label><br>

										<input type="radio" id="option2" name="options" value="2">
										<label for="option2">Option 2</label><br>
									</div> -->

									<button type="button" id="openVoucherModalBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
										vochers
									</button>
									<!-- Modal -->
									<div class="modal modal-md" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Vouchers</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<form id="voucherForm">
														<div id="voucherList"></div>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary save-vocher" data-bs-dismiss="modal">Save changes</button>
												</div>
											</div>
										</div>
									</div>



									<div class="cart-sub-total">
										Tổng :<span class="inner-left-md sub-total">0 Sản Phẩm</span>
									</div>
									<div class="cart-grand-total">
										Tổng cộng<span class="inner-left-md grand-total">$0</span>
									</div>

									<div class="cart-deduction">
										Trừ Vocher<span class="inner-left-md deduction">$0</span>
									</div>
									<div class="cart-result">
										Kết Quả<span class="inner-left-md result">$0</span>
									</div>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="cart-checkout-btn pull-right">
										<form id="checkoutForm" method="post">
											<?php echo csrf_field(); ?>
											<!-- Trong form của bạn -->
											<input type="hidden" id="user" name="user" value=" <?php echo $isLoggedIn ?> ">
											<input type="hidden" id="selectedProductsInput" name="selectedProducts" value="">
											<input class="tongtien" type="hidden" id="redirectValue" name="redirect" value="">
											<button type="submit" id="checkout-btn" value="123456" class="btn btn-primary checkout-btn">PROCEED TO CHECKOUT</button>
										</form>
										<span class="">Checkout with multiple addresses!</span>
									</div>

								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->

		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
		<div id="brands-carousel" class="logo-slider wow fadeInUp">

			<div class="logo-slider-inner">
				<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
					<div class="item m-t-15">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand1.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item m-t-10">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand2.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand3.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand4.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand5.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand6.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand2.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand4.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand1.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="<?php echo e(asset ('app/images/brands/brand5.png')); ?>" src="<?php echo e(asset ('app\images\blank.gif')); ?>" alt="">
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
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/shopping-cart.blade.php ENDPATH**/ ?>