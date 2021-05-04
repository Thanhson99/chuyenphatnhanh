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
    {{-- @php
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
                            text: 'Thống kê vận đơn'
                        },
                        xAxis: {
                            categories: cate
                        },
                        yAxis: [{ //--- Primary yAxis
                            title: {
                                text: 'Vận đơn'
                            }
                        }, /*{ //--- Secondary yAxis
                            title: {
                                text: 'Đơn Hàng, Khách Hàng'
                            },
                            opposite: true
                        }*/],
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
        }
        echo("<script>
                var lbl = " . js_array($dates) . ";
                var data = [{
                        name: 'Tổng doanh thu',
                        yAxis: 0,
                        data: " . js_array($total_price) . "
                }];
                drawChart('my-chart', lbl, data, 'Doanh thu', 'VNĐ', 'Đơn hàng', 'Số lượng');
            </script>
        ");
    }
    @endphp --}}
</html>
