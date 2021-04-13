@php
    use App\Helper\Template;
    // $select_transportation_type = Form::select('transportation-type', ['all' => 'Tất cả', 'transportation_type' => 'Hình thức vận chuyển', 'rates' => 'giá'], $params['fillter']['transportation-type'], ['class' => 'form-control transportation-type']);
    $search_field = [
        'all' => 'Tất cả',
        'transportation_type' => 'Hình thức vận chuyển',
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
                    <h1 class="m-0">Quản lý hình thức vận chuyển</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý hình thức vận chuyển</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn group-btn-list-user">
                    <a href="{{ route('admin.addTransportationType') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm hình thức vận chuyển</a>
                    <a href="{{ route('admin.addTransportationType') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Sửa hình thức vận chuyển</a>
                    <a href="javascript:submitForm('{{ route('admin.deleteTransportationType') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa hình thức vận chuyển</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 20px">
                {{-- <div class="col-sm-2">
                    <form id="change-provider-name" action="{{ route('admin.listTransportationType') }}">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_transportation_type !!}
                        </div>
                    </form>
                </div> --}}
                <div class="col-sm-10">
                    <form id="frm-search" action="{{ route('admin.listTransportationType') }}">
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
                <form id="form-transportation-type" class="list-items" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Hình thức vận chuyển</th>
                            <th scope="col">Giá</th>
                            <th scope="col">created_at</th>
                            <th scope="col">updated_at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($transportation->count() > 0)
                                @foreach ($transportation as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $transportation_type = Template::highlight($collection->transportation_type, $params['search']);
                                        $rates = Template::highlight(number_format($collection->rates, 0), $params['search']);
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{!! $transportation_type !!}</td>
                                        <td>{!! $rates !!} VNĐ</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
                                      </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                      <div class="pagination">
                          {!! $transportation->links() !!}
                      </div>
                      @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection