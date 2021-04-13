@php
    $select_customer_type = Form::select('Loại khách hàng', ['0' => 'Cá nhân', '1' => 'Công ty'], null, ['class' => 'form-control']);
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
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Lưu</a>
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Lưu và tạo mới</a>
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Lưu và đóng</a>
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Đóng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-customer" class="list-items" action="" id="">
                    <div class="form-row">
                        <div class="col">
                            <span>Đối tượng</span>
                            <input type="text" class="form-control" value="website" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <span>Email</span>
                          <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <span>Name</span>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <span>Phone number</span>
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="col">
                            <span>Loại khách hàng</span>
                            {!! $select_customer_type !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <span>CMND</span>
                            <input type="text" class="form-control" placeholder="CMND">
                        </div>
                        <div class="col">
                            <span>Avatar</span>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection