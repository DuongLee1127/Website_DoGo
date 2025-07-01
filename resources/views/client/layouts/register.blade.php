<div class="modal fullRight login-wrapper fade modal-shopping-cart" id="registerModal">
    <div class="modal-dialog modal-dialog-login">
        <div class="modal-content d-flex justify-content-center align-items-center">
            <form action="{{ route('client.register') }}" method="post">
                @csrf
                <section class="gradient-custom">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-body p-5 text-center">

                                        <div class="pb-5">
                                            <h2 class="fw-bold m-b-30 text-uppercase">Đăng ký</h2>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="text" required name="name" id="typeNameX" placeholder="Họ và tên"
                                                    class="form-control form-control-lg" />
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="email" required name="email" id="typeEmailX" placeholder="Email"
                                                    class="form-control form-control-lg" />
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="text" required name="phone" id="typePhoneX" placeholder="Số điện thoại"
                                                    class="form-control form-control-lg" />
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="password" required name="password" id="typePasswordX" placeholder="Mật khẩu"
                                                    class="form-control form-control-lg" />
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="password" required name="password_confirmation" id="typePasswordConfirmX"
                                                    placeholder="Xác nhận mật khẩu" class="form-control form-control-lg" />
                                            </div>

                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-outline-dark btn-lg px-5" type="submit">Đăng ký</button>

                                            <div class="d-flex justify-content-around text-center w50 mt-4 pt-1">
                                                <a href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                                                <a href="#!"><i class="fab fa-google fa-lg"></i></a>
                                            </div>
                                        </div>

                                        <div>
                                            <p class="mb-0">Bạn đã có tài khoản? <a href="#!" class="fw-bold">Đăng nhập</a></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
