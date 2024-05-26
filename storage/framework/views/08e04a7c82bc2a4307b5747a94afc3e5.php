<?php $__env->startSection('title', 'Manage Product Type'); ?>
<?php $__env->startSection('content'); ?>
                <h1>Manage Category</h1>
            </div>
            <div class="container-fluid">
                <hr>
                <div class="row-fluid">add-category
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"><a
                                    href="<?php echo e(url('/manage-category/page')); ?>"> <i class="icon-plus"></i>
                                    </a></span>
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category Id</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td > <?php echo e($category['id']); ?> </td> 
                                            <td><?php echo e($category['name']); ?></td>

                                            <td>
                                                <a href="<?php echo e(url('edit-category')); ?>" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li class="active">1</li>
                                        <li>2</li>
                                        <li>3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-category.blade.php ENDPATH**/ ?>