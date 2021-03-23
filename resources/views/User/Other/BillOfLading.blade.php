@extends('User.layoutMain')

@section('main-content')
<section class="w-100 position-relative no-count" style="background-image: url('../User/images/slide.png'); height: 500px; width: 100%; display: block">
    <div class="box-count" id="results">
        <div class="container position-relative z_index">
            <div class="w-100 text-center font-weight-bold font-IntelBold text-white text-tracuu pt-15 mb-4">Tra cứu vận đơn</div>
            <div class="row m-md-0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 pl-md-5 pr-md-5">
                    <div class="w-100 bg-FCD804 p-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-5">
                                <div class="w-100">
                                    <div class="w-100 title-code font-size-24 SanFranciscoDisplay-Bold text-white mb-2">Nhập mã vận đơn</div>
                                    <form class="w-100 box-search position-relative mt-2" action="#" method="get" role="search" id="tracking_top">
                                        <input type="text" name="bill" id="bill" value="" placeholder="0 2 5 4 8 5 2" class="form-control code" autocomplete="off" />
                                        <button class="btn position-absolute text-center" style="top:0; right:0"><span class="ntl-Search-Gray"></span></button>
                                    </form>
                                    <span class="error col-lg-12" id="error_bill" style="display: none;">Mã vận đơn của bạn</span>
                                </div>
                            </div>
                            <div class="col-lg-7 right-tc">
                                <div class="w-100 bg-white p-2 pt-3 pb-3 rounded pl-md-4">
                                    <p>- Nhập tối đa 30 mã vận đơn, mỗi mã cách nhau bởi dấu phẩy Ví dụ: 392773302,968835288</p>
                                    <div>
                                        -  Mọi thắc mắc vui lòng liên hệ hotline: <a href="tel:0337 517 047"><strong style="color: #2ca8e4;">0337 517 047</strong></a> or Email:
                                        <a href="mailto:fastshipping101099@gmail.com"><strong class="__cf_email__" style="color: #2ca8e4;">fastshipping101099@gmail.com</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection