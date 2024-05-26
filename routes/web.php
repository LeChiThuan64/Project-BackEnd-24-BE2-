<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\TransactionController;

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/banDoKhoBau', function () {
    return view('banDoKhoBau');
});
Route::get('/hangMoiDac', [TransactionController::class, 'showTransactions'])->name('hangMoiDac.show');



// Route::get('/hangMoiDac', function () {
//     return view('admin.hangMoiDac');
// });

//voucher
Route::get('/manage-voucher', [DashboardController::class, 'manageVoucher'])->name('admin.voucher');
Route::post('/add-voucher', [DashboardController::class, 'addVoucher'])->name('add.voucher');
Route::get('/edit-voucher/{id}', [DashboardController::class, 'edit'])->name('edit.voucher');
Route::get('/vouchers', [HomeController::class, 'vouchers'])->name('vouchers');
Route::delete('/voucher/{id}', [DashboardController::class, 'delete'])->name('voucher.delete');
Route::post('/update-voucher', [DashboardController::class, 'update'])->name('voucher.update');
// tracking orders
Route::get('/track-orders', [HomeController::class, 'getProductByOrders'])->name('getProductByOrders');
Route::post('/set-state-orders', [HomeController::class, 'setStateOrder'])->name('setstateorder');

//Tôi làm về so sánh coi bộ cũng khó đấy
Route::get('/remove-from-compare/{id}', [ProductController::class, 'removeFromCompare'])->name('remove.from.compare');
Route::get('/add-to-compare/{id}', [ProductController::class, 'addToCompare'])->name('add.to.compare');
Route::get('/product-comparison', [ProductController::class, 'showComparisonPage'])->name('productComparison');
Route::get('/productComparison', function () {
    return view('productComparison');
});
//Nhan Tin
Route::get('/chat', [AdminController::class, 'indexT'])->name('admin.chat');

// reviews 
Route::post('/review', [HomeController::class, 'review'])->name('review');
Route::post('/rating', [HomeController::class, 'getAverageRating'])->name('rating');
Route::post('/count', [HomeController::class, 'countRV'])->name('count');
Route::post('/get-review-by-product', [HomeController::class, 'getReviewByProduct'])->name('getReview');
// statistics
Route::get('/total', [DashboardController::class, 'getTotal'])->name('total');
Route::get('/revenue', [DashboardController::class, 'getRevenueByDay'])->name('revenueD');
Route::get('/revenueM', [DashboardController::class, 'getRevenueByMonth'])->name('revenueM');
Route::get('/most-product', [DashboardController::class, 'getMostPopularProduct'])->name('most-product');


// này nè dùng để thêm hoặc bỏ admin á nhen 
Route::post('/make-admin/{user}', [UserController::class, 'makeAdmin'])->name('make-admin');
Route::post('/remove-admin/{user}', [UserController::class, 'removeAdmin'])->name('remove-admin');


//chức năng thích
Route::post('/like', [HomeController::class, 'addLike'])->name('like.store');
Route::post('/get-like-status', [LikeController::class, 'getLikeStatus'])->name('getLikeStatus');
Route::get('/my-wishlist', [LikeController::class, 'getLikeList'])->name('myWishList');

// chức năng blog
Route::get('/add-blog', [BlogController::class, 'addView'])->name('addBlog');
Route::get('/manage-blog', [BlogController::class, 'index'])->name('manage-blog');
Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog', [BlogController::class, 'blogIndex'])->name('blog-index');
Route::get('/blog-details/{id}', [BlogController::class, 'blogDetail'])->name('blog.detail');
Route::post('/send', [BlogController::class, 'comment'])->name('blog.comment');
Route::post('/get-comment', [BlogController::class, 'getComment'])->name('blog.getComment');
Route::delete('/blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');
Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/update', [BlogController::class, 'updateBlog'])->name('blog.update');
// Khi người dùng truy cập '/', họ sẽ được chuyển hướng ngay lập tức đến trang đăng nhập.
Route::get('/add-voucher', function () {
    return view('admin.add-voucher');
});

//vô hiệu hóa tài khoảng 
Route::post('/deactivate-user/{id}', [UserController::class, 'deactivateUser'])->name('deactivate-user');
// web.php
Route::post('/user/{id}/deactivate', [UserController::class, 'deactivateUser'])->name('deactivate-user');
Route::post('/user/{id}/activate', [UserController::class, 'activateUser'])->name('activate-user');



Route::get('/myAccount', function () {
    return view('myAccount');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
// Route::get('/track-orders', function () {
//     return view('track-orders');
// });
/// test load view

// Route cho AJAX pagination load trang 5 nguoi

Route::get('/ajax-users-page', [AdminController::class, 'ajaxUsersPage'])->name('ajax.users.page');

Route::get('/manage-user', [AdminController::class, 'index'])->name('manage-user');

Route::put('/user/update', [UserController::class, 'update'])->name('user.update');

// trang home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [CartController::class, 'addToCart']);

// Đăng nhập
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Logout
Route::get('/logout', [LoginController::class, 'logout']);


// Quên mật khẩu với OTP
Route::post('/send-otp', [ResetPasswordController::class, 'sendOTP'])->name('sendOtp');
Route::post('/verifiedOtp', [ResetPasswordController::class, 'verifiedOtp']);
Route::get('reset-password', [ResetPasswordController::class, 'view']);
Route::get('/verification/{email}', [ResetPasswordController::class, 'verification'])->name('verification');
Route::get('/verification', [ResetPasswordController::class, 'verification']);
Route::get('/resend-otp', [ResetPasswordController::class, 'resendOtp'])->name('resendOtp');
Route::get('/passwordVerification', [ResetPasswordController::class, 'viewPasswordVerification']);
Route::post('/change-password', [ResetPasswordController::class, 'changePassword']);

// Route::post('/send-otp', [ResetPasswordController::class, 'sendOTP'])->name('send-otp');



// Đăng ký
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Giỏ hàng 
Route::get('/shopping-cart', [HomeController::class, 'shopping_cart'])->name('shopping-cart');
Route::get('/get-product-info', [HomeController::class, 'getVoucher'])->name('get.voucher.cart');
Route::get('/shopping-cart', [CartController::class, 'showCart']);
Route::post('/shopping-cart/update', [CartController::class, 'updateCart']);
Route::get('/shopping-cart/{id}', [CartController::class, 'removeFromCart']);
Route::post('/checkout', [PaymentController::class, 'checkout']);
Route::post('/cash-payment', [PaymentController::class, 'pay_cash']);
// Route trong web.php
Route::get('/get-cart-data', [CartController::class, 'getCartData']);

// vochers
Route::get('/get-all-vouchers', [CartController::class, 'getAllVouchers']);





// Các routes khác của bạn... Biết ời cái đó tui làm tạm tại chưa có login
//21/4
// Route::get('/', [HomeController::class,'index']);
Route::get('search', [HomeController::class,'search']);
Route::get('category/{categoryId}', [HomeController::class,'category'])->name('category');
Route::get('detail/{id}', [HomeController::class,'detail']);


// CRUD sản phẩm
Route::get('/manage-product', [ProductController::class, 'index'])->name('manage-product');

// Hiển thị form
Route::get('/form-edit-product/{id}', [ProductController::class, 'showEditProduct'])->name('form-edit-product');
Route::get('/add-product', [ProductController::class, 'showAddProduct']);


// Thêm
Route::post('/product', [ProductController::class, 'add'])->name('product.add');

// Sửa
Route::put('/product/{id}', [ProductController::class, 'modify'])->name('product.modify');

// Xoá
Route::delete('/product/{id}', [ProductController::class, 'delete'])->name('product.delete');

// quản lý catelory
Route::get('/manage-category', [CategoryController::class, 'index'])->name('admin.manage-category');
Route::get('/manage-category/page', [CategoryController::class, 'pageAddCategory']);
Route::get('/manage-category/add', [CategoryController::class, 'addCategory']);
Route::get('/manage-category/edit/{id}', [CategoryController::class, 'index_edit'])->name('edit-category');
Route::put('/manage-category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::delete('/manage-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');



// checkout (thanh toán) - VNPAY
// Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment']);
// Route::post('/vnpay_pay', [PaymentController::class, 'vnpay_pay']);
// Route::post('/vnpay_return', [PaymentController::class, 'vnpay_return']);
Route::get('/vnpay_return', [PaymentController::class, 'handleVnpayResponse'])->name('vnpay.return');
Route::post('/vnpay_create_payment', [PaymentController::class, 'vnpay_create_payment']);
// thông tin mình di dời qua file data.txt rồi nha
// routes/web.php
Route::post('/save-selected-products', [PaymentController::class, 'saveSelectedProducts']);

// Filter
Route::get('/filterProducts', [ProductController::class, 'filterProducts'])->name('filterProducts');

// Sort
Route::get('/sortProducts', [ProductController::class, 'sortProducts'])->name('sortProducts');






