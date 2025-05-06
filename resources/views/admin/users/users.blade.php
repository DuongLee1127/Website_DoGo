@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30 upper-text ">Bảng điều khiển / {{ $config['index']['title'] }}</h3>
                <div class="table-data__tool">
                    <div class="filters m-b-45 table-data__tool-left">
                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Products</option>
                                <option value="">Services</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                            <select class="js-select2 au-select-dark" name="time">
                                <option selected="selected">All Time</option>
                                <option value="">By Month</option>
                                <option value="">By Day</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                    <div class="filters m-b-45 table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('admin.user.create') }}">
                            <i class="zmdi zmdi-plus"></i>Thêm mới thành viên</a>
                        <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div> -->
                    </div>
                </div>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td>Họ tên</td>
                                <td>Chức vụ</td>
                                <td>Quyền</td>
                                <td>Số điện thoại</td>
                                <td>Tình trạng</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($users) && is_object($users))
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>{{ $user->name }}</h6>
                                                <span>
                                                    <a href="#">{{ $user->email }}</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role admin">{{ $user->role }}</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Full Control</option>
                                                    <option value="">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{ $user->phone }}</span>
                                        </td>
                                        <td>
                                            <label class="switch switch-3d switch-success mr-3">
                                                <input type="checkbox" class="switch-input" checked="true">
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data-feature center-icon">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            <!-- <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role user">user</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option value="">Full Control</option>
                                                    <option value="" selected="selected">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="more">
                                                <i class="zmdi zmdi-more"></i>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role user">user</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option value="">Full Control</option>
                                                    <option value="" selected="selected">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="more">
                                                <i class="zmdi zmdi-more"></i>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role member">member</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Full Control</option>
                                                    <option value="">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="more">
                                                <i class="zmdi zmdi-more"></i>
                                            </span>
                                        </td>
                                    </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="user-data__footer">
                    {{ $users->links('pagination::bootstrap-4') }}
                    <!-- <button class="au-btn au-btn-load">load more</button> -->
                </div>
            </div>
            <!-- END USER DATA-->
        </div>
    </div>
@endsection
