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

                    <form id="form-cp" action="#" method="get">
                        <div class="font-IntelBold title-bc mb-2 mb-md-4">Nhập thông tin bưu kiện</div>
                        <div class="">
                            <label class="text-dark">Nơi gửi <sup class="text-danger">*</sup></label>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select name="send_city_id" class="selectpicker form-control change_city border-cam" id="send_city_id" data-id="send_district_id" required data-live-search="true" data-size="10">
                                            <option value="">Chọn tỉnh thành</option>
                                            <option value="50">Hồ Chí Minh</option>
                                            <option value="29">Hà Nội</option>
                                            <option value="43">Đà Nẵng</option>
                                            <option value="67">An Giang</option>
                                            <option value="72">Bà Rịa Vũng Tàu</option>
                                            <option value="61">Bình Dương</option>
                                            <option value="93">Bình Phước</option>
                                            <option value="86">Bình Thuận</option>
                                            <option value="77">Bình Định</option>
                                            <option value="94">Bạc Liêu</option>
                                            <option value="98">Bắc Giang</option>
                                            <option value="97">Bắc Kạn</option>
                                            <option value="99">Bắc Ninh</option>
                                            <option value="71">Bến Tre</option>
                                            <option value="11">Cao Bằng</option>
                                            <option value="69">Cà Mau</option>
                                            <option value="65">Cần Thơ</option>
                                            <option value="81">Gia Lai</option>
                                            <option value="23">Hà Giang</option>
                                            <option value="90">Hà Nam</option>
                                            <option value="38">Hà Tĩnh</option>
                                            <option value="28">Hòa Bình</option>
                                            <option value="89">Hưng Yên</option>
                                            <option value="34">Hải Dương</option>
                                            <option value="16">Hải Phòng</option>
                                            <option value="95">Hậu Giang</option>
                                            <option value="79">Khánh Hòa</option>
                                            <option value="68">Kiên Giang</option>
                                            <option value="82">KonTum</option>
                                            <option value="25">Lai Châu</option>
                                            <option value="62">Long An</option>
                                            <option value="24">Lào Cai</option>
                                            <option value="49">Lâm Đồng</option>
                                            <option value="12">Lạng Sơn</option>
                                            <option value="18">Nam Định</option>
                                            <option value="37">Nghệ An</option>
                                            <option value="35">Ninh Bình</option>
                                            <option value="85">Ninh Thuận</option>
                                            <option value="19">Phú Thọ</option>
                                            <option value="78">Phú Yên</option>
                                            <option value="73">Quảng Bình</option>
                                            <option value="92">Quảng Nam</option>
                                            <option value="76">Quảng Ngãi</option>
                                            <option value="14">Quảng Ninh</option>
                                            <option value="74">Quảng Trị</option>
                                            <option value="83">Sóc Trăng</option>
                                            <option value="26">Sơn La</option>
                                            <option value="36">Thanh Hóa</option>
                                            <option value="17">Thái Bình</option>
                                            <option value="20">Thái Nguyên</option>
                                            <option value="75">Thừa Thiên Huế</option>
                                            <option value="63">Tiền Giang</option>
                                            <option value="84">Trà Vinh</option>
                                            <option value="22">Tuyên Quang</option>
                                            <option value="70">Tây Ninh</option>
                                            <option value="64">Vĩnh Long</option>
                                            <option value="88">Vĩnh Phúc</option>
                                            <option value="21">Yên Bái</option>
                                            <option value="27">Điện Biên</option>
                                            <option value="47">Đăk Lăk</option>
                                            <option value="48">Đắk Nông</option>
                                            <option value="60">Đồng Nai</option>
                                            <option value="66">Đồng Tháp</option>
                                        </select>
                                        <span id="err_send_city_id" generated="true" class="error" style="display: none;">Vui lòng chọn tỉnh thành</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select name="send_district_id" class="selectpicker form-control" id="send_district_id" required data-live-search="true" data-size="10">
                                            <option value="">Chọn quận huyện</option>
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
                                        <select name="recieve_city_id" class="selectpicker form-control change_city" id="recieve_city_id" data-id="recieve_district_id" required data-live-search="true" data-size="10">
                                            <option value="0">Chọn tỉnh thành</option>
                                            <option value="50">Hồ Chí Minh</option>
                                            <option value="29">Hà Nội</option>
                                            <option value="43">Đà Nẵng</option>
                                            <option value="67">An Giang</option>
                                            <option value="72">Bà Rịa Vũng Tàu</option>
                                            <option value="61">Bình Dương</option>
                                            <option value="93">Bình Phước</option>
                                            <option value="86">Bình Thuận</option>
                                            <option value="77">Bình Định</option>
                                            <option value="94">Bạc Liêu</option>
                                            <option value="98">Bắc Giang</option>
                                            <option value="97">Bắc Kạn</option>
                                            <option value="99">Bắc Ninh</option>
                                            <option value="71">Bến Tre</option>
                                            <option value="11">Cao Bằng</option>
                                            <option value="69">Cà Mau</option>
                                            <option value="65">Cần Thơ</option>
                                            <option value="81">Gia Lai</option>
                                            <option value="23">Hà Giang</option>
                                            <option value="90">Hà Nam</option>
                                            <option value="38">Hà Tĩnh</option>
                                            <option value="28">Hòa Bình</option>
                                            <option value="89">Hưng Yên</option>
                                            <option value="34">Hải Dương</option>
                                            <option value="16">Hải Phòng</option>
                                            <option value="95">Hậu Giang</option>
                                            <option value="79">Khánh Hòa</option>
                                            <option value="68">Kiên Giang</option>
                                            <option value="82">KonTum</option>
                                            <option value="25">Lai Châu</option>
                                            <option value="62">Long An</option>
                                            <option value="24">Lào Cai</option>
                                            <option value="49">Lâm Đồng</option>
                                            <option value="12">Lạng Sơn</option>
                                            <option value="18">Nam Định</option>
                                            <option value="37">Nghệ An</option>
                                            <option value="35">Ninh Bình</option>
                                            <option value="85">Ninh Thuận</option>
                                            <option value="19">Phú Thọ</option>
                                            <option value="78">Phú Yên</option>
                                            <option value="73">Quảng Bình</option>
                                            <option value="92">Quảng Nam</option>
                                            <option value="76">Quảng Ngãi</option>
                                            <option value="14">Quảng Ninh</option>
                                            <option value="74">Quảng Trị</option>
                                            <option value="83">Sóc Trăng</option>
                                            <option value="26">Sơn La</option>
                                            <option value="36">Thanh Hóa</option>
                                            <option value="17">Thái Bình</option>
                                            <option value="20">Thái Nguyên</option>
                                            <option value="75">Thừa Thiên Huế</option>
                                            <option value="63">Tiền Giang</option>
                                            <option value="84">Trà Vinh</option>
                                            <option value="22">Tuyên Quang</option>
                                            <option value="70">Tây Ninh</option>
                                            <option value="64">Vĩnh Long</option>
                                            <option value="88">Vĩnh Phúc</option>
                                            <option value="21">Yên Bái</option>
                                            <option value="27">Điện Biên</option>
                                            <option value="47">Đăk Lăk</option>
                                            <option value="48">Đắk Nông</option>
                                            <option value="60">Đồng Nai</option>
                                            <option value="66">Đồng Tháp</option>
                                        </select>
                                        <span id="err_recieve_city_id" generated="true" class="error" style="display: none;">Vui lòng chọn tỉnh thành</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select name="recieve_district_id" class="selectpicker form-control" id="recieve_district_id" required data-live-search="true" data-size="10">
                                            <option value="0">Chọn quận huyện</option>
                                        </select>
                                        <span id="err_recieve_district_id" generated="true" class="error" style="display: none;">Vui lòng chọn quận</span>
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
                                        <!-- <br>tử -->
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
                                        <!-- <br>TPCN -->
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
                            <input class="btn font-IntelBold font-size-18" type="button" name="hoantat" value="Tra giá" onClick="placeOrder()" id="complete" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection