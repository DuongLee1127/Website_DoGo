<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="page-title-box">
            <h4 class="p-b-5">{{ $config['seo']['index']['title'] }}</h4>
            <small>Dashboard / <strong>{{ $config['seo']['index']['title'] }}</strong></small>
        </div>
        <div class="m-b-30">
            @php
                $url = ($config['method'] == 'create') ? route('admin.post.store') : route('admin.post.update', $posts->id)
            @endphp
            <form action="{{ $url }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
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
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thông tin chung</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="text-input" class=" form-control-label">Tiêu đề bài viết <span
                                                class="text-danger">(*)</span></label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <input type="text" id="text-input" name="title"
                                            placeholder="Nhập tiêu đề bài viết" class="form-control"
                                            value="{{ old('title', ($posts->title) ?? '') }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="description" class="form-control-label">
                                            Mô tả ngắn
                                            <span class="text-danger">(*)</span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <textarea type="text" id="description" name="description"
                                            placeholder="Nhập mô tả ngắn" class="form-control ck-editor"
                                            data-height="150"
                                            value="{{ old('description', ($posts->description) ?? '') }}">
                                            </textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="content" class="form-control-label">Nội dung <span
                                                class="text-danger">(*)</span></label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <textarea type="text" id="content" name="content" placeholder="Nhập nội dung"
                                            class="form-control ck-editor" data-height="500"
                                            value="{{ old('content', ($posts->content) ?? '') }}">
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Cấu hình SEO</strong>
                            </div>
                            <div class="search-result">
                                <div class="search-url">
                                    <img src="https://www.google.com/s2/favicons?domain=metatft.com" alt="favicon">
                                    <span>https://www.metatft.com › comps</span>
                                </div>
                                <div class="search-title">
                                    <a href="#">Best TFT Meta Comps & Builds - Set 14 [Patch 14.3]</a>
                                </div>
                                <div class="search-description">
                                    Discover data on <strong>TFT</strong> Comps, Builds, Items, Augments and more. Get
                                    all the Teamfight Tactics information & tools you need with MetaTFT.
                                </div>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="keyword" class="form-control-label">Từ khóa SEO</label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <input type="text" id="keyword" name="keyword" placeholder="Nhập từ khóa"
                                            class="form-control" value="{{ old('keyword', ($posts->keyword) ?? '') }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="descriptionSeo" class="form-control-label">Mô tả SEO</label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <textarea type="text" id="descriptionSeo" name="descriptionSeo"
                                            placeholder="Nhập mô tả"
                                            class="form-control">{{ old('descriptionSeo', ($posts->descriptionSeo) ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="link" class=" form-control-label">Đường dẫn</label>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <input type="text" id="link" name="link" placeholder="Nhập đường dẫn"
                                            class="form-control" value="{{ old('link', ($posts->link) ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="text-input" class="form-control-label catef"><strong>Chọn danh mục cha</strong> <span
                                            class="text-danger">(*)</span></label>
                                    <small class="text-danger"><i>*Chọn root nếu không có danh mục cha</i></small>
                                    <div class="">
                                        <select name="province_id" id="select-province"
                                            class="form-control js-select2 province" data-target="districts">
                                            <option value="0">[Chọn danh mục cha]</option>
                                            @if(isset($provinces) && is_object($provinces))
                                            @foreach ($provinces as $province)
                                            <option @if(old('province_id')==$province->code) selected @endif value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Chọn ảnh đại diện</strong>
                            </div>
                            <div class="card-body card-block">
                                <span class="img-target" data-toggle="modal" data-target="#largeModal"><img id="preview" src="{{ asset('admin_assets/images/no-image.jpeg') }}" alt=""></span>
                                <input type="hidden" name="image" id="uploadi" class="" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-sm" name="send" value="send">
                        <i class="fa fa-save"></i> Lưu
                    </button>
                    <a href="{{ route('admin.post') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Hủy
                    </a>
                </div>

            </form>



        </div>
        <!-- END USER DATA-->
    </div>
</div>
<script>
    var province_id = '{{ (isset($posts->province_id)) ? $posts->province_id : old('province_id') }}';
    var district_id = '{{ (isset($posts->district_id)) ? $posts->district_id : old('district_id') }}';
    var ward_id = '{{ (isset($posts->ward_id)) ? $posts->ward_id : old('ward_id') }}';
</script>
