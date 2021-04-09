<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\list_user;
use App\news;
use Session;

class AdminController extends Controller
{
    public function get_list_user(Request $request){
        // fillter provider name
        $params['fillter']['provider-name'] = $request->input('provider-name', 'all');
        $params['search']['field'] = $request->input('search_field', 'all');
        $params['search']['value'] = $request->input('search_value', '');
        // khai báo model
        $user = new list_user();
        // gọi hàm model
        $users = $user->list_users($params);
        // chuyển hướng
        return view('Admin.List_user.index')->with('user' , $users)->with('params', $params);
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

    public function get_news(Request $request){
        // fillter news
        $params['fillter']['news-type'] = $request->input('news-type', 'all');
        // khai báo model
        $new = new news();
        // gọi hàm model
        $news = $new->list_news($params);
        // chuyển hướng
        return view('Admin.News.index')->with('news' , $news)->with('params', $params);
    }

    public function delete_news(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $delete = new news();
        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                $item = $delete->delete_user($id);
            }
        }
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_news(Request $request){
        return view('Admin.List_user.form');
    }
}
