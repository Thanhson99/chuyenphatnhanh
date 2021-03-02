<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        if(isset($user)){
            return redirect()->route('home');
        }
        return redirect()->route('user.login')->with('message', 'Tài khoản hoặc mật khẩu không đúng.');
    }

    public function register(Request $request){

            $newUser = new User();
            $newUser->provider_name = 'website';
            $newUser->provider_id = '';
            $newUser->email = $request->email;
            $newUser->name = $request->userName;
            $newUser->CMND = $request->CMND;
            $newUser->phoneNumber = $request->phoneNumber;
            $newUser->password = $request->pass;
            $newUser->customerType = $request->customerType;
            $newUser->avatar = '';
            $newUser->email_verified_at = now();
            $newUser->remember_token = '';
            $newUser->save();
            return redirect()->route('user.login');
    }
}
