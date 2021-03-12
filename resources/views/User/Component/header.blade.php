<body class="template-index" style="background-color: #fff !important;">
    <div id="PageContainer" class="w-100 float-left position-relative is-moved-by-drawer">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBZF5CF" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="w-100 top-header font-size-14 d-none d-lg-block">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 col-sm-8 col-12">
                        <span class="pr-1" style="color: #222;">Trụ sở chính:119 Phạm Như xương, Phường Hòa Khánh Nam, Quận Liên Chiểu, Đà Nẵng</span>
                        <span class="border-left pl-2">Giờ làm việc: <span class="SanFranciscoDisplay-Bold">7:00 - 20:00</span></span>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 text-right">
                        <a href="{{ route('home') }}" title="Giới thiệu về Fast Shipping">Giới thiệu về Fast Shipping</a>
                        <a class="border-left pl-2 ml-1" href="{{ route('user.login') }}" title="Đăng nhập">Đăng nhập</a>
                        <a class="border-left border-right pl-2 pr-2 ml-1 mr-2" href="{{ route('user.postRegister') }}" title="Đăng ký" style="border-right: 0px !important; padding-right: 0px !important;">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="w-100 wp-header text-white py-3 pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-3 col-sm-4 col-4 align-self-center text-center">
                        <a href="{{ route("home") }}" title="Fast shipping"><img class="img-fulid logo" src="{{ asset('/User/images/icons/logo2.png') }}" alt="Fast shipping" /></a>
                    </div>
                    <div class="col-lg-6 col-sm-8 d-none d-lg-block align-self-end">
                        <nav id="site-navigation" class="main-navigation">
                            <ul id="main-menu" class="menu justify-content-center">
                                <li class="menu-item-has-children active">
                                    <a href="#" title="Giao nhận hàng hóa">Giao nhận hàng hóa</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Tra cứu vận đơn</a></li>
                                        <li><a href="#">Tra cước và thời gian vận chuyển</a></li>
                                        <li><a href="#">Danh sách bưu cục</a></li>
                                        <li><a href="#">Chính sách</a></li>
                                        <li><a href="#">Bảng giá</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="Dịch vụ">Dịch vụ</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Chuyển phát hỏa tốc</a></li>
                                        <li><a href="{{ route('user.fastshipping') }}">Chuyển phát nhanh</a></li>
                                        <li><a href="#">Chuyển phát tiết kiệm</a></li>
                                        <li><a href="#">Chuyển phát đường bộ</a></li>
                                        <li><a href="#">Chuyển phát thu hộ (COD)</a></li>
                                        <li><a href="#">Thuê xe nguyên chuyến</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="Giới thiệu">Giới thiệu</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Về Nhất Tín</a></li>
                                        <li><a href="#">Giá trị cốt lõi</a></li>
                                        <li><a href="#" title="Tin tức">Tin tức</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-sm-2 d-md-flex d-none align-items-center justify-content-center">
                        <a class="li-right d-flex align-items-center" href="tel:0337 517 047" title="0337 517 047">
                            <img class="pr-1" src="{{ asset('/User/images/icons/phone.png') }}" width="25" />
                            <span>0337 517 047</span>
                        </a>
                    </div>
                    <ul class="col-lg-3 col-sm-8 col-8 text-right d-lg-none">
                        <li class="d-inline-block mr-2">
                            <a class="text-fff" href="#"><span class="ntl-Login fs1"></span></a>
                        </li>
                        <li class="d-inline-block">
                            <button type="button" class="js-drawer-open-left ntl-menu d-inline-block border-0 text-center text-white" aria-controls="NavDrawer" aria-expanded="false">
                                <i class="fs1 ntl-Hamburger-Menu"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </header>