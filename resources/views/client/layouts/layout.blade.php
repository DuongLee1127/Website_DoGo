<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.header')

<body>
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow customize-text" role="status"></div>
    </div>
    <!-- Spinner End -->


    @include('client.layouts.navbar')
    @php
        $temp = (isset($template)) ? $template : 'client.404';
    @endphp


    @include($temp)

    <!-- shoppingCart -->
    <div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Giỏ hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Progress Bar -->
                    <div class="progress-container">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-danger" style="width: 65%;"></div>
                        </div>
                        <div class="truck-icon">
                            🚚
                        </div>
                    </div>
                    <p>Mua nhiều hơn <strong>1.000.000.000 VND</strong> được <strong>Miễn phí vận chuyển</strong></p>

                    <!-- Cart Items -->

                    @if (auth()->user()?->role === 'guests')
                    <div class="cart-item d-flex justify-content-between mb-3 border-bottom pb-2">
                        <div class="d-flex justify-content-start">


                     <img src="{{ asset('users_assets/img/21.jpg') }}" class="me-3" alt="item">
                            <div>
                                <h5 class="mb-1 title-cart">Bộ ấm chén cao cấp</h5>
                                <p class="mb-1">2.500 VNĐ</p>
                                <div class="input-group input-group-sm w-50">
                                    <button class="btn btn-outline-secondary">−</button>
                                    <input type="text" class="form-control text-center" value="1">
                                    <button class="btn btn-outline-secondary">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-1">
                            <i class="fa-solid fa-trash mt-auto recycle-bin"></i>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="border-top pt-3">
                        <p class="d-flex justify-content-between">
                            <span>Tổng cộng (1 sản phẩm):</span>
                            <strong>20.000 VNĐ</strong>
                        </p>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label small" for="termsCheck">
                                Bạn có đồng ý với <a href="#">điều khoản</a> của chúng tôi
                            </label>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Mua hàng</button>
                        </div>
                    </div>
                    @else
                        <h3>Bạn phải đăng nhập để xem được giỏ hàng</h3>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-dark btn-login">Đăng nhập</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('client.layouts.order')
    @include('client.layouts.login')
    <!-- /shoppingCart -->
    @include('client.layouts.script')
</body>

