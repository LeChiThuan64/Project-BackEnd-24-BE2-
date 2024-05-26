<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;
use App\Models\Voucher;
use App\Models\UserVoucher;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function getRevenueByDay()
    {
        $revenue = new Bill();
        $revenueByDay = $revenue->getRevenueByDay();
        return response()->json(['revenue' => $revenueByDay]);
    }
    public function getRevenueByMonth()
    {
        $revenue = new Bill();
        $revenueByMonth = $revenue->getRevenueByMonth();
        return response()->json(['revenue' => $revenueByMonth]);
    }
    public function getMostPopularProduct()
    {
        $productBill = new Product();
        $mostPopularProduct = $productBill->getLimitedProductCount();
        return response()->json(['mostPopularProduct' => $mostPopularProduct]);
    }
    public function getTotal()
    {
        $productBill = new Bill();
        $total = $productBill->getTotal();
        return response()->json(['total' => $total]);
    }
    public function manageVoucher()
    {
        $voucherModel = new Voucher();
        $vouchers = $voucherModel->getAllVoucher();
        return view('admin.manage-voucher', compact('vouchers'));
    }
    public function addVoucher(Request $request)
    {
        $voucherModel = new  Voucher();
        $userVocherModel = new UserVoucher();
        $userModel = new User();
        $users = $userModel->getAllUsers();
        $title = $request->input('title');
        $discount = $request->input('discount');
        $due_date = $request->input('duedate');
        $quantity = $request->input('quantity');
        $application = $request->input('application');
        $input = $request->input('application_value');
        $type = '';
        if ($application == 1) {
            $type='all users';
            $voucherId =  $voucherModel->addVoucher($title, $discount, $due_date, $quantity,$type);
            foreach ($users as $user) {
                $userVocherModel->addUserVoucher($user->id, $voucherId);
            }
        }
        if ($application == 2) {
            $type='user buy products';
            $voucherId =  $voucherModel->addVoucher($title, $discount, $due_date, $quantity,$type);
            $users = $userModel->getUserBuyProduct();
            foreach ($users as $user) {
                $userVocherModel->addUserVoucher($user->id, $voucherId);
            }
        }
        if ($application == 3) {
            $type='user buy more than '. $input .' vnd';
            $voucherId =  $voucherModel->addVoucher($title, $discount, $due_date, $quantity,$type);
            $users = $userModel->getUserBuyProduct();
            foreach ($users as $user) {
                if ($user->total >= $input) {
                    $userVocherModel->addUserVoucher($user->id, $voucherId);
                }
            }
        }
        return redirect()->route('admin.voucher');
    }
    public function delete($id){
        $voucherModel = new Voucher();
        $voucherModel->destroye($id);
        $userVoucherModel = new UserVoucher();
        $voucherModel->destroye($id);
        $userVoucherModel->destroye($id);
        return redirect()->route('admin.voucher');
    }
    public function edit($id){
        $voucherModel = new Voucher();
        $voucher = $voucherModel->find($id);
        return view('admin.edit-voucher', compact('voucher'));
    }
    public function update(Request $request){
        $voucherModel = new Voucher();
        $id = $request->input('id');
        $voucher = $voucherModel->find($id);
        $title = $request->input('title');
        $discount = $request->input('discount');
        $due_date = $request->input('duedate');
        $quantity = $request->input('quantity');
        $voucher->title = $title;
        $voucher->discount = $discount;
        $voucher->due_date = $due_date;
        $voucher->quantity = $quantity;
        $voucher->save();
        return redirect()->route('admin.voucher');
    }
}
