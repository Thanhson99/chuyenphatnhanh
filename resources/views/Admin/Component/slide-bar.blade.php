@php
    session_start();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.listUser') }}" class="brand-link">
        <img src="{{ $_SESSION["admin"]->avatar != '' ? $_SESSION["admin"]->avatar : asset('/Admin/dist/img/avatar4.png') }}" alt="Admin-logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;">
        <span class="brand-text font-weight-light">{{ $_SESSION["admin"]->name }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </li>
                <li class="nav-item  admin-bar-active">
                    <a href="{{ route('admin.listUser') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý tin tức
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý giá cước
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="display: inline-flex" href="#" class="nav-link">
                        <i class="nav-icon fas fa-th" style="margin-top: .2rem; margin-right: .4rem;"></i>
                        <p>
                            Quản lý hình thức<br>vận chuyển
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
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