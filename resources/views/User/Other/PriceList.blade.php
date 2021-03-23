@extends('User.layoutMain')

@section('main-content')
<div class="policy-masthead-banner d-flex justify-content-center align-items-center" style="background: url('../User/images/bg-price.jpg') center top no-repeat; background-size: cover;">
    <h1 class="page-heading" style="color: #000;">Bảng giá</h1>
</div>
<div class="container pricing">
    <div class="popular-area">
        <h2 class="my-4">Khu vực phổ biến</h2>
        <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hồ Chí Minh</a>
        <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hà Nội</a>
        <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Đà Nẵng</a>
        <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá quốc tế</a>
    </div>
    <div class="other-area">
        <h2 class="my-4">Khu vực khác</h2>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-a-tab" data-toggle="pill" href="#pills-a" role="tab" aria-controls="pills-a" aria-selected="true">a</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-b-tab" data-toggle="pill" href="#pills-b" role="tab" aria-controls="pills-b" aria-selected="false">b</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-c-tab" data-toggle="pill" href="#pills-c" role="tab" aria-controls="pills-c" aria-selected="false">c</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-d-tab" data-toggle="pill" href="#pills-d" role="tab" aria-controls="pills-d" aria-selected="false">d</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-g-tab" data-toggle="pill" href="#pills-g" role="tab" aria-controls="pills-g" aria-selected="false">g</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-h-tab" data-toggle="pill" href="#pills-h" role="tab" aria-controls="pills-h" aria-selected="false">h</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-k-tab" data-toggle="pill" href="#pills-k" role="tab" aria-controls="pills-k" aria-selected="false">k</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-l-tab" data-toggle="pill" href="#pills-l" role="tab" aria-controls="pills-l" aria-selected="false">l</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-n-tab" data-toggle="pill" href="#pills-n" role="tab" aria-controls="pills-n" aria-selected="false">n</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-p-tab" data-toggle="pill" href="#pills-p" role="tab" aria-controls="pills-p" aria-selected="false">p</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-q-tab" data-toggle="pill" href="#pills-q" role="tab" aria-controls="pills-q" aria-selected="false">q</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-s-tab" data-toggle="pill" href="#pills-s" role="tab" aria-controls="pills-s" aria-selected="false">s</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-t-tab" data-toggle="pill" href="#pills-t" role="tab" aria-controls="pills-t" aria-selected="false">t</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-v-tab" data-toggle="pill" href="#pills-v" role="tab" aria-controls="pills-v" aria-selected="false">v</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-y-tab" data-toggle="pill" href="#pills-y" role="tab" aria-controls="pills-y" aria-selected="false">y</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-a" role="tabpanel" aria-labelledby="pills-a-tab">
                <a href="{{ asset('User/images/pdf/67_Bang-gia-An-Giang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá An Giang</a>
            </div>
            <div class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bình Dương</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bắc Cạn</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bắc Giang</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bạc Liêu</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bắc Ninh</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bến Tre</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bình Định</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bình Phước</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Bình Thuận</a>
            </div>
            <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Cần thơ</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Cà Mau</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Cao Bằng</a>
            </div>
            <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-d-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Đắk Lắk</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Đắk Nông</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Điện Biên</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Đồng Nai</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Đồng Tháp</a>
            </div>
            <div class="tab-pane fade" id="pills-g" role="tabpanel" aria-labelledby="pills-g-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Gia Lai</a>
            </div>
            <div class="tab-pane fade" id="pills-h" role="tabpanel" aria-labelledby="pills-h-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hà Giang</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hà Nam</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hà Tĩnh</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hải Dương</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hải Phòng</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hậu Giang</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hòa Bình</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Huế</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Hưng Yên</a>
            </div>
            <div class="tab-pane fade" id="pills-k" role="tabpanel" aria-labelledby="pills-k-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Khánh Hòa</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Kiên Giang</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Kon Tum</a>
            </div>
            <div class="tab-pane fade" id="pills-l" role="tabpanel" aria-labelledby="pills-l-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Lai Châu</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Lâm Đồng</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Lạng Sơn</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Lào Cai</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Long An</a>
            </div>
            <div class="tab-pane fade" id="pills-n" role="tabpanel" aria-labelledby="pills-n-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Nam Định</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Nghệ An</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Ninh Bình</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Ninh Thuận</a>
            </div>
            <div class="tab-pane fade" id="pills-p" role="tabpanel" aria-labelledby="pills-p-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Phú Thọ</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Phú Yên</a>
            </div>
            <div class="tab-pane fade" id="pills-q" role="tabpanel" aria-labelledby="pills-q-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Quảng Bình</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Quảng Nam</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Quảng Ngãi</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Quảng Ninh</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Quảng Trị</a>
            </div>
            <div class="tab-pane fade" id="pills-s" role="tabpanel" aria-labelledby="pills-s-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Sóc Trăng</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Sơn La</a>
            </div>
            <div class="tab-pane fade" id="pills-t" role="tabpanel" aria-labelledby="pills-t-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Tây Ninh</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Thái Bình</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Thái Nguyên</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Thanh Hóa</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Tiền Giang</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Trà Vinh</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Tuyên Quang</a>
            </div>
            <div class="tab-pane fade" id="pills-v" role="tabpanel" aria-labelledby="pills-v-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Vĩnh Long</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Vĩnh Phúc</a>
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Vũng Tàu</a>
            </div>
            <div class="tab-pane fade" id="pills-y" role="tabpanel" aria-labelledby="pills-y-tab">
                <a href="{{ asset('User/images/43_Bang-gia-Da-Nang-01.10.2020-Full.pdf') }}" target="_blank">Bảng giá Yên Bái</a>
            </div>
        </div>
    </div>
</div>
@endsection