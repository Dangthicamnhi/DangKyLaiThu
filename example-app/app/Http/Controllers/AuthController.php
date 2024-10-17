<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegisterForm()
    {
        return view('user.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Tự động đăng nhập sau khi đăng ký thành công
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Redirect đến trang chủ hoặc trang khác sau khi đăng ký
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('user.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang chủ hoặc trang khác
            return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
        }

        // Nếu thông tin đăng nhập không đúng
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng.',
        ])->onlyInput('email');
    }

    // Đăng xuất người dùng
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Đăng xuất thành công!');
    }
}
