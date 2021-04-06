@extends('Admin.layout')

@section('admin-main-content')
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
                    <a href="#" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm người dùng</a>
                    <a href="#" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa người dùng</a>
                </div>
            </div>
            <div class="row">
                <form id="form-list-customer" action="" id="">
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
                          <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection