@if (session('success'))
<div class="alert alert-success" id="success-alert">
    {{ session('success') }}
</div>
@endif


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'default')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('app\css\bootstrap.min.css') }}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('app\css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\rating.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\blue.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0\css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app\css\bootstrap-select.min.css') }}">
    <link href="{{ asset('app\css\lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('app\chatWe\chatWe.css') }}" rel="stylesheet">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('app\css\font-awesome.css') }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>

    </style>
    
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <!-- <li><a href="{{ url('myAccount') }}"><i class="icon fa fa-user"></i>My Account</a></li> -->
                            @if (Auth::check())
                            <li><a href="{{ url('myAccount') }}"><i class="icon fa fa-user"></i>My Account</a></li>
                          
                            @else
                            <li><a href="{{ url('login') }}"><i class="icon fa fa-user"></i>My Account</a></li>
                            @endif
                            <li><a href="{{ url('my-wishlist') }}"><i class="icon fa fa-heart"></i>Wishlist</a></li>

                            <li><a href="{{ url('shopping-cart') }}"><i class="icon fa fa-shopping-cart"></i>My
                                    Cart</a></li>
                            <li><a href="{{ url('vouchers') }}"><i class="fa-solid fa-ticket"></i>
                                    Your Vouchers</a></li>
                            @if (Auth::check())
                            <li><a href="{{ url('logout') }}"><i class="icon fa fa-lock"></i>Logout</a></li>
                            @else
                            <li><a href="{{ url('login') }}"><i class="icon fa fa-lock"></i>Login</a></li>
                            @endif
                        </ul>
                    </div><!-- /.cnt-account -->

                    <div class="cnt-block">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div><!-- /.header-top-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo">
                            <a href="{{ url('home') }}">

                                <img src="{{ asset('app\images\logo.png') }}" alt="">

                            </a>
                        </div><!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div><!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form action="{{ url('/search') }}" method="get">
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('category') }}">Categories <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu">
                                                @foreach ($categories as $category)
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('category') }}">{{ $category['name'] }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>

                                    @csrf
                                    <input class="search-field" name="name" placeholder="Search here..." autocomplete="on">
                                    <button type="submit" class="search-button">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div><!-- /.top-search-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart">

                            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket">
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                    </div>
                                    <div class="basket-item-count" id="qtyItem"><span class="count">0</span></div>
                                    <div class="total-price-basket">
                                        <span class="lbl">cart Item</span>
                                        <span class="total-price" id="totalPrice">
                                            <span class="sign"></span><span class="value"></span>
                                        </span>
                                    </div>


                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="cart-item product-summary" id="cart-products">
                                        <!-- <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image">
                                                    <a href="{{ url('detail') }}"><img
                                                            src="{{ asset('app\images\cart.jpg') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">

                                                <h3 class="name"><a href="index.php?page-detail">Simple Product</a>
                                                </h3>
                                                <div class="price">$600.00</div>
                                            </div>
                                            <div class="col-xs-1 action">
                                                <a href="#"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div> -->
                                    </div><!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>

                                    <div class="clearfix cart-total">
                                        <div class="pull-right" style="padding-right: 50%;">

                                            <span class="text" id="subTotal">Sub Total :</span><span class='price'></span>

                                        </div>
                                        <div class="clearfix"></div>

                                        <a href="{{ url('checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                    </div><!-- /.cart-total-->


                                </li>
                            </ul><!-- /.dropdown-menu -->
                        </div><!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div><!-- /.top-cart-row -->
                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown yamm-fw">
                                        <a href="{{ url('/') }}" class="dropdown-toggle">Home</a>
                                    </li>
                                    @foreach ($categories as $category)
                                    <li class="dropdown yamm mega-menu"> <a href="{{ url('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }}</a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            @foreach ($allCategories as $subCategory)
                                                            <ul class="links">
                                                                @if ($category->id == $subCategory->parent_id)
                                                                <li style="font-weight: bold;"><a style="font-size: 2em;" href="{{ url('category/' . $subCategory->id) }}">{{ $subCategory->name }}</a>
                                                                </li>
                                                                @endif
                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive" src="{{ asset('app\images\banners\top-menu-banner.jpg') }}" alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="{{ url('home') }}">Home</a></li>
                                                                <li><a href="{{ url('category') }}">Category</a></li>
                                                                <li><a href="{{ url('detail') }}">Detail</a></li>
                                                                <li><a href="{{ url('shopping-cart') }}">Shopping Cart
                                                                        Summary</a></li>
                                                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                                                <li><a href="{{ url('blog-details') }}">Blog
                                                                        Detail</a></li>
                                                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                                                <li><a href="{{ url('sign-in') }}">Sign In</a></li>
                                                                <li><a href="{{ url('my-wishlist') }}">Wishlist</a>
                                                                </li>
                                                                <li><a href="{{ url('terms-conditions') }}">Terms and
                                                                        Condition</a></li>
                                                                <li><a href="{{ url('track-orders') }}">Track
                                                                        Orders</a></li>
                                                                <li><a href="{{ url('product-comparison') }}">Product-Comparison</a>
                                                                </li>
                                                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                                                                <li><a href="{{ url('404') }}">404</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('contact') }}">map of the store</a></li>
                                    <li class="dropdown  navbar-right special-menu"> <a href="#">Todays
                                            offer</a> </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->
    </header>
    <!-- Nhắn tin với admin -->
    <section class="khung-chat">
        <div class="nhoNe">
            <h3 class="TenChat">
                Chat
            </h3>
        </div>
        <div class="contaniner-fluid">
            <div id="chat">
                <p class="o-chat text-nhan">hello</p>
                <p class="o-chat text-gui">hello</p>
            </div>

            <div class="user-input">
                <input type="text" id="vanban">
                <button class="gui">Gửi</button>
            </div>
        </div>
    </section>
    <!-- Nhắn tin với admin -->
    @yield('content')
    <footer id="footer" class="footer color-bg">


        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Contact Us</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body">
                            <ul class="toggle-footer" style="">
                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p>+(888) 123-4567<br>+(888) 456-7890</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span><a href="#">flipmart@themesground.com</a></span>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- /.module-body -->
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Customer Service</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                                <li><a href="#" title="About us">Order History</a></li>
                                <li><a href="#" title="faq">FAQ</a></li>
                                <li><a href="#" title="Popular Searches">Specials</a></li>
                                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                            </ul>
                        </div><!-- /.module-body -->
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Corporation</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a title="Your Account" href="#">About us</a></li>
                                <li><a title="Information" href="#">Customer Service</a></li>
                                <li><a title="Addresses" href="#">Company</a></li>
                                <li><a title="Addresses" href="#">Investor Relations</a></li>
                                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                            </ul>
                        </div><!-- /.module-body -->
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Why Choose Us</h4>
                        </div><!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                                <li><a href="#" title="Blog">Blog</a></li>
                                <li><a href="#" title="Company">Company</a></li>
                                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                            </ul>
                        </div><!-- /.module-body -->
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-padding social">
                    <ul class="link">
                        <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                        <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                        <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                        <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                        <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                        <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                        <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 no-padding">
                    <div class="clearfix payment-methods">
                        <ul>
                            <li><img src="{{ asset('app\images\payments\1.png') }}" alt=""></li>
                            <li><img src="{{ asset('app\images\payments\2.png') }}" alt=""></li>
                            <li><img src="{{ asset('app\images\payments\3.png') }}" alt=""></li>
                            <li><img src="{{ asset('app\images\payments\4.png') }}" alt=""></li>
                            <li><img src="{{ asset('app\images\payments\5.png') }}" alt=""></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================================================= FOOTER : END============================================================= -->


    <!-- For demo purposes – can be removed on production -->


    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('app\js\ajax.js') }}"></script>
    <script src="{{ asset('app\js\jquery-1.11.1.min.js') }}"></script>

    <script src="{{ asset('app\js\bootstrap.min.js') }}"></script>

    <script src="{{ asset('app\js\bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('app\js\owl.carousel.min.js') }}"></script>

    <script src="{{ asset('app\js\echo.min.js') }}"></script>
    <script src="{{ asset('app\js\jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('app\js\bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('app\js\jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app\js\lightbox.min.js') }}"></script>
    <script src="{{ asset('app\js\bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('app\js\wow.min.js') }}"></script>
    <script src="{{ asset('app\js\scripts.js') }}"></script>
    <script src="{{ asset('app\js\shopping-cart.js') }}"></script>
    <script src="{{ asset('app\js\category.js') }}"></script>

    <script src="{{ asset('app\js\home.js') }}"></script>
    <script src="{{ asset('app\js\confirmorder.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="{{ asset('app\chatWe\chatWe.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- For demo purposes – can be removed on production -->
    {{-- <script src="switchstylesheet/switchstylesheet.js"></script> --}}

    {{-- <script>
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
        
    </script> --}}
    <!-- For demo purposes – can be removed on production : End -->
    <script type="text/javascript">
        var cashPaymentUrl = "{{ url('/cash-payment') }}"; // Thay '/trang-A' bằng đường dẫn thực tế của bạn
        var onlinePaymentUrl = "{{ url('/vnpay_create_payment') }}";
        var checkoutUrl = "{{ url('/checkout') }}";
    </script>
</body>

</html>