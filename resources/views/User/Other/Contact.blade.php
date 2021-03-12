@extends('User.layoutMain')

@section('main-content')

<body class="page-template page-template-page-templates page-template-contact page-template-page-templatescontact-php page page-id-9619">
    <div id="PageContainer" class="w-100 float-left position-relative is-moved-by-drawer">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBZF5CF" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <style>
            .polylang li {
                list-style-type: none !important;
                display: inline !important;
            }

            .li-right {
                font-size: 14px;
                color: #fdd800;
            }

            .li-right:hover {
                color: #fff;
            }
        </style>

        <div class="w-100 top-header font-size-14 pt-2 pb-2 d-none d-md-block">
            <div class="container">
                <div class="row d-flex align-content-center">
                    <div class="col-lg-7 col-sm-7 col-12">
                        <span class="pr-1">Trụ sở chính: 18A Cộng Hòa, Phường 12, Quận Tân Bình, Tp. Hồ Chí Minh</span>
                        <span class="border-left pl-2">Giờ làm việc: <span class="SanFranciscoDisplay-Bold">7:00 - 20:00</span></span>
                    </div>
                    <div class="col-lg-5 col-sm-5 col-12 text-right">
                        <a href="gioi-thieu-chung.html" title="">Giới thiệu về Nhất Tín Logistics</a>
                        <a class="border-left pl-2 ml-1" href="https://online.ntlogistics.vn/auth/login?url=https://ntlogistics.vn" title="">Đăng nhập</a>
                        <a class="border-left pl-2 ml-1" href="https://online.ntlogistics.vn/auth/register" title="">Đăng ký</a>
                        <div class="border-left pl-2 ml-1 d-inline-block polylang">
                            <li class="lang-item lang-item-233 lang-item-vi current-lang lang-item-first">
                                <a lang="vi" hreflang="vi" href="lien-he.html">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACnklEQVR4Xu2Xv2sUTxiHn9mfOS/hkqCInaJoFQJiY5HWxsIq+B8ogr18KwvBXiv9C1KIf4BdQLAKKkZJJYhNCGLi937s7d7uzOvtLLisl3Pvmk2TB4Z3YQfeZz87M+wqEeEkcThhTgUU4AKhrc2igUQBK/ubm4e4DfdXigtbW6se0MFxaG1s0CSjvT2AjgeEYgySJJhuF0T+GFpEJswRmbiemANT5zmdDqQpQOgBkGVIHNvRBLZXIUAhoDVmOLRjHpxFQMAMmA/fx5QCIHkCUYTMKeBd1eBC8t5lHsTzbOqlgNZIr4cMBsxDuJYgsSJ+GzAPAshoVAqQpuh+36YwK8qH4PIAFEjWRhJmRkQgSUoBsgzT709dhCoQVAhoQIrhXzQ4KxHoXMQQ7zoggAIVgOmp6fLGQJkAxYrMBazV5FZzPGHhRsbyvRjlCqIZVwUZIMLqowgZKZQvtv56GTJ44zOBCChV7Lq/1wCDgRU5jiyC/itIdmD1cUxwyYABhD+oEEZfHQ6fnCH9lgIpU8n7OE51DWRRZOu/0B9g/65w9r+Y9p2kFFDQfx3y82kL0d2ZtqG7tFQKmCwDrcEY6pAhpN8FVHVudgCSGmZCa9uzcg4oY5B6AXChfTsBDMN3PjhC62ZG+1bMr5c+aOqwvSonoc4yPJGZEgjWNP6VlKNnLf5/EQKw/DBm+UFMcC1l9NmlFpHKSWjjEJGZElhYTzm43yLa9oFC+Oh5QPJFEV5PST6pmQR0llUF8DwQqckO2yD+ODl3uO0RrmeAgNR/C1QFiujrBQTiHZfjOkha3qun7OkAaGOsVWMoVRUwIqgGBVQpgAcgRQI4i4s0REVAG+Co26VJBItWwHlgDThHs/wAdhUQAku2NksC9E5/Tk9c4Df0zn9/3BO3NgAAAABJRU5ErkJggg=="
                                        title="Tiếng Việt"
                                        alt="Tiếng Việt"
                                        width="32"
                                        height="32"
                                    />
                                </a>
                            </li>
                            <li class="lang-item lang-item-236 lang-item-en">
                                <a lang="en-US" hreflang="en-US" href="en/lien-he.html">
                                    <img
                                        src="data:image/png;base64,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"
                                        title="English"
                                        alt="English"
                                        width="32"
                                        height="32"
                                    />
                                </a>
                            </li>
                        </div>
                        <div class="dropdown d-none">
                            <img class="img-fuild pr-1" src="../images/img/lang.png" alt="" />
                            <button class="btn dropdown-toggle text-white p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vietnamese
                            </button>
                            <div class="dropdown-menu border-0 p-1" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="w-100 wp-header text-white py-3 pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-3 col-sm-4 col-4 align-self-center">
                        <a href="../index.html" title="Nhất Tín Logistic"><img class="img-fulid logo" src="../images/img/logo.png" alt="Nhất Tín Logistic" /></a>
                    </div>
                    <div class="col-lg-6 col-sm-8 d-none d-lg-block align-self-end">
                        <nav id="site-navigation" class="main-navigation">
                            <ul id="main-menu" class="menu">
                                <li class="menu-item-has-children">
                                    <a href="#" title="">Giao nhận hàng hóa</a>
                                    <ul class="sub-menu">
                                        <li><a href="../tra-van-don.html">Tra cứu vận đơn</a></li>
                                        <li><a href="../tra-cuoc.html">Tra cước và thời gian vận chuyển</a></li>
                                        <li><a href="../danh-sach-buu-cuc.html">Danh sách bưu cục</a></li>
                                        <li><a href="quy-dinh-va-chinh-sach.html">Chính sách</a></li>
                                        <li><a href="bang-gia.html">Bảng giá</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Dịch vụ</a>
                                    <ul class="sub-menu">
                                        <li><a href="chuyen-phat-hoa-toc.html">Chuyển phát hỏa tốc</a></li>
                                        <li><a href="chuyen-phat-nhanh.html">Chuyển phát nhanh</a></li>
                                        <li><a href="dich-vu-chuyen-phat-ket-hop-mes.html">Chuyển phát tiết kiệm</a></li>
                                        <li><a href="dich-vu-chuyen-phat-nhanh-duong-bo.html">Chuyển phát đường bộ</a></li>
                                        <li><a href="dv-van-chuyen-thuong-mai-dien-tu-cod.html">Chuyển phát thu hộ (COD)</a></li>
                                        <li><a href="dich-vu-thue-xe-nguyen-chuyen.html">Thuê xe nguyên chuyến</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Giới thiệu</a>
                                    <ul class="sub-menu">
                                        <li><a href="gioi-thieu-chung.html">Về Nhất Tín</a></li>
                                        <li><a href="trach-nhiem.html">Giá trị cốt lõi</a></li>
                                        <li><a href="index.html">Tin tức</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="lien-he.html">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-3 col-sm-2 d-flex align-items-center justify-content-center">
                        <a class="li-right" href="tel:1900636688" title="">
                            <img class="pr-2" src="../images/img/phone.png" />
                            <span>1900 63 6688</span>
                        </a>
                    </div>

                    <ul class="col-lg-3 col-sm-8 col-8 text-right d-lg-none">
                        <li class="d-inline-block mr-2">
                            <a class="text-fff" href="https://online.ntlogistics.vn/auth/login?url=https://ntlogistics.vn"><span class="ntl-Login fs1"></span></a>
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
        <div class="container">
            <div class="page-contact">
                <h1 class="text-center heading-big">Yêu cầu hỗ trợ thông tin</h1>
                <div class="d-flex justify-content-center align-items-center contact-detail my-5">
                    <img src="../images/contact-1.png" alt="" class="mr-5" />
                    <p class="m-0">Chúng tôi luôn sẵn sàng hỗ trợ bạn mọi lúc mọi nơi.</p>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center contact-block">
                    <div class="hotline-block mr-md-4 mb-5">
                        <p class="text-1">Liên hệ tổng đài chăm sóc khách hàng</p>
                        <p class="text-2"><a href="tel:1900636688">1900 63 6688</a></p>
                        <p class="text-3">(Cước phí 1000đ/phút)</p>
                        <p class="text-4">Giải quyết khiếu nại trong vòng 24h</p>
                    </div>
                    <div class="mail-block mb-5">
                        <p class="text-1">Yêu cầu phản hồi online</p>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#supportModal">Gửi yêu cầu Online</button>
                        <p class="text-4">Hoặc Quý khách có thể gửi email trực tiếp tới: <a href="mailto:nhattin@ntlogistics.vn">nhattin@ntlogistics.vn</a></p>
                    </div>
                </div>
                <div class="notice-block p-3 mb-4">
                    <p class="text-1">Một số thông tin cần lưu ý</p>
                    <ul>
                        <li class="mb-3">
                            <a href="quy-dinh-va-chinh-sach.html#policy-1"><span class="ntl-Black-Arrow-4"></span> Khiếu nại & đền bù</a>
                        </li>
                        <li class="mb-3">
                            <a href="quy-dinh-va-chinh-sach.html#policy-2"><span class="ntl-Black-Arrow-4"></span> Quy định gửi & nhận hàng</a>
                        </li>
                        <li class="mb-3">
                            <a href="quy-dinh-va-chinh-sach.html#policy-3"><span class="ntl-Black-Arrow-4"></span> Trách nhiệm các bên</a>
                        </li>
                        <li class="mb-3">
                            <a href="quy-dinh-va-chinh-sach.html#policy-4"><span class="ntl-Black-Arrow-4"></span> Hàng hóa cấm gửi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-custom-w modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body d-flex p-0">
                        <div class="modal-left d-none d-md-block">
                            <img src="../images/support-bg.jpg" alt="" />
                        </div>
                        <div class="modal-right">
                            <div class="close-top">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--Before: support-form-->
                            <form class="needs-validation" id="support-form" novalidate>
                                <div class="form-group">
                                    <label for="username" class="required">Họ và tên</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Nhập họ tên" required />
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="required">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" value="" pattern="[0-9]{10,}" required />
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" required />
                                    <div class="invalid-feedback">Vui lòng nhập Email</div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="required">Chủ đề</label>
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Nhập chủ đề" required />
                                    <div class="invalid-feedback">Vui lòng nhập Chủ đề</div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="required">Nội dung</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Nhập nội dung" required></textarea>
                                    <div class="invalid-feedback">Vui lòng nhập Nội dung</div>
                                </div>
                                <input type="hidden" id="wp_nonce" value="a914499e98" />
                                <button class="btn btn-secondary btn-block" id="support-submit" type="submit">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Start of widget script -->
    <script type="text/javascript">
        function loadJsAsync(t, e) {
            var n = document.createElement("script");
            (n.type = "text/javascript"),
                (n.src = t),
                n.addEventListener(
                    "load",
                    function (t) {
                        e(null, t);
                    },
                    !1
                );
            var a = document.getElementsByTagName("head")[0];
            a.appendChild(n);
        }
        window.addEventListener(
            "DOMContentLoaded",
            setTimeout(function () {
                loadJsAsync("../../webchat.caresoft.vn_8090/js/CsChat3661.js?v=2.0", function () {
                    var t = { domain: "nhattin" };
                    embedCsChat(t);
                });
            }, 3000),
            !1
        );
    </script>
    <!-- End of widget script -->
    <script type="text/javascript" defer src="../vendor/jquery.min001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="../vendor/bootstrap.bundle.min001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="../vendor/slick.min001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="../vendor/fastclick.min001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="../vendor/timber.min001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="../js/main001e.js?ver=2.0.0"></script>
    <script type="text/javascript" defer src="wp-includes/js/wp-embed.min9dff.js?ver=5.3.2"></script>
</body>
@endsection