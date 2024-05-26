<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sign in/up Form</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<!-- <link rel="stylesheet" href="./style.css"> -->
	<link rel="stylesheet" href="<?php echo e(asset('app\css\style.css')); ?>">
</head>

<body>


	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<!-- Form gửi OTP -->
			<form action="<?php echo e(route('sendOtp')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="email" name="email" placeholder="Enter your email for OTP">
				<button type="submit">Send OTP</button>
			</form>

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Xin Chào ! </h1>
					<p>Trang Này để những người hay quên NHƯ bạn lấy lại mâtk khẩu !</p>
					<a href="<?php echo e(url('login')); ?>" class="hehe" style="color: white; ">Back!</a>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->


</body>

</html><?php /**PATH D:\Wamp64\www\nhom3_ST5_BE2_NH23-24\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>