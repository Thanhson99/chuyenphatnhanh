<!DOCTYPE html>
<html lang="en" style="height: auto;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FS - Fast Shipping</title>
        <link rel="icon" type="image/png" href="{{ asset('/User/images/icons/logo-FS.png') }}"/>
        <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('Admin/dist/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('Admin/toastr-master/build/toastr.min.css') }}">
    </head>
    <body class="sidebar-mini" style="height: auto;">
        {{-- header --}}
        @include('Customer.Component.header')
        {{-- slide bar --}}
        @include('Customer.component.slide-bar')
            
        @yield('Customer-main-content')
            
        {{-- footer --}}
        @include('Customer.Component.footer')
    </body>
    <script src="{{ asset('/Admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/Admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('/Admin/dist/js/custome.js') }}"></script>
    <script src="{{ asset('/Admin/toastr-master/build/toastr.min.js') }}"></script>
    @if (\Session::has('success'))
        <script>
            toastr.success("{{ \Session::get('success') }}", 'Thành công')
        </script>
    @endif
</html>
