<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillProduct extends Model
{
    protected $table = "bill_product";
    public $timestamps = false;
    public function addBillProduct($billId,$productId,$quantiy){
        $this->bill_id = $billId;
        $this->product_id = $productId;
        $this->quantity = $quantiy;
        return $this->save();
    }
    use HasFactory;
}
