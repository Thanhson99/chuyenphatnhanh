@extends('User.layoutMain')

@section('main-content')

<section class="w-100 wp-maps bg-white pb-4 pb-md-5">
    <div class="container">
        <div class="w-100 text-center font-weight-bold font-IntelBold text-dark text-tracuu pt-3 pb-3 mb-3">Danh sách bưu cục gần bạn</div>
        <div class="row d-flex flex-row-reverse">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="distributePage">
                @if ($item->count() > 0)
                    @foreach ($item as $key => $collection)
                        @php
                            $mapplace = $collection->map_place;
                        @endphp
                        <iframe style="display:none" id="iframe{{$collection->id}}" src="{{ $mapplace }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="height: 450px;overflow: hidden;overflow-y: scroll;">
                <div class="w-100 font-size-18 text-dark mt-1 pl-3 pr-3 pl-md-0 pr-md-0">1 chi nhánh / bưu cục trên toàn quốc</div>
                    @foreach ($item as $key => $collection)
                        @php
                            $id = $collection->id;
                            $info = $collection->infomation;
                            $infos = explode('~', $info);
                        @endphp
                        <div class="d-flex justify-content-between align-items-center mb-1 more_info">
                            <span class="font-IntelBold name"><a href="#" class="name">{{ $infos[0] }}</a></span>
                            <div class="distance" style="display: none;"></div>
                            <a href="#" id="{{ $id }}" class="find-address font-size-14 redirect" title="Chỉ đường" style="cursor: pointer;">Chỉ đường</a>
                        </div>
                        <div><span class="icon ntl-Location-White" style="color: #fc0404;"></span><span class="address">{{ $infos[1] }}</span></div>
                        <div>
                            <a href="tel:0337 517 407" title="Hotline">
                                <span><img src="{{ asset('User/images/icons/phone.png') }}" style="width: 30px"/></span>
                                <span class="phone">{{ $infos[2] }}</span>
                            </a>
                        </div>
                    @endforeach
                <div class="mt-3"></div>
            </div>
            @endif
            
        </div>
        
    </div>
</section>

@endsection