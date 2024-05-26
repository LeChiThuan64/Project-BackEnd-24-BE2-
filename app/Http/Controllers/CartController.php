<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class CartController extends Controller
{

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id); // Tìm sản phẩm dựa trên ID

        // Kiểm tra xem cookie có tồn tại không
        if (Cookie::get('cart')) {
            $cart = json_decode(Cookie::get('cart'), true);
            
        } else {
            $cart = [];
        }

        if (Auth::check()) {
            // Người dùng đã đăng nhập, thêm sản phẩm vào cơ sở dữ liệu
            $user = Auth::user();
            $cartItem = CartItem::where('user_id', $user->id)->where('product_id', $id)->first();

            if ($cartItem) {
                // Sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
                $cartItem->quantity += 1;
            } else {
                // Sản phẩm chưa tồn tại trong giỏ hàng, tạo mới
                $cartItem = new CartItem;
                $cartItem->user_id = $user->id;
                $cartItem->product_id = $id;
                $cartItem->name = $product->name;
                $cartItem->description = $product->description;
                $cartItem->price = $product->price;
                $cartItem->quantity = 1;
            }

            $cartItem->save();

            // Thêm sản phẩm vào giỏ hàng
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += 1;
            } else {
                $cart[$id] = [
                    'id' => $product->id, // Thêm ID sản phẩm vào mảng
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'quantity' => 1
                ];
            }
        } else {
            // Thêm sản phẩm vào giỏ hàng
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += 1;
            } else {
                $cart[$id] = [
                    'id' => $product->id, // Thêm ID sản phẩm vào mảng
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'quantity' => 1
                ];
            }
        }

        // Lưu giỏ hàng vào cookie
        $cookie = Cookie::make('cart', json_encode($cart), 60);
        // Trả về phản hồi thành công với cookie
        return response('Product added to cart.')->withCookie($cookie);
    }


    public function showCart(Request $request)
{
    $cart = [];

    if (Auth::check()) {
        $cart = CartItem::where('user_id', $request->user()->id)->get()->toArray();

        // Chuyển đổi dữ liệu từ cơ sở dữ liệu thành định dạng giống như cookie
        $cart = array_map(function ($item) {
            return [
                'id' => $item['product_id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'quantity' => $item['quantity']
            ];
        }, $cart);
    } else {
        // Nếu người dùng chưa đăng nhập, lấy dữ liệu từ cookie
        if (Cookie::get('cart')) {
            $cart = json_decode(Cookie::get('cart'), true);
        }
    }

    // Trả về view với biến isLoggedIn và dữ liệu giỏ hàng
    return view('shopping-cart', [
        'cart' => $cart,
        'isLoggedIn' => Auth::check() ? 1 : 0// Truyền biến isLoggedIn
    ]);
}



    public function removeFromCart(Request $request, $id)
    {
        if (Auth::check()) {
            // Người dùng đã đăng nhập, xóa sản phẩm khỏi cơ sở dữ liệu
            $user = Auth::user();
            $cartItem = CartItem::where('user_id', $user->id)->where('product_id', $id)->first();

            // $cartItem = new CartItem;
            // $cartItem->deleteCartItem($id);

            if ($cartItem) {
                $cartItem->delete();
                return response('Product removed from cart.');
            } else {
                return response('Product not found in cart.');
            }

        } else {
            // Người dùng chưa đăng nhập, xóa sản phẩm khỏi cookie
            if (Cookie::get('cart')) {
                $cart = json_decode(Cookie::get('cart'), true);


                if (isset($cart[$id])) {
                    unset($cart[$id]);
                    $cookie = Cookie::make('cart', json_encode($cart), 60);
                    return response('Product removed from cart.')->withCookie($cookie);
                } else {
                    return response('Product not found in cart.');
                }
            } else {
                return response('No products in cart.');
            }
        }
    }


    public function updateCart(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $updatedCart = $request->input('cart');

            //Log::info('User ID update: ' . $user->id);
            foreach ($updatedCart as $productId => $quantity) {
                $cartItem = CartItem::where('user_id', $user->id)->where('product_id', $productId)->first();

                if ($cartItem) {
                    $cartItem->quantity = $quantity;
                    $cartItem->save();
                } else {
                    $product = Product::find($productId);
                    $cartItem = new CartItem;
                    $cartItem->user_id = $user->id;
                    $cartItem->product_id = $productId;
                    $cartItem->name = $product->name;
                    $cartItem->description = $product->description;
                    $cartItem->price = $product->price;
                    $cartItem->quantity = $quantity;
                    $cartItem->save();
                }
            }

            return response("Cart updated successfully.");
        } else {
            // abort(401, 'Please login to update cart.');
            return response('Please login to update cart.');
        }
    }



    public function getAllVouchers()
    {
        $voucherModel = new Voucher();
        $vouchers = $voucherModel->getAllVoucher();

        return response()->json($vouchers);
    }


    public function getCartData(Request $request)
    {
        if (Auth::check()) {
            $cart = CartItem::where('user_id', $request->user()->id)->get()->toArray();

            // Chuyển đổi dữ liệu từ cơ sở dữ liệu thành định dạng giống như cookie
            $cart = array_map(function ($item) {
                return [
                    'id' => $item['product_id'],
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity']
                ];
            }, $cart);
        } else {
            // Nếu người dùng chưa đăng nhập, lấy dữ liệu từ cookie
            if (Cookie::get('cart')) {
                $cart = json_decode(Cookie::get('cart'), true);
            } else {
                $cart = [];
            }
        }
        return response()->json($cart);
    }
}
