<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller

{

    // public function deactivateUser($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->is_active = 0;
    //     $user->save();

    //     return back()->with('success', 'Tài khoản đã được vô hiệu hóa.');
    // }

    // Vô hiệu hóa người dùng
    public function deactivateUser($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = 0;
        $user->save();

        return back()->with('success', 'Tài khoản đã được vô hiệu hóa.');
    }

    // Kích hoạt người dùng
    public function activateUser($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = 1;
        $user->save();

        return back()->with('success', 'Tài khoản đã được kích hoạt.');
    }


    public $users; // Khai báo thuộc tính
    //
    public function __construct()
    {
        // Đảm bảo chỉ những người dùng đã đăng nhập mới có thể truy cập các phương thức trong controller này
        $this->middleware('auth');
    }



    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->userType = 1; // Giả sử 1 là giá trị cho admin
        $user->save();

        return back()->with('success', 'User has been made an admin successfully.');
    }

    public function removeAdmin($id)
    {
        $user = User::find($id);
        $user->userType = 0; // Giả sử 0 là giá trị cho user bình thường
        $user->save();

        return back()->with('success', 'Admin rights have been removed successfully.');
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        // Xác thực thông tin
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'current_password' => 'required',
            'new_password' => 'required|string|min:8',
        ]);

        // Kiểm tra mật khẩu hiện tại
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng.']);
        }

        // Cập nhật thông tin
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->new_password) {
            $user->password = Hash::make($request->new_password);
        }
        $user->save();

        return back()->with('success', 'Thông tin tài khoản đã được cập nhật.');
    }
}
