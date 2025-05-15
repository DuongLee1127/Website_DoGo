<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
         <div class="page-title-box">
            <h4 class="p-b-5">{{ $config['seo']['index']['title'] }}</h4>
            <small>Dashboard / <strong>{{ $config['seo']['index']['title'] }}</strong></small>
        </div>
        <div class="user-data m-b-30">
            @php
                $url = ($config['method'] == 'create') ? route('admin.user.store'): route('admin.user.update', $user->id)
            @endphp
            <form action="{{ $url }}" method="post" enctype="multipart/form-data"
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
                                        <input type="text" id="text-input" name="name" placeholder="Nhập họ và tên"
                                            class="form-control" value="{{ old('name', ($user->name) ?? '') }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="email-input" class=" form-control-label">Email <span
                                                class="text-danger">(*)</span></label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="email" id="email-input" name="email"
                                            placeholder="Nhập địa chỉ email" class="form-control"
                                            value="{{ old('email', ($user->email) ?? '') }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="select-members" class=" form-control-label">Nhóm thành viên <span
                                                class="text-danger">(*)</span></label>
                                    </div>
                                    @php
                                    $roles = [
                                    '[Chọn nhóm thành viên]',
                                    'Quản trị viên',
                                    'Cộng tác viên'
                                    ]
                                    @endphp
                                    <div class="col-12 col-md-8">
                                        <select name="role_id" id="select-members"
                                            class="form-control js-select2">
                                            @foreach ($roles as $key => $item)
                                            <option {{ $key == old('role_id', isset($user->role_id)?$user->role_id:'')?'selected':'' }}
                                                value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                @if ($config['method'] == 'create')
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
                                        <input type="password" id="repassword-input" name="repassword" placeholder=""
                                            class="form-control">
                                        <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                    </div>
                                </div>
                                @endif
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="upload-image" class=" form-control-label">Ảnh đại diện</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="upload-image" name="image" class="form-control">
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
                                        <select name="province_id" id="select-province"
                                            class="form-control js-select2 province" data-target="districts">
                                            <option value="0">[Chọn thành phố]</option>
                                            @if(isset($provinces) && is_object($provinces))
                                            @foreach ($provinces as $province)
                                            <option @if(old('province_id')==$province->code) selected @endif value="{{ $province->code }}">{{ $province->name }}</option>
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
                                        <select name="district_id" id="select-district"
                                            class="form-control js-select2 districts" data-target="wards">
                                            <option value="0">[Chọn Quận/Huyện]</option>
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
                                        <select name="ward_id" id="select-ward"
                                            class="form-control js-select2 wards">
                                            <option value="0">[Chọn Xã/Phường]</option>
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
                                        <label for="text-input-detail" class="form-control-label">Địa chỉ chi
                                            tiết</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="text-input-detail" name="detail_address"
                                            placeholder="" class="form-control" value="{{ old('detail_address', ($user->detail_address) ?? '') }}">
                                        <!-- <small class="form-text text-muted">This is a help text</small> -->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="text-input-phone" class="form-control-label">Số điện thoại</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="text-input-phone" name="phone" placeholder=""
                                            class="form-control" value="{{ old('phone', ($user->phone) ?? '') }}">
                                        <!-- <small class="form-text text-muted">This is a help text</small> -->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="text-input-note" class=" form-control-label">Ghi chú</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="text-input-note" name="description" placeholder=""
                                            class="form-control" value="{{ old('description', ($user->description) ?? '') }}">
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
                    <a href="{{ route('admin.user') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Hủy
                    </a>
                </div>

            </form>

        </div>
        <!-- END USER DATA-->
    </div>
</div>
<script>
    var province_id = '{{ (isset($user->province_id)) ? $user->province_id : old('province_id') }}';
    var district_id = '{{ (isset($user->district_id)) ? $user->district_id : old('district_id') }}';
    var ward_id = '{{ (isset($user->ward_id)) ? $user->ward_id : old('ward_id') }}';
</script>

