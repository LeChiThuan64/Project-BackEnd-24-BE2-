<?php $__env->startSection('title', 'search'); ?>
<?php $__env->startSection('content'); ?>
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-bd">
        <div class="container">
            <div class="row">
                <?php if($searchTerm != null): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"> <a href="<?php echo e(url('detail/' . $product['id'])); ?>">
                                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <h3 class="name"><a href="<?php echo e(url('detail/' . $product['id'])); ?>">$<?php echo e($product['name']); ?></a></h3>
            <div class="rating rateit-small"></div>
            <div class="description"></div>
            <div class="product-price"> <span class="price"> $<?php echo e($product['price']); ?>

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
                            href="<?php echo e(url('detail/' . $product['id'])); ?>" title="Wishlist"> <i class="icon fa fa-heart"></i>
                        </a>
                    </li>
                    <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart"
                            href="<?php echo e(url('detail/' . $product['id'])); ?>" title="Compare">
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if($searchTerm == null): ?>
        <div class="blank">
            <h1>Nothing is choose</h1>
        </div>
    <?php endif; ?>
    <div class="row" style="margin-left: 18px;">
        <?php echo e($products->appends(['name' => $searchTerm])->links('vendor.pagination.default')); ?>

    </div>

    </div><!-- /.container -->
    </div><!-- /.body-content -->
    <!-- ============================================================= FOOTER ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/search.blade.php ENDPATH**/ ?>