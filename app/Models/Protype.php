<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    use HasFactory;

    protected $table = 'protypes';
    protected $primaryKey = 'type_id';
    protected $fillable = ['type_name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_protype', 'type_id', 'category_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
