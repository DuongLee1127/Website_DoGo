<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="#" class="navbar-brand">
                <h1 class="customize-text display-6">Đồ Gỗ</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars customize-text"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('client') }}" class="nav-item nav-link active">Trang chủ</a>
                    <a href="{{ route('client.product') }}" class="nav-item nav-link">Cửa hàng</a>
                    <a href="#" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button
                        class="btn-search btn border border-secondary border-customize  btn-md-square rounded-circle bg-white me-4"
                        data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search customize-text"></i></button>
                    <a href="#" class="position-relative me-4 my-auto btn-add-to-cart">
                        <i class="fa fa-shopping-bag"></i>
                        @if ($cartItems && count($cartItems)>0)
                        <span
                            class="position-absolute bg-customize  rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                            style="top: -5px; left: 15px; height: 20px; min-width: 20px;">{{ count($cartItems) }}</span>
                        @endif
                    </a>

                    <div class="dropdown d-flex">
                        <a href="#" class="my-auto dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </a>
                        <!-- <button class="btn btn-custom dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bars me-2"></i> Menu
                        </button> -->
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Hồ sơ</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Cài đặt</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @if (auth()->check())
                                <li>
                                    <a class="dropdown-item" href="{{ route('client.logout') }}">
                                        <i class="fas fa-sign-out-alt"></i> Đăng Xuất
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item btn-login" href="#">
                                        <i class="fas fa-sign-out-alt"></i> Đăng Nhập
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
