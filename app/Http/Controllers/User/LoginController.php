<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;

class LoginController extends Controller
{
    public function redirect_social($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback_social($provider){
        // thử đăng nhập nếu tài khoản đã từng đăng nhập
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            session_start();
            $_SESSION["user"] = $user;
            return redirect()->route('customer.statistical');
        }

        // Lấy email kiểm tra nếu có cho phép đăng nhập
        $existingUser = User::where('email', $user->getEmail())->first();
        if ($existingUser) {
            // nếu đã có email trong CSDL update lại thông tin người dùng
            $existingUser->provider_name = 'google';
            $existingUser->provider_id = $user->getId();
            $existingUser->email = $user->getEmail();
            $existingUser->name = $user->getName();
            $existingUser->avatar = $user->getAvatar();
            $existingUser->email_verified_at = now();
            $existingUser->save();
            auth()->login($existingUser, true);
        } else {
            // chưa đăng có tài khoản trong CSDL
            // tạo id
            // $id = uniqid (rand (), true);
            // $md5c = md5($id);

            $newUser = new User();
            // $newUser->id = $md5c;
            $newUser->provider_name = 'google';
            $newUser->provider_id = $user->getId();
            $newUser->email = $user->getEmail();
            $newUser->name = $user->getName();
            $newUser->CMND = null;
            $newUser->phone_number = null;
            $newUser->password = "";
            $newUser->customer_type = 0;
            $newUser->avatar = $user->getAvatar();
            $newUser->email_verified_at = now();
            // lưu tài khoản vào CSDL
            $newUser->save();
            auth()->login($newUser, true);
        }
        // Tạo session lưu thông tin người dùng
        session_start();
        $_SESSION["user"] = $user;
        // chuyển hướng
        return redirect()->route('customer.statistical');
    }
}
