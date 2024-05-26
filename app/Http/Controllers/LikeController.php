<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLikeProduct;
use App\Models\Product;
class LikeController extends Controller
{
    //
    public function getLikeStatus(Request $request)
    {
        $userId = session('user_id'); 
        $productId = $request->input('product_id');
        $isLiked = UserLikeProduct::getLikeStatus($userId, $productId);
        return response()->json(['isLiked' => $isLiked]);
    }
    public function getLikeList()
    {
        if(session('user_id')!=null){
            $userId = session('user_id'); 
            $productModel = new Product();
            $products = $productModel->getProductLiked($userId);
            return view('my-wishlist',compact('products'));
        }else{
            return view('auth.login');
        }
    }
}
