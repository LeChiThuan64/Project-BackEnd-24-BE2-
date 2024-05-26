<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đặt lại mật khẩu</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="{{ asset('app\css\style.css') }}">
</head>

<body>


    <div class="container">
        <div class="form-container sign-in-container">
            <!-- Form đặt lại mật khẩu -->
            <form action="{{ url('change-password') }}" method="post" onsubmit="return validatePasswordMatch()">
                @csrf
                <input type="hidden" id="emailField" name="email" value="">
                <input type="password" id="password1" placeholder="Nhập mật khẩu mới" name="password" minlength="8" required />
                <input type="password" id="password2" placeholder="Nhập lại mật khẩu mới" name="password_confirmation" minlength="8" required />
                <button type="submit">Xác Nhận</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào!</h1>
                    <p>Đặt lại mật khẩu của bạn ở đây.</p>
                    <a href="{{ url('login') }}" class="hehe" style="color: white;">Quay lại đăng nhập</a>
                </div>
            </div>
        </div>
    </div>

    <!-- partial -->
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        // signUpButton.addEventListener('click', () => {
        //     container.classList.add("right-panel-active");

        // });

        // signInButton.addEventListener('click', () => {
        //     container.classList.remove("right-panel-active");
        // });

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

        function validatePasswordMatch() {
            var password1 = document.getElementById('password1').value;
            var password2 = document.getElementById('password2').value;

            if (password1 !== password2) {
                alert('Mật khẩu nhập lại không khớp với mật khẩu mới.');
                return false;
            }
            return true;
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Lấy tham số email từ URL
            var urlParams = new URLSearchParams(window.location.search);
            var email = urlParams.get('email');

            console.log(email);
            // Truy xuất hidden input bằng id và gán giá trị email
            var emailField = document.getElementById('emailField');
            if (emailField) {
                emailField.value = email;
            }
        });
    </script>

</body>

</html>