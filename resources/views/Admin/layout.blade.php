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
        @include('Admin.Component.header')
        {{-- slide bar --}}
        @include('Admin.component.slide-bar')
            
        @yield('admin-main-content')
            
        {{-- footer --}}
        @include('Admin.Component.footer')
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
    <script>
        // tỉnh thành quận huyện phường xã
        $(document).ready(function () {
            $("#provinces").change(function(){
                var provinces_id = $(this).val();
                var url = "{{ route('admin.showDistricts') }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        provinces_id: provinces_id, 
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='form[districts]']").html("<option value='0'>Chọn quận/huyện</option>");
                        $.each(data, function(key, value){
                            $("select[name='form[districts]']").append(
                                "<option value=" + value.id + ">" + value.name_district + "</option>"
                            );
                        });
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            });
            $("#districts").change(function(){
                var district_id = $(this).val();
                var url = "{{ route('admin.showWards') }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        district_id : district_id, 
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='form[wards]']").html('<option value="0">Chọn phường/xã</option>');
                        $.each(data, function(key, value){
                            $("select[name='form[wards]']").append(
                                "<option value=" + value.id + ">" + value.name_ward + "</option>"
                            );
                        });
                    },
                    error: function(){
                        console.log('Lỗi')
                    }
                });
            });
        });
    </script>
</html>
