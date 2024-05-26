<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'images';
    public function images( ){
        return image ::all();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    use HasFactory;
}
