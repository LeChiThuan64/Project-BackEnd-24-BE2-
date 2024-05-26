<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verification</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Xác Thực Email </h5>
            </div>
            <div class="card-body">
                <div class="alert alert-danger" id="message_error" style="display:none;"></div>
                <div class="alert alert-success" id="message_success" style="display:none;"></div>
                <form method="post" id="verificationForm">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <div class="form-group">
                        <label for="otp">Nhập mã OTP:</label>
                        <input type="number" class="form-control" name="otp" id="otp" placeholder="Nhập mã OTP" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Xác minh</button>
                </form>

                <p class="mt-3">Không nhận được mã OTP? <button class="btn btn-link p-0" id="resendOtpVerification">Gửi lại</button></p>
                <p class="time"></p>
            </div>
        </div>
    </div>

    <!-- Link jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#verificationForm').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "/verifiedOtp/",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            $('#message_success').text(res.msg).show();
                            setTimeout(() => {
                                // Xây dựng URL với tham số email và chuyển hướng
                                var redirectUrlWithEmail = res.redirect_url + '?email=' + encodeURIComponent('{{ $email }}');
                                window.location.href = redirectUrlWithEmail;
                            }, 2000);
                        } else {
                            $('#message_error').text(res.msg).show();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error: ' + textStatus + ' ' + errorThrown);
                    }
                });
            });

            $('#resendOtpVerification').click(function() {
                $(this).prop('disabled', true).text('Sending...');
                var userMail = @json($email);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "{{ route('resendOtp') }}",
                    method: "GET",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: JSON.stringify({
                        email: userMail
                    }),
                    success: function(res) {
                        $('#resendOtpVerification').prop('disabled', false).text('Resend');
                        if (res.success) {
                            timer();
                            $('#message_success').text(res.msg).show();
                        } else {
                            $('#message_error').text(res.msg).show();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error: ' + textStatus + ' ' + errorThrown);
                    }
                });
            });
        });

        function timer() {
            var minutes = 3;
            var seconds = 0;
            var timerInterval = setInterval(function() {
                if (minutes === 0 && seconds === 0) {
                    clearInterval(timerInterval);
                    $('.time').text('');
                } else {
                    if (seconds === 0) {
                        minutes--;
                        seconds = 59;
                    } else {
                        seconds--;
                    }
                    var displayMinutes = ('0' + minutes).slice(-2);
                    var displaySeconds = ('0' + seconds).slice(-2);
                    $('.time').text(displayMinutes + ':' + displaySeconds);
                }
            }, 1000);
        }

        timer(); // Start timer initially
    </script>
</body>

</html>