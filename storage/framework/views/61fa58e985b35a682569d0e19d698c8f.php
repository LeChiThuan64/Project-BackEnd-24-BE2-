<?php $__env->startSection('title', 'Add New Product'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Add New Product</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Product info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                       <form action="<?php echo e(route('blog.store')); ?>" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <label class="control-label">Title:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Tên sản phẩm" name="title"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Content:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Mô tả sản phẩm" name="content"></textarea> *
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Post</button>
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\nhom3_ST5_BE2_NH23-24\resources\views/admin/add-blog.blade.php ENDPATH**/ ?>