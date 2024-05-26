<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    // public $timestamps = false;

    protected $table = 'cart';

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function deleteCartItem($id)
    {
        // Xóa sản phẩm trong giỏ hàng dựa trên ID
        CartItem::where('id', $id)->delete();
    }
}
