<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function index(){

    }

    public function doLogin(AuthRequest $request){
        $checkAcount = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $success = array(
            'message' => 'Đăng nhập thành công',
            'alert-type' => 'success'
        );
        $notification = array(
            'message' => 'Tài khoản hoặc mật khẩu không chính xác',
            'alert-type' => 'warning'
        );
        if(Auth::attempt($checkAcount)){
            if(Auth::user()->role != '2'){
                $notEnoughRole = array(
                    'message' => 'Admin đăng nhập đây làm giề ????',
                    'alert-type' => 'error'
                );
                Auth::logout();
                return redirect()->route('client')->with($notEnoughRole);
            }else{
                return redirect()->route('client')->with($success);
            }
        }

        return redirect()->route('client')->with($notification);
        // return view('admin.home');

    }

    public function logoutu(){
        $notification = array(
            'message' => 'Bạn đã đăng xuất',
            'alert-type' => 'success'
        );
        if(Auth::user()->role == '2'){
            Auth::logout();
            return redirect()->route('client')->with($notification);
        }
        return redirect()->route('client');
    }

    public function login(){

        return view('client.layouts.login');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('client');
    }
}
