<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public $timestamps = false;
    public function getRevenueByDay()
    {
        $revenueByDay = self::selectRaw('DATE(created_at) as date, SUM(total) as revenue')
            ->groupBy('date')
            ->get();

        return $revenueByDay;
    }
    public static function getRevenueByMonth()
    {
        $revenueByMonth = self::selectRaw('MONTH(created_at) as date, YEAR(created_at) as year, SUM(total) as revenue')
            ->groupBy('year', 'date')
            ->get();

        return $revenueByMonth;
    }
    public static function getTotal()
    {
        $total = self::select()->sum('total');
        return $total;
    }
    public function addBill($total, $userId, $createdAt, $paymentMethod)
    {

        $this->total =  $total;
        $this->user_id = $userId;
        $this->created_at = $createdAt;
        $this->payment_method = $paymentMethod;
        $this->state = 0;
        $this->save();
        return $this->id;
    }
    public function updateBill($id)
    {
        return Bill::where('id', $id)->update(['state' => 1]);
    }


    use HasFactory;
}
