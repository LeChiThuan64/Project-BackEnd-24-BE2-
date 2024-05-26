<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('app\css\myAccount.css')); ?>">
</head>

<body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="<?php echo e(asset('app\AnhUsr\user.png')); ?>" width="90">
                    <!-- <span class="font-weight-bold">John Doe</span>
                    <span class="text-black-50">john_doe12@bbb.com</span> -->
                    <span class="font-weight-bold"><?php echo e(Auth::user()->name); ?></span>
                    <span class="text-black-50"><?php echo e(Auth::user()->email); ?></span>

                </div>
            </div>
            <div class="col-md-8">
                <form action="<?php echo e(route('user.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?> <!-- Đây là cú pháp của Laravel để giả mạo phương thức PUT nếu bạn đang sử dụng RESTful controller -->
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back">
                                <a href="<?php echo e(route('home')); ?>" class="d-flex align-items-center">
                                    <i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                    <h6>Back to home</h6>
                                </a>
                            </div>
                            <h1 class="text-right">Edit Profile</h1>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo e(Auth::user()->name); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(Auth::user()->email); ?>" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="current_password" placeholder="Mật khẩu hiện tại" required>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="new_password" placeholder="Mật khẩu mới" required>
                            </div>
                        </div>
                        <div class="mt-5 text-right">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html><?php /**PATH C:\Tapp\D\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/myAccount.blade.php ENDPATH**/ ?>