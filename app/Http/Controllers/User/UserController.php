<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\list_post_office;

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
        // kiểm tra email
        $user = User::where('email', $request->email)->first();
        // tạo regex
        $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
        $regexPhonenumber = '/(84|0[3|5|7|8|9])+([0-9]{8})\b/';

        if (!preg_match($regexEmail, $request->email)) {
            return redirect()->route('user.register')->with('message', 'Email không đúng định dạng.');
        }elseif(isset($user)){
            return redirect()->route('user.register')->with('message', 'Email đã được sử dụng.');
        }elseif(!preg_match($regexPhonenumber, $request->phone_number)){
            return redirect()->route('user.register')->with('message', 'Số điện thoại không đúng hoặc không tồn tại.');
        }elseif(!($request->pass === $request->rePass)){
            return redirect()->route('user.register')->with('message', 'Mật khẩu không trùng khớp.');
        }

        
        // tạo id
        // $id = uniqid (rand (), true);
        // $md5c = md5($id);

        $newUser = new User();
        // $newUser->id = $md5c;
        $newUser->provider_name = 'website';
        $newUser->provider_id = '';
        $newUser->email = $request->email;
        $newUser->name = $request->userName;
        $newUser->CMND = $request->CMND;
        $newUser->phone_number = $request->phone_number;
        $newUser->password = $request->pass;
        $newUser->customer_type = $request->customer_type;
        $newUser->avatar = '';
        $newUser->email_verified_at = now();
        $newUser->remember_token = '';
        $newUser->save();
        return redirect()->route('user.login');
    }

    public function get_post_office(){
        $office = new list_post_office();
        $item = $office->list_office();
        return view('User.Other.ListPostOffice')->with('item' , $item);
    }
}
