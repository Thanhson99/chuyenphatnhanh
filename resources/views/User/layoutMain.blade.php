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
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/main_home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/css-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/mycss.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/toastr-master/build/toastr.min.css') }}">
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
    <script src="{{ asset('/User/js/custom.js') }}"></script>
    <script src="{{ asset('/User/js/slick.min.js') }}"></script>
    <script src="{{ asset('/User/js/main_home.min.js') }}"></script>
    <script src="{{ asset('/User/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('/User/js/fastclick.min.js') }}"></script>
    <script src="{{ asset('/User/js/timber.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset('/User/js/mapInput.js') }}"></script>
    <script src="{{ asset('/Admin/toastr-master/build/toastr.min.js') }}"></script>

    @if (\Session::has('success'))
        <script>
            toastr.success("{{ \Session::get('success') }}", 'Thành công')
        </script>
    @endif
</html>