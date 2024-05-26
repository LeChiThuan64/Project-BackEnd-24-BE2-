<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    // App\Models\Transaction

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    // Đảm bảo quan hệ này được định nghĩa
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'user_id', 'product_id', 'amount', 'payment_method', 'code_vnpay',
        'status', 'email', 'phone', 'order_content', 'shipping_address'
    ];
}
