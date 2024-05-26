<?php $__env->startSection('title', 'Manage User'); ?>
<?php $__env->startSection('content'); ?>


    <!-- Hiện Thị thông báo -->
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert" id="success-alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <h1>Manage User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="<?php echo e(url('login')); ?>"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Users</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>User / Admin</th>
                                    <th>Ngày Tạo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="">
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->roleDescription()); ?></td>
                                        <td><?php echo e($user->created_at); ?></td>
                                        <td>
                                            <!-- Thêm điều kiện để chỉ hiển thị nút này cho user không phải admin -->
                                            <?php if($user->userType == 0): ?>
                                                <form action="<?php echo e(route('make-admin', $user->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-success btn-mini">Add ADMIN
                                                        (Thêm)</button>
                                                </form>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('remove-admin', $user->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-info btn-mini">Remove ADMIN
                                                        (Bỏ)</button>
                                                </form>
                                            <?php endif; ?>


                                            <?php if($user->is_active): ?>
                                                <form action="<?php echo e(route('deactivate-user', $user->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger btn-mini">Vô Hiệu
                                                        Hóa</button>
                                                </form>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('activate-user', $user->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-success btn-mini">Hủy Vô Hiệu
                                                        Hóa</button>
                                                </form>
                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php if($users->hasPages()): ?>
                            <nav>
                                <ul class="pagination">
                                    
                                    <?php if($users->onFirstPage()): ?>
                                        <li class="page-item disabled"><span class="page-link">««</span></li>
                                    <?php else: ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo e($users->previousPageUrl()); ?>"
                                                rel="prev">««</a></li>
                                    <?php endif; ?>

                                    
                                    <?php $__currentLoopData = $users->getUrlRange(1, $users->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($page == $users->currentPage()): ?>
                                            <li class="page-item active"><span class="page-link"><?php echo e($page); ?></span>
                                            </li>
                                        <?php else: ?>
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                    <?php if($users->hasMorePages()): ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo e($users->nextPageUrl()); ?>"
                                                rel="next">»»</a></li>
                                    <?php else: ?>
                                        <li class="page-item disabled"><span class="page-link">»»</span></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
    <script>
        // Sử dụng vanilla JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.display = 'none';
                }, 5000); // Ẩn thông báo sau 5 giây
            }
        });

        // function fetchPage(page) {
        //     $.ajax({
        //         url: "<?php echo e(route('ajax.users.page')); ?>?page=" + page,
        //         type: "GET",
        //         dataType: "html",
        //         success: function(data) {
        //             $("#user-table").html(data);
        //         },
        //         error: function(xhr, status, error) {
        //             console.error(error);
        //         }
        //     });
        // }

        // // Gán sự kiện click cho các nút phân trang
        // $(document).on('click', '.pagination a', function(e) {
        //     e.preventDefault();
        //     var page = $(this).attr('href').split('page=')[1];
        //     fetchPage(page);
        // });

        // // Gọi lần đầu tiên khi trang được load
        // fetchPage(1);
        // $(document).on('click', '.pagination a', function(event) {
        //     event.preventDefault();
        //     var page = $(this).attr('href').split('page=')[1];
        //     fetchPage(page);
        // });

        // function fetchPage(page) {
        //     $.ajax({
        //         url: '/ajax-users-page?page=' + page,
        //         type: 'GET',
        //         success: function(data) {
        //             $('#pagination').html(data);
        //         }
        //     });
        // }
        $(document).ready(function() {
            // Place your event listener code here
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchPage(page);
            });
        });


        function fetchPage(page) {
            $.ajax({
                url: '/ajax-users-page?page=' + page,
                type: 'GET',
                success: function(response) {
                    $('#user-table').html(response); // Ensure this targets the correct HTML element
                }
            });
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tapp\D\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/admin/manage-user.blade.php ENDPATH**/ ?>