@extends('Customer.layout')

@section('Customer-main-content')
<div class="content-wrapper d-flex justify-content-center align-items-start" >
    <div class="card mt-3" style="min-height: 415px; max-width: 100%; width: 600px; padding: 1rem 1.25rem;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h4 class="mt-3 mb-2">Nhận xét và đánh giá</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form id="form-list-new" class="list-items" method="POST" action="{{ route('customer.evaluate') }}" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="text-center">
                                        <div>
                                            <span>Đánh giá chất lượng</span>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3 mb-3">
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> <input type="radio" id="star4half" name="rating" value="4.5" />
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> <input type="radio" id="star4" name="rating" value="4" />
                                                <label class="full" for="star4" title="Pretty good - 4 stars"></label> <input type="radio" id="star3half" name="rating" value="3.5" />
                                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label> <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> <input type="radio" id="star2" name="rating" value="2" />
                                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label> <input type="radio" id="star1half" name="rating" value="1.5" />
                                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label> <input type="radio" id="star1" name="rating" value="1" />
                                                <label class="full" for="star1" title="Sucks big time - 1 star"></label> <input type="radio" id="starhalf" name="rating" value="0.5" />
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                <input type="radio" class="reset-option" name="rating" value="reset" />
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <strong>Bạn đánh giá thế nào chất lượng dịch vụ của Fastshipping?</strong>
                                            <div class="row mt-2">
                                                <div class="col d-flex flex-column">
                                                    <div class="item-op">
                                                        <div class="col"></div>
                                                        <input type="checkbox" name="cb1" value="Tất cả đều tuyệt vời" />
                                                        Tất cả đều tuyệt vời
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb3" value="Nhân viên lấy hàng thân thiện" />
                                                        Nhân viên lấy hàng thân thiện
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb2" value="Lấy hàng nhanh" />
                                                        Lấy hàng nhanh
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb4" value="Nhân viên giao hàng nhiệt tình" />
                                                        Nhân viên giao hàng nhiệt tình
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb5" value="CSKH hỗ trợ nhanh và nhiệt tình" />
                                                        CSKH hỗ trợ nhanh và nhiệt tình
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb6" value="Nhân viên bưu cục hỗ trợ hiệu quả" />
                                                        Nhân viên bưu cục hỗ trợ hiệu quả
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb7" value="Giao hàng nhanh" />
                                                        Giao hàng nhanh
                                                    </div>
                                                    <div class="item-op">
                                                        <input type="checkbox" name="cb8" value="Nhân viên trả hàng tốt" />
                                                        Nhân viên trả hàng tốt
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="row">
                                            <textarea class="form-control" placeholder="Ý kiến khác ... " rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center mt-3">
                                            <input class="btn btn-danger" type="submit" value="Gửi phản hồi" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection