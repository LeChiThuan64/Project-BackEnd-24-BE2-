<?php $__env->startSection('title', 'Add Category'); ?>
<?php $__env->startSection('content'); ?>

    <h1>Edit Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Category info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form id="edit-category-form" action="<?php echo e(url('manage-category/edit/' . $category->id)); ?>" method="post"
                            class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="control-group">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Category name" name="name"
                                        value="<?php echo e($category->name); ?>" />
                                </div>
                            </div>
                            <!-- <div class="control-group">
            <label class="control-label">Choose another logo :</label>
            <div class="controls">
                <input type="file" name="fileUpload" id="fileUpload">
            </div>
        </div> -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" id="edit-category-button">Update</button>
                            </div>
                        </form>


                        <!-- END USER FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/admin/edit-category.blade.php ENDPATH**/ ?>