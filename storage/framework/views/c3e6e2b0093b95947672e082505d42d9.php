<?php

// Kiểm tra xem dữ liệu có được gửi từ form không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem trường "redirect" có được gửi không
    if (isset($_POST['redirect'])) {
        // Lấy giá trị của trường "redirect"
        $redirectValue = $_POST['redirect'];

        // Bây giờ bạn có thể làm bất cứ điều gì bạn muốn với giá trị này
    } else {
        // Nếu trường "redirect" không tồn tại trong dữ liệu gửi đi
        echo "Trường 'redirect' không tồn tại trong dữ liệu gửi đi!";
    }
} else {
    // Nếu không có dữ liệu gửi đi từ form
    echo "Không có dữ liệu gửi đi từ form!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="../../../public/app/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../../../public/app/css/jumbotron-narrow.css" rel="stylesheet">
</head>

<body>
    <?php

    $vnp_TmnCode = "S77NQKOC"; //Mã định danh merchant kết nối (Terminal Id)
    $vnp_HashSecret = "VMUTQZMAJALJDPSKDOATRRZBNLUQYNMJ"; //Secret key
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://localhost:8080/Git/nhom3_ST5_BE2_NH23-24/resources/views/vnpay_php/vnpay_return.blade.php";
    $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
    $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
    //Config input format
    //Expire
    $startTime = date("YmdHis");
    $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

    ?>
    <div class="container">
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="<?php echo e(url('/vnpay_create_payment')); ?>" id="frmCreateOrder" method="post">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." id="amount" max="100000000" min="1" name="amount" type="number" value="<?php echo $redirectValue ?>" />
                </div>
                <h4>Chọn phương thức thanh toán</h4>
                <div class="form-group">
                    <h5>Cách 1: Chuyển hướng sang Cổng VNPAY chọn phương thức thanh toán</h5>
                    <input type="radio" Checked="True" id="bankCode" name="bankCode" value="">
                    <label for="bankCode">Cổng thanh toán VNPAYQR</label><br>

                    <h5>Cách 2: Tách phương thức tại site của đơn vị kết nối</h5>
                    <input type="radio" id="bankCode" name="bankCode" value="VNPAYQR">
                    <label for="bankCode">Thanh toán bằng ứng dụng hỗ trợ VNPAYQR</label><br>

                    <input type="radio" id="bankCode" name="bankCode" value="VNBANK">
                    <label for="bankCode">Thanh toán qua thẻ ATM/Tài khoản nội địa</label><br>

                    <input type="radio" id="bankCode" name="bankCode" value="INTCARD">
                    <label for="bankCode">Thanh toán qua thẻ quốc tế</label><br>

                </div>
                <div class="form-group">
                    <h5>Chọn ngôn ngữ giao diện thanh toán:</h5>
                    <input type="radio" id="language" Checked="True" name="language" value="vn">
                    <label for="language">Tiếng việt</label><br>
                    <input type="radio" id="language" name="language" value="en">
                    <label for="language">Tiếng anh</label><br>

                </div>
                <button type="submit" class="btn btn-default" href>Thanh toán</button>
            </form>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY 2020</p>
        </footer>
    </div>

    <script src="../../../public/app/js/jquery-1.11.3.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tự động chọn các radio button và submit form
            $('#bankCode1').prop('checked', true);
            $('#language1').prop('checked', true);
            $('#frmCreateOrder').submit();
        });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\Git\nhom3_ST5_BE2_NH23-24\resources\views/vnpay_php/vnpay_pay.blade.php ENDPATH**/ ?>