<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        @php
            $keyword = request('keyword')?:old('keyword');
            $perpage = request('records')?:old('records');
        @endphp

        <div class="page-title-box">
            <h4 class="p-b-5">{{ $config['index']['title'] }}</h4>
            <small>Dashboard / <strong>{{ $config['index']['title'] }}</strong></small>
        </div>
        <div class="user-data m-b-30">
            <div class="card-header title-3 m-b-30">
                <h3>
                    {{ $config['index']['tableName'] }}
                </h3>
            </div>


            <form action="{{ route('admin.user') }}" method="get">
            <div class="table-data__tool">
                <div class="filters m-b-45 table-data__tool-left">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <select class="js-select2 records" name="records">
                            @for( $i = 6 ; $i<=180; $i+=6)
                                <option {{ ($perpage == $i) ? 'selected': ''}} value="{{ $i }}">{{ $i }} bản ghi</option>
                                @endfor
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    @php
                        $status = [
                            '-1' => 'Chọn trạng thái',
                            '0' => 'Không hoạt động',
                            '1' => 'Hoạt động'
                        ];
                        $publish = old('publish', request('publish'));;
                    @endphp
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <select class="js-select2 css-publish" name="publish">
                            <!-- <option value="0">Không hoạt động</option>
                            <option value="1">Hoạt động</option> -->

                            @foreach ($status as $key => $value)
                                <option {{ ((string)$publish == (string)$key) ? 'selected': '' }} value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter" type="submit">
                                            <i class="zmdi zmdi-filter-list"></i>Lọc</button>
                </div>
                <div class="filters m-b-45 table-data__tool-right">
                    <div class="row">
                        <div class="col col-md-12">
                                <div class="input-group">
                                    <input type="text" id="input1-group2" name="keyword" value="{{ $keyword }}" placeholder="Nhập từ khóa" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i> Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('admin.user.create') }}">
                            <i class="zmdi zmdi-plus"></i>Thêm mới thành viên</a>

                        </div>
                    </div>
                </form>



            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                <label class="au-checkbox tr-active">
                                    <input type="checkbox" id="checkAll">
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
                        <tr class="tr-active">
                            <td>
                                <label class="au-checkbox" >
                                    <input type="checkbox" class="checkBoxItem">
                                    <span class="au-checkmark au-checkBoxItem"></span>
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
                                <span class="role
                                    @switch($user->role_id)
                                        @case(1)
                                            {{ 'admin' }}
                                            @break
                                        @case(2)
                                            {{ 'member' }}
                                            @break
                                        @default
                                            {{ 'member' }}
                                            @break
                                    @endswitch()">
                                    @switch($user->role_id)
                                        @case(1)
                                            {{ 'Quản trị viên' }}
                                            @break
                                        @case(2)
                                            {{ 'Cộng tác viên' }}
                                            @break
                                        @default
                                            {{ 'Cộng tác viên' }}
                                            @break
                                    @endswitch()
                                </span>
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
                                    <input type="checkbox" data-modalId="{{ $user->id }}" data-publish="status" value="{{ $user->status }}" class="switch-input status" {{ ($user->status == '1')?'checked':'' }}/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </td>
                            <td>
                                <div class="table-data-feature center-icon">
                                    <a class="item" data-toggle="tooltip" data-placement="top"
                                        href="{{ route('admin.user.edit', $user->id) }}" data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <!-- <form action="{{ route('admin.user.delete', $user->id) }}" method="POST"
                                                                                        onsubmit="return confirm('Xóa người dùng này?')">
                                                                                        @csrf -->
                                    <!-- <button type="submit" class="item" data-toggle="modal"
                                                                                            data-target="#staticModal">
                                                                                            <i class="zmdi zmdi-delete"></i>
                                                                                        </button> -->
                                    <button type="button" class="item btn-delete" data-id="{{ $user->id }}">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <!--
                                                                                    </form> -->
                                    <!-- <a class="item" data-toggle="tooltip" data-placement="top" href="{{ route('admin.user.delete', $user->id) }}
                                                                                                    data-original-title="Delete">
                                                                                                    <i class="zmdi zmdi-delete"></i>
                                                                                                </a> -->
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                document.querySelectorAll('.btn-delete').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const userId = this.getAttribute('data-id');

                                        Swal.fire({
                                            title: 'Bạn có chắc chắn muốn xoá?',
                                            text: "Người dùng này sẽ bị xoá vĩnh viễn!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            cancelButtonColor: '#3085d6',
                                            confirmButtonText: 'Xóa',
                                            cancelButtonText: 'Huỷ'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                const form = document.createElement('form');
                                                form.method = 'POST';
                                                form.action = `/admin/user/delete/${userId}`;

                                                const csrf = document.createElement('input');
                                                csrf.type = 'hidden';
                                                csrf.name = '_token';
                                                csrf.value = '{{ csrf_token() }}';

                                                form.appendChild(csrf);
                                                document.body.appendChild(form);
                                                form.submit();
                                            }
                                        });
                                    });
                                });
                            });

                        </script>
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
