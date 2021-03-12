@extends('User.layoutLogin')

@section('main-content')

	<div class="container-login100" style="background-image: url('images/bg-02.jpeg');">
		<div class="wrap-login100 p-l-35 p-r-10 p-t-50 p-b-30">
			<form  action="{{ route('user.postLogin') }}" method="POST" class="login100-form validate-form">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<img class="img-banner" src="images/banner.png">
						</div>
						<div class="col-sm-6">
							<span class="login100-form-title p-b-37">
								Đăng nhập
							</span>
							@if ( session()->has('message') )
								<div class="alert alert-danger">{{ session()->get('message') }}</div>
							@endif

							<div class="wrap-input100 validate-input m-b-20" data-validate="Nhập địa chỉ Email">
								<input class="input100" type="text" name="email" placeholder="Nhập địa chỉ Email">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-25" data-validate = "Nhập mật khẩu">
								<input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
								<span class="focus-input100"></span>
							</div>
							<div class="container-login100-form-btn">
								<input type="submit" class="login100-form-btn" value="Đăng nhập">
							</div>
							<div class="text-center p-t-40 p-b-20">
								<span class="txt1">
									Hoặc đăng nhập bằng
								</span>
							</div>
							<div class="flex-c">
								<a href="{{ route('login.provider', 'google') }}" class="login100-social-item"	>
									<img  style="width: 30px" src="images/icons/icon-google.png" alt="GOOGLE">
								</a>
								<a href="{{ route('loginfb.provider')}}" class="login100-social-item"	>
									<img  style="width: 30px" src="images/icons/icon-fb.png" alt="GOOGLE">
								</a>
							</div>
							<div class="text-center redirect-login">
								<a href="{{ route('user.postRegister') }}" class="txt2 hov1">
									Đăng ký
								</a>
							</div>
						</div>
					</div>
				</div>
				@csrf
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

@endsection