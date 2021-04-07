@php
    session_start();
@endphp
<header class="w-100 wp-header text-black py-3 pt-lg-0 pb-lg-0 customer-header">
    <div class="container">
        <div class="row d-flex">
            <div class="customer-left-header col-lg-6 col-sm-6 col-4 align-self-center text-center">
                <a class="d-flex" href="{{ route('customer.statistical') }}" title="Fast Shipping">
                    <img class="img-fulid logo customer-logo-header" src="{{ asset('/User/images/icons/logo2.png') }}" alt="Fast Shipping" />
                    <p class="text-neon">Fast Shipping</p>
                </a>
            </div>
            <div class="customer-right-header col-lg-6 col-sm-6 d-md-flex d-none align-items-center">
                <div class="dropdown" style="display: block">
                    <a href="#" class="dropdown-toggle customer-dropdown-toggle" data-toggle="dropdown">
                        <img id="customer-avatar" src="{{ $_SESSION["user"]->avatar != '' ? $_SESSION["user"]->avatar : asset('/Admin/dist/img/avatar4.png') }}" alt="">
                        <h2 id="customer-name">{{ $_SESSION["user"]->name }}</h2>
                    </a>
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu customer-dropdown-menu" style="z-index: 99999">
                      <li><a href="#">Thông tin cá nhân</a></li>
                      <li><a href="{{ route('customer.logout') }}">Đăng xuất</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</header>

<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block"> 
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="navbar-search-block">
                </div>
            </li>
        </ul>
    </nav>