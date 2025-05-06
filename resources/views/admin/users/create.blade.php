@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30 upper-text ">Bảng điều khiển / {{ $config['seo']['create']['title'] }}</h3>
                <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Thông tin chung</strong>
                                </div>
                                <div class="card-body card-block">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="text-input" class=" form-control-label">Họ tên <span
                                                    class="text-danger">(*)</span></label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="text-input" name="fullname"
                                                placeholder="Nhập họ và tên" class="form-control" value="{{ old('fullname') }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="email-input" class=" form-control-label">Email <span
                                                    class="text-danger">(*)</span></label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="email" id="email-input" name="email"
                                                placeholder="Nhập địa chỉ email" class="form-control" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="select-members" class=" form-control-label">Nhóm thành viên <span
                                            class="text-danger">(*)</span></label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <select name="select-members" id="select-members"
                                                class="form-control js-select2">
                                                <option value="0">[Chọn nhóm thành viên]</option>
                                                <option value="1">Quản trị viên</option>
                                                <option value="2">Cộng tác viên</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="password-input" class=" form-control-label">Mật khẩu <span
                                                    class="text-danger">(*)</span></label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="password" id="password-input" name="password" placeholder=""
                                                class="form-control">
                                            <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="repassword-input" class=" form-control-label">Nhập lại mật khẩu
                                                <span class="text-danger">(*)</span></label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="password" id="repassword-input" name="repassword"
                                                placeholder="" class="form-control">
                                            <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="img-input" class=" form-control-label">Ảnh đại diện</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="file" id="img-input" name="img-input" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Thông tin liên hệ</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="select-province" class=" form-control-label">Thành phố</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <select name="select-province" id="select-province"
                                                class="form-control js-select2 province">
                                                <option value="0">[Chọn thành phố]</option>
                                                @if(isset($provinces) && is_object($provinces))
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->code }}">{{ $province->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="select-district" class=" form-control-label">Quận/Huyện</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <select name="select-district" id="select-district"
                                                class="form-control js-select2 districts">
                                                <option value="0">[Chọn quận/huyện]</option>
                                                @if(isset($districts) && is_object($districts))
                                                    @foreach ($districts as $district)
                                                        <option value="{{ $district->code }}">{{ $district->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="select-ward" class=" form-control-label">Xã/Phường</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <select name="select-ward" id="select-ward"
                                                class="form-control js-select2 wards">
                                                <option value="0">[Chọn xã/phường]</option>
                                                @if(isset($wards) && is_object($wards))
                                                    @foreach ($wards as $ward)
                                                        <option value="{{ $ward->code }}">{{ $ward->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="text-input-detail" class=" form-control-label">Địa chỉ chi
                                                tiết</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="text-input-detail" name="text-input-detail"
                                                placeholder="" class="form-control" value="{{ old('text-input-detail') }}">
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="text-input-phone" class=" form-control-label">Số điện thoại</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="text-input-phone" name="text-input-phone" placeholder=""
                                                class="form-control" value="{{ old('text-input-phone') }}">
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="text-input-note" class=" form-control-label">Ghi chú</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="text-input-note" name="text-input-note" placeholder=""
                                                class="form-control" value="{{ old('text-input-note') }}">
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary btn-sm" name="send" value="send">
                            <i class="fa fa-save"></i> Lưu
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Hủy
                        </button>
                    </div>
                </form>

            </div>
            <!-- END USER DATA-->
        </div>
    </div>
    <script src="{{ asset($config['js']) }}"></script>
@endsection
