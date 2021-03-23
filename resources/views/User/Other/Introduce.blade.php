@extends('User.layoutMain')

@section('main-content')
    <div class="masthead-banner" style="background: url('../User/images/1.jpg') center top no-repeat;"></div>
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="main-box page-box text-justify">
                <div class="head-quote text-white">
                    <span class="ntl-Box-search-1"></span>
                </div>
                <h1 class="text-white">Giới thiệu chung</h1>
                <p class="text-white">Công ty Cổ phần Đầu tư Thương mại Phát triển FAST SHIPPING <strong>(Fast shipping)</strong> là doanh nghiệp hàng đầu trong lĩnh vực Chuyển phát nhanh tại Việt Nam.&nbsp;</p>
                <p class="text-white">
                    Thành lập vào ngày 2/6/2014 tại Tp. Hồ Chí Minh, Fast shipping cung cấp các giải pháp vận chuyển, bao gồm:
                    <em>&nbsp;Chuyển phát hỏa tốc, Chuyển phát nhanh, Chuyển phát tiết kiệm (MES), Chuyển phát đường bộ, Chuyển phát thu hộ (COD), Chuyển phát nguyên chuyến &amp; Dịch vụ cho thuê kho bãi và Fulfillment.</em>
                </p>
                <p class="text-white">
                    Hiện nay, Fast shipping đã bao phủ tất cả 63 tỉnh thành và không ngừng tăng trưởng qua từng năm trong việc mở rộng mạng lưới chi nhánh, bưu cục, điểm nhận trả hàng và phát triển quy mô kho bãi trên khắp toàn
                    quốc.
                </p>
                <p class="text-white">
                    Đặc biệt là các Trung tâm khai thác lớn tại 2 điểm cầu của đất nước, bao gồm Trung tâm chia chọn Sóng Thần miền Nam với diện tích hơn 30,000 m2 và Trung tâm chia chọn Ngọc Hồi, Văn Giang miền Bắc với tổng diện
                    tích hơn 35,000 m2.
                </p>
                <p class="text-white">Fast shipping là đối tác tin cậy và sự lựa chọn hàng đầu của các tổng công ty, tập đoàn lớn như Thế Giới Di Động, FPT Shop, Viettel, Samsung, Amway, Petro Việt Nam,&#8230;</p>
                <p class="text-white">Xuyên suốt quá trình phát triển, Fast shipping luôn đồng hành cùng khách hàng với 3 giá trị cốt lõi: Trách Nhiệm, Trung Thực và Chiến Đấu &#8211; với mong muốn chạm tới cảm xúc của&nbsp; từng khách hàng.</p>
            </div>
            <div class="page-box mt-4 mt-md-5 text-justify">
                <p><strong>SỨ MỆNH </strong>&#8220;Hơn cả một dịch vụ&#8221;</p>
                <p style="text-align: left;">
                    <span style="font-weight: 400;">
                        Fast shipping mong muốn không chỉ mang đến các dịch vụ chất lượng theo tiêu chuẩn quốc tế với sự trải nghiệm Thân thiện và Nhiệt tình, mà còn cùng các khách hàng xây dựng một cuộc sống tốt đẹp hơn cho
                        người Việt.
                    </span>
                </p>
                <p><strong>TẦM NHÌN FAST SHIPPING 2022</strong></p>
                <ul>
                    <li>Trở thành Công ty số 1 về chất lượng dịch vụ và chỉ số niềm tin cho từng đơn hàng</li>
                    <li>Là nơi làm việc hấp dẫn, cùng đóng góp công sức – cùng chia sẻ thành công</li>
                    <li>Đứng Top 3 về quy mô và mạng lưới chuyển phát tại Việt Nam</li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
        <h2 class="section-heading">GIÁ TRỊ CỐT LÕI</h2>
    </div>
    <div class="d-flex align-content-center flex-wrap bottom-bg">
        <div class="container">
            <div class="d-flex justify-content-around justify-content-md-between align-content-center flex-wrap fw core-box-wrapper">
                <div class="d-flex flex-column align-content-center core-box">
                    <a href="trach-nhiem.html" class="cv-image" style="background: url('../User/images/trachnhiem-chiendau-trungthuc.jpg') no-repeat; background-size: cover; color: red">Trách nhiệm</a>
                    <a href="trach-nhiem.html" class="cv-slogan">
                        Tôi luôn tuân thủ & áp dụng đúng quy trình.<br />
                        Tôi là gốc rễ của mọi vấn đề.
                    </a>
                </div>
                <div class="d-flex flex-column align-content-center core-box">
                    <a href="trung-thuc.html" class="cv-image" style="background: url('../User/images/trachnhiem-chiendau-trungthuc.jpg') no-repeat; background-size: cover; color: red">Trung thực</a>
                    <a href="trung-thuc.html" class="cv-slogan">
                        Tôi trân trọng lời nói của tôi.<br />
                        Tôi nói bằng lượng hóa, không kể Câu chuyện.
                    </a>
                </div>
                <div class="d-flex flex-column align-content-center core-box">
                    <a href="chien-dau.html" class="cv-image" style="background: url('../User/images/trachnhiem-chiendau-trungthuc.jpg') no-repeat; background-size: cover; color: red">Chiến đấu</a>
                    <a href="chien-dau.html" class="cv-slogan">
                        Tôi không bao giờ nói “không”.<br />
                        Tôi quyết không bao giờ bỏ cuộc, luôn có kết quả vào thời điểm cụ thể.
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center bg-yellow section-target">
        <div class="container text-center py-5">
            <h3>Mục tiêu</h3>
            <p>FAST SHIPPING là nơi ai cũng muốn về</p>
        </div>
    </div>
    <div class="section-history">
        <div class="container">
            <h3 class="text-center history-heading">Quá trình hình thành & phát triển</h3>
            <div class="d-flex justify-content-around justify-content-md-between align-content-center flex-wrap fw text-center">
                <div class="d-flex flex-column align-content-center core-box mb-md-2 mx-auto" style="width: 100%;">
                    <img class="w-100" src="../User/images/hinh-thanh-phat-trien.png" alt="" />
                    <h4></h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    
@endsection