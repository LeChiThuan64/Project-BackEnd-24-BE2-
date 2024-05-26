<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Đảm bảo đã import model User
class AdminController extends Controller
{
    // Nhan Tin
    public function indexT()
    {
        $users = User::where('userType', 0)->get(); // Giả sử userType 0 là user thường
        return view('admin.chat', ['users' => $users]);
    }
    //load danh sach
    public function index()
    {
        // $users = User::all(); // Lấy tất cả người dùng
        // return view('admin.manage-user', ['users' => $users]); // Trả về view với dữ liệu người dùng
        $users = User::paginate(5);
        return view('admin.manage-user', ['users' => $users]);
    }
    public function ajaxUsersPage(Request $request)
    {
        if ($request->ajax()) {
            $users = User::paginate(5);
            return view('admin.partials.users-table', compact('users'))->render();
        }
    }

    public function makeAdmin($userId)
    {
        $user = User::findOrFail($userId);
        $user->userType = 1; // Set userType là 1 để trở thành admin
        $user->save();

        return back()->with('success', 'User has been made an admin successfully.( Người dùng đã được đặt làm quản trị viên thành công )'); // Trả về thông báo thành công
    }
}
