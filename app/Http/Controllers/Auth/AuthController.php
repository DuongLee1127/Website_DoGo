<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {

        if (Auth::id() > 0) {
            return redirect()->route('admin');
        }
        return view('admin.auth.login');
    }

    public function doLogin(AuthRequest $request)
    {
        $checkAcount = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $success = array(
            'message' => 'Đăng nhập thành công',
            'alert-type' => 'success'
        );
        $notEnoughRule = array(
            'message' => 'Bạn không đủ điều kiện để đăng nhập vào Admin',
            'alert-type' => 'warning'
        );
        // dd($checkAcount);
        if (Auth::attempt($checkAcount)) {
            if (Auth::user()?->role == '2') {
                Auth::logout();
                redirect()->back()->with($notEnoughRule);
            }
            return redirect()->route('admin')->with($success);
        }
        $notification = array(
            'message' => 'Tài khoản hoặc mật khẩu không chính xác',
            'alert-type' => 'warning'
        );


        return redirect()->route('admin.login')->with($notification);
        // return view('admin.home');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
