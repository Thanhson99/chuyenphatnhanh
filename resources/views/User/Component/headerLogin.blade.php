<header class="w-100 wp-header text-white py-3 pt-lg-0 pb-lg-0">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6 col-sm-6 col-4 align-self-center text-center">
                <a class="d-flex" href="{{ route('home') }}" title="Fast Shipping">
                    <img class="img-fulid logo" src="{{ asset('/User/images/icons/logo2.png') }}" alt="Fast Shipping" />
                    <p class="text-neon">Fast Shipping</p>
                </a>
            </div>
            <div class="col-lg-6 col-sm-6 d-md-flex d-none align-items-center justify-content-center">
                <a href="{{ route('user.listPostOffice') }}">
                    <input type="submit" class="login100-form-btn" value="Xem bưu cục gần đây">
                </a>
            </div>
        </div>
    </div>
</header>