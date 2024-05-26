@extends('app')
@section('title','Vỏ Hàng á Nhennnnn')
@section('content')



@if (session('success_message'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success_message') }}
    </div>
@endif


<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('home') }}">Home</a></li>
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
												<a href="{{ url('/') }}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
												<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs update-cart">Update shopping cart</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
							<tbody>
								@foreach ($cart as $productId => $product)
								<tr data-id="{{ $product['id'] }}">
									<td> <input class="form-check-input mt-0" id="checkbox-{{ $product['id'] }}" type="checkbox" value="" aria-label="Checkbox for following text input"> </td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="{{ url('detail/'.$product['id']) }}">
											<img src="{{ asset('app/images/products/p' . $product['id'] . '.jpg') }}" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="{{ url('detail/'.$product['id']) }}">{{ $product['name'] }}</a></h4>
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
									<td class="cart-product-edit"><a style="text-decoration: none;" href="{{ url('detail/'.$product['id']) }}" class="product-edit">{{ $product['description'] }}</a></td>
									<td class="cart-product-quantity">
										<div class="quant-input" id="quant-input-{{ $product['id'] }}">
											<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
											</div>
											<input type="text" name="qtyProduct" value="{{ $product['quantity']}}">
										</div>
									</td>
									<td class="cart-product-sub-total">
										<span class="cart-sub-total-price" id="cart-sub-total-price-{{ $product['id'] }}">{{ $product['price'] }}

										</span>
									</td>
									<td class="cart-product-grand-total">
										<span class="cart-grand-total-price" id="cart-grand-total-price-{{ $product['id'] }}">
											{{ $product['price'] * $product['quantity'] }}
										</span>
									</td>

									<!-- <td>
										<form action="{{ url('/checkout') }}" method="post">
											@csrf
											<input type="hidden" name="qtyProduct-{{ $product['id'] }}" value="{{ $product['quantity']}}">
											<input type="hidden" name="product_id" value="{{ $product['id'] }}">
											<div class="voucher" style="font-weight: bold; text-align: right; color: #0077cc;">
											</div>
											<input type="hidden" name="qty" value="{{ $product['quantity']}}">
											<input type="hidden" name="product_id" class="product-id" value="{{ $product['id'] }}">

											<input type="hidden" id="redirectValue-{{ $product['id'] }}" name="redirect" value="">
											<button class="btn btn-primary checkout-btn-child">Thanh toán</button>
										</form>

									</td> -->
									<td class="romove-item remove-cooke"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>

								</tr>
								@endforeach
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
											@csrf
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
							<img data-echo="{{asset ('app/images/brands/brand1.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item m-t-10">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand2.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand3.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand4.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand5.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand6.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand2.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand4.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand1.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="{{asset ('app/images/brands/brand5.png')}}" src="{{asset ('app\images\blank.gif')}}" alt="">
						</a>
					</div><!--/.item-->
				</div><!-- /.owl-carousel #logo-slider -->
			</div><!-- /.logo-slider-inner -->

		</div><!-- /.logo-slider -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
@endsection