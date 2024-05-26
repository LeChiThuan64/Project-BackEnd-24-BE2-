<?php

use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Cache;

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * 
 *
 * @author CTT VNPAY
 */

 session_start();
        // Lấy mảng selectedProductsInput từ session
        $selectedProductsInput = session('selectedProductsInput');

        //dd($selectedProductsInput);
        $parameters = [];
foreach ($selectedProductsInput as $product) {
    $parameters['id'][] = $product['id'];
    $parameters['name'][] = $product['name'];
    $parameters['price'][] = $product['price'];
    $parameters['quantity'][] = $product['quantity'];
    $parameters['total'][] = $product['total'];
}

Cache::put('selectedProductsInput', $parameters, 60);

$vnp_TmnCode = "S77NQKOC"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "VMUTQZMAJALJDPSKDOATRRZBNLUQYNMJ"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = route('vnpay.return');
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";

$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));





$vnp_TxnRef = $code_vnpay; //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = $redirectValue; // Số tiền thanh toán
$vnp_Locale = "vn"; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = ""; //Mã phương thức thanh toán
$vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán




$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" =>  $vnp_Amount * 100,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
    "vnp_OrderType" => "other",
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate"=>$expire
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
header('Location: ' . $vnp_Url);
die();

 ?><?php /**PATH D:\Tài liệu Môn Học\Kì 4\BE2\Git\nhom3_ST5_BE2_NH23-24\resources\views/vnpay_php/vnpay_create_payment.blade.php ENDPATH**/ ?>