@php
    use App\Helper\Template;
    $select_provider_name = Form::select('provider-name', ['all' => 'Tất cả', 'google' => 'google', 'website' => 'website'], $params['fillter']['provider-name'], ['class' => 'form-control provider-name']);
    $search_field = [
        'all' => 'Tất cả',
        'email' => 'Email',
        'name' => 'Tên',
        'CMND' => 'CMND',
        'phone_number' => 'Số điện thoại'
    ];
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quản lý người dùng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn group-btn-list-user">
                    <a href="{{ route('admin.addUser') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm người dùng</a>
                    <a href="javascript:submitForm('{{ route('admin.deleteUser') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa người dùng</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 20px">
                <div class="col-sm-2">
                    <form id="change-provider-name" action="{{ route('admin.listUser') }}">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_provider_name !!}
                        </div>
                    </form>
                </div>
                <div class="col-sm-7">
                    <form id="frm-search" action="{{ route('admin.listUser') }}">
                        <div class="dropdown" style="display: flex; margin-left: 50px">
                            <button class="btn btn-default dropdown-toggle search-text" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tìm kiếm {{ mb_strtolower($search_field[$params['search']['field']]) != 'tất cả' ? mb_strtolower($search_field[$params['search']['field']]) != 'cmnd' ? 'theo ' . mb_strtolower($search_field[$params['search']['field']]) : 'theo ' . $search_field[$params['search']['field']] : mb_strtolower($search_field[$params['search']['field']]) }}
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
                <form id="form-list-customer" class="list-items" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Email</th>
                            <th scope="col">Provider name</th>
                            <th scope="col">Tên</th>
                            <th scope="col">CMND</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Loại khách hàng</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Email verify</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Sửa thông tin</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($user->count() > 0)
                                @foreach ($user as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $email = Template::highlight($collection->email, $params['search']);
                                        $providerName = $collection->provider_name;
                                        $name = Template::highlight($collection->name, $params['search']);
                                        $CMND = Template::highlight($collection->CMND, $params['search']);
                                        $phoneNumber = Template::highlight($collection->phone_number, $params['search']);
                                        $customerType = $collection->customer_type;
                                        $avatar = $collection->avatar;
                                        $emailVerifyAt = $collection->email_verified_at;
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                        $linkEdit = route('admin.addUser', ['id' => $id]);
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{!! $email !!}</td>
                                        <td>{{ $providerName }}</td>
                                        <td>{!! $name !!}</td>
                                        <td>{!! $CMND == null ? 'Chưa có' : $CMND !!}</td>
                                        <td>{!! $phoneNumber != null ? strlen(strval($phoneNumber)) == 9 ? '0' . $phoneNumber : $phoneNumber : 'Chưa có'  !!}</td>
                                        <td>{{ $customerType == 0 ?  'Cá nhân' : 'Công ty'}}</td>
                                        <td><img style="width: 100px" src="{{ $avatar != null ? strlen($avatar) <= 15 ? asset('Images/Users/' . $avatar) : $avatar : asset('/Admin/dist/img/avatar4.png') }}" alt=""></td>
                                        <td>{{ $emailVerifyAt }}</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
                                        <td><a href="{{ $linkEdit }}">Sửa</a></td>
                                      </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                      <div class="pagination">
                          {!! $user->links() !!}
                      </div>
                      @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection