
<?php $__env->startSection('title', 'Add New Product'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        #data{
            display: none;
        }
        #input:checked~#data {
            display: unset;
        }
    </style>
    <h1>Add New Voucher</h1>
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
                        <form action="" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <label class="control-label">Tên sản phẩm:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Tên sản phẩm" name="name"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Mô tả:</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" placeholder="Mô tả sản phẩm" name="description"></textarea> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Giá:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="Giá sản phẩm" name="price"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chọn danh mục:</label>
                                <div class="controls">
                                    <label for="all">Tất cả người dùng</label>
                                    <input type="radio" name="application" id="all" value="all">
                                    <label for="buy">Đã mua hàng</label>
                                    <input type="radio" name="application" id="buy" value="buy">
                                    <label for="input">Đạt mốc</label>
                                    <input type="radio" name="application" id="input" value="input">
                                    <label for="input">Nhập Vào đây</label>
                                    <input type="number" name="application" id="data">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chọn hình:</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload">
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\nhom3_ST5_BE2_NH23-24\resources\views/admin/add-voucher.blade.php ENDPATH**/ ?>