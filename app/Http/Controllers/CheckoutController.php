<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    //

    public function checkout(Request $request){
        $product_id = $request->input('product_id');
    
        // Lưu product_id vào cookie
        $minutes = 60; // Thời gian sống của cookie (tính bằng phút)
        Cookie::queue('product_id', $product_id, $minutes);
    
        return view('checkout');
    }
    
}
