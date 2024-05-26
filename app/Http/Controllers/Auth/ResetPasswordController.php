<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailVerification;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    //
    //
    public function loadRegister()
    {
        return view('register');
    }

    public function studentRegister(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("/verification/" . $user->id);
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function sendOtp(Request $request)
    {
        $email = $request->email;
        $otp = rand(100000, 999999);
        $now = \Carbon\Carbon::now();

        // Lưu thông tin OTP vào cơ sở dữ liệu
        EmailVerification::updateOrCreate(
            ['email' => $email],
            [
                'email' => $email,
                'otp' => $otp,
                'created_at' => $now
            ]
        );

        // Chuẩn bị dữ liệu cho email
        $data = [
            'email' => $email,
            'title' => 'Mail Verification',
            'body' => 'Your OTP is: ' . $otp
        ];

        try {
            // Gửi email với thông tin địa chỉ người gửi và tiêu đề
            Mail::send('auth.mailVerification', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject($data['title'])
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            // Chuyển hướng sang route verification để xác nhận OTP
            return view('auth.verification', ['email' => $email]); // Sử dụng route name của trang verification

        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send OTP', 'error' => $e->getMessage()], 500);
        }
    }



    public function verifiedOtp(Request $request)
    {
        $email = $request->email;
        $otp = $request->otp;

        $otpData = EmailVerification::where('email', $email)
            ->where('otp', $otp)
            ->first();

        if (!$otpData) {
            return response()->json(['success' => false, 'msg' => 'You entered wrong OTP']);
        } else {
            return response()->json(['success' => true, 'redirect_url' => '/passwordVerification']);
        }
    }



    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Validate email
            'password' => 'required|min:8|confirmed', // Validate password
        ]);
    
        $email = $request->email;
    
        // Tìm người dùng dựa trên email
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            // Xử lý khi không tìm thấy người dùng
            return redirect()->back()->with('error', 'Người dùng không tồn tại.');
        }
    
        // Cập nhật mật khẩu mới cho người dùng
        $user->password = Hash::make($request->password);
        $user->save();
    
        // Chuyển hướng hoặc trả về phản hồi thành công
        return redirect()->route('login')->with('success', 'Đã cập nhật mật khẩu thành công!');
    }

    // // Calculate expiration time (3 minutes) in seconds
    // $expirationTime = 3 * 60; // 3 minutes in seconds

    // // Get current time and created_at time from OTP data
    // $currentTime = time();
    // $createdAt = strtotime($otpData->created_at);

    // // Check if OTP is within the valid window
    // if (($currentTime - $createdAt) <= $expirationTime) {
    //     // Successful OTP verification
    //     User::where('email', $email)->update(['is_verified' => 1]);
    //     $otpData->delete(); // Delete OTP data after successful verification
    //     return response()->json(['success' => true, 'msg' => 'Email has been verified']);
    // } else {
    //     // OTP has expired
    //     return response()->json(['success' => false, 'msg' => 'Your OTP has expired']);
    // }


    public function resendOtp(Request $request)
    {
        $email = $request->email;

        $existingOtpData = EmailVerification::where('email', $email)->first();

        if ($existingOtpData) {
            $createdAt = strtotime($existingOtpData->created_at);
            $currentTime = time();
            $expirationTime = Config::get('constants.otp_expiration_time'); // Lấy thời gian hết hạn từ tập tin cấu hình

            if ($currentTime >= $createdAt && $currentTime <= ($createdAt + $expirationTime)) {
                // Nếu tồn tại OTP và chưa hết hạn, không gửi lại được ngay lập tức
                return response()->json(['success' => false, 'msg' => 'Please try after some time']);
            }
        }

        $user = User::where('email', $email)->first();

        // Gửi OTP mới và cập nhật lại trong cơ sở dữ liệu
        $otp = rand(100000, 999999);
        $time = time();

        EmailVerification::updateOrCreate(
            ['email' => $email],
            ['otp' => $otp, 'created_at' => date('Y-m-d H:i:s', $time)]
        );

        // Chuẩn bị dữ liệu cho email
        $data = [
            'email' => $email,
            'title' => 'Mail Verification',
            'body' => 'Your new OTP is: ' . $otp
        ];

        try {
            // Gửi email với mã OTP mới
            Mail::send('auth.mailVerification', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject($data['title'])
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return response()->json(['success' => true, 'msg' => 'OTP has been sent']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => 'Failed to send OTP', 'error' => $e->getMessage()]);
        }
    }



    public function view()
    {
        return view('auth.reset-password');
    }
    public function viewPasswordVerification()
    {
        return view('auth.passwordVerification');
    }
}
