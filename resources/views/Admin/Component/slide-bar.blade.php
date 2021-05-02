@php
    session_start();
    if(!isset($_SESSION["admin"])){
        //chuyển hướng
        header("Location: http://chuyenphatnhanh.blog/page-not-found");
        exit;
    }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown" style="display: block">
        <a href="#" class="dropdown-toggle customer-dropdown-toggle" data-toggle="dropdown">
            <img src="{{ $_SESSION["admin"]->avatar != '' ? $_SESSION["admin"]->avatar : asset('/Admin/dist/img/avatar4.png') }}" alt="Admin-logo" class="brand-image img-circle elevation-3" style="width: 80px;opacity: 0.8;">
            <span style="padding-left: 30px; color: #fff; font-weight: 800; font-size: 20px" class="brand-text font-weight-light">{{ $_SESSION["admin"]->name }}</span>
        </a>
        <span class="caret"></span></button>
        <ul class="dropdown-menu customer-dropdown-menu" style="z-index: 99999">
          <li><a href="{{ route('admin.listUser') }}">Home</a></li>
          <li><a href="{{ route('admin.logout') }}">Đăng xuất</a></li>
        </ul>
    </div>=
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @php
                    $slide_bar = [
                        'admin.listUser' => 'Quản lý người dùng',
                        'admin.listNews' => 'Quản lý tin tức',
                        'admin.listRates' => 'Quản lý giá cước',
                        'admin.listTransportationType' => 'Quản lý hình thức<br>vận chuyển',
                        'admin.listOrders' => 'Quản lý vận đơn',
                        'admin.showStatistical' => 'Thống kê'
                    ];
                    // kiểm tra đang ở route nào để active
                    $route = Route::current();
                    $name = Route::currentRouteName();
                    foreach ($slide_bar as $key => $value) {
                        if($key === $name){
                            echo('<li class="nav-item admin-bar-active">
                                    <a href="' . route($key) . '" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            ' . $value . '
                                        </p>
                                    </a>
                                </li>');
                        }else{
                            echo('<li class="nav-item">
                                    <a href="' . route($key) . '" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            ' . $value . '
                                        </p>
                                    </a>
                                </li>');
                        }
                    }
                @endphp
            </ul>
        </nav>
    </div>
</aside>