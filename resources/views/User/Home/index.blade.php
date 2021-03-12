@extends('User.layoutMain')

@section('main-content')
        <section class="w-100 position-relative slide-v2">
            <div id="carouselExampleIndicators_pc" class="carousel slide d-none d-md-block" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators_pc" data-slide-to="0" class="active"></li>
                </ol>

                <!-- banner pc -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                            <img class="w-100" src="{{ asset('/User/images/banner2.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <!-- end banner pc -->
            </div>

            <div id="carouselExampleIndicators_mb" class="carousel slide d-block d-md-none" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators_mb" data-slide-to="0" class="active"></li>
                </ol>

                <!-- banner mobile -->
                <div class="carousel-inner d-block d-md-none">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('/User/images/banner2.png') }}" alt="" />
                    </div>
                </div>
                <!-- end banner mobile -->
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 offset-lg-3 wp-slide flex-container center mt-lg-5 pt-lg-5" style="height: auto;">
                <div class="mt-md-n5 mt-n3 more-than-log">
                    <!-- <img src="images/MoreThanLogistic.png" alt="" class="img-fluid"> -->
                    <!-- More Than Logistics -->
                    Hơn cả một dịch vụ
                </div>
                <div class="d-flex justify-content-center align-items-center ml-md-n2 mr-md-n2 ml-n1 mr-n1">
                    <div class="ml-0 mr-n1">
                        <span class="mx-auto d-block top-slide"></span>
                        <div class="box-cube">
                            <a href="tra-cuoc.html">
                                <span class="icon-slide font-size-30 ntl-Document-2">
                                    <span class="path1"></span><span id="ntl-Document-2" class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                    <span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span>
                                    <span class="path14"></span>
                                </span>
                                <p class="mt-1 mt-sm-2 mb-1 mb-sm-3 font-size-14">Tạo vận đơn</p>
                                <span class="d-block line"></span>
                            </a>
                        </div>
                    </div>
                    <div class="mx-0" style="z-index: 2;">
                        <span class="mx-auto d-block top-slide"></span>
                        <div class="box-cube active-box-cube">
                            <a href="tra-van-don.html">
                                <span class="icon-slide font-size-30 ntl-Box-1">
                                    <span id="ntl-Box-1" class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                                </span>
                                <p class="mt-2 font-size-14">Tra cứu vận đơn</p>
                                <span class="d-block line"></span>
                            </a>
                        </div>
                    </div>
                    <div class="mr-0 ml-n1">
                        <span class="mx-auto d-block top-slide"></span>
                        <div class="box-cube">
                            <a href="danh-sach-buu-cuc.html">
                                <span class="icon-slide font-size-30 ntl-Location-2">
                                    <span id="ntl-Location-2" class="path1"></span><span id="ntl-Location-22" class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                                </span>
                                <p class="mt-1 mt-sm-2 mb-1 mb-sm-3 font-size-14">Danh sách bưu cục</p>
                                <span class="d-block line"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-inline-block pl-1 pr-1">
                    <form class="row position-relative search mt-1 mt-md-3" action="#" method="get" role="search" id="tracking_top">
                        <div class="col-lg-10 col-sm-10 col-9 pr-0 pr-sm-2">
                            <input style="box-shadow: 1px 2px 3px #333" type="text" name="bill" id="bill" value="" placeholder="Nhập mã vận đơn" class="form-control rounded-0 border-0 tukhoa" autocomplete="off" />
                        </div>
                        <div class="col-lg-2 col-sm-2 col-3 pl-0"><button style="box-shadow: 1px 2px 3px #333" class="btn-default w-100 rounded-0 pl-1 pr-1 btn-search-home">Tra cứu</button></div>
                        <span class="error col-lg-12" id="error_bill" style="display: none;">Nhập mã vận đơn</span>
                    </form>
                </div>
                <div class="row text-dark-min mx-auto mt-1 mt-md-3">
                    <div class="col-lg-9 col-sm-8 col-12 nhap-toi-da text-white">
                        <p style="padding-left: 40px">Nhập tối đa 30 mã vận đơn, mỗi mã cách nhau bởi dấu phẩy<br />
                            Ví dụ: 392773302,968835288</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-100 wp-service">
            <div class="container container-service">
                <div class="row m-0">
                    <a href="#" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="mb-3 mb-sm-0" style="height: 50px;">
                            <img src="{{ asset('/User/images/icons/icon-hoa-toc.png') }}" alt="" class="icon-hoa-toc" />
                        </p>
                        Chuyển phát hỏa tốc
                    </a>
                    <a href="#" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="ntl-CPN1 mb-3 mb-sm-0">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                            <span class="path8"></span><span class="path9"></span><span class="path10"></span>
                        </p>
                        Chuyển phát nhanh
                    </a>
                    <a href="#" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="ntl-CP-Ket-Hop mb-3 mb-sm-0">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                            <span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                        </p>
                        Chuyển phát tiết kiệm
                    </a>
                    <a href="#" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="ntl-CP-duong-bo mb-3 mb-sm-0">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                            <span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
                            <span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span>
                            <span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span>
                            <span class="path29"></span>
                        </p>
                        Chuyển phát đường bộ
                    </a>
                    <a href="#t" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="ntl-Thu-ho-COD mb-3 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></p>
                        Chuyển phát thu hộ (COD)
                    </a>
                    <a href="#" class="item-service bg-fff translate text-center position-relative p-3">
                        <p class="ntl-Nguyen-xe mb-3 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></p>
                        Thuê xe nguyên chuyến
                    </a>
                </div>
                <div class="w-100 text-center mt-3 text-service" style="display: block;">
                    <div class="mb-2 mb-sm-0"><span class="ntl-Thin-Arrow-3 font-size-Thin-Arrow-3 mb-2"></span></div>
                    <div class="pl-5 pl-sm-0 pr-5 pr-sm-0 ml-4 ml-sm-5 mr-4 mr-sm-0 font-size-18"><b class="SanFranciscoDisplay-Bold">Lựa chọn dịch vụ </b> bạn quan tâm</div>
                </div>
            </div>
        </section>

        <section class="w-100 text-center pt-4 pb-4 pt-sm-0 pb-sm-0">
            <a href="#" title="">
                <picture>
                    <source media="(max-width: 768px)" srcset="{{ asset('User/images/banner3.png') }}" />
                    <source media="(min-width: 769px)" srcset="{{ asset('User/images/banner3.png') }}" />
                    <img class="img-fluid" src="{{ asset('User/images/banner3.png') }}" alt="" />
                </picture>
            </a>
        </section>
        <section class="w-100 wp-about position-relative" id="why">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-6 col-sm-12 col-12 left-about text-white text-center pt-3 pb-3 pr-md-5">
                        <h1 class="text-service SanFranciscoDisplay-Bold pr-md-5">Tại sao lựa chọn dịch vụ tại <span class="text-red">Fast Shipping</span></h1>
                        <p class="summary mt-2 mb-5 pr-md-5">
                            Fast Shipping mang đến các dịch vụ Chuyển Phát Nhanh & Vận Tải<br />
                            trải dài khắp 63 tỉnh thành, đáp ứng mọi nhu cầu vận chuyển nhanh chóng thư từ,<br />
                            hàng hóa của các quý khách hàng, đảm bảo chất lượng & cung cách phục vụ<br />
                            Nhiệt Tình - Thân Thiện.
                        </p>
                        <div class="row pr-md-08">
                            <div class="col-lg-4 col-sm-4 col-12 item-about">
                                <span class="ntl-COD-24h font-size-96"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                                <h5 class="title-h5 mt-3 mt-md-3 mb-4 mb-md-0 px-3">Hoàn tiền COD chỉ trong 24h</h5>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-12 item-about">
                                <span class="ntl-Money font-size-96"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                                <h5 class="title-h5 mt-3 mt-md-3 mb-4 mb-md-0 px-2">Miễn cước thu hộ lên đến 5 triệu đồng</h5>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-12 item-about">
                                <span class="ntl-Location-White1 font-size-96"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                <h5 class="title-h5 mt-3 mt-md-3 mb-4 mb-md-0 pl-1 pr-1">Mạng lưới phủ sóng 63 tỉnh thành</h5>
                            </div>
                        </div>

                        <div class="row sendnowbox pt-0 pt-sm-4 pb-2 pb-sm-0">
                            <a class="sendnow" href="tra-cuoc.html">Gửi hàng ngay<span class="ntl-Black-Arrow-4 icon-Arrow-4"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12 right-about pt-3 pb-3 pl-md-3">
                        <ul>
                            <li class="d-flex justify-content-md-start align-items-center ml-md-5" style="margin-top: 20px; padding-bottom: 15px;">
                                <div class="mr-3 float-left"><span class="icon bg-white rounded-circle text-center ntl-Shipping-Car p-2"></span></div>
                                <div class="float-left">
                                    <div class="title-about SanFranciscoDisplay-Bold">Giao hàng hỏa tốc</div>
                                    <span>
                                        Vận chuyển hàng nội thành siêu nhanh chỉ trong 3 tiếng<br />
                                        Gửi liên tỉnh nhận liền ngay sau 12 - 24 tiếng
                                    </span>
                                </div>
                            </li>
                            <li class="d-flex jjustify-content-md-start align-items-center ml-md-5" style="padding-bottom: 15px;">
                                <div class="mr-3 float-left"><span class="icon bg-white rounded-circle text-center ntl-Box-time p-2"></span></div>
                                <div class="float-left">
                                    <div class="title-about SanFranciscoDisplay-Bold">Kiểm soát thời gian thực</div>
                                    <span>
                                        Khách hàng luôn biết thực tế gói hàng của mình ở đâu,<br />
                                        ai đang vận chuyển và ước tính thời gian được giao đến
                                    </span>
                                </div>
                            </li>
                            <li class="d-flex justify-content-md-start align-items-center ml-md-5" style="padding-bottom: 15px;">
                                <div class="mr-3 float-left"><span class="icon bg-white rounded-circle text-center ntl-Cart p-2"></span></div>
                                <div class="float-left">
                                    <div class="title-about SanFranciscoDisplay-Bold">Cơ sở vật chất hiện đại</div>
                                    <span>
                                        Hệ thống kho bãi rộng rãi, xe tải 100% đóng thùng kín<br />
                                        Trên 300 bưu cục và điểm giao nhận phủ sóng toàn quốc
                                    </span>
                                </div>
                            </li>
                            <li class="d-flex justify-content-md-start align-items-center ml-md-5" style="padding-bottom: 15px;">
                                <div class="mr-3 float-left"><span class="icon bg-white rounded-circle text-center ntl-Shield p-2"></span></div>
                                <div class="float-left">
                                    <div class="title-about SanFranciscoDisplay-Bold">Đảm bảo an toàn</div>
                                    <span>Hàng hóa của khách hàng sẽ luôn được đảm bảo kỹ lưỡng và an toàn với các dịch vụ chuyển phát tại Fast Shipping</span>
                                </div>
                            </li>
                            <li class="d-flex justify-content-md-start align-items-center ml-md-5" style="margin-bottom: 20px;">
                                <div class="mr-3 float-left"><span class="icon bg-white rounded-circle text-center ntl-Head-phone p-2"></span></div>
                                <div class="float-left">
                                    <div class="title-about SanFranciscoDisplay-Bold">Hỗ trợ trực tuyến</div>
                                    <span class="unset-color">
                                        Thời gian làm việc từ 7h đến 22h hàng ngày<br />
                                        Phục vụ và giải đáp mọi thắc mắc của khách hàng<br />
                                        Hotline: <a href="tel:0337 517 047">0337 517 047</a><br />
                                        Fanpage: <a href="https://www.facebook.com/son.vi.99" target="_blank">Fb.com/son.vi.99</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-100 coutdown" id="coutdown">
            <div class="container">
                <div class="row d-flex align-items-center text-center">
                    <div class="col-lg2 pb-3 pt-5 pb-sm-5">
                        <div class="icon">
                            <span class="ntl-Buu-cuc">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                                <span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
                            </span>
                        </div>
                        <div class="count-tk">
                            <span class="timer counter-number appear" data-to="350" data-speed="7000">318</span>
                            <br />
                            <span class="SanFranciscoDisplay-Bold">Bưu cục</span>
                        </div>
                    </div>
                    <div class="col-lg2 pt-3 pb-3 pt-sm-5 pb-sm-5">
                        <div class="icon">
                            <span class="ntl-Nguyen-xe"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                        </div>
                        <div class="count-tk">
                            <span class="timer counter-number appear" data-to="400" data-speed="7000">350</span>
                            <br />
                            <span class="SanFranciscoDisplay-Bold">Xe</span>
                        </div>
                    </div>
                    <div class="col-lg2 pt-3 pb-3 pt-sm-5 pb-sm-5">
                        <div class="icon">
                            <span class="ntl-Doi-tac"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        </div>
                        <div class="count-tk">
                            <span class="timer counter-number appear" data-to="36000" data-speed="7000">36000</span>
                            <br />
                            <span class="SanFranciscoDisplay-Bold">Đối tác, Khách hàng</span>
                        </div>
                    </div>
                    <div class="col-lg2 pt-3 pt-sm-5 pb-5">
                        <div class="icon">
                            <span class="ntl-NV">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                                <span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                            </span>
                        </div>
                        <div class="count-tk">
                            <span class="timer counter-number appear" data-to="3000" data-speed="7000">2300</span>
                            <br />
                            <span class="SanFranciscoDisplay-Bold">Nhân viên</span>
                        </div>
                    </div>
                    <div class="col-lg2 pt-3 pt-sm-5 pb-5">
                        <div class="icon">
                            <span class="ntl-kho"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                        </div>
                        <div class="count-tk">
                            <div class="d-inline-flex">
                                <span class="timer counter-number appear" data-to="100000" data-speed="7000">50000</span><span> m<sup>2</sup></span>
                            </div>
                            <br />
                            <span class="SanFranciscoDisplay-Bold">Diện tích kho bãi</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-100 text-center">
            <iframe width="1120" height="630" src="https://www.youtube.com/embed/Kz7g161VNbM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section class="w-100 wp-kh">
            <div class="container">
                <div class="w-100 text-center position-relative font-size-24 text-dark text-kh">
                    <h2 class="position-relative d-inline-block pt-5 pb-0 pb-sm-5 font-size-24"><b class="SanFranciscoDisplay-Bold">Khách hàng</b> của Fast Shipping</h2>
                </div>
            </div>
        </section>
        <section class="w-100 ourservice pb-2 mt-n2" id="ourservice">
            <div class="container">
                <div class="w-100" id="owlcarousel">
                    <div class="carousel-item-ykien m-2 text-center bg-red text-dark" style="border: none;">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <source media="(min-width: 1200px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <img class="lazyload d-inline-block" src="{{ asset('/User/images/175.jpg') }}" alt="Ông Nguyễn Văn A" />
                        </picture>
                        <div class="carousel-caption-ykien pt-2 pl-3 pr-3 pb-4">
                            <div class="text-capitalize font-size-18 text-dark font-IntelBold" style="min-height: 31px;">
                                <p class="text-white">Ông Nguyễn Văn A</p>
                            </div>
                            <div class="text-justify font-size-16 text-dark mt-2 summary_bottom">
                                <h4 class="text-center text-white"><strong>Giám đốc điều hành</strong></h4>
                                <p class="text-white">
                                    Chúng tôi tin tưởng và lựa chọn sử dụng dịch vụ của Fast Shipping bởi quy mô về mạng lưới giao nhận hàng hóa phủ rộng khắp cả nước; cùng với đó là hệ thống quản trị phát triển, kết nối tốt với
                                    khách hàng. Đặc biệt, chúng tôi đánh giá cao sự uy tín về thời gian toàn trình cam kết, an toàn hàng hóa và tốc độ phản hồi cho khách hàng, đáp ứng được yêu cầu của Digiworld và vượt trội so với những
                                    đơn vị khác.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-ykien m-2 text-center bg-red text-dark" style="border: none;">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <source media="(min-width: 1200px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <img class="lazyload d-inline-block" src="{{ asset('/User/images/175.jpg') }}" alt="Ông Trần Văn B" />
                        </picture>
                        <div class="carousel-caption-ykien pt-2 pl-3 pr-3 pb-4">
                            <div class="text-capitalize font-size-18 text-dark font-IntelBold" style="min-height: 31px;">
                                <p class="text-white">Ông Trần Văn B</p>
                            </div>
                            <div class="text-justify font-size-16 text-dark mt-2 summary_bottom">
                                <h4 class="text-center text-white"><strong>Phó giám đốc</strong></h4>
                                <p class="text-white">
                                    Fast Shipping đã mang lại lợi ích cho công ty chúng tôi với sự kết nối vận chuyển hàng hóa nhanh nhất đến các shop trong và ngoài tỉnh, thành phố, phục vụ bán hàng ngày càng hiệu quả. Việc chọn
                                    Fast Shipping là đối tác đồng hành đã giúp chúng tôi giảm thiểu chi phí chuyển phát nhờ lợi ích của việc chuyên môn hóa và chia sẻ hạ tầng.
                                </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-ykien m-2 text-center bg-red text-dark" style="border: none;">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <source media="(min-width: 1200px)" srcset="{{ asset('/User/images/175.jpg') }}" />
                            <img class="lazyload d-inline-block" src="{{ asset('/User/images/175.jpg') }}" alt="Ông Lê Văn C" />
                        </picture>
                        <div class="carousel-caption-ykien pt-2 pl-3 pr-3 pb-4">
                            <div class="text-capitalize font-size-18 text-dark font-IntelBold" style="min-height: 31px;">
                                <p class="text-white"> Ông Lê Văn C</p>
                            </div>
                            <div class="text-justify font-size-16 text-dark mt-2 summary_bottom">
                                <h4 class="text-center text-white"><strong>Quản lý chuỗi cung ứng</strong></h4>
                                <p class="text-white">
                                    Fast Shipping cung cấp cho chúng tôi dịch vụ chuyển phát nhanh tốt nhất với khả năng phục vụ tất cả các loại hình logistics trên toàn quốc. Quản lý và nhân viên và quản lý niềm nở, chăm sóc khách
                                    hàng chu đáo, quy trình được quy chuẩn, đảm bảo về thời gian cam kết. Chính vì vậy chúng tôi đã tin tưởng và lựa chọn Fast Shipping nhiều năm nay.
                                </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="w-100 wp-partner lazy">
            <div class="container position-relative">
                <div class="row">
                    <div class="w-100 partners">
                        <div id="partners-logo">
                            <div class="slide">
                                <img class="lazyload" src="#" alt="amway" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="fpt" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="thegioididong" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="pharmacity" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="samsung" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="sony" />
                            </div>
                            <div class="slide">
                                <img class="lazyload" src="#" alt="tcl" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
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
                                    <a href="danh-sach-buu-cuc.html" class="d-inline-block p-2 rounded bg-white d-flex justify-content-center align-items-center">
                                        <span class="icon ntl-Location-1 mr-3"><span class="path1"></span><span class="path22"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span> Tìm bưu cục
                                        gần bạn
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <a href="tra-cuoc.html" class="d-inline-block p-2 rounded d-flex justify-content-center align-items-center"><span class="icon ntl-Box-search mr-3"></span> Tra cứu giá cước</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="NavDrawer" class="drawer drawer--left">
        <div class="drawer__header">
            <div class="drawer__title h3">
                <a class="site-header__logo-link" href="#" title="Fast Shipping">
                    <img class="img-fluid w-50 mt-2" src="{{ asset('User/images/icons/logo.png') }}" alt="Fast Shipping" />
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
                    <li class="mobile-nav__item"><a href="#" title="Tra cứu vận đơn" class="mobile-nav__link">Tra cứu vận đơn</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Tra cước và thời gian vận chuyển" class="mobile-nav__link">Tra cước và thời gian vận chuyển</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Danh sách bưu cục" class="mobile-nav__link">Danh sách bưu cục</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Chính sách" class="mobile-nav__link">Chính sách</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Bảng giá" class="mobile-nav__link">Bảng giá</a></li>
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
                    <li class="mobile-nav__item"><a href="#" title="Chuyển phát hỏa tốc" class="mobile-nav__link">Chuyển phát hỏa tốc</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Chuyển phát nhanh" class="mobile-nav__link">Chuyển phát nhanh</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Chuyển phát tiết kiệm" class="mobile-nav__link">Chuyển phát tiết kiệm</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Chuyển phát đường bộ" class="mobile-nav__link">Chuyển phát đường bộ</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Chuyển phát thu hộ (COD)" class="mobile-nav__link">Chuyển phát thu hộ (COD)</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Thuê xe nguyên chuyến" class="mobile-nav__link">Thuê xe nguyên chuyến</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item" aria-haspopup="true">
                <div class="mobile-nav__has-sublist">
                    <a href="tin-tuc/index.html" class="mobile-nav__link">Tin tức</a>
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
                    <li class="mobile-nav__item"><a href="#" title="Tin chuyên ngành" class="mobile-nav__link">Tin chuyên ngành</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Tin hoạt động" class="mobile-nav__link">Tin hoạt động</a></li>
                    <li class="mobile-nav__item"><a href="{{ route('home') }}" title="Tin tuyển dụng" class="mobile-nav__link">Tin tuyển dụng</a></li>
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
                    <li class="mobile-nav__item"><a href="#" title="Về Fast Shipping" class="mobile-nav__link">Về Fast Shipping</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Nhân sự NTL" class="mobile-nav__link">Nhân sự NTL</a></li>
                    <li class="mobile-nav__item"><a href="#" title="Giá trị cốt lõi" class="mobile-nav__link">Giá trị cốt lõi</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item"><a class="mobile-nav__link mobile-nav__border" href="#" title="Liên hệ">Liên hệ</a></li>
        </ul>
    </div>
@endsection