@php
    if(isset($user)){
        $id = 0;
        $name = "";
        $customer_type = 0;
        $provider_name = "";
        $email = "";
        $password = "";
        $cmnd = "";
        $phoneNumber = 0;
        $avatar = "";
        foreach ($user as $key => $value) {
            $name = $value->name;
            $customer_type = $value->customer_type;
            $provider_name = $value->provider_name;
            $email = $value->email;
            $password = $value->password;
            $cmnd = $value->CMND;
            $phoneNumber = $value->phone_number;
            $avatar = $value->avatar;
            $id = $value->id;
        }
        // dd($user);
    }
    $select_customer_type = Form::select('form[customer_type]', ['0' => 'Cá nhân', '1' => 'Công ty'], @$customer_type, ['class' => 'form-control']);
@endphp
@extends('Customer.layout')

@section('Customer-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn">
                    <a href="javascript:submitSaveUser('{{ route('customer.saveInfo', 'type=save') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu</a>
                    <a href="javascript:submitSaveUser('{{ route('customer.saveInfo', 'type=close') }}')" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/save.png') }}" alt="">Lưu và đóng</a>
                    <a href="{{ route('customer.statistical') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/close.png') }}" alt="">Đóng</a>
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
                                        <input name="form[provider_name]" type="text" class="form-control" value="{{ @$provider_name }}" readonly>
                                    </div>
                                    <div class="col">
                                        <span>Loại khách hàng</span>
                                        {!! $select_customer_type !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Email</span>
                                      <input value="{{ @$email }}" name="form[email]" type="text" class="form-control" placeholder="Email" readonly>
                                    </div>
                                    <div class="col">
                                        <span>Mật khẩu</span>
                                        @if (@$password != "")
                                            <input value="{{ @$password }}" name="form[password]" id="password" type="password" class="form-control" placeholder="Mật khẩu">
                                            <input type="checkbox" style="margin-top: 15px; margin-right: 15px" onclick="showPassword()">Hiển thị mật khẩu
                                        @else
                                            <input value="Chưa có mật khẩu" name="form[password]" id="password" type="text" class="form-control" placeholder="Mật khẩu">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Name</span>
                                        <input value="{{ @$name }}" name="form[name]" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col">
                                        <span>CMND</span>
                                        <input value="{{ @$cmnd != "" ? @$cmnd : 'Chưa có' }}" name="form[CMND]" type="text" class="form-control" placeholder="CMND">
                                    </div>
                                    <div class="col">
                                        <span>Số điện thoại</span>
                                        <input value="{{ @$phoneNumber != 0 ? strlen(strval(@$phoneNumber)) == 9 ? '0' . @$phoneNumber : @$phoneNumber : 'Chưa có' }}" name="form[phone_number]" type="text" class="form-control" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <span>Avatar</span>
                                        <input name="avatar" type="file" class="form-control">
                                        @if (@$avatar != "")
                                            <img style="margin-top: 20px" src="{{ asset('Images/Users/' . $avatar) }}" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (isset($user))
                        <input type="hidden" name="id" value="{{ @$id }}">
                    @endif
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection