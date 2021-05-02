@php
    use App\provinces;
    //lấy tỉnh thành
    $provinces = new provinces();
    $provinces_list = $provinces->get_provinces();

    $data_provinces = [];
    $data_provinces[0] = "Chọn tỉnh/thành";
    foreach ($provinces_list as $key => $value) {
        $data_provinces[$value['id']] = $value['name_provinces'];
    }

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
    // dd($params);

    $select_provinces_sending = Form::select('form[provinces_sending]', $data_provinces, @$params['form']['provinces_sending'], ['class' => 'form-control', 'id' => 'provinces_sending']);
    $select_provinces_receiver = Form::select('form[provinces_receiver]', $data_provinces, @$params['form']['provinces_receiver'], ['class' => 'form-control', 'id' => 'provinces_receiver']);
@endphp
@extends('User.layoutMain')

@section('main-content')
<section class="w-100 position-relative box-order pb-4 pb-md-5" style="background: url('../User/images/1.jpg');background-repeat: no-repeat;background-position: left top;background-size: cover;">
    <div class="container position-relative z_index">
        <div class="w-100 text-center font-weight-bold SanFranciscoDisplay-Bold text-white text-tracuu pt-3 pb-3 pt-md-5 mb-md-3">Tra cước và thời gian</div>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-12 offset-md-1 mt-3">
                <div class="w-100 p-3 p-lg-4 bg-white" style="position: relative;">
                    <div class="spinner-border-main text-center" style="display: none; position: absolute; z-index: 10; top: 0; left: 0; width: 100%; height: 100%;">
                        <div class="spinner-border text-primary" style="position: absolute; z-index: 100; top: 50%;"></div>
                    </div>

                    <form id="form-cp" action="{{ route('user.showRates') }}" method="POST">
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
                        <div class="font-IntelBold title-bc mb-2 mb-md-4">Nhập thông tin bưu kiện</div>
                        <div class="">
                            <label class="text-dark">Nơi gửi <sup class="text-danger">*</sup></label>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! $select_provinces_sending !!}
                                        <span id="err_send_city_id" generated="true" class="error" style="display: none;">Vui lòng chọn tỉnh thành</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select id="districts_sending" value="{{ @$item['districts_sending'] }}" name="form[districts_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <span id="err_send_district_id" generated="true" class="error" style="display: none;">Vui lòng chọn quận </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select id="wards_sending" name="form[wards_sending]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <span id="err_send_district_id" generated="true" class="error" style="display: none;">Vui lòng chọn quận </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="text-dark">Nơi nhận <sup class="text-danger">*</sup></label>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! $select_provinces_receiver !!}
                                        <span id="err_send_city_id" generated="true" class="error" style="display: none;">Vui lòng chọn tỉnh thành</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select id="districts_receiver" name="form[districts_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn quận/huyện</option>
                                        </select>
                                        <span id="err_send_district_id" generated="true" class="error" style="display: none;">Vui lòng chọn quận </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select id="wards_receiver" name="form[wards_receiver]" class="browser-default custom-select location">
                                            <option selected>Chọn phường/xã</option>
                                        </select>
                                        <span id="err_send_district_id" generated="true" class="error" style="display: none;">Vui lòng chọn quận </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col6 mb-2">
                                    <div class="row d-flex justify-content-start align-items-center">
                                        <label class="col-lg-4 col-md-12 col-sm-4 col-12 text-dark mb-lg-0">Số kiện <sup class="text-danger">*</sup></label>
                                        <div class="col-lg-6 col-md-12 col-sm-6 col-9">
                                            <input type="number" class="form-control formcontrol" name="package_no" id="package_no" value="1" />
                                        </div>
                                        <span id="err_package_no" generated="true" class="error" style="display: none;">Nhập số kiện</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 col6 mb-2">
                                    <div class="row d-flex justify-content-start align-items-center">
                                        <label class="col-lg-5 col-md-12 col-sm-5 col-12 text-dark mb-lg-0">Trọng lượng <sup class="text-danger">*</sup></label>
                                        <div class="col-lg-5 col-md-10 col-sm-5 col-9">
                                            <input type="number" class="form-control formcontrol" name="weight" id="weight" value="1" />
                                        </div>
                                        <label class="col-lg-1 col-md-2 col-sm-1 col-3 text-dark mb-lg-0">KG</label>
                                        <span id="err_weight" generated="true" class="error" style="display: none;">Nhập trọng lượng</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="row d-flex justify-content-start align-items-center">
                                        <label class="col-lg-5 col-md-12 col-sm-3 col-12 text-dark mb-lg-0">Số tiền thu hộ</label>
                                        <div class="col-lg-6 col-md-10 col-sm-8 col-9 col-10">
                                            <input type="text" class="form-control formcontrol" name="cod_amt" id="cod_amt" value="0" onkeyup="FormatNumber(this);" />
                                        </div>
                                        <label class="col-lg-1 col-md-2 col-sm-1 col-2 text-dark mb-lg-0">VNĐ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-IntelBold title-bc mb-1 pt-lg-2 pb-2 mt-lg-4 mb-lg-4">Đặc tính hàng hóa</div>
                        <ul class="row dactinh">
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1 current" data-id="Tài liệu" data-value="1">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Letter d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                        <span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span>
                                    </span>
                                    <div class="mt-2">Tài liệu</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Thời trang Mỹ phẩm" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Coat-and-lipstick d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                        <span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span>
                                        <span class="path19"></span><span class="path20"></span><span class="path21"></span>
                                    </span>
                                    <div class="mt-2">Thời trang Mỹ phẩm</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Đồ điện tử" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Phone d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                        <span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span>
                                        <span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span>
                                        <span class="path25"></span><span class="path26"></span><span class="path27"></span>
                                    </span>
                                    <div class="mt-2">
                                        Đồ điện tử
                                    </div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Dược phẩm TPCN" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Medicine d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                        <span class="path13"></span><span class="path14"></span>
                                    </span>
                                    <div class="mt-2">
                                        Dược phẩm
                                    </div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Thực phẩm" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Bread d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                    </span>
                                    <div class="mt-2">Thực phẩm</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Đồ tươi sống" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Meat d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                        <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                    </span>
                                    <div class="mt-2">Đồ tươi sống</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Đồ có pin" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Battery d-block"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="mt-2">Đồ có pin</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Chất bột nước" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Water d-block">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                    </span>
                                    <div class="mt-2 mb-1">Chất bột nước</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Chất dễ cháy" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <span class="icon ntl-Fire d-block"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="mt-2">Chất dễ cháy</div>
                                </div>
                            </li>
                            <li class="border bg-fff translate rounded pt-1 pb-1 mb-1" data-id="Hàng hóa thông thường" data-value="2">
                                <div class="w-100 text-dark text-center">
                                    <img src="{{ asset('User/images/icons/order-01.png') }}" alt="" class="img-fluid" style="width: 70px" />
                                    <div class="mt-2">Hàng hóa thông thường</div>
                                </div>
                            </li>
                        </ul>
                        <div class="w-100 text-center mt-4">
                            <input type="hidden" id="feature" name="feature" value="1" />
                            <input type="hidden" id="cargo_content" name="cargo_content" value="Tài liệu" />
                            <input class="btn font-size-18" type="submit" name="hoantat" value="Tra giá" id="complete" style="background: rgb(255, 25, 25); color: #fff"/>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
            @if (isset($distance) && $distance != "")
                <div class="w-100 p-3 p-lg-4 bg-white" style="position: relative; margin-top: 20px;">
                    <div class="row ng-star-inserted">
                        <div class="col-md-12" style="margin: 25px 0; background-color: rgb(255, 29, 29)"><h5 class="title-info" style="margin: 15px; color: #fff">Bảng giá dịch vụ</h5></div>
                        <div style="margin-bottom: 10px;" class="col-md-6">
                            <div class="card">
                                <div class="card-body"><h5 class="card-title">Chuyển phát nhanh</h5></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['express_delivery']), 0) }} VNĐ</div>
                                            <div class="col-md-6"><b>Phí thu hộ:</b> {{ $params['cod_amt'] }} VNĐ</div>
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
                                <input type="hidden" name="total_price_express_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['express_delivery'] + (int)$params['cod_amt'] + $insurance_fees) }}">
                                <a  href="{{ route('user.login') }}" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;" class="col-md-6">
                            <div class="card">
                                <div class="card-body"><h5 class="card-title">Đường bộ</h5></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['road_delivery']), 0) }} VNĐ</div>
                                            <div class="col-md-6"><b>Phí thu hộ:</b> {{ $params['cod_amt'] }} VNĐ</div>
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
                                <input type="hidden" name="total_price_road_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['road_delivery'] + (int)$params['cod_amt'] + $insurance_fees) }}">
                                <a  href="{{ route('user.login') }}" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;" class="col-md-6">
                            <div class="card">
                                <div class="card-body"><h5 class="card-title">Tiết kiệm</h5></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['thrifty_delivery']), 0) }} VNĐ</div>
                                            <div class="col-md-6"><b>Phí thu hộ:</b> {{ $params['cod_amt'] }} VNĐ</div>
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
                                <input type="hidden" name="total_price_thrifty_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['thrifty_delivery'] + (int)$params['cod_amt'] + $insurance_fees) }}">
                                <a  href="{{ route('user.login') }}" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;" class="col-md-6">
                            <div class="card">
                                <div class="card-body"><h5 class="card-title">Hỏa tốc</h5></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><b>Cước chính:</b> {{ number_format(( $stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['fire_express_delivery']), 0) }} VNĐ</div>
                                            <div class="col-md-6"><b>Phí thu hộ:</b> {{ $params['cod_amt'] }} VNĐ</div>
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
                                <input type="hidden" name="total_price_fire_express_delivery" value="{{ (int)($stock_rates_price + (float)str_replace(" km", "", $distance) * $shipping_rates['fire_express_delivery'] + (int)$params['cod_amt'] + $insurance_fees) }}">
                                <a href="{{ route('user.login') }}" class="btn btn-default btn-submit-type-transportation">Tạo đơn</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection