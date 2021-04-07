@php
    $select_provider_name = Form::select('provider-name', ['all' => 'Tất cả', 'google' => 'google', 'website' => 'website'], $params['fillter']['provider-name'], ['class' => 'form-control provider-name']);
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Home</a></li>
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
                <form id="change-provider-name" action="{{ route('admin.listUser') }}" style="width: 100%">
                    <div class="col-sm-2">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_provider_name !!}
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <form id="form-list-customer" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Email</th>
                            <th scope="col">Provider name</th>
                            <th scope="col">Name</th>
                            <th scope="col">CMND</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Customer type</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Email verify</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Created at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($user->count() > 0)
                                @foreach ($user as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $email = $collection->email;
                                        $providerName = $collection->provider_name;
                                        $name = $collection->name;
                                        $CMND = $collection->CMND;
                                        $phoneNumber = $collection->phone_number;
                                        $customerType = $collection->customer_type;
                                        $avatar = $collection->avatar;
                                        $emailVerifyAt = $collection->email_verified_at;
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{{ $email }}</td>
                                        <td>{{ $providerName }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $CMND == null ? 'Chưa có' : $CMND }}</td>
                                        <td>{{ $phoneNumber == null ? 'Chưa có' : $phoneNumber }}</td>
                                        <td>{{ $customerType == 0 ?  'Cá nhân' : 'Công ty'}}</td>
                                        <td>{!! $avatar == null ? '<img id="img-customer" src="' . asset('/Admin/dist/img/avatar4.png') . '" alt="">' : '<img id="img-customer" src="' . $avatar . '" alt="">' !!}</td>
                                        <td>{{ $emailVerifyAt }}</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
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