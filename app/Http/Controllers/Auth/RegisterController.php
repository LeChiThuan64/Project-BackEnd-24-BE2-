<?php

// File: app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        logger()->info('Registering user:', $request->all());

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // Loại bỏ 'confirmed' nếu bạn không dùng trường password_confirmation
        ]);
        

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'userType' => 0,
                'is_active' => 1,
            ]);
// 22/4
            Auth::login($user);

            // return redirect()->route('home');
            return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
        } 
        catch (\Exception $e) {
            logger()->error('Error registering user:', ['error' => $e->getMessage()]);
            dd($e->getMessage()); 

        }
        
    }
}

