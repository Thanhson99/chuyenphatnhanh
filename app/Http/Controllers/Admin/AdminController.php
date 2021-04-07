<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\list_user;
use Session;

class AdminController extends Controller
{
    public function get_list_user(){
        // khai báo model
        $user = new list_user();
        // gọi hàm model
        $users = $user->list_users();
        // chuyển hướng
        return view('Admin.List_user.index')->with('user' , $users);
    }

    public function delete_user(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $delete = new list_user();
        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                $item = $delete->delete_user($id);
            }
        }
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_user(Request $request){
        return view('Admin.List_user.form');
    }
}
