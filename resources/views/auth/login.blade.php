@extends('layouts.auth')
@section('content')

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="POST">
                                <div class="form-group">
                                    <label for="inputEmailAddress">{{ __('Email') }}</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="inputEmailAddress" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('inputEmailAddress')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputChoosePassword">{{ __('Mật khẩu') }}</label>
                                    <input class="au-input au-input--full" type="password" id="inputChoosePassword" name="password" required
                                    autocomplete="current-password">
                                            @error('inputChoosePassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">{{ __('Đăng nhập') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
