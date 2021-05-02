        <section class="w-100 wp-hotline-footer text-center text-white pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-8 col-md-8 col-12 offset-md-2"> -->
                    <div class="mx-auto">
                        <a class="hotline SanFranciscoDisplay-Bold" href="tel:0337 517 047">HOTLINE: 0337 517 047</a>
                        <p class="text-nn">Liên hệ chúng tôi để được tư vấn giải pháp vận chuyển cho riêng bạn và nhận ngay báo giá dịch vụ tốt nhất!</p>
                        <p style="color:rgb(253, 31, 31);; font-size: 20px;">Lấy hàng tận nơi. Giao hàng tận tay. Phục vụ tận tình</p>
                        <div class="col-lg-12 col-12">
                            <div class="row d-flex justify-content-center align-items-center font-size-16 pt-2 mt-4 mb-3 content-ft">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4 mb-lg-0">
                                    <a href="{{ route('user.listPostOffice') }}" class="d-inline-block p-2 rounded bg-white d-flex justify-content-center align-items-center">
                                        <span class="icon ntl-Location-1 mr-3"><span class="path1"></span><span class="path22"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span> Tìm bưu cục
                                        gần bạn
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('user.billOfLading') }}" class="d-inline-block p-2 rounded d-flex justify-content-center align-items-center text-white"><span class="icon ntl-Box-search mr-3"></span> Tra cứu giá cước</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container menu-bot">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div id="collapse1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <div class="contact-footer font-size-14">
                                    <div class="mb-3"><a href="{{ route('home') }}"><img src="{{ asset('/User/images/icons/logo2.png') }}" alt="" height="50"></a></div>
                                    <p><b>Trụ sở chính: </b> 
                                        119 Phạm Như xương, Phường Hòa Khánh Nam, Quận Liên Chiểu, Đà Nẵng<br>
                                        <b>Giờ làm việc:</b> 7:00 - 20:00<br><b>Email:</b>
                                        <a href="mailto:fastshipping101099@gmail.com">fastshipping101099@gmail.com</a><br><b>Hotline:</b>
                                        <a href="tel:0337 517 047">0337 517 047</a></p>
                                    <div>
                                    <a href="http://online.gov.vn/Home/WebDetails/46828" target="_blank">
                                        <img src="{{ asset('/User/images/icons/logo-bo-cong-thuong.jpg') }}" alt="Bo Cong Thuong" style="width: 185px;">
                                    </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed text-dark font-IntelBold font-size-14 d-block position-relative pb-3 mt-3 mb-2">
                                Công ty
                            </a>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                <ul class="ul-footer">
                                    <li><a href="{{ route('user.introduce') }}" title="Về Fastshipping">Về Fastshipping</a></li>
                                    <li><a href="{{ route('user.onus') }}" title="Nhân sự">Nhân sự</a></li>
                                    <li><a href="{{ route('user.listPostOffice') }}" title="Mạng lưới bưu cục">Mạng lưới bưu cục</a></li>
                                    <li><a href="{{ route('user.news') }}" title="Tuyển dụng">Tuyển dụng</a></li>
                                    <li><a href="{{ route('user.news') }}" title="Tin tức">Tin tức</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed text-dark font-IntelBold font-size-14 d-block position-relative pb-3 mt-3 mb-2">
                                Hỗ trợ khách hàng
                            </a>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpane3" aria-labelledby="heading3">
                            <div class="panel-body">
                                <ul class="ul-footer">
                                    <li><a href="{{ route('user.contact') }}" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Điều khoản">Điều khoản</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Liên hệ">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed text-dark font-IntelBold font-size-14 d-block position-relative pb-3 mt-3 mb-2">
                                Chính sách
                            </a>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpane4" aria-labelledby="heading4">
                            <div class="panel-body">
                                <ul class="ul-footer">
                                    <li><a href="{{ route('user.contact') }}" title="Khiếu nại & đền bù">Khiếu nại & đền bù</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Quy định gửi & nhận hàng">Quy định gửi & nhận hàng</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Trách nhiệm các bên">Trách nhiệm các bên</a></li>
                                    <li><a href="{{ route('user.contact') }}" title="Hàng hóa cấm gửi">Hàng hóa cấm gửi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mt-3">
                        <div id="collapse5" class="panel-collapse collapse show">
                            <div class="panel-body">
                                <div class="sharefooter text-left mb-2">
                                    <a href="#" target="_blank" title="Zalo" rel="nofollow"><span class="ntl-Zalo"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span></a>
                                    <a href="https://www.facebook.com/son.vi.99" target="_blank" title="Facebook" rel="nofollow"><span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span></a>
                                    <a href="#" target="_blank" title="Youtube" rel="nofollow"><span class="ntl-Youtube"><span class="path1"></span><span class="path2"></span></span></a>
                                </div>
                                <form class="position-relative register-email" id="register_email">
                                    <input type="email" name="email_register" id="email_register" value="" placeholder="Nhập email để nhận thông tin" class="form-control" autocomplete="off" required>
                                    <button type="submit" class="position-absolute bg-transparent border-0"><span class="ntl-Send"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 text-left">
                    <p class="mt-3 text-center" style="font-size: 14px;">
                        Copyright Ⓒ 2021 by CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI PHÁT TRIỂN FAST SHIPPING
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <div id="NavDrawer" class="drawer drawer--left">
        <div class="drawer__header">
            <div class="drawer__title h3">
                <a class="site-header__logo-link" href="#" title="Fast Shipping">
                    <img class="img-fluid w-50 mt-2" src="{{ asset('User/images/icons/logo-FS.png') }}" alt="Fast Shipping" />
                </a>
            </div>
            <div class="drawer__close js-drawer-close">
                <button type="button" class="icon-fallback-text border-0 d-inline-block bg-transparent">
                    <span class="ntl-Close"></span>
                    <span class="fallback-text"></span>
                </button>
            </div>
        </div>
        <ul class="mobile-nav">
            <li class="mobile-nav__item" aria-haspopup="true">
                <div class="mobile-nav__has-sublist">
                    <a href="#" class="mobile-nav__link">Giao nhận hàng hóa</a>
                    <div class="mobile-nav__toggle">
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                            <span class="ntl-White-Arrow-1"></span>
                        </button>
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                            <span class="ntl-White-Arrow-3"></span>
                            <span class="fallback-text"></span>
                        </button>
                    </div>
                </div>
                <ul class="mobile-nav__sublist">
                    <li class="mobile-nav__item"><a href="{{ route('user.billOfLading') }}" title="Tra cứu vận đơn" class="mobile-nav__link">Tra cứu vận đơn</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.checkCharges') }}" title="Tra cước và thời gian vận chuyển" class="mobile-nav__link">Tra cước và thời gian vận chuyển</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.listPostOffice') }}" title="Danh sách bưu cục" class="mobile-nav__link">Danh sách bưu cục</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.contact') }}" title="Chính sách" class="mobile-nav__link">Chính sách</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.priceList') }}" title="Bảng giá" class="mobile-nav__link">Bảng giá</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item" aria-haspopup="true">
                <div class="mobile-nav__has-sublist">
                    <a href="#" class="mobile-nav__link">Dịch vụ</a>
                    <div class="mobile-nav__toggle">
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                            <span class="ntl-White-Arrow-1"></span>
                        </button>
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                            <span class="ntl-White-Arrow-3"></span>
                            <span class="fallback-text"></span>
                        </button>
                    </div>
                </div>
                <ul class="mobile-nav__sublist">
                    <li class="mobile-nav__item"><a href="{{ route('user.expressDelivery') }}" title="Chuyển phát hỏa tốc" class="mobile-nav__link">Chuyển phát hỏa tốc</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.fastshipping') }}" title="Chuyển phát nhanh" class="mobile-nav__link">Chuyển phát nhanh</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.thriftyDelivery') }}" title="Chuyển phát tiết kiệm" class="mobile-nav__link">Chuyển phát tiết kiệm</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.roadDelivery') }}" title="Chuyển phát đường bộ" class="mobile-nav__link">Chuyển phát đường bộ</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.CODDelivery') }}" title="Chuyển phát thu hộ (COD)" class="mobile-nav__link">Chuyển phát thu hộ (COD)</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.carRental') }}" title="Thuê xe nguyên chuyến" class="mobile-nav__link">Thuê xe nguyên chuyến</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item" aria-haspopup="true">
                <div class="mobile-nav__has-sublist">
                    <a href="#" class="mobile-nav__link">Tin tức</a>
                    <div class="mobile-nav__toggle">
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                            <span class="ntl-White-Arrow-1"></span>
                        </button>
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                            <span class="ntl-White-Arrow-3"></span>
                            <span class="fallback-text"></span>
                        </button>
                    </div>
                </div>
                <ul class="mobile-nav__sublist">
                    <li class="mobile-nav__item"><a href="{{ route('user.news') }}" title="Tin chuyên ngành" class="mobile-nav__link">Tin chuyên ngành</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.news') }}" title="Tin hoạt động" class="mobile-nav__link">Tin hoạt động</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.news') }}" title="Tin tuyển dụng" class="mobile-nav__link">Tin tuyển dụng</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item" aria-haspopup="true">
                <div class="mobile-nav__has-sublist">
                    <a href="#" class="mobile-nav__link">Giới thiệu</a>
                    <div class="mobile-nav__toggle">
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                            <span class="ntl-White-Arrow-1"></span>
                        </button>
                        <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                            <span class="ntl-White-Arrow-3"></span>
                            <span class="fallback-text"></span>
                        </button>
                    </div>
                </div>
                <ul class="mobile-nav__sublist">
                    <li class="mobile-nav__item"><a href="{{ route('user.introduce') }}" title="Về Fast Shipping" class="mobile-nav__link">Về Fast Shipping</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.onus') }}" title="Nhân sự FS" class="mobile-nav__link">Nhân sự FS</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('user.onus') }}" title="Giá trị cốt lõi" class="mobile-nav__link">Giá trị cốt lõi</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item"><a class="mobile-nav__link mobile-nav__border" href="{{ route('user.contact') }}" title="Liên hệ">Liên hệ</a></li>
        </ul>
    </div>
</body>