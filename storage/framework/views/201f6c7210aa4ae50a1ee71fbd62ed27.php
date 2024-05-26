<?php $__env->startSection('title', 'Add New Voucher'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        #data{
            display: none;
        }
        .data{
            display: none;
        }
        #input:checked~#data {
            display: unset;
        }
        #input:checked~.data {
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
                        <h5>Voucher info</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form action="<?php echo e(route('add.voucher')); ?>" method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <label class="control-label">Title:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="tên voucher" name="title"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Số giảm giá tính theo %:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="giảm gía %" name="discount"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Số lượng:</label>
                                <div class="controls">
                                    <input type="number" class="span11" placeholder="số lượng" name="quantity"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Ngày hết hạn:</label>
                                <div class="controls">
                                    <input type="date" class="span11" name="duedate"
                                        required /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chọn phạm vi áp dụng:</label>
                                <div class="controls">
                                    <label for="all">Tất cả người dùng</label>
                                    <input type="radio" name="application" id="all" value="1">
                                   <br> <label for="buy">Đã mua hàng</label>
                                    <input type="radio" name="application" id="buy" value="2">
                                   <br> <label for="input">Đạt mốc</label>
                                    <input type="radio" name="application" id="input" value="3">
                                    <br><label class="data" for="input">Nhập Vào đây</label>
                                    <input type="number" name="application_value" id="data">
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/admin/add-voucher.blade.php ENDPATH**/ ?>