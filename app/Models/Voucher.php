<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';
    public $timestamps = false;
    public function getAllVoucher()
    {
        return Voucher::all();
    }
    public function destroye($id)
    {
      return Voucher::where('id', $id)->delete();
       
    }
    public function addVoucher($title, $discount, $due_date, $quantity,$type)
    {
        $voucher = new self;
        $voucher->title = $title;
        $voucher->discount = $discount;
        $voucher->quantity = $quantity;
        $voucher->due_date = $due_date;
        $voucher->type = $type;
        $voucher->save();
        $voucher_id = $voucher->id;
        return $voucher_id;
    }
    public function getVoucherByUserId($id){
        $vouchers = self::join('user_voucher as uv', 'vouchers.id', '=', 'uv.voucher_id')
        ->join('users as u', 'u.id', '=', 'uv.user_id')
        ->select('vouchers.title', 'vouchers.discount', 'vouchers.due_date', 'vouchers.quantity','vouchers.id')
        ->where('u.id', $id)
        ->get();
    return $vouchers;

    }


    use HasFactory;
}
