<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoucher extends Model
{
    protected $table = 'user_voucher';

    protected $fillable = [
        'user_id',
        'voucher_id'
    ];
    public $timestamps = false;

    public function addUserVoucher($user_id, $voucher_id){
        $userVoucher = new self;
        $userVoucher->user_id = $user_id;
        $userVoucher->voucher_id = $voucher_id;
        return $userVoucher->save();
    }
    public function destroye ($id) {
       return UserVoucher::where('voucher_id', $id)->delete();
    }
    use HasFactory;
}
