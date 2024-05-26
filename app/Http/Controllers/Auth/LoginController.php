<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\CartItem;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        //22/4
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // if (Auth::attempt($credentials)) {
        if (Auth::attempt(array_merge($credentials, ['is_active' => 1]))) {
            $request->session()->regenerate();


            if (Cookie::get('cart')) {
                $cart = json_decode(Cookie::get('cart'), true);

                // Lưu từng sản phẩm trong giỏ hàng vào cơ sở dữ liệu
                foreach ($cart as $productId => $product) {
                    // Kiểm tra xem sản phẩm đã tồn tại trong cơ sở dữ liệu chưa
                    $cartItem = CartItem::where('user_id', $request->user()->id)
                        ->where('product_id', $productId)
                        ->first();

                    if ($cartItem) {
                        // Sản phẩm đã tồn tại, tăng số lượng
                        $cartItem->quantity += $product['quantity'];
                    } else {
                        // Sản phẩm chưa tồn tại, tạo mới
                        $cartItem = new CartItem;
                        $cartItem->user_id = $request->user()->id; // ID người dùng hiện tại
                        $cartItem->product_id = $productId;
                        $cartItem->name = $product['name'];
                        $cartItem->description = $product['description'];
                        $cartItem->price = $product['price'];
                        $cartItem->quantity = $product['quantity'];
                    }

                    $cartItem->save();
                }

                // Xóa cookie
                Cookie::queue(Cookie::forget('cart'));
            }



            session()->flash('success', 'Bạn đã đăng nhập thành công');

            $user = Auth::user();
            // Lưu user_id vào session
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);



            // Kiểm tra giá trị của cột userType và điều hướng tương ứng
            if ($user->userType == 0) {

                return redirect()->intended('home');
            } elseif ($user->userType == 1) {
                return redirect()->intended('manage-product');
            }
        } else {
            // Thêm một thông báo lỗi tại đây
            return back()->withErrors(['email' => 'Tài khoản của bạn hiện đang vô hiệu hóa.']);
        }

        return back()->withErrors([
            'email' => 'Thông tin xác thực được cung cấp không khớp với hồ sơ của chúng tôi.',
        ]);
    }




    public function logout(Request $request)
    {
        Auth::logout();


        Cookie::queue(Cookie::forget('cart'));

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/');
    }
}
