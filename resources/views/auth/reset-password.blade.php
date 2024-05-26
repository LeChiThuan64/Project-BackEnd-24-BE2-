<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sign in/up Form</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<!-- <link rel="stylesheet" href="./style.css"> -->
	<link rel="stylesheet" href="{{ asset('app\css\style.css') }}">
</head>

<body>


	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<!-- Form gửi OTP -->
			<form action="{{ route('sendOtp') }}" method="post">
				@csrf
				<input type="email" name="email" placeholder="Enter your email for OTP">
				<button type="submit">Send OTP</button>
			</form>

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Xin Chào ! </h1>
					<p>Trang Này để những người hay quên NHƯ bạn lấy lại mâtk khẩu !</p>
					<a href="{{ url('login') }}" class="hehe" style="color: white; ">Back!</a>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->


</body>

</html>