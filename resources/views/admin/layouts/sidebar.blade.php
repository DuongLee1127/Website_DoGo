<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ route('admin') }}">
                    <img width="70px" src="{{ asset('admin_assets/images/icon/favicon.png') }}" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Bảng điều khiển</a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-chart-bar"></i>Quản lý sản phẩm</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Quản lý đơn hàng</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Quản lý khách hàng</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Quản lý thanh toán</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Quản lý vận chuyển</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Thống kê và báo cáo</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Quản lý website</a>
                    <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul> -->
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Quản lý khuyến mãi</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img style="width: 150px" src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow d-flex" href="{{ route('admin') }}">
                        <i class="fas fa-center fa-tachometer-alt"></i>Bảng điều khiển</a>
                </li>
                <li class="{{  request()->is('admin/user*') ? 'active' : ''}} has-sub">
                    <a class="js-arrow d-flex" href="#">
                        <i class="fas fa-center fa-user"></i><span class="over-ellipsis">Quản lý nhóm thành viên</span></a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="{{  request()->is('admin/user/guests*') ? 'active' : ''}} has-sub">
                                    <a href="{{ route('admin.user.role', ['role' => 'guests']) }}">Quản lý khách hàng</a>
                                </li>
                                <li class="{{  request()->is('admin/user/staff*') ? 'active' : ''}} has-sub">
                                    <a href="{{ route('admin.user.role', ['role' => 'staff']) }}">Quản lý nhân viên</a>
                                </li>
                                <li class="{{  request()->is('admin/user/collap*') ? 'active' : ''}} has-sub">
                                    <a href="{{ route('admin.user.role', ['role' => 'collap']) }}">Quản lý cộng tác viên</a>
                                </li>
                            </ul>
                </li>
                <li class="{{ request()->is('admin/post*') ? 'active' : ''}} has-sub">
                    <a class="js-arrow d-flex" href="{{ route('admin.post')}}">
                        <i class="fas fa-center fa-copy"></i>Quản lý bài viết</a>
                </li>
                <li class="{{ request()->is('admin/product*') ? 'active' : ''}} has-sub">
                    <a class="js-arrow d-flex" href="{{ route('admin.product')}}">
                        <i class="fas fa-center fa-tags"></i>Quản lý sản phẩm</a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-table"></i>Quản lý đơn hàng</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar"></i>Thống kê & thanh toán</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Quản lý thanh toán</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-map-marker-alt"></i>Quản lý vận chuyển</a>
                </li>
                <li class="#">
                    <a class="js-arrow d-flex" href="#">
                        <i class="fas fa-center fa-desktop"></i>Quản lý website</a>
                    <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul> -->
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Quản lý mã giảm giá</a>
                    <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul> -->
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->


