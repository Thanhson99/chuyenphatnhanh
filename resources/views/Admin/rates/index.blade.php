@php
    use App\Helper\Template;
    // $select_rates = Form::select('transportation-type', ['all' => 'Tất cả', 'transportation_type' => 'Hình thức vận chuyển', 'rates' => 'giá'], $params['fillter']['transportation-type'], ['class' => 'form-control transportation-type']);
    $search_field = [
        'all' => 'Tất cả',
        'name' => 'Tên giá cước',
        'rates' => 'Giá'
    ];
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý giá cước</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quản lý giá cước</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn group-btn-list-user">
                    <a href="{{ route('admin.addRates') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm giá cước</a>
                    <a href="javascript:submitFormRates('{{ route('admin.deleteRates') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa giá cước</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 20px">
                {{-- <div class="col-sm-2">
                    <form id="change-provider-name" action="{{ route('admin.listRates') }}">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_rates !!}
                        </div>
                    </form>
                </div> --}}
                <div class="col-sm-10">
                    <form id="frm-search" action="{{ route('admin.listRates') }}">
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
                <form id="form-rates" class="list-items" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Tên loại hàng</th>
                            <th scope="col">Giá cước</th>
                            <th scope="col">updated_at</th>
                            <th scope="col">created_at</th>
                            <th scope="col">Sửa giá cước</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($rates->count() > 0)
                                @foreach ($rates as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $name = Template::highlight($collection->name, $params['search']);
                                        $rate = Template::highlight(number_format($collection->rates, 0), $params['search']);
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                        $linkEdit = route('admin.addRates', ['id' => $id]);
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{!! $name !!}</td>
                                        <td>{!! $rate !!} VNĐ</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
                                        <td><a href="{{ $linkEdit }}">Sửa</a></td>
                                      </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                      <div class="pagination">
                          {!! $rates->links() !!}
                      </div>
                      @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection