<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoimkRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\QuenmkRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ForgetAccount;
use App\Mail\VerifyAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function aclogin(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            if (Auth::user()->active == 0) {
                Auth::logout();
                return redirect()->route('login')->with('ermsg', 'Tài khoản chưa kích hoạt. Xác nhận mail để đăng nhập.');
            }
            return redirect()->route('home')->with('ssmsg', 'Đăng nhập thành công.');
        } else {
            return redirect()->back()->with('ermsg', 'Tên đăng nhập hoặc mật khẩu không đúng.');
        }
    }
    public function viewregister()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        if ($acc = User::create($request->all())) {
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            return redirect()->route('login')->with('ssmsg', 'Vui lòng mở mail để kích hoạt tài khoản.');
        };
        return redirect()->back()->with('ermsg', 'Thất bại. Vui lòng kiểm tra lại.');
    }
    public function verify($email)
    {
        $acc = User::where('email', $email)->whereNull('email_verified_at')->firstOrFail();
        $acc->update(['email_verified_at' => now(), 'active' => 1]);
        return redirect()->route('login')->with('ssmsg', 'Hãy tiếp tục đăng nhập.');
    }
    public function viewquenmk()
    {
        return view('auth.quenmk');
    }
    public function quenmk(QuenmkRequest $request)
    {
        $token = Str::random(40);
        $user = User::where('email', $request->email)->firstOrFail();
        $user->update(['remember_token' => $token]);
        Mail::to($user->email)->send(new ForgetAccount($user, $token));
        return redirect()->route('login')->with('ssmsg', 'Vui lòng kiểm tra mail để đặt lại mật khẩu.');
    }
    public function viewdoimk()
    {
        return view('auth.doimk');
    }
    public function doimk(DoimkRequest $request)
    {
        $user = User::where('remember_token', $request->token)->first();
        if ($user) {
            $user->update(['password' => $request->password, 'remember_token' => null]);
            return redirect()->route('login')->with('ssmsg', 'Đổi mật khẩu thành công. Vui lòng đăng nhập');
        }
        return redirect()->route('login')->with('ermsg', 'Token không hợp lệ.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('ssmsg', 'Hện gặp lại quý khách.');
    }
}
