@php
    // set time zone viet nam
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    //  chuyển đổi ngày
    $date = date("d/m/Y");
    $arrDate = explode("/", $date);
    // lấy ngày cần thay đổi
    $day = $arrDate[0];
    // chuyển phát nhanh
    $arrDate[0] = (string)((int)$day+2);
    $express_delivery_date =  implode("/", $arrDate);
    // chuyển phát đường bộ
    $arrDate[0] = (string)((int)$day+5);
    $road_delivery_date =  implode("/", $arrDate);
    // chuyển phát tiết kiệm
    $arrDate[0] = (string)((int)$day+3);
    $thrifty_delivery_date =  implode("/", $arrDate);
    // chuyển phát hỏa tốc
    $arrDate[0] = (string)((int)$day+1);
    $fire_express_delivery_date =  implode("/", $arrDate);

    // data rates(loại hàng hóa)
    $data = [];
    $data[0] = "Chọn loại hàng hóa";
    foreach ($stock_rates as $key => $value) {
        $data[$value['id']] = $value['name'];
    }
    // data provinces(tỉnh gửi)
    $data_provinces = [];
    $data_provinces[0] = "Chọn tỉnh/thành";
    foreach ($provinces as $key => $value) {
        $data_provinces[$value['id']] = $value['name_provinces'];
    }

    $select_rates_type = Form::select('form[stock_rate_type]', $data, @$item['stock_rate_type'], ['class' => 'form-control']);
    $select_provinces_sending = Form::select('form[provinces_sending]', $data_provinces, @$item['provinces_sending'], ['class' => 'form-control', 'id' => 'provinces_sending']);
    $select_provinces_receiver = Form::select('form[provinces_receiver]', $data_provinces, @$item['provinces_receiver'], ['class' => 'form-control', 'id' => 'provinces_receiver']);
@endphp
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
                                        {!! $select_provinces_sending !!}
                                        <select id="districts_sending" value="{{ @$item['districts_sending'] }}" name="form[districts_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <select id="wards_sending" name="form[wards_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <textarea name="form[sending_place]" type="text" class="form-control" placeholder="Số nhà, tên đường">{{ @$item['sending_place'] }}</textarea>
                                    </div>
                                    <div class="col">
                                        <span>Thông tin người nhận</span>
                                        <input value="{{ @$item['reminiscent_name_receiver'] }}" name="form[reminiscent_name_receiver]" type="text" class="form-control" placeholder="Nhập tên gợi nhớ">
                                        <input value="{{ @$item['receiver_name'] }}" name="form[receiver_name]" type="text" class="form-control" placeholder="Người nhận">
                                        <input value="{{ @$item['receiver_phone_number'] }}" name="form[receiver_phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                        {!! $select_provinces_receiver !!}
                                        <select id="districts_receiver" name="form[districts_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <select id="wards_receiver" name="form[wards_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <textarea name="form[recipients]" type="text" class="form-control" placeholder="Số nhà, tên đường">{{ @$item['recipients'] }}</textarea>
                                    </div>
                                    <div class="col">
                                        <span>Thông tin hàng hóa dịch vụ</span>
                                        {!! $select_rates_type !!}
                                        <input value="{{ @$item['length'] }}" name="form[length]" type="text" class="form-control" placeholder="Dài (cm)">
                                        <input value="{{ @$item['width'] }}" name="form[width]" type="text" class="form-control" placeholder="Rộng (cm)">
                                        <input value="{{ @$item['height'] }}" name="form[height]" type="text" class="form-control" placeholder="Cao (cm)">
                                        <input value="{{ @$item['weight'] }}" name="form[weight]" type="text" class="form-control" placeholder="Khối lượng (Kg)">
                                        <input id="formatPrice" type="text" value="{{ @$item['collection_fee'] }}" name="form[collection_fee]" class="form-control" placeholder="Số tiền thu hộ (VNĐ)">
                                        <textarea name="form[note]" type="text" class="form-control" placeholder="Ghi chú hàng hóa">{{ @$item['note'] }}</textarea>
                                        <a href="javascript:submitFormOrders('{{ route('admin.getInfoOrders') }}')" class="btn btn-default total-price">Tính giá dịch vụ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (isset($distance) && $distance != "")
                        <div class="row ng-star-inserted">
                            <div class="col-md-12" style="margin: 25px 0; background-color: rgb(255, 29, 29)"><h5 class="title-info" style="margin: 15px; color: #fff">Bảng giá dịch vụ</h5></div>
                            <div style="margin-bottom: 10px;" class="col-md-6">
                                <div class="card">
                                    <div class="card-body"><h5 class="card-title">Chuyển phát nhanh</h5></div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['express_delivery']), 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Phí thu hộ:</b> {{ $item['collection_fee'] }} VNĐ</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Phí bảo hiểm:</b> {{  number_format($insurance_fees, 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Quãng đường:</b> {{ $distance }}</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> {{ $express_delivery_date }}</div>
                                                <div class="col-md-6"><b>Phí báo phát:</b> 0 VNĐ</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="total_price_express_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['express_delivery'] + (int)$item['collection_fee'] + $insurance_fees) }}">
                                    <a  href="javascript:submitFormOrders('{{ route('admin.saveOrders', 'type=express_delivery') }}')" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;" class="col-md-6">
                                <div class="card">
                                    <div class="card-body"><h5 class="card-title">Đường bộ</h5></div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['road_delivery']), 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Phí thu hộ:</b> {{ $item['collection_fee'] }} VNĐ</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Phí bảo hiểm:</b> {{ number_format($insurance_fees, 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Quãng đường:</b> {{ $distance }}</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> {{ $road_delivery_date }}</div>
                                                <div class="col-md-6"><b>Phí báo phát:</b> 0 VNĐ</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="total_price_road_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['road_delivery'] + (int)$item['collection_fee'] + $insurance_fees) }}">
                                    <a  href="javascript:submitFormOrders('{{ route('admin.saveOrders', 'type=road_delivery') }}')" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;" class="col-md-6">
                                <div class="card">
                                    <div class="card-body"><h5 class="card-title">Tiết kiệm</h5></div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['thrifty_delivery']), 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Phí thu hộ:</b> {{ $item['collection_fee'] }} VNĐ</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Phí bảo hiểm:</b> {{ number_format($insurance_fees, 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Quãng đường:</b> {{ $distance }}</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> {{ $thrifty_delivery_date }}</div>
                                                <div class="col-md-6"><b>Phí báo phát:</b> 0 VNĐ</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="total_price_thrifty_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['thrifty_delivery'] + (int)$item['collection_fee'] + $insurance_fees) }}">
                                    <a  href="javascript:submitFormOrders('{{ route('admin.saveOrders', 'type=thrifty_delivery') }}')" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;" class="col-md-6">
                                <div class="card">
                                    <div class="card-body"><h5 class="card-title">Hỏa tốc</h5></div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['fire_express_delivery']), 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Phí thu hộ:</b> {{ $item['collection_fee'] }} VNĐ</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Phí bảo hiểm:</b> {{ number_format($insurance_fees, 0) }} VNĐ</div>
                                                <div class="col-md-6"><b>Quãng đường:</b> {{ $distance }}</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"><b>Thời gian toàn trình dự kiến:</b> {{ $fire_express_delivery_date }}</div>
                                                <div class="col-md-6"><b>Phí báo phát:</b> 0 VNĐ</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="total_price_fire_express_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['fire_express_delivery'] + (int)$item['collection_fee'] + $insurance_fees) }}">
                                    <a href="javascript:submitFormOrders('{{ route('admin.saveOrders', 'type=fire_express_delivery') }}')" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                                </div>
                            </div>
                        </div>
                    @endif
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