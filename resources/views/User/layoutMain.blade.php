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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlg3RJmTmhJ7lbrEMqX1F-x6dAynvYshI&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset('/User/js/mapInput.js') }}"></script>
    <script src="{{ asset('/Admin/toastr-master/build/toastr.min.js') }}"></script>

    @if (\Session::has('success'))
        <script>
            toastr.success("{{ \Session::get('success') }}", 'Thành công')
        </script>
    @endif

    {{-- <script>
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
    </script> --}}
            
    @php
        // kiểm tra đang ở route nào để active
    $route = Route::current();
    $name = Route::currentRouteName();
    if($name === "user.checkCharges"){
        echo("<script>
            
            // sending ////////////////////
            $(document).ready(function(){
                $(\"#provinces_sending\").change(()=>changeDistrictSending());
                $(\"#districts_sending\").change(()=>changeWardsSending());
            });
    
            $(function() {
                var id_provinces_sending =  $(\"select[name='form[provinces_sending]']\").val();
                if(id_provinces_sending != 0){
                    changeDistrictSending(id_provinces_sending, " . @$item['districts_sending'] . ");
                }
            });
                
            var changeDistrictSending = function(id = 0, id_districts = 0){
                var provinces_id;
                if(id == 0){
                    provinces_id = $(\"#provinces_sending\").val();
                }else{
                    provinces_id = id;
                }
               
                var url = '" . route('admin.showDistricts') . "';
                var token = $(\"input[name='_token']\").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        provinces_id: provinces_id, 
                        _token: token
                    },
                    success: function(data) {
                        $(\"select[name='form[districts_sending]']\").html(\"<option value='0'>Chọn quận/huyện</option>\");
                        $.each(data, function(key, value){
                            if(value.id == id_districts){
                                $(\"select[name='form[districts_sending]']\").append(
                                    \"<option selected='selected' value=\" + value.id + \">\" + value.name_district + \"</option>\"
                                );
                            }else{
                                $(\"select[name='form[districts_sending]']\").append(
                                    \"<option value=\" + value.id + \">\" + value.name_district + \"</option>\"
                                );
                            }
                        });
                        changeWardsSending(id_districts, " . @$item['wards_sending'] . ");
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            }
    
            var changeWardsSending = function(id = 0, id_wards = 0){
                var district_id;
                if(id == 0){
                    district_id = $(\"#districts_sending\").val();
                }else{
                    district_id = id;
                }
                var url = '" . route('admin.showWards') . "';
                var token = $(\"input[name='_token']\").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        district_id : district_id, 
                        _token: token
                    },
                    success: function(data) {
                        $(\"select[name='form[wards_sending]']\").html('<option value=\"0\">Chọn phường/xã</option>');
                        $.each(data, function(key, value){
                            if(value.id == id_wards){
                                $(\"select[name='form[wards_sending]']\").append(
                                    \"<option selected='selected' value=\" + value.id + \">\" + value.name_ward + \"</option>\"
                                );
                            }else{
                                $(\"select[name='form[wards_sending]']\").append(
                                    \"<option value=\" + value.id + \">\" + value.name_ward + \"</option>\"
                                );
                            }
                        });
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            };
            // ///// receiver////////////////
            $(document).ready(function(){
                $(\"#provinces_receiver\").change(()=>changeDistrictReceiver());
                $(\"#districts_receiver\").change(()=>changeWardsReceiver());
            });
    
            $(function() {
                var id_provinces_receiver =  $(\"select[name='form[provinces_receiver]']\").val();
                if(id_provinces_receiver != 0){
                    changeDistrictReceiver(id_provinces_receiver, " . @$item['districts_receiver'] . ");
                }
            });
                
            var changeDistrictReceiver = function(id = 0, id_districts = 0){
                var provinces_id;
                if(id == 0){
                    provinces_id = $(\"#provinces_receiver\").val();
                }else{
                    provinces_id = id;
                }
               
                var url = '" . route('admin.showDistricts') . "';
                var token = $(\"input[name='_token']\").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        provinces_id: provinces_id, 
                        _token: token
                    },
                    success: function(data) {
                        $(\"select[name='form[districts_receiver]']\").html(\"<option value='0'>Chọn quận/huyện</option>\");
                        $.each(data, function(key, value){
                            if(value.id == id_districts){
                                $(\"select[name='form[districts_receiver]']\").append(
                                    \"<option selected='selected' value=\" + value.id + \">\" + value.name_district + \"</option>\"
                                );
                            }else{
                                $(\"select[name='form[districts_receiver]']\").append(
                                    \"<option value=\" + value.id + \">\" + value.name_district + \"</option>\"
                                );
                            }
                        });
                        changeWardsReceiver(id_districts, " . @$item['wards_receiver'] . ");
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            }
    
            var changeWardsReceiver = function(id = 0, id_wards = 0){
                var district_id;
                if(id == 0){
                    district_id = $(\"#districts_receiver\").val();
                }else{
                    district_id = id;
                }
                var url = '" . route('admin.showWards') . "';
                var token = $(\"input[name='_token']\").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        district_id : district_id, 
                        _token: token
                    },
                    success: function(data) {
                        $(\"select[name='form[wards_receiver]']\").html('<option value=\"0\">Chọn phường/xã</option>');
                        $.each(data, function(key, value){
                            if(value.id == id_wards){
                                $(\"select[name='form[wards_receiver]']\").append(
                                    \"<option selected='selected' value=\" + value.id + \">\" + value.name_ward + \"</option>\"
                                );
                            }else{
                                $(\"select[name='form[wards_receiver]']\").append(
                                    \"<option value=\" + value.id + \">\" + value.name_ward + \"</option>\"
                                );
                            }
                        });
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            };
        </script>
        ");
    }
    @endphp
</html>