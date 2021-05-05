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
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/main_login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/User/css/mycss.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/toastr-master/build/toastr.min.css') }}">

</head>
<body>
    {{-- header --}}
    @include('User.Component.headerLogin')

    @yield('main-content')

    {{-- footer --}}
    {{-- @include('User.Component.footer') --}}
</body>

    <script src="{{ asset('/User/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('/User/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/User/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/User/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('/User/js/main-login.js') }}"></script>
    <script src="{{ asset('/Admin/toastr-master/build/toastr.min.js') }}"></script>

    @if (\Session::has('success'))
        <script>
            toastr.success("{{ \Session::get('success') }}", 'Thành công')
        </script>
    @endif
    <script>
        (function () {
            window.onload = function () {
                document.addEventListener("contextmenu", function (e) {
                    e.preventDefault();
                }, false);
                document.addEventListener("keydown", function (e) {
                    // "I" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
                        disabledEvent(e);
                    }
                    // "J" key
                    if (e.ctrlKey && e.shiftKey && e.keyCode === 74) {
                        disabledEvent(e);
                    }
                    // "S" key + macOS
                    if (e.keyCode === 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                        disabledEvent(e);
                    }
                    // "U" key
                    if (e.ctrlKey && e.keyCode === 85) {
                        disabledEvent(e);
                    }
                    // "C" key
                    if (e.ctrlKey && e.keyCode === 67) {
                        disabledEvent(e);
                    }
                    // "F12" key
                    if (event.keyCode === 123) {
                        disabledEvent(e);
                    }
                }, false);
                function disabledEvent(e) {
                    if (e.stopPropagation) {
                        e.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                    e.preventDefault();
                    return false;
                }
            };
        })();
    </script>
</html>