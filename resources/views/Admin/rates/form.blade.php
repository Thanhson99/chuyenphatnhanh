@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm giá cước</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm giá cước</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn">
                    <a href="javascript:submitSaveRates('{{ route('admin.saveRates', 'type=save') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu</a>
                    <a href="javascript:submitSaveRates('{{ route('admin.saveRates', 'type=new') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và tạo mới</a>
                    <a href="javascript:submitSaveRates('{{ route('admin.saveRates', 'type=close') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và đóng</a>
                    <a href="{{ route('admin.listRates') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-rates" class="list-items" method="POST" action="#" enctype="multipart/form-data">
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
                                        <span>Tên loại hàng</span>
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Giá cước</span>
                                    <input value="{{ @$item['rates'] }}" name="form[rates]" type="text" class="form-control" placeholder="Giá tiền">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (isset($item['id']))
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                    @endif
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection