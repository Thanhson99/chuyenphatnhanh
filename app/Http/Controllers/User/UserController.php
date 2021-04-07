<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\list_post_office;
use App\Admin;
use Session;

class UserController extends Controller
{
    public function login(Request $request){
        // lấy dữ liệu user
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        // kiểm tra user tồn tại
        if(isset($user)){
            // lấy thông tin user
            session_start();
            $_SESSION["user"] = $user;
            Session::flash('success', 'Đăng nhập thành công');
            //chuyển hướng sau khi login
            return redirect()->route('customer.statistical');
        }
        // Lấy dữ liệu admin
        $admin = Admin::where('email', $request->email)->where('password', $request->password)->first();
        // kiểm tra admin tồn tại
        if(isset($admin)){
            // lấy thông tin admin
            session_start();
            $_SESSION["admin"] = $admin;
            Session::flash('success', 'Đăng nhập thành công');
            //chuyển hướng sau khi login
            return redirect()->route('admin.listUser');
        }
        // trả về nếu email hoặc password không đúng
        return redirect()->route('user.login')->with('message', 'Tài khoản hoặc mật khẩu không đúng.');
    }

    public function register(Request $request){   
        // kiểm tra email
        $user = User::where('email', $request->email)->first();
        $admin = Admin::where('email', $request->email)->first();
        // tạo regex
        $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
        $regexPhonenumber = '/(84|0[3|5|7|8|9])+([0-9]{8})\b/';
        $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,50}$/';

        // lấy độ dài CMND
        $lenCMND = count(str_split(strval($request->CMND)));

        // kiểm tra các trường hợp
        if(isset($admin)){
            return redirect()->route('user.register')->with('message', 'Email đã được sử dụng.');
        }elseif(!preg_match($regexEmail, $request->email)) {
            return redirect()->route('user.register')->with('message', 'Email không đúng định dạng.');
        }elseif(isset($user)){
            return redirect()->route('user.register')->with('message', 'Email đã được sử dụng.');
        }elseif(!preg_match($regexPhonenumber, $request->phone_number)){
            return redirect()->route('user.register')->with('message', 'Số điện thoại không đúng hoặc không tồn tại.');
        }elseif($lenCMND != 9 && $lenCMND != 12){
            return redirect()->route('user.register')->with('message', 'Số chứng minh nhân dân không đúng hoặc không tồn tại.');
        }elseif(!preg_match($regexPassword, $request->pass)){
            return redirect()->route('user.register')->with('message', 'Mật khẩu phải có độ dài 8-50 ký tự, phải có tối thiểu 1 chữ thường, 1 chữ in hoa và 1 chữ số');
        }elseif(!($request->pass === $request->rePass)){
            return redirect()->route('user.register')->with('message', 'Mật khẩu không trùng khớp.');
        }

        
        // tạo id
        // $id = uniqid (rand (), true);
        // $md5c = md5($id);

        // tạo user
        $newUser = new User();
        // $newUser->id = $md5c;
        $newUser->provider_name = 'website';
        $newUser->provider_id = '';
        $newUser->email = $request->email;
        $newUser->name = $request->userName;
        $newUser->CMND = strval($request->CMND);
        $newUser->phone_number = $request->phone_number;
        $newUser->password = $request->pass;
        $newUser->customer_type = $request->customer_type;
        $newUser->avatar = '';
        $newUser->email_verified_at = now();
        $newUser->remember_token = '';
        // lưu vào csdl
        $newUser->save();
        // chuyển hướng
        Session::flash('success', 'Đăng ký thành công');
        return redirect()->route('user.login');
    }

    public function get_post_office(){
        // khai báo
        $office = new list_post_office();
        // lấy dữ liệu các bưu cục
        $item = $office->list_office();
        // chuyển hướng
        return view('User.Other.ListPostOffice')->with('item' , $item);
    }
}
