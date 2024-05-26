<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    public $timestamps = false;
    public static function store($rating, $content, $productId)
    {
        $review = new Review();
        $review->rating = $rating;
        $review->content = $content;
        $review->product_id = $productId;
        $review->user_name = session('user_name');
        $review->created_at = date('Y-m-d H:i:s');
        return $review->save();
    }
    public static function getUserName($userName,$productId)
    {
        $review = Review::where('user_name', $userName)
        ->where('product_id', $productId)
        ->first();
        return $review ? true : false;
    }
    public static function getAverageRating($productId)
    {
        $averageRating = Review::where('product_id', $productId)
            ->avg('rating');
            return $averageRating;
    }
    public static function countRV ($productId)
    {
        $reviewCount = Review::where('product_id', $productId)->count();
        return $reviewCount;
    }
    public static function getReviewByProduct($productId)
    {
        $reviews = Review::where('product_id', $productId)->get();
        return $reviews;
    }
    public static function getReview($productId,$userName)
    {
        $reviews = Review::where('product_id', $productId)
        ->where('user_name', $userName)
        ->get();
        return $reviews[0];
    }

    use HasFactory;
}
