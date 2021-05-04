@extends('User.layoutMain')

@section('main-content')

    <div class="container clearfix mt-4">
        <div class="news-menu">
            <a href="{{ route('user.news', 'type=new') }}" class="active">Mới nhất</a>
            <a href="{{ route('user.news', 'type=specialized') }}">Tin chuyên ngành</a>
            <a href="{{ route('user.news', 'type=wok') }}">Tin hoạt động</a>
            <a href="{{ route('user.news', 'type=sale') }}">Tin khuyến mãi</a>
        </div>
        <div class="main-content">
            @if (isset($data))
                @foreach ($data as $key => $value)
                    <article class="post type-post status-publish format-standard has-post-thumbnail sticky hentry">
                        <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                            <div class="post-thumbnail mr-md-3">
                                <a href="{{ route('user.showNews', ['id' => $value->id]) }}" class="post-title">
                                    <img
                                        width="920"
                                        height="500"
                                        src="{{ asset('Images/News/standard/' . $value->picture) }}"
                                        class="img-fluid wp-post-image"
                                    />
                                </a>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <a href="{{ route('user.showNews', ['id' => $value->id]) }}" class="post-title"> <h2>{{ $value->title }}</h2> </a>
                                <div class="post-desc" style="height: 130px; overflow: hidden">
                                    <p style="height: auto; overflow: hidden">
                                        {{ $value->description }}
                                    </p>
                                </div>
                                <div class="post-meta d-flex justify-content-between align-items-center">
                                    <div class="post-date">
                                        <em>Ngày đăng: {{ $value->created_at }}</em>
                                    </div>
                                    <div class="social-share-icons">
                                        <a
                                            href="https://www.facebook.com/son.vi.99/"
                                            target="_blank"
                                        >
                                            <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                        </a>
                                        <a class="btn-copy" data-toggle="tooltip" data-placement="top" title="Sao chép liên kết" data-url="#">
                                            <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endif

            <div class="pagination">
                {!! $data->links() !!}
            </div>
        </div>
        <aside id="sidebar" class="mb-4">
            <div class="most-viewed">
                <div class="block-title bottom-line"><span class="ntl-Shipping-Car"></span> Tin được xem nhiều</div>
                <div class="news-list">
                    @if (isset($topNews))
                        @foreach ($topNews as $key => $value)
                            <article class="post type-post status-publish format-standard has-post-thumbnail sticky hentry">
                                <div class="post-container d-flex flex-column flex-md-row justify-content-between">
                                    <div class="post-thumbnail mr-md-3">
                                        <a href="{{ route('user.showNews', ['id' => $value->id]) }}" class="post-title">
                                            <img
                                                width="920"
                                                height="500"
                                                src="{{ asset('Images/News/standard/' . $value->picture) }}"
                                                class="img-fluid wp-post-image"
                                            />
                                        </a>
                                    </div>
                                    <div class="post-content d-flex flex-column">
                                        <a href="{{ route('user.showNews', ['id' => $value->id]) }}" class="post-title"> <h2>{{ $value->title }}</h2> </a>
                                        <div class="post-meta d-flex justify-content-between align-items-center">
                                            <div class="post-date">
                                                <em>Ngày đăng: {{ $value->created_at }}</em>
                                            </div>
                                            <div class="social-share-icons">
                                                <a href="https://www.facebook.com/son.vi.99/" target="_blank">
                                                    <span class="ntl-Facebook1"><span class="path1"></span><span class="path2"></span></span>
                                                </a>
                                                <a class="btn-copy" data-toggle="tooltip" data-placement="top" title="Sao chép liên kết" data-url="#">
                                                    <span class="ntl-Link"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </aside>
    </div>
@endsection