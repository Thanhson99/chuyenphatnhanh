
@php
use App\get_address;
@endphp
@extends('Customer.layout')

@section('Customer-main-content')
<div class="content-wrapper" style="min-height: 415px;">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý vận đơn</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('customer.statistical') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý vận đơn</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <table class="data-table table table-striped">
            <thead>
              <tr>
                <th scope="col">Mã vận đơn</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Người gửi</th>
                <th style="width: 20%" scope="col">Nơi gửi</th>
                <th scope="col">Người nhận</th>
                <th style="width: 20%" scope="col">Nơi nhận</th>
                <th scope="col">Ngày tạo đơn</th>
                <th scope="col">Tiền thu hộ</th>
                <th scope="col">Tổng giá tiền</th>
              </tr>
            </thead>
            <tbody>
                @if ($list_order->count() > 0)
                    @foreach ($list_order as $key => $value)
                        @php
                            //lấy địa chỉ người gửi
                            $temp = new get_address();
                            $address = $temp->get_address($value->ward_id_sending);
                            $name_provinces = "";
                            $name_district = "";
                            $name_ward = "";
                            foreach ($address as $key => $collection_address) {
                                $name_provinces = $collection_address->name_provinces;
                                $name_district = $collection_address->name_district;
                                $name_ward = $collection_address->name_ward;
                            }
                            $address_sending = $name_provinces . ', ' . $name_district . ', ' . $name_ward . ', ' . $value->sending_place;

                            // lấy địa chỉ nơi nhận
                            $address = $temp->get_address($value->ward_id_recipients);
                            $name_provinces = "";
                            $name_district = "";
                            $name_ward = "";
                            foreach ($address as $key => $collection_address) {
                                $name_provinces = $collection_address->name_provinces;
                                $name_district = $collection_address->name_district;
                                $name_ward = $collection_address->name_ward;
                            }
                            $address_recipients = $name_provinces . ', ' . $name_district . ', ' . $name_ward . ', ' . $value->recipients;
                        @endphp
                        <tr>
                            <td>{{ $value->id_order }}</td>
                            <td>{{ $value->status }}</td>
                            <td>{{ $value->sending_name }}</td>
                            <td>{{ $address_sending }}</td>
                            <td>{{ $value->receiver_name }}</td>
                            <td>{{ $address_recipients }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ number_format($value->collection_fee, 0) }} VNĐ</td>
                            <td>{{ number_format($value->total_price, 0) }} VNĐ</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if ($list_order->count() > 0)

        @else
            <p>Không có vận đơn nào đang giao</p>
        @endif
    </div>
</div>
</div>
@endsection