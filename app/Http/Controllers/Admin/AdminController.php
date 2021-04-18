<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\list_user;
use App\news;
use App\transportation_type;
use App\rates;
use App\orders;
use App\detail_orders;
use App\User;
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

    public function save_user(Request $request){
        // validate
        $validatedData = $request->validate([
            'form.name' => 'required|min:3|max:50',
            'form.email' => 'required|min:3|max:50',
            'form.password' => 'required|min:8|max:50',
            'form.CMND' => 'required|min:9|max:12',
            'form.phone_number' => 'required|min:10|max:10'
        ],
        [
            'required' => ":attribute không được để trống",
            'min' => ":attribute ít nhất :min ký tự",
            'max' => ":attribute vượt quá :max ký tự"
        ],
        [
            'form.name' => 'Tên',
            'form.email' => 'Email',
            'form.password' => 'Mật khẩu',
            'form.CMND' => 'CMND',
            'form.phone_number' => 'Số điện thoại'
        ]);

        // tạo mode save dữ liệu
        $params = $request->all();
        $user = new User();
        $id = $user->saveItem($params);
        // kiểm tra điều kiện
        if($request->type == 'close'){
            Session::flash('success', 'Thêm người dùng thành công');
            return redirect()->route('admin.listUser');
        }
        if($request->type == 'new'){
            Session::flash('success', 'Thêm người dùng thành công');
            return redirect()->route('admin.addUser');
        }
        if($request->type == 'save'){
            Session::flash('success', 'Thêm người dùng thành công');
            return redirect()->route('admin.addUser', ['id' => $id]);
        }
    }

    public function delete_user(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $delete = new list_user();
        $deleteImage = new User();
        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                // xóa ảnh
                $deleteImage->removeImage($id);
                // xóa database
                $delete->delete_user($id);
            }
        }
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_user(Request $request){
        $item = [];
        // kiểm tra id nếu tồn tại đưa đến trang sửa không có id đưa đến tragn thêm
        if(isset($request->id)){
            $item = User::find($request->id);
        }
        return view('Admin.List_user.form')->with('item', $item);
    }

    public function get_news(Request $request){
        // fillter news
        $params['fillter']['news-type'] = $request->input('news-type', 'all');
        $params['search']['field'] = $request->input('search_field', 'all');
        $params['search']['value'] = $request->input('search_value', '');
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
                // xóa ảnh
                $delete->removeImage($id);
                // xóa database
                $delete->delete_news($id);
            }
        }
        // thông báo
        Session::flash('success', 'Đã xóa thành công');
        // chuyển hướng
        return redirect()->back();
    }

    public function add_news(Request $request){
        $item = [];
        // kiểm tra id nếu tồn tại đưa đến trang sửa không có id đưa đến tragn thêm
        if(isset($request->id)){
            $item = news::find($request->id);
        }
        return view('Admin.News.form')->with('item', $item);
    }

    public function save_news(Request $request){
        // validate
        $validatedData = $request->validate([
            'form.title' => 'required|min:3|max:70',
            'form.description' => 'required|min:3|max:1000',
        ],
        [
            'required' => ":attribute không được để trống",
            'min' => ":attribute ít nhất :min ký tự",
            'max' => ":attribute vượt quá :max ký tự",
        ],
        [
            'form.title' => 'Tiêu đề',
            'form.description' => 'Nội dung'
        ]);

        // tạo mode save dữ liệu
        $params = $request->all();
        $new = new news();
        $id = $new->saveItem($params);
        // kiểm tra điều kiện
        if($request->type == 'close'){
            Session::flash('success', 'Thêm tin tức thành công');
            return redirect()->route('admin.listNews');
        }
        if($request->type == 'new'){
            Session::flash('success', 'Thêm tin tức thành công');
            return redirect()->route('admin.addNews');
        }
        if($request->type == 'save'){
            Session::flash('success', 'Thêm tin tức thành công');
            return redirect()->route('admin.addNews', ['id' => $id]);
        }
    }

    public function get_transportation_type(Request $request){
        // fillter 
        $params['search']['field'] = $request->input('search_field', 'all');
        $params['search']['value'] = $request->input('search_value', '');
        // khai báo model
        $transportation = new transportation_type();
        // gọi hàm model
        $transportation_type = $transportation->list_transportation_type($params);
        // chuyển hướng
        return view('Admin.Transportation_type.index')->with('transportation' , $transportation_type)->with('params', $params);
    }

    public function delete_transportation_type(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $delete = new transportation_type();
        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                $delete->delete_transportation_type($id);
            }
        }
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_transportation_type(Request $request){
        $item = [];
        // kiểm tra id nếu tồn tại đưa đến trang sửa không có id đưa đến tragn thêm
        if(isset($request->id)){
            $item = transportation_type::find($request->id);
        }
        return view('Admin.Transportation_type.form')->with('item', $item);
    }

    public function save_transportation_type(Request $request){
        // validate
        $validatedData = $request->validate([
            'form.transportation_type' => 'required|min:3|max:70'
        ],
        [
            'required' => ":attribute không được để trống",
            'min' => ":attribute ít nhất :min ký tự",
            'max' => ":attribute vượt quá :max ký tự",
        ],
        [
            'form.transportation_type' => 'Loại hình vận chuyển'
        ]);

        // tạo mode save dữ liệu
        $params = $request->all();
        $new = new transportation_type();
        $id = $new->saveItem($params);
        // kiểm tra điều kiện
        if($request->type == 'close'){
            Session::flash('success', 'Thêm hình thức vận chuyển thành công');
            return redirect()->route('admin.listTransportationType');
        }
        if($request->type == 'new'){
            Session::flash('success', 'Thêm hình thức vận chuyển thành công');
            return redirect()->route('admin.addTransportationType');
        }
        if($request->type == 'save'){
            Session::flash('success', 'Thêm hình thức vận chuyển thành công');
            return redirect()->route('admin.addTransportationType', ['id' => $id]);
        }
    }
    
    public function get_rates(Request $request){
        $params['search']['field'] = $request->input('search_field', 'all');
        $params['search']['value'] = $request->input('search_value', '');
        // khai báo model
        $rate = new rates();
        // gọi hàm model
        $rates = $rate->list_rates($params);
        // chuyển hướng
        return view('Admin.Rates.index')->with('rates' , $rates)->with('params', $params);
    }

    public function delete_rates(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $delete = new rates();
        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                $delete->delete_rates($id);
            }
        }
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_rates(Request $request){
        $item = [];
        // kiểm tra id nếu tồn tại đưa đến trang sửa không có id đưa đến tragn thêm
        if(isset($request->id)){
            $item = rates::find($request->id);
        }
        return view('Admin.rates.form')->with('item', $item);
    }

    public function save_rates(Request $request){
        // validate
        $validatedData = $request->validate([
            'form.name' => 'required|min:3|max:70'
        ],
        [
            'required' => ":attribute không được để trống",
            'min' => ":attribute ít nhất :min ký tự",
            'max' => ":attribute vượt quá :max ký tự",
        ],
        [
            'form.name' => 'Tên loại hàng'
        ]);

        // tạo mode save dữ liệu
        $params = $request->all();
        $rates = new rates();
        $id = $rates->saveItem($params);
        // kiểm tra điều kiện
        if($request->type == 'close'){
            Session::flash('success', 'Thêm giá cước thành công');
            return redirect()->route('admin.listRates');
        }
        if($request->type == 'new'){
            Session::flash('success', 'Thêm giá cước thành công');
            return redirect()->route('admin.addRates');
        }
        if($request->type == 'save'){
            Session::flash('success', 'Thêm giá cước thành công');
            return redirect()->route('admin.addRates', ['id' => $id]);
        }
    }

    public function get_orders(Request $request){
        $params['fillter']['status'] = $request->input('status', 'all');
        $params['search']['field'] = $request->input('search_field', 'all');
        $params['search']['value'] = $request->input('search_value', '');

        // khai báo model
        //lấy detail model
        $detail_order = new detail_orders();
        $detail_orders = $detail_order->list_detail_orders();
        //lấy order
        $order = new orders();
        $orders = $order->list_orders($params);

        // chuyển hướng
        return view('Admin.Orders.index')->with('orders' , $orders)->with('params', $params)->with('detail_orders', $detail_orders);
    }

    public function delete_orders(Request $request){
        // lấy các id cần xóa
        $arrCbid = $request->cbid;
        // khai báo model
        $deleteDetailOrder = new detail_orders();
        $order = new orders();

        if(count($arrCbid) > 0){
            foreach($arrCbid as $key => $id){
                //lấy order id tương ứng vs detail id
                $order_id = $deleteDetailOrder->get_order_id($id);
                // xóa
                $order->delete_orders($order_id[0]->orders_id);
                $deleteDetailOrder->delete_detail_orders($id);
            }
        }
        // thông báo
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->back();
    }

    public function add_orders(Request $request){
        return view('Admin.List_user.form');
    }

    public function logout(){
        // bắt đầu session (phiên)
        session_start();
        // Xóa dữ liệu của phiên
        if(isset($_SESSION["admin"])){
            session_destroy();
        }
        return redirect()->route('home');
    }

    public function redirect_page(){
        Session::flash('success', 'Bạn cần phải đăng nhập trước');
        return redirect()->route('home');
    }
}
