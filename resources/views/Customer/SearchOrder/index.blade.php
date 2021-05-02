@extends('Customer.layout')


@section('Customer-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
                <nb-card>
                    <nb-card-header class="card-ntl"><b>Tra cứu vận đơn</b></nb-card-header>
                    <nb-card-body>
                        <div class="row" style="background-color: #fff;">
                            <div class="col-md-12">
                                <div class="row col-md-6">
                                    <div class="w-100">
                                        <div class="w-100 title-code font-size-24 SanFranciscoDisplay-Bold text-white mb-2">Nhập mã vận đơn</div>
                                        <form style="display: flex" id="form-search" class="w-100 box-search position-relative mt-2" action="{{ route('customer.searchOrders') }}" method="POST" role="search">
                                            <input required="" type="text" name="bill" id="bill" value="" placeholder="0 2 5 4 8 5 2" class="form-control code" autocomplete="off">
                                            <input type="submit" style="margin-left: 20px; background-color: #ff2222;" class="btn btn-danger text-center" value="Tìm kiếm">
                                            @csrf                                    
                                        </form>
                                    </div>
                                </div>
                                @if (isset($data))
                                    @if ($data['stock_rate_name'] != "")
                                        <div class="w-100 p-3 p-lg-4 bg-white box-vandon" style="margin-bottom: 30px;">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-5 col-md-5 col-sm-12 col-12 border-5 text-center">
                                                    <div class="w-100 pr-3 pb-3 mb-3 pb-md-0 mb-md-0">
                                                    <div class="w-100 mt-3">
                                                        <ul class="ul-info">
                                                            <li class="d-flex justify-content-between">
                                                                <span class=" title-codevn font-size-24">Mã vận đơn:</span>
                                                                <span class="code-vn SanFranciscoDisplay-Bold font-size-24">{{ $data['id'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Tên sản phẩm:</span>
                                                                <span class="text-capitalize">{{ $data['stock_rate_name'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Dịch vụ:</span>
                                                                <span>{{ $data['transportation_type_name'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Tổng tiền:</span>
                                                                <span>{{ number_format($data['total_price'], 0) }} VNĐ</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                                    <div class="w-100 pl-md-3">
                                                    <div class="title-tt font-size-24 SanFranciscoDisplay-Bold mb-3">Tình trạng vận đơn</div>
                                                        <p>{{ $data['status'] }}</p>
                                                    </div>
                                                    <div class="w-100 pl-md-3" style="padding-right: 20px;">
                                                        <hr style="border: 1px dashed rgba(0, 0, 0, 0.3);">
                                                        <ul class="ul-info">
                                                            <li class="d-flex justify-content-between">
                                                            <span class="col-lg-5 text_left" style="padding-left: 0px;">Thời gian toàn trình dự kiến:</span>
                                                            <span class="text-capitalize col-lg-7 text_right" style="padding-right: 0px;">{{ $data['new_time'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span class="text_left">Người nhận:</span>
                                                                <span class="text_right">{{ $data['receiver_name'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span class="text_left">Hành trình:</span>
                                                                <span class="text_right">{{ $data['new_time'] }} Trả vận đơn cho {{ $data['receiver_name'] }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="w-100 p-3 p-lg-4 bg-white box-vandon" style="margin-bottom: 30px;">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-lg-5 col-md-5 col-sm-12 col-12 border-5 text-center">
                                                    <div class="w-100 pr-3 pb-3 mb-3 pb-md-0 mb-md-0">
                                                    <div class="w-100 mt-3">
                                                        <ul class="ul-info">
                                                            <li class="d-flex justify-content-between">
                                                                <span class=" title-codevn font-size-24">Mã vận đơn:</span>
                                                                <span class="code-vn SanFranciscoDisplay-Bold font-size-24">{{ $data['id'] }}</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Tên sản phẩm:</span>
                                                                <span class="text-capitalize">---</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Dịch vụ:</span>
                                                                <span>---</span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <span>Tổng tiền:</span>
                                                                <span>---</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                                    <div class="w-100 pl-md-3">
                                                    <ul class="row ul-nosearch d-flex justify-content-between align-items-center">
                                                        <li class="col-lg-6 col-md-6 col-sm-6 col-12 text-center">
                                                            <picture>
                                                                <source media="(max-width: 1023px)" srcset="https://ntlogistics.vn/images/no-search.png">
                                                                <source media="(min-width: 1024px)" srcset="https://ntlogistics.vn/images/no-search.png">
                                                                <img class="lazyload img-fluid translate" src="https://ntlogistics.vn/images/no-search.png" alt="" data-original="https://ntlogistics.vn/images/no-search.png" style="display: inline;">
                                                            </picture>
                                                        </li>
                                                        <li class="col-lg-6 col-md-6 col-sm-6 col-12 font-size-24">
                                                            Không tìm thấy vận đơn này
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </nb-card-body>
                </nb-card>                
            </div>
        </div>
    </div>
</div>
@endsection