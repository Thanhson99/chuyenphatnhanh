@extends('User.layoutMain')

@section('main-content')

    <div class="container clearfix mt-4">
        <div class="news-menu">
            <a href="{{ route('user.news') }}" class="active">Mới nhất</a>
            <a href="#">Tin chuyên ngành</a>
            <a href="#">Tin hoạt động</a>
            <a href="#">Tin khuyến mãi</a>
        </div>
        <div class="main-content">
            <article id="post-17441" class="post-17441 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-tin-khuyen-mai">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img
                                width="920"
                                height="500"
                                src="{{ asset('User/images/banner.png') }}"
                                class="img-fluid wp-post-image"
                                alt="Ngày Quốc tế Phụ nữ 8-3: Fast shipping THAY BẠN GỬI TRAO YÊU THƯƠNG"
                            />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="#" class="post-title"> <h2>Ngày Quốc tế Phụ nữ 8-3: Fast shipping THAY BẠN GỬI TRAO YÊU THƯƠNG</h2> </a>
                        <div class="post-desc">
                            <p>
                                Mừng ngày 8/3, khách hàng nữ đến sử dụng dịch vụ của Fast shipping tại các Bưu cục thuộc Chi Nhánh Hà Nội &#038; Hồ Chí Minh sẽ được tặng Hoa và Quà tặng. Ở các Chi nhánh khác sẽ được tặng hoa và
                                giảm giá 20%.
                            </p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:05/03/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a class="btn-copy" data-toggle="tooltip" data-placement="top" title="Sao chép liên kết" data-url="#">
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17164" class="post-17164 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-tin-chuyen-nganh">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img
                                width="920"
                                height="500"
                                src="{{ asset('User/images/banner.png') }}"
                                class="img-fluid wp-post-image"
                                alt="Danh sách các địa bàn thực hiện phong tỏa cách ly do dịch COVID-19 (cập nhật từ 28/1/2021 đến nay)"
                            />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="#" class="post-title">
                            <h2>Danh sách các địa bàn thực hiện phong tỏa cách ly do dịch COVID-19 (cập nhật từ 28/1/2021 đến nay)</h2>
                        </a>
                        <div class="post-desc">
                            <p>Fast shipping xin thông báo đến quý khách hàng về việc hạn chế nhận và gửi hàng đến một số địa điểm đã bị phong tỏa cách ly do dịch COVID-19.</p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:28/01/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a
                                    class="btn-copy"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Sao chép liên kết"
                                    data-url="#"
                                >
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17408" class="post-17408 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-hoat-dong">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img
                                width="637"
                                height="383"
                                src="{{ asset('User/images/banner.png') }}"
                                class="img-fluid wp-post-image"
                                alt="Fast shipping hỗ trợ 100% chi phí tiêm vắc xin ngừa Covid-19 cho cán bộ nhân viên cả nước"
                                sizes="(max-width: 637px) 100vw, 637px"
                            />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="tin-hoat-dong/nhat-tin-logistics-ho-tro-100-chi-phi-tiem-vac-xin-ngua-covid-19-cho-can-bo-nhan-vien-ca-nuoc.html" class="post-title">
                            <h2>Fast shipping hỗ trợ 100% chi phí tiêm vắc xin ngừa Covid-19 cho cán bộ nhân viên cả nước</h2>
                        </a>
                        <div class="post-desc">
                            <p>Doanh nghiệp sẽ làm việc với các cơ quan chức năng có thẩm quyền để đăng ký mua vắc xin Covid-19 sớm nhất có thể cho hơn 3000 cán bộ nhân viên đang công tác tại Fast shipping khắp toàn quốc.</p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:04/03/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a
                                    class="btn-copy"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Sao chép liên kết"
                                    data-url="#"
                                >
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17393" class="post-17393 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-hoat-dong">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img width="920" height="500" src="{{ asset('User/images/banner.png') }}" class="img-fluid wp-post-image" alt="Danh sách các Bưu cục Nhất Tín khai trương trong tháng 1 và tháng 2/2021" />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="#" class="post-title"> <h2>Danh sách các Bưu cục Nhất Tín khai trương trong tháng 1 và tháng 2/2021</h2> </a>
                        <div class="post-desc">
                            <p>Trong tháng 1 và tháng 2/2021, Fast shipping đã mở mới thêm 6 Bưu cục và Điểm nhận trả hàng tại một số tỉnh thành trên toàn quốc.</p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:03/03/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="#"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a
                                    class="btn-copy"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Sao chép liên kết"
                                    data-url="#"
                                >
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17398" class="post-17398 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-chuyen-nganh">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img width="920" height="500" src="{{ asset('User/images/banner.png') }}" class="img-fluid wp-post-image" alt="[Video] Fast shipping: Hơn cả một dịch vụ" />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="#" class="post-title"> <h2>[Video] Fast shipping: Hơn cả một dịch vụ</h2> </a>
                        <div class="post-desc">
                            <p>
                                Fast shipping là doanh nghiệp hàng đầu trong lĩnh vực Chuyển phát nhanh tại Việt Nam và không ngừng tăng trưởng qua từng năm trong việc mở rộng mạng lưới chi nhánh, bưu cục, điểm nhận trả hàng,
                                phát triển quy mô kho bãi hàng nghìn m2 trên khắp 63 tỉnh thành cả nước.
                            </p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:01/03/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a class="btn-copy" data-toggle="tooltip" data-placement="top" title="Sao chép liên kết" data-url="#">
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17337" class="post-17337 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-hoat-dong">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img
                                width="631"
                                height="396"
                                src="{{ asset('User/images/banner.png') }}"
                                class="img-fluid wp-post-image"
                                alt="FS không chỉ là Fast shipping"
                                sizes="(max-width: 631px) 100vw, 631px"
                            />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="tin-hoat-dong/ntl-khong-chi-la-nhat-tin-logistics.html" class="post-title"> <h2>NTL không chỉ là Fast shipping</h2> </a>
                        <div class="post-desc">
                            <p>Fast shipping được viết tắt là NTL, nhưng NTL còn là những từ khóa đại diện cho những đặc &#8230;</p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:27/02/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a class="btn-copy" data-toggle="tooltip" data-placement="top" title="Sao chép liên kết" data-url="#">
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-17344" class="post-17344 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-chuyen-nganh">
                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                    <div class="post-thumbnail mr-md-3">
                        <a href="#" class="post-title">
                            <img width="900" height="500" src="{{ asset('User/images/banner.png') }}" class="img-fluid wp-post-image" alt="Việt Nam lọt Top 10 Chỉ số Logistics các thị trường mới nổi" />
                        </a>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <a href="#" class="post-title"> <h2>Việt Nam lọt Top 10 Chỉ số Logistics các thị trường mới nổi</h2> </a>
                        <div class="post-desc">
                            <p>
                                Báo cáo Chỉ số Logistics thị trường mới nổi 2021 do nhà cung cấp dịch vụ kho vận hàng đầu thế giới Agility vừa công bố cho thấy, Việt Nam đã tăng 3 bậc xếp hạng so với năm 2020, đứng ở vị trí thứ 8
                                trong Top 10 quốc gia đứng đầu.
                            </p>
                        </div>
                        <div class="post-meta d-flex justify-content-between align-items-center">
                            <div class="post-date">
                                <em>Ngày đăng:25/02/2021</em>
                            </div>
                            <div class="social-share-icons">
                                <a
                                    href="https://www.facebook.com/son.vi.99/"
                                    target="_blank"
                                >
                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                </a>
                                <a
                                    class="btn-copy"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Sao chép liên kết"
                                    data-url="#"
                                >
                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <nav class="navigation pagination" role="navigation" aria-label=" ">
                <h2 class="screen-reader-text"></h2>
                <div class="nav-links">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">4</a>
                    <span class="page-numbers dots">&hellip;</span>
                    <a class="page-numbers" href="#">121</a>
                </div>
            </nav>
        </div>
        <aside id="sidebar" class="mb-4">
            <div class="search-form">
                <form class="search-form" role="search" method="get" action="{{ route('user.news') }}">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Nhập nội dung tìm kiếm" aria-label="Nhập nội dung tìm kiếm" aria-describedby="search form" name="s" value="" required />
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit"><span class="ntl-Search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="most-viewed">
                <div class="block-title bottom-line"><span class="ntl-Shipping-Car"></span> Tin được xem nhiều</div>
                <div class="news-list">
                    <article class="post-11762 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-hoat-dong tag-khuyen-mai">
                        <div class="post-container">
                            <a href="#" class="post-title">
                                <img
                                    width="920"
                                    height="500"
                                    src="{{ asset('User/images/banner.png') }}"
                                    class="img-fluid wp-post-image"
                                    alt="Chương trình Khuyến mãi &#8220;NHẬN QUÀ CỰC BỐC, TĂNG TỐC GỬI HÀNG&#8221;"
                                />
                                <h2>Chương trình Khuyến mãi &#8220;NHẬN QUÀ CỰC BỐC, TĂNG TỐC GỬI HÀNG&#8221;</h2>
                            </a>
                            <div class="post-meta">
                                Ngày đăng:11/05/2020
                            </div>
                        </div>
                    </article>
                    <article class="post-14290 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-khuyen-mai">
                        <div class="post-container">
                            <a href="#" class="post-title">
                                <img
                                    width="920"
                                    height="500"
                                    src="{{ asset('User/images/banner.png') }}"
                                    class="img-fluid wp-post-image"
                                    alt="Chương trình Khuyến mãi ĐẶT BILL ONLINE, RINH NGAY QUÀ KHỦNG (đến 31/10)"
                                />
                                <h2>Chương trình Khuyến mãi ĐẶT BILL ONLINE, RINH NGAY QUÀ KHỦNG (đến 31/10)</h2>
                            </a>
                            <div class="post-meta">
                                Ngày đăng:29/07/2020
                            </div>
                        </div>
                    </article>
                    <article class="post-1270 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-chuyen-nganh tag-dich-vu-chuyen-phat-nhanh tag-thoi-gian-chuyen-phat-nhanh">
                        <div class="post-container">
                            <a href="#" class="post-title">
                                <img
                                    width="920"
                                    height="500"
                                    src="{{ asset('User/images/banner.png') }}"
                                    class="img-fluid wp-post-image"
                                    alt="Thời gian chuyển phát thường &#038; chuyển phát nhanh  bưu điện mất bao lâu?"
                                />
                                <h2>Thời gian chuyển phát thường &#038; chuyển phát nhanh bưu điện mất bao lâu?</h2>
                            </a>
                            <div class="post-meta">
                                Ngày đăng:30/11/2017
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </aside>
    </div>
@endsection