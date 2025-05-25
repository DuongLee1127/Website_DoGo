
        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 customize-text-second customize-shadow">Thiết Kế Tự Nhiên - Sang Trọng</h4>
                        <h1 class="mb-5 display-3 customize-text customize-shadow">Chúng tôi luôn quan tâm đến trải nghiệm của bạn!</h1>
                        <!-- <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary border-customize  w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-customize border-2 border-secondary border-customize  py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div> -->
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 h-100 bg-customize  rounded" alt="First slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded banner-title">Ấm chén</a>
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('users_assets/img/4.jpg') }}" class="img-fluid w500 h-100 rounded" alt="Second slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded banner-title">Tủ</a>
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('users_assets/img/3.jpg') }}" class="img-fluid w500 h-100 rounded" alt="Second slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded banner-title">Đĩa</a>
                                </div>
                            </div>
                            <button class="carousel-control-prev slider-button" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next slider-button" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-customize  mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Giao hàng nhanh</h5>
                                <p class="mb-0">Giao hàng nhanh chỉ từ 2/3 ngày</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-customize  mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Thanh toán an toàn</h5>
                                <p class="mb-0">100% bảo mật thanh toán</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-customize  mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Hoàn hàng trong 1 tuần</h5>
                                <p class="mb-0">Hoàn tiền trong 1 tuần</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-customize  mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Tư vấn hỗ trợ 24/7</h5>
                                <p class="mb-0">Hỗ trợ mọi lúc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->


        <!-- Đồ gỗ Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h2>Các sản phẩm của chúng tôi</h2>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 130px;">Tất cả sản phẩm</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 130px;">Tủ, kệ</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 130px;">Bàn ghế</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                        <span class="text-dark" style="width: 130px;">Ấm chén</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                        <span class="text-dark" style="width: 130px;">Lục bình</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/15.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/4.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/8.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/30.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/20.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/11.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/4.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/8.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/30.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/20.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('users_assets/img/11.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-customize  px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Đồ gỗ</div>
                                                <div class="p-4 border border-secondary border-customize  border-top-0 rounded-bottom">
                                                    <h4>Đồ gỗ tự nhiên</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                                        <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Đồ gỗ Shop End-->


        <!-- Featurs Start -->
        <!-- <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-customize  rounded border border-secondary border-customize ">
                                <img src="{{ asset('users_assets/img/featur-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-customize2 text-center p-4 rounded">
                                        <h5 class="text-white">Fresh Đồ gỗ tự nhiêns</h5>
                                        <h3 class="mb-0">20% OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-dark rounded border border-dark">
                                <img src="{{ asset('users_assets/img/featur-2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-light text-center p-4 rounded">
                                        <h5 class="customize-text">Tasty Đồ gỗ</h5>
                                        <h3 class="mb-0">Free delivery</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-customize2 rounded border border-primary">
                                <img src="{{ asset('users_assets/img/featur-3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-customize  text-center p-4 rounded">
                                        <h5 class="text-white">Exotic Vegitable</h5>
                                        <h3 class="mb-0">Discount 30$</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Featurs End -->


        <!-- Vesitable Shop Start-->
        <div class="container-fluid vesitable py-5">
            <div class="container py-5">
                <h1 class="mb-0">Một số mẫu bán chạy</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/1.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">10.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/3.jpg') }}" class="img-fluid w500 rounded-top bg-light" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Đồ gỗ tự nhiên</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/4.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Bell Papper</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/5.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/5.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid w500 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-customize2 px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Gỗ gỗ</div>
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">1.000.000 VNĐ</p>
                                <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->


        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-customize  my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">Bán chạy nhất</h1>
                            <p class="fw-normal display-3 text-dark mb-4">trong cửa hàng của chúng tôi</p>
                            <p class="mb-4 text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos </p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Mua</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('users_assets/img/25.png') }}" class="img-fluid w30 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 60px; height: 60px; top: 0; left: 0;">
                                <div class="d-flex flex-column">
                                    <span class="mb-0">50 VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Sản phẩm giá hot</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, sequi voluptatem. Nam neque cum voluptate totam mollitia
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/1.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/2.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/3.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/4.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/5.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('users_assets/img/6.jpg') }}" class="img-fluid rounded-circle square" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Gỗ gỗ</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star customize-text"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">40.00 VNĐ</h4>
                                    <a href="#" class="btn border border-secondary border-customize  rounded-pill px-3 customize-text"><i class="fa fa-shopping-bag me-2 customize-text"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users customize-text-second"></i>
                                <h4>Số lượng khách hài lòng</h4>
                                <h1>63</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users customize-text-second"></i>
                                <h4>Chất lượng dịch vụ</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users customize-text-second"></i>
                                <h4>Sản phẩm có sẵn</h4>
                                <h1>79</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="customize-text mb-0">Đồ gỗ abc</h1>
                                <p class="customize-text-second mb-0">Chất lượng</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-customize border-0 border-secondary border-customize  py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary border-customize  py-2 px-4 rounded-pill customize-text">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                            <a class="btn-link" href="">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                            <a class="btn-link" href="">Wishlist</a>
                            <a class="btn-link" href="">Order History</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="{{ asset('users_assets/img/payment.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-customize border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

