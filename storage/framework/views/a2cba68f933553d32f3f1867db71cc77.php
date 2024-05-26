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
	<?php if(session('success')): ?>
	<div class="alert alert-success">
		<?php echo e(session('success')); ?>

		<button type="button" class="close" onclick="closeAlert()">&times;</button>
	</div>
	<?php endif; ?>

	<!-- partial:index.partial.html -->
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<!-- Form đăng ký -->
			<form action="<?php echo e(url('register')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="text" placeholder="Name" name="name" required />
				<input type="email" placeholder="Email" name="email" required />
				<input type="password" placeholder="Password" name="password" minlength="8" required oninput="checkPasswordLength(this)" />
				<div id="passwordHelp" style="color:red;"></div>
				<button type="submit">Đăng Ký</button>
			</form>

		</div>
		<div class="form-container sign-in-container">
			<!-- Form đăng nhập -->
			<form action="<?php echo e(url('login')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="email" placeholder="Email" name="email" />
				<input type="password" placeholder="Password" name="password" minlength="8" required oninput="checkPasswordLength(this)" />
				<div id="passwordHelp" style="color:red;"></div>
				<a href="<?php echo e(url('reset-password')); ?>" class="reset-password">Bạn quên Mật Khẩu hãy nhấn vô đây !</a>
				<button type="submit">Đăng Nhập</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Hi Bạn!</h1>
					<p>Nếu bạn có tài khoảng ròi thì nhấn vô Sìn in để đăng nhập nè</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Xin Chào ! </h1>
					<p>Nếu Bạn chưa có tài khoảng thì hãy nhấn Sign up để đăng ký nhe !</p>
					<button class="ghost" id="signUp">Sign Up !</button>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");

		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});

		//toi thiu 8 ky tự
		function checkPasswordLength(input) {
			var helpText = document.getElementById('passwordHelp');
			if (input.value.length > 0 && input.value.length < 8) {
				helpText.textContent = 'Mật khẩu phải có ít nhất 8 ký tự.';
			} else {
				helpText.textContent = '';
			}
		}


		function closeAlert() {
			var alert = document.querySelector('.alert-success');
			alert.classList.add('fadeOut');
			setTimeout(function() {
				alert.style.display = 'none';
			}, 600);
		}

		// Tự động ẩn thông báo sau 5 giây
		setTimeout(closeAlert, 5000);
	</script>

</body>

</html><?php /**PATH C:\Tapp\D\Thuận HK4\BE2\LamNhom\nhom3_ST5_BE2_NH23-24\resources\views/auth/login.blade.php ENDPATH**/ ?>