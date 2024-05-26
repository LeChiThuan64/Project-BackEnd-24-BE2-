<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo e($data['title']); ?></title>
</head>
<body>

    <p><?php echo e("Đây là mã OTP của bạn. Mã sẽ hết hiệu lực sau 3 phút"); ?></p>
    <p><?php echo e($data['body']); ?></p>
    <br>
    <p>Thank You!</p>

</body>
</html>
<?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/auth/mailVerification.blade.php ENDPATH**/ ?>