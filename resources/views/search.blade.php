@extends('app')
@section('title', 'search')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-bd">
        <div class="container">
            <div class="row">
                @if ($searchTerm != null)
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"> <a href="{{ url('detail/' . $product['id']) }}">
                                                    @foreach ($product->images as $image)
                                                        <img src="{{ asset("app/images/products/{$image->name}") }}"
                                                            alt="">
                                                </a>
                    @endforeach
            </div>
            <!-- /.image -->
            <div class="tag new"><span>new</span></div>
        </div>
        <!-- /.product-image -->
        <div class="product-info text-left">
            <h3 class="name"><a href="{{ url('detail/' . $product['id']) }}">${{ $product['name'] }}</a></h3>
            <div class="rating rateit-small"></div>
            <div class="description"></div>
            <div class="product-price"> <span class="price"> ${{ $product['price'] }}
                </span>
            </div>
            <!-- /.product-price -->
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
            <div class="action">
                <ul class="list-unstyled">
                    <li class="add-cart-button btn-group">
                        <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i
                                class="fa fa-shopping-cart"></i>
                        </button>
                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </li>
                    <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart"
                            href="{{ url('detail/' . $product['id']) }}" title="Wishlist"> <i class="icon fa fa-heart"></i>
                        </a>
                    </li>
                    <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart"
                            href="{{ url('detail/' . $product['id']) }}" title="Compare">
                            <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                </ul>
            </div>
            <!-- /.action -->
        </div>
        <!-- /.cart -->
    </div>
    <!-- /.product -->

    </div>
    <!-- /.products -->
    </div>
    <!-- /.item -->
    </div>
    @endforeach
    @endif
    @if ($searchTerm == null)
        <div class="blank">
            <h1>Nothing is choose</h1>
        </div>
    @endif
    <div class="row" style="margin-left: 18px;">
        {{ $products->appends(['name' => $searchTerm])->links('vendor.pagination.default') }}
    </div>

    </div><!-- /.container -->
    </div><!-- /.body-content -->
    <!-- ============================================================= FOOTER ============================================================= -->
@endsection
