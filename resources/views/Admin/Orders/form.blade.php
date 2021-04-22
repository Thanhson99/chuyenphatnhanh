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
                    <a href="{{ route('admin.listOrders') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-orders" class="list-items" method="POST" action="#" enctype="multipart/form-data">
                    <div class="col-md-12">
                        @if ( session()->has('message') )
                            <div class="alert alert-danger">{{ session()->get('message') }}</div>
                        @endif
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
                                        <span>Thông tin người gửi</span>
                                        <input value="{{ @$item['reminiscent_name_sending'] }}" name="form[reminiscent_name_sending]" type="text" class="form-control" placeholder="Nhập tên gợi nhớ">
                                        <input value="{{ @$item['sending_name'] }}" name="form[sending_name]" type="text" class="form-control" placeholder="Người gửi">
                                        <input value="{{ @$item['sending_phone_number'] }}" name="form[sending_phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                        <select id="provinces_sending" value="{{ @$item['provinces_sending'] }}" name="form[provinces_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn tỉnh/thành phố</option>
                                            @foreach ($provinces as $key => $value)
                                                <option value="{{$value['id']}}">{{ $value['name_provinces'] }}</option>
                                            @endforeach
                                        </select>
                                        <select id="districts_sending" value="{{ @$item['districts_sending'] }}" name="form[districts_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <select id="wards_sending" value="{{ @$item['wards_sending'] }}" name="form[wards_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <textarea name="form[sending_place]" type="text" class="form-control" placeholder="Số nhà, tên đường">{{ @$item['sending_place'] }}</textarea>
                                    </div>
                                    <div class="col">
                                        <span>Thông tin người nhận</span>
                                        <input value="{{ @$item['reminiscent_name_receiver'] }}" name="form[reminiscent_name_receiver]" type="text" class="form-control" placeholder="Nhập tên gợi nhớ">
                                        <input value="{{ @$item['receiver_name'] }}" name="form[receiver_name]" type="text" class="form-control" placeholder="Người nhận">
                                        <input value="{{ @$item['receiver_phone_number'] }}" name="form[receiver_phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                        <select id="provinces_receiver" value="{{ @$item['provinces_receiver'] }}" name="form[provinces_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn tỉnh/thành phố</option>
                                            @foreach ($provinces as $key => $value)
                                                <option value="{{$value['id']}}">{{ $value['name_provinces'] }}</option>
                                            @endforeach
                                        </select>
                                        <select id="districts_receiver" value="{{ @$item['districts_receiver'] }}" name="form[districts_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <select id="wards_receiver" value="{{ @$item['wards_receiver'] }}" name="form[wards_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <textarea name="form[recipients]" type="text" class="form-control" placeholder="Số nhà, tên đường">{{ @$item['recipients'] }}</textarea>
                                    </div>
                                    <div class="col">
                                        <span>Thông tin hàng hóa dịch vụ</span>
                                        <select style="margin-top: 5px" value="{{ @$item['stock_rate_type'] }}" name="form[stock_rate_type]" class="browser-default custom-select location">
                                            <option selected>Loại hàng hóa</option>
                                            @foreach ($stock_rates as $key => $value)
                                                <option value="{{$value['id']}}">{{ $value['name'] }}</option>
                                            @endforeach
                                        </select>
                                        <input value="{{ @$item['length'] }}" name="form[length]" type="text" class="form-control" placeholder="Dài (cm)">
                                        <input value="{{ @$item['width'] }}" name="form[width]" type="text" class="form-control" placeholder="Rộng (cm)">
                                        <input value="{{ @$item['height'] }}" name="form[height]" type="text" class="form-control" placeholder="Cao (cm)">
                                        <input value="{{ @$item['weight'] }}" name="form[weight]" type="text" class="form-control" placeholder="Khối lượng (Kg)">
                                        <input value="{{ @$item['collection_fee'] }}" name="form[collection_fee]" type="text" class="form-control" placeholder="Số tiền thu hộ (VNĐ)">
                                        <textarea name="form[note]" type="text" class="form-control" placeholder="Ghi chú hàng hóa">{{ @$item['note'] }}</textarea>
                                        <a href="javascript:submitFormOrders('{{ route('admin.getInfoOrders') }}')" class="btn btn-default total-price">Tính giá dịch vụ</a>
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
    @if (isset($distance))
        <div class="row ng-star-inserted">
            <div class="col-md-12" style="margin: 25px 0; background-color: rgb(255, 29, 29)"><h5 class="title-info" style="margin: 15px; color: #fff">Bảng giá dịch vụ</h5></div>
            <div style="margin-bottom: 10px;" class="col-md-6">
                <div class="card">
                    <form action="">
                        <div class="card-body"><h5 class="card-title">Chuyển phát nhanh</h5></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Cước chính:</b> 643,500</div>
                                    <div class="col-md-6"><b>Phí thu hộ:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Phí bảo hiểm:</b> 0</div>
                                    <div class="col-md-6"><b>Phí kiểm đếm:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> 24/04/2021 09:18</div>
                                    <div class="col-md-6"><b>Phí báo phát:</b> 0</div>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                    </form>
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="col-md-6">
                <div class="card">
                    <form action="">
                        <div class="card-body"><h5 class="card-title">Đường bộ</h5></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Cước chính:</b> 159,588</div>
                                    <div class="col-md-6"><b>Phí thu hộ:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Phí bảo hiểm:</b> 0</div>
                                    <div class="col-md-6"><b>Phí kiểm đếm:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> 27/04/2021 16:18</div>
                                    <div class="col-md-6"><b>Phí báo phát:</b> 0</div>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                    </form>
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="col-md-6">
                <div class="card">
                    <form action="">
                        <div class="card-body"><h5 class="card-title">Tiết kiệm</h5></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Cước chính:</b> 271,557</div>
                                    <div class="col-md-6"><b>Phí thu hộ:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Phí bảo hiểm:</b> 0</div>
                                    <div class="col-md-6"><b>Phí kiểm đếm:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> 25/04/2021 16:18</div>
                                    <div class="col-md-6"><b>Phí báo phát:</b> 0</div>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                    </form>
                </div>
            </div>
            <div style="margin-bottom: 10px;" class="col-md-6">
                <div class="card">
                    <form action="">
                        <div class="card-body"><h5 class="card-title">Hỏa tốc</h5></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Cước chính:</b> 855,212</div>
                                    <div class="col-md-6"><b>Phí thu hộ:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Phí bảo hiểm:</b> 0</div>
                                    <div class="col-md-6"><b>Phí kiểm đếm:</b> 0</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> 23/04/2021 09:18</div>
                                    <div class="col-md-6"><b>Phí báo phát:</b> 0</div>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection