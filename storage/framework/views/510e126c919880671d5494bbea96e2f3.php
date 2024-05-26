<?php $__env->startSection('title', 'Manage Product'); ?>
<?php $__env->startSection('content'); ?>
    
    <h1>Manage Blogs</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="<?php echo e(url('add-blog')); ?>"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>        
                                                        </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="">
                                        <td><?php echo e($blog->title); ?></td>
                                        <td> <?php
                                            $content = trim(strip_tags($blog['content']));
                                            if (strlen($content) >= 100) {
                                                $content = mb_substr($content, 0, mb_strpos($content, ' ', 100));
                                            }
                                            echo $content;?></td>
                                        <td><?php echo e($blog->update_at); ?></td>
                                        <td><?php echo e($blog->create_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('edit-blog/'.$blog->id)); ?>"
                                                class="btn btn-success btn-mini">Edit</a>
                                            <form action="<?php echo e(route('blog.delete', $blog->id)); ?>" method="POST"
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

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tapp\D\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-blog.blade.php ENDPATH**/ ?>