<?php if(session('success')): ?>
<div class="alert alert-success" id="success-alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'default'); ?></title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app\css\bootstrap.min.css')); ?>">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('app\css\main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\rating.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\blue.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\owl.transitions.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\rateit.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\bootstrap-select.min.css')); ?>">
    <link href="<?php echo e(asset('app\css\lightbox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('app\chatWe\chatWe.css')); ?>" rel="stylesheet">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="<?php echo e(asset('app\css\font-awesome.css')); ?>">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

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
                            <li><a href="<?php echo e(url('myAccount')); ?>"><i class="icon fa fa-user"></i>My Account</a></li>
                            <li><a href="<?php echo e(url('my-wishlist')); ?>"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                            <li><a href="<?php echo e(url('shopping-cart')); ?>"><i class="icon fa fa-shopping-cart"></i>My
                                    Cart</a></li>
                            <?php if(Auth::check()): ?>
                            <li><a href="<?php echo e(url('logout')); ?>"><i class="icon fa fa-lock"></i>Logout</a></li>
                            <?php else: ?>
                            <li><a href="<?php echo e(url('login')); ?>"><i class="icon fa fa-lock"></i>Login</a></li>
                            <?php endif; ?>
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
                            <a href="<?php echo e(url('home')); ?>">

                                <img src="<?php echo e(asset('app\images\logo.png')); ?>" alt="">

                            </a>
                        </div><!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div><!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form action="<?php echo e(url('/search')); ?>" method="get">
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo e(url('category')); ?>">Categories <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo e(url('category')); ?>"><?php echo e($category['name']); ?></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    </ul>

                                    <?php echo csrf_field(); ?>
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
                                    <div class="basket-item-count"><span class="count">2</span></div>
                                    <div class="total-price-basket">
                                        <span class="lbl">cart -</span>
                                        <span class="total-price">
                                            <span class="sign">$</span><span class="value">600.00</span>
                                        </span>
                                    </div>


                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image">
                                                    <a href="<?php echo e(url('detail')); ?>"><img src="<?php echo e(asset('app\images\cart.jpg')); ?>" alt=""></a>
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
                                        </div>
                                    </div><!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>

                                    <div class="clearfix cart-total">
                                        <div class="pull-right">

                                            <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                        </div>
                                        <div class="clearfix"></div>

                                        <a href="<?php echo e(url('checkout')); ?>" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                    </div><!-- /.cart-total-->


                                </li>
                            </ul><!-- /.dropdown-menu-->
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
                                        <a href="<?php echo e(url('/')); ?>" class="dropdown-toggle">Home</a>
                                    </li>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="dropdown yamm mega-menu"> <a href="<?php echo e(url('home')); ?>" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?php echo e($category->name); ?></a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <?php $__currentLoopData = $allCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <ul class="links">
                                                                <?php if($category->id == $subCategory->parent_id): ?>
                                                                <li style="font-weight: bold;"><a style="font-size: 2em;" href="<?php echo e(url('category/' . $subCategory->id)); ?>"><?php echo e($subCategory->name); ?></a>
                                                                </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive" src="<?php echo e(asset('app\images\banners\top-menu-banner.jpg')); ?>" alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
                                                                <li><a href="<?php echo e(url('category')); ?>">Category</a></li>
                                                                <li><a href="<?php echo e(url('detail')); ?>">Detail</a></li>
                                                                <li><a href="<?php echo e(url('shopping-cart')); ?>">Shopping Cart
                                                                        Summary</a></li>
                                                                <li><a href="<?php echo e(url('checkout')); ?>">Checkout</a></li>
                                                                <li><a href="<?php echo e(url('blog')); ?>">Blog</a></li>
                                                                <li><a href="<?php echo e(url('blog-details')); ?>">Blog
                                                                        Detail</a></li>
                                                                <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                                                                <li><a href="<?php echo e(url('sign-in')); ?>">Sign In</a></li>
                                                                <li><a href="<?php echo e(url('my-wishlist')); ?>">Wishlist</a>
                                                                </li>
                                                                <li><a href="<?php echo e(url('terms-conditions')); ?>">Terms and
                                                                        Condition</a></li>
                                                                <li><a href="<?php echo e(url('track-orders')); ?>">Track
                                                                        Orders</a></li>
                                                                <li><a href="<?php echo e(url('product-comparison')); ?>">Product-Comparison</a>
                                                                </li>
                                                                <li><a href="<?php echo e(url('faq')); ?>">FAQ</a></li>
                                                                <li><a href="<?php echo e(url('404')); ?>">404</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
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
    <?php echo $__env->yieldContent('content'); ?>
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
                            <li><img src="<?php echo e(asset('app\images\payments\1.png')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('app\images\payments\2.png')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('app\images\payments\3.png')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('app\images\payments\4.png')); ?>" alt=""></li>
                            <li><img src="<?php echo e(asset('app\images\payments\5.png')); ?>" alt=""></li>
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
    <script src="<?php echo e(asset('app\js\ajax.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\jquery-1.11.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset('app\js\bootstrap.min.js')); ?>"></script>

    <script src="<?php echo e(asset('app\js\bootstrap-hover-dropdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\owl.carousel.min.js')); ?>"></script>

    <script src="<?php echo e(asset('app\js\echo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\jquery.easing-1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\bootstrap-slider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\jquery.rateit.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('app\js\lightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\shopping-cart.js')); ?>"></script>
    <script src="<?php echo e(asset('app\js\home.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="<?php echo e(asset('app\chatWe\chatWe.js')); ?>"></script>
    <!-- For demo purposes – can be removed on production -->
    

    
    <!-- For demo purposes – can be removed on production : End -->
    <script type="text/javascript">
        var cashPaymentUrl = "<?php echo e(url('/shopping-cart')); ?>"; // Thay '/trang-A' bằng đường dẫn thực tế của bạn
        var onlinePaymentUrl = "<?php echo e(url('/vnpay_create_payment')); ?>";
        var checkoutUrl = "<?php echo e(url('/checkout')); ?>";
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\Git\nhom3_ST5_BE2_NH23-24\resources\views/app.blade.php ENDPATH**/ ?>