<?php $__env->startSection('title', 'Edit Product'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Update Product</h1>
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
                        <form action="<?php echo e(route('product.modify', $product->id)); ?>" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="control-group">
                                <label class="control-label">Tên sản phẩm:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Tên sản phẩm" name="name"
                                        value="<?php echo e($product->name); ?>" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Mô tả:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Mô tả sản phẩm" name="description"><?php echo e($product->description); ?></textarea> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Giá:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Giá sản phẩm" name="price"
                                        value="<?php echo e($product->price); ?>" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chọn danh mục:</label>
                                <div class="controls">
                                    <select name="category_ids[]" multiple required>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"
                                                <?php echo e(in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : ''); ?>>
                                                <?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chọn hình:</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirm('Do you want to update this product?')">Update</button>
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
    <!-- <script src="<?php echo e(url('admin/ckeditor/ckeditor.js')); ?>"></script> -->
    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/admin/form-edit-product.blade.php ENDPATH**/ ?>