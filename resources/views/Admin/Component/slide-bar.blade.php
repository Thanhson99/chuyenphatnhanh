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
    </div>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item admin-bar-active">
                    <a href="{{ route('admin.listUser') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.listNews') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý tin tức
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.listRates') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý giá cước
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="display: inline-flex" href="{{ route('admin.listTransportationType') }}" class="nav-link">
                        <i class="nav-icon fas fa-th" style="margin-top: .2rem; margin-right: .4rem;"></i>
                        <p>
                            Quản lý hình thức<br>vận chuyển
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.listOrders') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý vận đơn
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Thống kê
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>