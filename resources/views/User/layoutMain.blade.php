<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FS - Fast Shipping</title>
    <link rel="icon" type="image/png" href="{{ asset('/User/images/icons/logo-FS.png') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/select2/select2.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/User/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/mycss.css') }}">

</head>
<body>
    {{-- header --}}
    @include('User.Component.header')

    @yield('main-content')

    {{-- footer --}}
    @include('User.Component.footer')
</body>

    <script src="{{ asset('/User/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('/User/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/User/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('/User/js/main.js') }}"></script>
    <script src="{{ asset('/User/js/custom.js') }}"></script>

</html>