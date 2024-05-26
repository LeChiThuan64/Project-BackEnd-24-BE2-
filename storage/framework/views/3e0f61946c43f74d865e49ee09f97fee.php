<?php $__env->startSection('title', 'Manage Product'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Manage Vouchers</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="<?php echo e(url('add-voucher')); ?>"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Vouchers</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Discount</th>
                                    <th>Due date</th>
                                    <th>Quantity</th>        
                                    <th>Type</th>        
                                    <th>Status</th>        
                                                        </tr>
                            </thead>
                            <tbody>
                             <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 
                             <tr class="">
                                 <td><?php echo e($voucher->title); ?></td>
                                 <td><?php echo e($voucher->discount); ?></td>
                                 <td><?php echo e($voucher->due_date); ?></td>
                                 <td><?php echo e($voucher->quantity); ?></td>
                                 <td><?php echo e($voucher->type); ?></td>
                                 <?php if($voucher->due_date <= date('Y-m-d H:i:s')): ?>
                                 <td><?php echo e('Đã quá hạn'); ?></td>
                                 <?php endif; ?>
                                 <?php if($voucher->due_date > date('Y-m-d H:i:s')): ?>
                                 <td><?php echo e('Còn hiệu lực'); ?></td>
                                 <?php endif; ?>
                                 <td>
                                     <a href=""
                                     class="btn btn-success btn-mini">Edit</a>
                                     <form action="<?php echo e(route('voucher.delete',$voucher->id)); ?>" method="POST"
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-voucher.blade.php ENDPATH**/ ?>