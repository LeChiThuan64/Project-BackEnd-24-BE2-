<?php $__env->startSection('title', 'Manage Product Type'); ?>
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
    <?php if(session('delete-success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('delete-success')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('delete-failure')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('delete-failure')); ?>

        </div>
    <?php endif; ?>
    <h1>Manage Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="<?php echo e(url('/manage-category/page')); ?>"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
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
                                        <td> <?php echo e($category['id']); ?> </td>
                                        <td><?php echo e($category['name']); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('edit-category', ['id' => $category->id])); ?>"
                                                class="btn btn-success btn-mini">Edit</a>

                                            <form action="<?php echo e(route('category.delete', $category->id)); ?>" method="POST"
                                                class="delete-form">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-mini delete-cate-btn"
                                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-category.blade.php ENDPATH**/ ?>