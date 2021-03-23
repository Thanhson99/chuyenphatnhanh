@extends('User.layoutMain')

@section('main-content')

<section class="w-100 wp-maps bg-white pb-4 pb-md-5">
    <div class="container">
        <div class="w-100 text-center font-weight-bold font-IntelBold text-dark text-tracuu pt-3 pb-3 mb-3">Danh sách bưu cục gần bạn</div>
        <div class="row d-flex flex-row-reverse">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="distributePage">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d479.2534211394829!2d108.15227707250757!3d16.064069484733558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142192f2ceef8e3%3A0x1ac8b3965bc90ac8!2zMTE5IFBo4bqhbSBOaMawIFjGsMahbmcsIEhvw6AgS2jDoW5oIE5hbSwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1616149318182!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="clearfix"></div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="w-100 font-size-18 text-dark mt-1 pl-3 pr-3 pl-md-0 pr-md-0">1 chi nhánh / bưu cục trên toàn quốc</div>
                    <div class="d-flex justify-content-between align-items-center mb-1 more_info">
                        <span class="font-IntelBold name"><a href="javascript:;" class="name">Đà Nẵng</a></span>
                        <div class="distance" style="display: none;"></div>
                        <a href="#" class="find-address font-size-14 redirect" title="Chỉ đường" style="cursor: pointer;">Chỉ đường</a>
                    </div>
                    <div><span class="icon ntl-Location-White" style="color: #fc0404;"></span><span class="address">Địa chỉ: 119 Phạm Như Xương, phường Hòa khánh Nam, quận Liên Chiểu, tp Đà Nẵng</span></div>
                    <div>
                        <a href="tel:0337 517 407" title="Hotline">
                            <span><img src="{{ asset('User/images/icons/phone.png') }}" style="width: 30px"/></span>
                            <span class="phone">Hotline: 0337 517 047</span>
                        </a>
                    </div>
                <div class="mt-3"></div>
            </div>
        </div>
    </div>
</section>

@endsection