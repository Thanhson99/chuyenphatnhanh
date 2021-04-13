<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function statistical(){
        return view('Customer.Statistical.index');
    }

    public function logout(){
        // bắt đầu session (phiên)
        session_start();
        // Xóa dữ liệu của phiên
        if(isset($_SESSION["user"])){
            session_destroy();
        }
        return redirect()->route('home');
    }
}
