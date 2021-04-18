@php
    $select_customer_type = Form::select('form[customer_type]', ['0' => 'Cá nhân', '1' => 'Công ty'], @$item['customer_type'], ['class' => 'form-control']);
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm người dùng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn">
                    <a href="javascript:submitSaveUser('{{ route('admin.saveUser', 'type=save') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu</a>
                    <a href="javascript:submitSaveUser('{{ route('admin.saveUser', 'type=new') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và tạo mới</a>
                    <a href="javascript:submitSaveUser('{{ route('admin.saveUser', 'type=close') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và đóng</a>
                    <a href="{{ route('admin.listUser') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-customer" class="list-items" method="POST" action="#" enctype="multipart/form-data">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-row">
                                    <div class="col">
                                        <span>Đối tượng</span>
                                        <input name="form[provider_name]" type="text" class="form-control" value="website" readonly>
                                    </div>
                                    <div class="col">
                                        <span>Loại khách hàng</span>
                                        {!! $select_customer_type !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Email</span>
                                      <input value="{{ @$item['email'] }}" name="form[email]" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col">
                                        <span>Mật khẩu</span>
                                        <input value="{{ @$item['password'] }}" name="form[password]" id="password" type="password" class="form-control" placeholder="Mật khẩu">
                                        <input type="checkbox" style="margin-top: 15px; margin-right: 15px" onclick="showPassword()">Hiển thị mật khẩu
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Name</span>
                                        <input value="{{ @$item['name'] }}" name="form[name]" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col">
                                        <span>CMND</span>
                                        <input value="{{ @$item['CMND'] }}" name="form[CMND]" type="text" class="form-control" placeholder="CMND">
                                    </div>
                                    <div class="col">
                                        <span>Số điện thoại</span>
                                        <input value="{{ @$item['phone_number'] }}" name="form[phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Avatar</span>
                                        <input name="avatar" type="file" class="form-control">
                                        @if (isset($item['avatar']))
                                            <img style="margin-top: 20px" src="{{ asset('Images/Users/' . $item['avatar']) }}" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (isset($item['id']))
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                    @endif
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection