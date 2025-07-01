<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    protected $userService;
    public function __construct(UserServiceInterface $userService){
        $this->userService = $userService;
    }
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
    public function register(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
        ]);

        $notification = array(
            'message' => 'Đăng ký tài khoản thất bại. Thử lại',
            'alert-type' => 'error'
            );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 2, // Role cho client
            'status' => 1, // Trạng thái active
        ]);
        // dd($user->name);

        if($user->email != null){
            Auth::login($user);
            $notification = array(
                'message' => 'Đăng ký tài khoản thành công',
                'alert-type' => 'success'
            );
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
