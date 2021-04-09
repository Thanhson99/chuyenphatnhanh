@php
    $select_news_type = Form::select('news-type', ['all' => 'Tất cả', 'tin chuyên ngành' => 'Tin chuyên ngành', 'tin hoạt động' => 'Tin hoạt động', 'tin khuyến mãi' => 'Tin khuyến mãi'], $params['fillter']['news-type'], ['class' => 'form-control news-type']);
@endphp

@extends('Admin.layout')

@section('admin-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý tin tức</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý tin tức</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="group-btn group-btn-list-user">
                    <a href="{{ route('admin.addNews') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Thêm tin tức</a>
                    <a href="{{ route('admin.addNews') }}" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/add.png') }}" alt="">Sửa tin tức</a>
                    <a href="javascript:submitForm('{{ route('admin.deleteNews') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa tin tức</a>
                </div>
            </div>
            <div class="row" style="padding-bottom: 20px">
                <div class="col-sm-2">
                    <form id="change-provider-name" action="{{ route('admin.listNews') }}">
                        <div class="row align-items-center">
                            <span style="padding-right: 20px">Lọc</span>
                            {!! $select_news_type !!}
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('admin.listNews') }}">
                        <div class="dropdown" style="display: flex; margin-left: 50px">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tìm kiếm theo
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tất cả</a>
                                <a class="dropdown-item" href="#">Tiêu đề</a>
                            </div>
                            <input type="text" style="width: 50%; display:block; margin: 0 10px">
                            <a href="" class="btn btn-default">Tìm kiếm</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <form id="form-list-news" action="#" method="POST">
                    <table class="data-table table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Loại tin tức</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Created at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($news->count() > 0)
                                @foreach ($news as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $title = $collection->title;
                                        $description = $collection->description;
                                        $picture = $collection->picture;
                                        $new_type = $collection->new_type;
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{{ $title }}</td>
                                        <td>{{ $description }}</td>
                                        <td>{{ $picture }}</td>
                                        <td>{{ $new_type }}</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
                                      </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                      <div class="pagination">
                          {!! $news->links() !!}
                      </div>
                      @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection