@extends('layouts.auth')

@section('content')
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                        <div class="card-body p-5">
                            <h4 class="fw-bold">Đăng nhập</h4>

                            <div class="form-body my-5">
                                <form class="row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" placeholder="Email" id="inputEmailAddress" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('inputEmailAddress')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">{{ __('Mật khẩu') }}</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" placeholder="Mật khẩu" class="form-control border-end-0"
                                                id="inputChoosePassword" name="password" required
                                                autocomplete="current-password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bi bi-eye-slash-fill"></i></a>
                                            @error('inputChoosePassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="flexSwitchCheckChecked">{{ __('Nhớ mật khẩu') }}</label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="col-md-6 text-end"><a class="btn btn-link"
                                                href="{{ route('password.request') }}">
                                                {{ __('Bạn quên mật khẩu?') }}
                                            </a></div>

                                    @endif
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-grd-primary">{{ __('Đăng nhập') }}</button>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-start">
                                            <p class="mb-0">Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a></p>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="separator section-padding">
                                <div class="line"></div>
                                <p class="mb-0 fw-bold">Hoặc đăng nhập với</p>
                                <div class="line"></div>
                            </div>

                            <div class="d-flex gap-3 justify-content-center mt-4">
                                <a href="javascript:;"
                                    class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                                    <i class="bi bi-google fs-5 text-white"></i>
                                </a>
                                <a href="javascript:;"
                                    class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                                    <i class="bi bi-facebook fs-5 text-white"></i>
                                </a>
                                <a href="javascript:;"
                                    class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                                    <i class="bi bi-linkedin fs-5 text-white"></i>
                                </a>
                                <a href="javascript:;"
                                    class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                                    <i class="bi bi-github fs-5 text-white"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endsection