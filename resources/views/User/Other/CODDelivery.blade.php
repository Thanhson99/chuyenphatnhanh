@extends('User.layoutMain')

@section('main-content')
<div class="masthead-banner h-530" style="background: url('../User/images/1.jpg') center top no-repeat;"></div>
<div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-center mb-5">
        <div class="main-box page-box normal-service text-justify">
            <div class="head-quote">
                <span class="ntl-Box-search-1 text-white"></span>
            </div>
            <p class="big-text c-gray text-white">Dịch vụ</p>
            <h1 class="text-white">Chuyển phát thu hộ (COD)</h1>
            <p class="text-white">
                Dịch vụ Chuyển phát Thu Hộ là dịch vụ vận chuyển hàng hóa kết hợp với dịch vụ thu hộ tiền (COD), vừa đảm bảo các sản phẩm được vận chuyển nhanh chóng và an toàn đến người nhận, vừa đáp ứng nhu cầu cần thu hộ tiền
                của người bán hàng.
            </p>
            <p class="has-medium-font-size text-white">
                <strong><em>Tại sao chọn </em></strong><strong><em>Dịch vụ Chuyển phát Thu Hộ (COD)</em></strong>
            </p>
            <p class="text-white"><strong>1.</strong> Phù hợp với những khách hàng kinh doanh thương mại điện tử (E-commerce).&nbsp;</p>
            <p class="text-white"><strong>2.</strong> Miễn phí cước thu hộ lên đến 5 triệu đồng.&nbsp;</p>
            <p class="text-white"><strong>3.</strong> Chuyển trả tiền thu hộ nhanh chóng chỉ trong 24h.<br /></p>
        </div>
    </div>
    <p class="text-white text-center fz-2">Dịch vụ của Fast Shipping</p>
    <h3 class="mw-700 text-center nt-services">Chúng tôi cung cấp đầy đủ các dịch vụ vận chuyển hàng hóa</h3>
    <div class="d-flex flex-column flex-md-row align-content-center justify-content-between">
        <a href="{{ route('user.fastshipping') }}" class="service-box text-center p-4 mb-4">
            <img src="{{ asset('/User/images/icons/CP-nhanh.png') }}" alt="" width="100" class="mb-3" />
            <p class="font-weight-bold">Chuyển phát nhanh</p>
            <p>Dịch vụ vận chuyển phổ biến, thường được sử dụng để chuyển phát các bưu phẩm, bưu kiện một cách nhanh chóng khắp toàn quốc thông qua đường hàng không và đường bộ với chi phí tối ưu nhất, lấy hàng tận nơi người
                gửi và phát tận tay người nhận (Door to Door).</p>
        </a>
        <a href="{{ route('user.thriftyDelivery') }}" class="service-box text-center p-4 mb-4">
            <img src="{{ asset('/User/images/icons/icon-chuyen-phat-tiet-kiem.png') }}" alt="" width="100" class="mb-3">
            <p class="font-weight-bold">Chuyển phát tiết kiệm</p>
            <p>Dịch vụ vận chuyển thư từ, hàng hóa bằng đường bộ và đường hàng không trải rộng khắp 63 tỉnh thành, đảm bảo các sản phẩm đến tay người nhận an toàn với chi phí tiết kiệm.</p>
        </a>
        <a href="{{ route('user.roadDelivery') }}" class="service-box text-center p-4 mb-4">
            <img src="{{ asset('/User/images/icons/icon-chuyen-phat-duong-bo.png') }}" alt="" width="100" class="mb-3">
            <p class="font-weight-bold">Chuyển phát đường bộ</p>
            <p>Dịch vụ áp dụng vận chuyển cho cả hàng lẻ và hàng nguyên khối với phương tiện vận chuyển đa dạng tải trọng, từ xe tải 500kg đến xe container 45 feet. Đây là dịch vụ chuyển phát có chi phí gửi hàng rẻ nhất so với các loại hình chuyển phát khác.</p>
        </a>
        <a href="{{ route('user.carRental') }}" class="service-box text-center p-4 mb-4">
            <img src="{{ asset('/User/images/icons/icon-thue-xe-nguyen-chuyen.png') }}" alt="" width="100" class="mb-3">
            <p class="font-weight-bold">Thuê xe nguyên chuyến</p>
            <p>Dịch vụ cho thuê xe tải nguyên chiếc, cho phép người thuê sử dụng 100% trọng tải của phương tiện với nhu cầu vận chuyển hàng hóa có khối lượng và số lượng lớn và riêng biệt.</p>
        </a>
    </div>
</div>

@endsection
