@php
    $select_day = Form::select('day', ['7' => '7 ngày', '30' => '30 ngày'], @$day, ['class' => 'form-control', 'id' => 'select_day']);
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Home</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="col-sm-3">
                <form id="submit-select-day" style="display: flex" action="{{ route('admin.showStatistical') }}">
                    <label style="width: 100%; padding: 7px">Chọn loại thống kê</label>
                    {!! $select_day !!}
                </form>
            </div>
            <div id="my-chart" style="min-width: 1140px; height: 500px; margin: 15px auto 0;"></div>
        </div>
    </div>
</div>
@endsection