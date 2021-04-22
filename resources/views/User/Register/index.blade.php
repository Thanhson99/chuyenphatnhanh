@extends('User.layoutLogin')

@section('main-content')

	<div class="container-login100" style="background-image: url('images/bg-02.jpeg');">
		<div class="wrap-login200 p-l-20 p-r-20 p-t-30 p-b-30">
			<form action="{{ route('user.postRegister') }}" method="POST" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Đăng ký
				</span>
				@if ( session()->has('message') )
					<div class="alert alert-danger">{{ session()->get('message') }}</div>
				@endif
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<img class="img-banner-register" src="images/banner.png">
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="wrap-input100 validate-input m-b-20 col-sm" data-validate="Nhập tên khách hàng">
									<input class="input100" type="text" name="userName" placeholder="Nhập tên khách hàng">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="row">
								<div class="wrap-input100 validate-input m-b-20 col-sm" data-validate="Nhập số CMND">
									<input class="input100" type="text" name="CMND" placeholder="Nhập số CMND">
									<span class="focus-input100"></span>
								</div>
								<div class="wrap-input100 validate-input m-b-20 col-sm cl-right m-l-10" data-validate="Nhập số điện thoại">
									<input class="input100" type="text" name="phone_number" placeholder="Nhập số điện thoại">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="row">
								<div class="wrap-input100 validate-input m-b-20 col-sm" data-validate="Nhập địa chỉ Email">
									<input class="input100" type="text" name="email" placeholder="Nhập địa chỉ Email">
									<span class="focus-input100"></span>
								</div>
								<select class="form-select m-b-20 col-sm-4 register-selected cl-right" required="" name="customer_type">
									<option selected>-- Loại khách hàng --</option>
									<option value="0">Cá nhân</option>
									<option value="1">Công ty</option>
								</select>
							</div>
							<div class="row">
								<div class="wrap-input100 validate-input m-b-20" data-validate = "Nhập mật khẩu">
									<input class="input100" type="password" name="pass" placeholder="Nhập mật khẩu">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="row">
								<div class="wrap-input100 validate-input m-b-20" data-validate = "Nhập lại mật khẩu">
									<input class="input100" type="password" name="rePass" placeholder="Nhập lại mật khẩu">
									<span class="focus-input100"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value="Đăng ký">
				</div>
				<div class="container-login100-form-btn redirect-login">
					<p>Bạn đã có tài khoản ? <a class="txt2 hov1" href="{{ route('user.login') }}">Đăng nhập ngay</a></p>
				</div>
				@csrf
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

@endsection