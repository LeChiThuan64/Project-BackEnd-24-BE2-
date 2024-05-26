@extends('app')
@section('title','ThuanLamProduct')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('home') }}">Home</a></li>
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

						@foreach (session('compare') as $id => $product)
						<tr>
							<td><img src="{{asset('app/images/products/'.$product['image'])}}" alt="{{ $product['name'] }}"></td>
							<td>{{ $product['name'] }}</td>
							<td>{{ $product['price'] }}</td>
							<td>{{ $product['description'] ?? 'No description available' }}</td>
							<td>
								<a href="#" class="remove-icon" onclick="return confirmRemove({{ $id }});">
									<i class="fa fa-times"></i>
								</a>

							</td>
							<!-- <td>
								<div class="action">
									<a class="lnk btn btn-primary" href="#">Add To Cart</a>
								</div>
							</td> -->
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================= FOOTER ============================================================= -->

@endsection
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