@php
    use App\Helper\Template;
    use App\get_address;

    $select_status = Form::select('status', ['all' => 'Tất cả', 'đang giao' => 'Đang giao', 'đã giao' => 'Đã giao', 'đã hủy' => 'Đã hủy'], $params['fillter']['status'], ['class' => 'form-control orders']);
    $search_field = [
        'all' => 'Tất cả',
        'status' => 'Tình trạng',
        'transportation_type' => 'Hình thức vận chuyển',
        'info_goods' => 'Thông tin hàng hóa',
        'sender' => 'Người gửi',
        'sender_phone' => 'SĐT người gửi',
        'sending_place' => 'Nơi gửi',
        'receiver' => 'Người nhận',
        'receiver_phone' => 'SĐT người nhận',
        'recipients' => 'Nơi nhận'
    ];
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn group-btn-list-user">
                    <a href="{{ route('admin.addOrders') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm đơn hàng</a>
                    <a href="javascript:submitFormOrder('{{ route('admin.deleteOrders') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa đơn hàng</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 20px">
                <div class="col-sm-2">
                    <form id="change-status-orders" action="{{ route('admin.listOrders') }}">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_status !!}
                        </div>
                    </form>
                </div>
                <div class="col-sm-10">
                    <form id="frm-search" action="{{ route('admin.listOrders') }}">
                        <div class="dropdown" style="display: flex; margin-left: 50px">
                            <button class="btn btn-default dropdown-toggle search-text" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tìm kiếm {{ mb_strtolower($search_field[$params['search']['field']]) != 'tất cả' ? 'theo ' . mb_strtolower($search_field[$params['search']['field']]) : mb_strtolower($search_field[$params['search']['field']]) }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($search_field as $key => $item)
                                    <a class="dropdown-item" href="javascript:changeSearchField('{{ $key }}', '{{ $item }}')">{{ $item }}</a>
                                @endforeach
                            </div>
                            <input value="{{ $params['search']['value'] }}" name="search_value" type="text" style="width: 50%; display:block; margin: 0 10px">
                            <button class="btn btn-default" type="submit">Tìm kiếm</button>
                            <a href="javascript:clearSearch()" class="btn btn-default" style="margin-left: 10px">Xóa tìm kiếm</a>
                        </div>
                        <input type="hidden" name="search_field" value="all">
                    </form>
                </div>
            </div>
            <div class="row">
                <form id="form-orders" class="list-items" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Hình thức vận chuyển</th>
                            <th style="width: 10%" scope="col">Thông tin hàng hóa</th>
                            <th scope="col">Người gửi</th>
                            <th scope="col">SĐT người gửi</th>
                            <th style="width: 15%" scope="col">Nơi gửi</th>
                            <th scope="col">Người nhận</th>
                            <th scope="col">SĐT người nhận</th>
                            <th style="width: 15%" scope="col">Nơi nhận</th>
                            <th style="width: 10%" scope="col">Ghi chú</th>
                            <th scope="col">created_at</th>
                            <th scope="col">updated_at</th>
                            <th scope="col">Sửa vận đơn</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($orders->count() > 0)
                                @foreach ($orders as $key => $collection_order)
                                    @foreach ($detail_orders as $key => $collection_detail)
                                        @if ($collection_order->id_order == $collection_detail->orders_id)
                                            @php
                                                //lấy địa chỉ người gửi
                                                $temp = new get_address();
                                                $address = $temp->get_address($collection_order->ward_id_sending);
                                                $name_provinces = "";
                                                $name_district = "";
                                                $name_ward = "";
                                                foreach ($address as $key => $collection_address) {
                                                    $name_provinces = $collection_address->name_provinces;
                                                    $name_district = $collection_address->name_district;
                                                    $name_ward = $collection_address->name_ward;
                                                }
                                                $address_sending = $name_provinces . ', ' . $name_district . ', ' . $name_ward . ', ' . $collection_order->sending_place;

                                                // lấy địa chỉ nơi nhận
                                                $address = $temp->get_address($collection_order->ward_id_recipients);
                                                $name_provinces = "";
                                                $name_district = "";
                                                $name_ward = "";
                                                foreach ($address as $key => $collection_address) {
                                                    $name_provinces = $collection_address->name_provinces;
                                                    $name_district = $collection_address->name_district;
                                                    $name_ward = $collection_address->name_ward;
                                                }
                                                $address_recipients = $name_provinces . ', ' . $name_district . ', ' . $name_ward . ', ' . $collection_order->sending_place;

                                                //thông tin hàng hóa
                                                // hình thức vận chuyển, loại hàng, giá, (cao, nặng, dài)
                                                $transportation_type = $collection_order->transportation_type;
                                                $sectors = $collection_detail->name;
                                                $prices = $collection_detail->rates_detail;
                                                $height = $collection_detail->height;
                                                $weight = $collection_detail->weight;
                                                $length = $collection_detail->length;
                                                // gộp
                                                $info_goods = 'Loại hàng: ' . $sectors . ', <br>Cao: ' . $height . 'cm , <br>Nặng: ' . $weight . 'g , <br>Dài: ' . $length . 'cm , <br>Giá: ' . number_format($prices, 0) . ' VNĐ';
                                                
                                                $id = $collection_detail->id_detail_order;
                                                $status = Template::highlight($collection_order->status, $params['search']);
                                                $sender = Template::highlight($collection_detail->sending_name, $params['search']);
                                                $sender_phone = Template::highlight($collection_detail->sending_phone_number, $params['search']);
                                                $sending_place = Template::highlight($address_sending, $params['search']);
                                                $receiver = Template::highlight($collection_detail->receiver_name, $params['search']);
                                                $receiver_phone = Template::highlight($collection_detail->receiver_phone_number, $params['search']);
                                                $recipients = Template::highlight($address_recipients, $params['search']);
                                                $note = $collection_detail->note;
                                                $updatedAt = $collection_order->updated_at;
                                                $createdAt = $collection_order->created_at;
                                                $linkEdit = route('admin.addOrders', ['id' => $id]);
                                            @endphp
                                            <tr>
                                                <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                                <td>{!! $status !!}</td>
                                                <td>{!! $transportation_type !!}</td>
                                                <td>{!! $info_goods !!}</td>
                                                <td>{!! $sender !!}</td>
                                                <td>0{{ $sender_phone }}</td>
                                                <td>{!! $sending_place !!}</td>
                                                <td>{!! $receiver !!}</td>
                                                <td>0{{ $receiver_phone }}</td>
                                                <td>{!! $recipients !!}</td>
                                                <td>{{ $note == "" ? "Không có ghi chú" : $note }}</td>
                                                <td>{{ $updatedAt }}</td>
                                                <td>{{ $createdAt }}</td>
                                                <td><a href="{{ $linkEdit }}">Sửa</a></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                      <div class="pagination">
                          {{-- {!! $orders->links() !!} --}}
                      </div>
                      @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection