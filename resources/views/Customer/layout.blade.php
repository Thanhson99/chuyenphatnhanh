@php
    use App\User;
    // session_start();
    if(!isset($_SESSION["user"])){
        //chuyển hướng
        header("Location: http://chuyenphatnhanh.blog/page-not-found");
        exit;
    }
    // lấy ảnh
    $user = User::where('email', $_SESSION["user"]->email)->first();
    $avatar = $user['avatar'];
    $id = $user['id'];
    $name = $user['name'];
@endphp
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
    @php
        // kiểm tra đang ở route nào để active
    $route = Route::current();
    $name = Route::currentRouteName();
    if($name === "customer.addOrders"){
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
        <script>
                Number.prototype.format = function(n, x) {
                    var re = \"\\d(?=(\\d{\" + (x || 3) + \"})+\" + (n > 0 ? \"\\.\" : \"$\") + \")\";
                    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, \"g\"), \"$&,\");
                };

                document.getElementById(\"formatPrice\").addEventListener(\"keyup\",e=>{
                    // let str = e.target.value;
                    let value = e.target.value.replace(/,/g,\"\");
                    if(isNaN(value)) value=\"0\";
                    // res = str.replace(/blue/g, \"red\");
                    let number = new Number(value);
                    if(number > 500000000) number = 500000000;
                    document.getElementById(\"formatPrice\").value = number.format();
                })
            </script>
        ");
    }
    @endphp

    @php
        // kiểm tra đang ở route nào để active
    $route = Route::current();
    $name = Route::currentRouteName();
    if($name === "customer.statistical"){
        echo("<script src='https://code.highcharts.com/highcharts.js'></script>
            <script>
                function drawChart(chartID, cate, data, leftTitle, leftUnit, rightTitle, rightUnit, type = 'line') {
                    Highcharts.chart(chartID, {
                        chart: {
                            type: type
                        },
                        title: {
                            text: 'Thống kê tổng chi phí và vận đơn'
                        },
                        xAxis: {
                            categories: cate
                        },
                        yAxis: [{ //--- Primary yAxis
                            title: {
                                text: 'Chi phí (VNĐ)'
                            }
                        }, { //--- Secondary yAxis
                            title: {
                                text: 'Đơn Hàng'
                            },
                            opposite: true
                        }],
                        plotOptions: {
                            line: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }, column: {
                                dataLabels: {
                                    enabled: true
                                }
                            }
                        },
                        series: data
                    });
                }
            </script>
        ");
       function js_str($s) {
            if (!is_numeric($s)) {
                return '"' . addcslashes($s, "\0..\37\"\\") . '"';
            } else {
                return addcslashes($s, "\0..\37\"\\");
            }
        }

        function js_array($array) {
            $temp = array_map('js_str', $array);
            return '[' . implode(', ', $temp) . ']';
        }
        if(isset($data)){
            $dates = $data['dates'];
            $total_price = $data['total_price'];
            $total_order = $data['total_order'];
        }
        echo("<script>
                var lbl = " . js_array($dates) . ";
                var data = [{
                        name: 'Tổng chi phí',
                        yAxis: 0,
                        data: " . js_array($total_price) . "
                },{
                        name: 'Tổng số vận đơn',
                        yAxis: 1,
                        data: " . js_array($total_order) . "
                }];
                drawChart('my-chart', lbl, data, 'Chi phí', 'VNĐ', 'Đơn hàng', 'Số lượng');
            </script>
        ");
    }
    @endphp
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
