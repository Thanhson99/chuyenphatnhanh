@php
    $select_news_type = Form::select('form[new_type]', ['tin chuyên ngành' => 'tin chuyên ngành', 'tin hoạt động' => 'Tin hoạt động', 'tin khuyến mãi' => 'Tin khuyến mãi'], null, ['class' => 'form-control']);
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm tin tức</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm tin tức</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn">
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu</a>
                    <a href="javascript:submitSave('{{ route('admin.saveNews', 'type=new') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và tạo mới</a>
                    <a href="javascript:submitSave('{{ route('admin.saveNews', 'type=close') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và đóng</a>
                    <a href="{{ route('admin.listNews') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-new" class="list-items" method="POST" action="#">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin</a>
                              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Meta</a>
                            </div>
                          </nav>
                    </div>
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-row">
                                    <div class="col">
                                        <span>Tiêu đề</span>
                                        <input name="form[title]" type="text" class="form-control" placeholder="Tiêu đề">
                                    </div>
                                    <div class="col">
                                        <span>Loại tin tức</span>
                                        {!! $select_news_type !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Nội dung</span>
                                    <textarea  name="form[description]" style="height: 100px" type="text" class="form-control" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Avatar</span>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="form-row">
                                    <div class="col">
                                        <span>Slug:</span>
                                        <input name="form[slug]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Meta title:</span>
                                        <input name="form[meta_title]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Meta description:</span>
                                    <textarea name="form[meta_description]" style="height: 100px" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Meta keywords:</span>
                                        <input name="form[meta_keywords]" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection