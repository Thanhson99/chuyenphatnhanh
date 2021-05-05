@php
    use App\Helper\Template;
    $select_news_type = Form::select('news-type', ['all' => 'Tất cả', 'tin chuyên ngành' => 'Tin chuyên ngành', 'tin hoạt động' => 'Tin hoạt động', 'tin khuyến mãi' => 'Tin khuyến mãi'], $params['fillter']['news-type'], ['class' => 'form-control news-type']);
    $search_field = [
        'all' => 'Tất cả',
        'title' => 'Tiêu đề',
        'description' => 'Nội dung',
        'new_type' => 'Loại tin tức'
    ];
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.listUser') }}">Trang chủ</a></li>
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
                    <a href="javascript:submitFormNews('{{ route('admin.deleteNews') }}')" id="btn-delete-customer" class="btn btn-default"><img src="{{ asset('Admin/dist/img/icons/delete.png') }}" alt="">Xóa tin tức</a>
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
                <div class="col-sm-8">
                    <form id="frm-search" action="{{ route('admin.listNews') }}">
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
                <form id="form-list-news" class="list-items" action="#" method="POST">
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
                            <th scope="col">Sửa tin tức</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($news->count() > 0)
                                @foreach ($news as $key => $collection)
                                    @php
                                        $id = $collection->id;
                                        $title = Template::highlight($collection->title, $params['search']);
                                        $description = Template::highlight($collection->meta_description, $params['search']);
                                        $picture = $collection->picture;
                                        $new_type = Template::highlight($collection->new_type, $params['search']);
                                        $updatedAt = $collection->updated_at;
                                        $createdAt = $collection->created_at;
                                        $linkEdit = route('admin.addNews', ['id' => $id]);
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                        <td>{!! $title !!}</td>
                                        <td>{!! $description !!}</td>
                                        <td><img src="{{ asset('Images/News/thumb/' . $picture) }}" alt=""></td>
                                        <td>{!! $new_type !!}</td>
                                        <td>{{ $updatedAt }}</td>
                                        <td>{{ $createdAt }}</td>
                                        <td><a href="{{ $linkEdit }}">Sửa</a></td>
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