<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\image;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function showTransactions() {
        $imageModal = new image();
      
        $transactions = Transaction::with('user')->get(); // Lấy tất cả giao dịch và thông tin người dùng liên quan
        $images = $imageModal->images(); 
    
        return view('admin.hangMoiDac', compact('transactions', 'images'));;

    }
}
