<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLikeProduct extends Model
{
    protected $table = 'user_like_product';
    public $timestamps = false;
    public static function getLikeStatus($userId, $productId)
    {
        return self::where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->exists();
    }
    use HasFactory;
}
