@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm vận đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm vận đơn</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn">
                    <a href="javascript:submitSaveOrders('{{ route('admin.saveOrders', 'type=save') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu</a>
                    <a href="javascript:submitSaveOrders('{{ route('admin.saveOrders', 'type=new') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và tạo mới</a>
                    <a href="javascript:submitSaveOrders('{{ route('admin.saveOrders', 'type=close') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và đóng</a>
                    <a href="{{ route('admin.listOrders') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-orders" class="list-items" method="POST" action="#" enctype="multipart/form-data">
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
                                        <input value="{{ @$item['reminiscent_name_sending'] }}" name="form[reminiscent_name_sending]" type="text" class="form-control" placeholder="Nhập tên gợi nhớ">
                                        <input value="{{ @$item['sending_name'] }}" name="form[sending_name]" type="text" class="form-control" placeholder="Người gửi">
                                        <input value="{{ @$item['phone_number'] }}" name="form[phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                        <select id="provinces" value="{{ @$item['provinces'] }}" name="form[provinces]" class="browser-default custom-select location">
                                            <option selected>Chọn tỉnh/thành phố</option>
                                            @foreach ($provinces as $key => $value)
                                                <option value="{{$value['id']}}">{{ $value['name_provinces'] }}</option>
                                            @endforeach
                                        </select>
                                        <select id="districts" value="{{ @$item['districts'] }}" name="form[districts]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <select id="wards" value="{{ @$item['wards'] }}" name="form[wards]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <textarea value="{{ @$item['streets'] }}" name="form[streets]" type="text" class="form-control" placeholder="Số nhà, tên đường"></textarea>
                                    </div>
                                    <div class="col">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                    </div>
                                    <div class="col">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Tên loại hàng">
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