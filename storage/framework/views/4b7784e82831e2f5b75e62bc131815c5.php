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
                        <form action="<?php echo e(route('product.add')); ?>" method="post" class="form-horizontal"
                            enctype="multipart/form-data" id="productForm">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <label class="control-label">Name:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Name" name="name" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Describe:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Describe" name="description"></textarea> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Price" name="price" required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose categories:</label>
                                <div class="controls">
                                    <select name="category_ids" multiple required>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Quantity:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Quantity" name="quantity" required />
                                    *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label><input type="radio" name="status" value="1" required /> Available
                                    </label>
                                    <label><input type="radio" name="status" value="0" required /> Disable </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Size:</label>
                                <div class="controls">
                                    <select name="size" class="" required>
                                        <option value="">Choose size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select> *
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Featured:</label>
                                <div class="controls">
                                    <label><input type="radio" name="feature" value="1" required />Yes</label>
                                    <label><input type="radio" name="feature" value="0" required />No</label>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Discount:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Discount" name="discount" required />
                                    *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose image:</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload" accept="image/*">
                                    <img id="preview" src="#" alt="your image"
                                        style="display: none; width: 100px;" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Add</button>
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\nhom3_ST5_BE2_NH23-24\resources\views/admin/add-product.blade.php ENDPATH**/ ?>