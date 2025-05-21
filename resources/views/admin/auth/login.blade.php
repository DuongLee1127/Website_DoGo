@extends('admin.auth.layouts.auth')
@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="Login Logo">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('admin.login.dologin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputEmailAddress">{{ __('Email') }}</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="inputEmailAddress"
                                        name="email">
                                    @if($errors->has('email'))
                                    <span class="error-message">*
                                            {{ $errors->first('email') }}
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputChoosePassword">{{ __('Mật khẩu') }}</label>
                                    <input class="au-input au-input--full" type="password" id="inputChoosePassword"
                                        name="password">
                                    @if($errors->has('password'))
                                    <span class="error-message">*
                                            {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Nhớ mật khẩu
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">{{ __('Quên mật khẩu?') }}</a>
                                        @endif
                                    </label>
                                </div>
                                <button type="submit"
                                    class="au-btn au-btn--block au-btn--green m-b-20">Đăng nhập</button>

                            </form>
                            <div class="register-link">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
