<?php $__env->startSection('title', 'Manage Product'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('add-success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('add-success')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('update-success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('update-success')); ?>

        </div>
    <?php endif; ?>
    <h1>Manage Products</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="<?php echo e(url('add-product')); ?>"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price ($)</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="">
                                        <td width="250">
                                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src="<?php echo e(asset("app/images/products/{$image->name}")); ?>"
                                                    style="width:100%">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->description); ?></td>
                                        <td><?php echo e($product->price); ?>$</td>
                                        <td><?php echo e($product->created_at); ?></td>
                                        <td><?php echo e($product->updated_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('form-edit-product', $product->id)); ?>"
                                                class="btn btn-success btn-mini">Edit</a>
                                            <form action="<?php echo e(route('product.delete', $product->id)); ?>" method="POST"
                                                class="delete-form">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                    class="btn btn-danger btn-mini delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active"><a href="">1</a>
                                </li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-product.blade.php ENDPATH**/ ?>