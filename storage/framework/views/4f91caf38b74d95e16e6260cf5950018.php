
<?php $__env->startSection('title', 'home'); ?>
<?php $__env->startSection('content'); ?>

    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">

                                <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>
                    <!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->

                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                        <h3 class="section-title">hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product['discount'] != 0): ?>
                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image">
                                                    <a href="<?php echo e(url('detail/' . $product['id'])); ?>">
                                                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <img src="<?php echo e(asset("app/images/products/{$image->name}")); ?>">
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </a>
                                                </div>
                                                <div class="sale-offer-tag"><span>SỐC Không giảm giá!!!<br>
                                                    </span></div>
                                                <div class="timing-wrapper">
                                                    <div class="box-wrapper">
                                                        <div class="date box"> <span class="key">15</span> <span
                                                                class="value">NGÀY</span> </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="hour box"> <span class="key">10</span> <span
                                                                class="value">GIỜ</span> </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="minutes box"> <span class="key">30</span> <span
                                                                class="value">PHÚT</span> </div>
                                                    </div>
                                                    <div class="box-wrapper hidden-md">
                                                        <div class="seconds box"> <span class="key">0</span> <span
                                                                class="value">GIÂY</span> </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.hot-deal-wrapper -->

                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name"><a
                                                        href="<?php echo e(url('detail/' . $product['id'])); ?>"><?php echo e($product['name']); ?></a>
                                                </h3>

                                                <span style="text-decoration: line-through;"><?php echo e($product['price']); ?>

                                                    vnd</span>
                                                <div class="product-price"> <span class="price">
                                                        <?php echo e($product['discount']); ?> vnd </span></div>
                                                <!-- /.product-price -->

                                            </div>
                                            <!-- /.product-info -->

                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <div class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                            type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                        <button class="btn btn-primary cart-btn cooke"
                                                            data-id="<?php echo e($product->id); ?>" type="button">Add to
                                                            cart</button>
                                                    </div>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->

                    <!-- ============================================== SPECIAL OFFER ============================================== -->

                    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                        <h3 class="section-title">Special Offer</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                                <?php $__currentLoopData = $specialProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <div class="products special-product">
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"> <a
                                                                        href="<?php echo e(url('detail/' . $specialProduct['id'])); ?>">
                                                                        <?php $__currentLoopData = $specialProduct->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <img
                                                                                src="<?php echo e(asset("app/images/products/{$image->name}")); ?>">
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </a> </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a
                                                                        href="<?php echo e(url('detail/' . $specialProduct['id'])); ?>">Floral
                                                                        Print
                                                                        Shirt</a></h3>
                                                                <div class="product-price"> <span class="price">
                                                                        <?php echo e($specialProduct->price); ?>vnd
                                                                    </span> </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-micro-row -->
                                                </div>
                                                <!-- /.product-micro -->

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                    <!-- ============================================== PRODUCT TAGS ============================================== -->
                    <div class="sidebar-widget product-tag wow fadeInUp">
                        <h3 class="section-title">Product tags</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="tag-list"> <a class="item" title="Phone" href="<?php echo e(url('category')); ?>">Phone</a>
                                <a class="item active" title="Vest" href="<?php echo e(url('category')); ?>">Vest</a> <a
                                    class="item" title="Smartphone" href="<?php echo e(url('category')); ?>">Smartphone</a> <a
                                    class="item" title="Furniture" href="<?php echo e(url('category')); ?>">Furniture</a> <a
                                    class="item" title="T-shirt" href="<?php echo e(url('category')); ?>">T-shirt</a> <a
                                    class="item" title="Sweatpants" href="<?php echo e(url('category')); ?>">Sweatpants</a> <a
                                    class="item" title="Sneaker" href="<?php echo e(url('category')); ?>">Sneaker</a> <a
                                    class="item" title="Toys" href="<?php echo e(url('category')); ?>">Toys</a> <a class="item"
                                    title="Rose" href="<?php echo e(url('category')); ?>">Rose</a> </div>
                            <!-- /.tag-list -->
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                    <!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Subscribe to our newsletter">
                                </div>
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                    <!-- ============================================== Testimonials============================================== -->
                    <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                        <div id="advertisement" class="advertisement">
                            <div class="item">
                                <div class="avatar"><img src="<?php echo e(asset('app\images\testimonials\member1.png')); ?>"
                                        alt="Image"></div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port
                                    mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">John Doe <span>Abc Company</span> </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="avatar"><img src="<?php echo e(asset('app\images\testimonials\member3.png')); ?>"
                                        alt="Image"></div>
                                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                                    mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="avatar"><img src="<?php echo e(asset('app\images\testimonials\member2.png')); ?>"
                                        alt="Image"></div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port
                                    mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ============================================== Testimonials: END ============================================== -->

                    <div class="home-banner"> <img src="<?php echo e(asset('app\images\banners\LHS-banner.jpg')); ?>"
                            alt="Image"> </div>
                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="item" style="background-image: url(<?php echo e(asset('app/images/sliders/01.jpg')); ?> );">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Top Brands</div>
                                        <div class="big-text fadeInDown-1"> New Collections </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit.</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                                Now</a> </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                            <div class="item"
                                style="background-image: url(<?php echo e(asset('app/images/sliders/02.jpg')); ?> );">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Spring 2016</div>
                                        <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span>
                                        </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem
                                                quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                                Now</a> </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ========================================= SECTION – HERO : END ========================================= -->

                    <!-- ============================================== INFO BOXES ============================================== -->
                    <div class="info-boxes wow fadeInUp">
                        <div class="info-boxes-inner">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">money back</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">30 Days Money Back Guarantee</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="hidden-md col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">free shipping</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Shipping on orders over $99</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">Special Sale</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Extra $5 off on all items </h6>
                                    </div>
                                </div>
                                <!-- .col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.info-boxes-inner -->

                    </div>
                    <!-- /.info-boxes -->
                    <!-- ============================================== INFO BOXES : END ============================================== -->
                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">New Products</h3>
                            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active"><a data-transition-type="backSlide" href="#all"
                                        data-toggle="tab">All</a></li>
                                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a>
                                </li>
                            </ul>
                            <!-- /.nav-tabs -->
                        </div>
                        <div class="tab-content outer-top-xs">
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a
                                                                    href="<?php echo e(url('detail/' . $newProduct['id'])); ?>">
                                                                    <?php $__currentLoopData = $newProduct->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <img src="<?php echo e(asset("app/images/products/{$image->name}")); ?>"
                                                                            alt="">
                                                                </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a
                                            href="<?php echo e(url('detail/' . $newProduct['id'])); ?>"><?php echo e($newProduct['name']); ?></a>
                                    </h3>
                                    <div class="description"><?php echo $newProduct['description']; ?></div>
                                    <div class="product-price"> <span class="price"> <?php echo e($newProduct['price']); ?>vnd
                                        </span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">

                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button data-toggle="tooltip" class="btn btn-primary icon cooke"
                                                    data-id="<?php echo e($newProduct['id']); ?>" type="button" title="Add Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-primary cart-btn add-to-cart"
                                                    data-id="<?php echo e($newProduct['id']); ?>" type="button">Add to cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart"
                                                    href="<?php echo e(url('detail/' . $newProduct['id'])); ?>" title="Wishlist"> <i
                                                        class="icon fa fa-heart"></i> </a>
                                            </li>
                                            <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart"
                                                    href="<?php echo e(url('detail/' . $newProduct['id'])); ?>" title="Compare">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /.home-owl-carousel -->
            </div>

            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

           
            <!-- /.sidebar-widget-body -->

            <!-- /.product-slider -->

        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="smartphone">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p5.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist">
                                                    <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare">
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p6.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist">
                                                    <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare">
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p7.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist">
                                                    <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare">
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p8.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare">
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p9.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare">
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p10.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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
                <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="laptop">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p11.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p12.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p13.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p14.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p15.jpg')); ?>" alt="image"></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p16.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Apple
                                            Iphone 5s 32GB</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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
                <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="apple">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p18.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p18.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p17.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p16.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p13.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral
                                            Print Buttoned</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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

                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                                src="<?php echo e(asset('app\images\products\p14.jpg')); ?>" alt=""></a>
                                    </div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Samsung
                                            Galaxy S4</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> $450.99
                                        </span> <span class="price-before-discount">$ 800</span>
                                    </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                                    title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                            </li>
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
                <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->

    </div>
    <!-- /.tab-content -->
    </div>
    <!-- /.scroll-tabs -->
    <!-- ============================================== SCROLL TABS : END ============================================== -->
    <!-- ============================================== WIDE PRODUCTS ============================================== -->
    <div class="wide-banners wow fadeInUp outer-bottom-xs">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="wide-banner cnt-strip">
                    <div class="image"> <img class="img-responsive"
                            src="<?php echo e(asset('app\images\banners\home-banner1.jpg')); ?>" alt=""> </div>
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
                <div class="wide-banner cnt-strip">
                    <div class="image"> <img class="img-responsive"
                            src="<?php echo e(asset('app\images\banners\home-banner2.jpg')); ?>" alt=""> </div>
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wide-banners -->

    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp">
        <h3 class="section-title">Featured products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p5.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p6.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\blank.gif')); ?>"
                                        data-echo="assets/images/products/p7.jpg" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p8.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p9.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p10.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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
        <!-- /.home-owl-carousel -->
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
    <!-- ============================================== WIDE PRODUCTS ============================================== -->
    <div class="wide-banners wow fadeInUp outer-bottom-xs">
        <div class="row">
            <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                    <div class="image"> <img class="img-responsive"
                            src="<?php echo e(asset('app\images\banners\home-banner.jpg')); ?>" alt=""> </div>
                    <div class="strip strip-text">
                        <div class="strip-inner">
                            <h2 class="text-right">New Mens Fashion<br>
                                <span class="shopping-needs">Save up to 40% off</span>
                            </h2>
                        </div>
                    </div>
                    <div class="new-label">
                        <div class="text">NEW</div>
                    </div>
                    <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.wide-banners -->
    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    <!-- ============================================== BEST SELLER ============================================== -->

    <div class="best-deal wow fadeInUp outer-bottom-xs">
        <h3 class="section-title">Best seller</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                <?php $__currentLoopData = $bestSeller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="products best-product">
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image"> <a href="<?php echo e(url('/detail/' . $product->id)); ?>">
                                                        <img src="<?php echo e(asset('app/images/products/' . $product->image_name)); ?>"
                                                            alt=""> </a> </div>
                                                <!-- /.image -->

                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col2 col-xs-7">
                                            <div class="product-info">
                                                <h2 style="font-size: 1.2em" class="name"><a
                                                        href="#"><?php echo e($product->name); ?></a></h2>
                                                <div style="font-size: 1.2em" class="product-price"> <span
                                                        class="price">
                                                        <?php echo e($product->price); ?>vnd</span> </div>
                                                <p>số lượng bán <?php echo e($product->total_quantity); ?></p>
                                                <!-- /.product-price -->

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>
                                <!-- /.product-micro -->

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    </div>
    <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->
    <!-- ============================================== BEST SELLER : END ============================================== -->

    <!-- ============================================== BLOG SLIDER ============================================== -->
    <section class="section latest-blog outer-bottom-vs wow fadeInUp">
        <h3 class="section-title">latest form blog</h3>
        <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img
                                        src="<?php echo e(asset('app\images\blog-post\post1.jpg')); ?>" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque
                                    laudantium</a></h3>
                            <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img
                                        src="<?php echo e(asset('app\images\blog-post\post2.jpg')); ?>" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas
                                    nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut
                                labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img
                                        src="<?php echo e(asset('app\images\blog-post\post1.jpg')); ?>" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas
                                    nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img
                                        src="<?php echo e(asset('app\images\blog-post\post2.jpg')); ?>" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas
                                    nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

                <div class="item">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <div class="image"> <a href="blog.html"><img
                                        src="<?php echo e(asset('app\images\blog-post\post1.jpg')); ?>" alt=""></a> </div>
                        </div>
                        <!-- /.blog-post-image -->

                        <div class="blog-post-info text-left">
                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas
                                    nulla pariatur</a></h3>
                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium</p>
                            <a href="#" class="lnk btn btn-primary">Read more</a>
                        </div>
                        <!-- /.blog-post-info -->

                    </div>
                    <!-- /.blog-post -->
                </div>
                <!-- /.item -->

            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.blog-slider-container -->
    </section>
    <!-- /.section -->
    <!-- ============================================== BLOG SLIDER : END ============================================== -->

    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section wow fadeInUp new-arriavls">
        <h3 class="section-title">New Arrivals</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p19.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p28.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p30.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p1.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p2.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a href="<?php echo e(url('detail')); ?>"><img
                                        src="<?php echo e(asset('app\images\products\p3.jpg')); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(url('detail')); ?>">Floral Print
                                    Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="<?php echo e(url('detail')); ?>"
                                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                    </li>
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
        <!-- /.home-owl-carousel -->
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

    </div>
    <!-- /.homebanner-holder -->
    <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
        <div class="logo-slider-inner">
            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                <div class="item m-t-15"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand1.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item m-t-10"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand2.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand3.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand4.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand5.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand6.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand2.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand4.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand1.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->

                <div class="item"> <a href="#" class="image"> <img
                            data-echo="assets/images/brands/brand5.png" src="<?php echo e(asset('app\images\blank.gif')); ?>"
                            alt=""> </a> </div>
                <!--/.item-->
            </div>
            <!-- /.owl-carousel #logo-slider -->
        </div>
        <!-- /.logo-slider-inner -->

    </div>
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Set the expiration date
        var expirationDate = new Date();
        expirationDate.setDate(expirationDate.getDate() + 15); // Thay đổi số ngày cho thời gian hết hạn

        // Update the countdown every second
        var x = setInterval(function() {
            // Get the current date and time
            var now = new Date().getTime();

            // Calculate the remaining time
            var distance = expirationDate - now;

            // Calculate days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the countdown
            document.querySelector('.date .key').innerHTML = days;
            document.querySelector('.hour .key').innerHTML = hours;
            document.querySelector('.minutes .key').innerHTML = minutes;
            document.querySelector('.seconds .key').innerHTML = seconds;

            // If the countdown is over, display a message
            if (distance < 0) {
                clearInterval(x);
                document.querySelector('.timing-wrapper').innerHTML = 'Hết hạn giảm giá!';
            }
        }, 1000);
        $(document).ready(function() {
            $('#filterButton').click(function() {
                var price = $('#priceSlider').val();
                $.ajax({
                    url: '/filterProducts', // URL of your route
                    type: 'GET',
                    data: {
                        price: price
                    },
                    success: function(data) {
                        // Update your product list here
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\nhom3_ST5_BE2_NH23-24\resources\views/home.blade.php ENDPATH**/ ?>