@extends('Customer.layout')

@section('Customer-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nhận xét và đánh giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('customer.statistical') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Nhận xét và đánh giá</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form id="form-list-new" class="list-items" method="POST" action="#" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-row">
                                    <div class="col">
                                        <span>Đánh giá chất lượng</span>
                                        <input class="star star-5" id="star-5" type="radio" name="star"/> <label class="star star-5" for="star-5"></label> 
                                        <input class="star star-4" id="star-4" type="radio" name="star"/> <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star"/> <label class="star star-3" for="star-3"></label> 
                                        <input class="star star-2" id="star-2" type="radio" name="star"/> <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star"/> <label class="star star-1" for="star-1"></label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Bạn đánh giá thế nào chất lượng dịch vụ của Fastshipping ?</span>
                                        <div class="col">
                                            <input type="checkbox" name="cb1" value="Tất cả đều tuyệt vời">Tất cả đều tuyệt vời
                                            <input type="checkbox" name="cb2" value="Lấy hàng nhanh">Lấy hàng nhanh
                                            <input type="checkbox" name="cb3" value="Nhân viên lấy hàng thân thiện">Nhân viên lấy hàng thân thiện
                                            <input type="checkbox" name="cb4" value="Nhân viên giao hàng nhiệt tình">Nhân viên giao hàng nhiệt tình
                                        </div>
                                        <div class="col">
                                            <input type="checkbox" name="cb5" value="CSKH hỗ trợ nhanh và nhiệt tình">CSKH hỗ trợ nhanh và nhiệt tình
                                            <input type="checkbox" name="cb6" value="Nhân viên bưu cục hỗ trợ hiệu quả">Nhân viên bưu cục hỗ trợ hiệu quả
                                            <input type="checkbox" name="cb7" value="Giao hàng nhanh">Giao hàng nhanh
                                            <input type="checkbox" name="cb8" value="Nhân viên trả hàng tốt">Nhân viên trả hàng tốt
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <textarea placeholder="Ý kiến khác ... " name=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="submit" value="Gửi phản hồi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection