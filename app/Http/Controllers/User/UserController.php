<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\list_post_office;
use App\Admin;
use Session;
use App\orders;
use App\detail_orders;
use App\rates;
use App\transportation_type;
use App\provinces;
use App\districts;
use App\wards;
use App\distanceAddress;
use App\news;

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

    public function show_orders(Request $request){
        $params = $request->all();
        $id = $params['bill'];
        $orders_id = 0;
        $stock_rates_id = 0;
        $stock_rates_name = "";
        $transportation_type_id = 0;
        $transportation_type_name = "";
        $status = "";
        $time = "";
        $new_time = "";
        $receiver_name = "";
        $total_price = 0;
        if($id == null){
            return view('User.Other.BillOfLading')->with('orders', null)->with('id', $id);
        }
        // khai báo model
        $order = new orders();
        $orders = $order->get_orders_by_id($id);

        foreach($orders as $key => $collection){
            $transportation_type_id = $collection->transportation_id;
            $orders_id = $collection->id_order;
            $status = $collection->status;
            $time = $collection->created_at;
        }

        $detail_order = new detail_orders();
        $detail_orders = $detail_order->get_detail_order_by_id($orders_id);

        foreach($detail_orders as $key => $collection){
            $stock_rates_id = $collection->stock_id;
            $receiver_name = $collection->receiver_name;
            $total_price = $collection->total_price;
        }

        $rate = new rates();
        $stock_rate = $rate->get_stock_rates_by_id($stock_rates_id);
        foreach($stock_rate as $key => $collection){
            $stock_rates_name = $collection->name;
        }

        $transportation = new transportation_type();
        $transportation_type = $transportation->get_transportation_type_by_id($transportation_type_id);
        foreach($transportation_type as $key => $collection){
            $transportation_type_name = $collection->transportation_type;
        }

        if($time != ""){
            $arrDate = explode("-", $time);
            // lấy ngày cần thay đổi
            $day = $arrDate[2];
            // chuyển phát nhanh
            if($transportation_type_id == 1){
                $arrDate[2] = (string)((int)$day+2);
            }
            // chuyển phát đường bộ
            if($transportation_type_id == 2){
                $arrDate[2] = (string)((int)$day+5);
            }
            // chuyển phát tiết kiệm
            if($transportation_type_id == 3){
                $arrDate[2] = (string)((int)$day+1);
            }
            // chuyển phát hỏa tốc
            if($transportation_type_id == 4){
                $arrDate[2] = (string)((int)$day+3);
            }
            $new_time =  implode("/", $arrDate);
        }

        $data = ['stock_rate_name' => $stock_rates_name,
                'id' => $id,
                'transportation_type_name' => $transportation_type_name,
                'status' => $status,
                'receiver_name' => $receiver_name,
                'new_time' => $new_time,
                'total_price' => $total_price,
        ];
        return view('User.Other.BillOfLading')->with('data' , $data);
    }

    public function show_rates(Request $request){
        // xử lý dữ liệu
        $params = $request->all();
        // kiểm tra tỉnh thành đã nhập chưa ?
        $message = "Vui lòng chọn ";
        if($params['form']['provinces_sending'] == "Chọn tỉnh/thành phố"){
            $message = $message . 'tỉnh/thành phố gửi, ';
        }
        if($params['form']['districts_sending'] == "Chọn quận/huyện" || $params['form']['districts_sending'] == "0"){
            $message = $message . 'quận/huyện gửi, ';
        }
        if($params['form']['wards_sending'] == "Chọn phường/xã" || $params['form']['wards_sending'] == "0"){
            $message = $message . 'phường/xã gửi, ';
        }
        if($params['form']['provinces_receiver'] == "Chọn tỉnh/thành phố"){
            $message = $message . 'tỉnh/thành phố nhận, ';
        }
        if($params['form']['districts_receiver'] == "Chọn quận/huyện" || $params['form']['districts_receiver'] == "0"){
            $message = $message . 'quận/huyện nhận, ';
        }
        if($params['form']['wards_receiver'] == "Chọn phường/xã" || $params['form']['wards_receiver'] == "0"){
            $message = $message . 'phường/xã nhận.';
        }

        if($message != "Vui lòng chọn "){
            return redirect()->route('user.checkCharges')->with('message', $message);
        }

        // gọi model
        $provinces = new provinces();
        // lấy tỉnh
        $provinces_id_sending = $params['form']['provinces_sending'];
        $provinces_name_sending = $provinces->get_provinces_name($provinces_id_sending)[0]['name_provinces'];
        $provinces_id_receiver = $params['form']['provinces_receiver'];
        $provinces_name_receiver = $provinces->get_provinces_name($provinces_id_receiver)[0]['name_provinces'];

        // lấy thành phố
        $districts = new districts();
        $districts_id_sending = $params['form']['districts_sending'];
        $districts_name_sending = $districts->get_district_name($districts_id_sending)[0]['name_district'];
        $districts_id_receiver = $params['form']['districts_receiver'];
        $districts_name_receiver = $districts->get_district_name($districts_id_receiver)[0]['name_district'];

        //lấy quận huyện
        $wards = new wards();
        $wards_id_sending = $params['form']['wards_sending'];
        $wards_name_sending = $wards->get_wards_name($wards_id_sending)[0]['name_ward'];
        $wards_id_receiver = $params['form']['wards_receiver'];
        $wards_name_receiver = $wards->get_wards_name($wards_id_receiver)[0]['name_ward'];
        
        // hợp nhất địa chỉ
        $address_sending = $provinces_name_sending . ', ' . $districts_name_sending . ', ' . $wards_name_sending;
        $address_receiver = $provinces_name_receiver . ', ' . $districts_name_receiver . ', ' . $wards_name_receiver;

        // lấy độ dài đường đi theo Km
        $distance = new distanceAddress();
        $distanceAddress = $distance->getDistance($address_sending ,$address_receiver , "K");

        $insurance_fees = $params['cargo_content'] === "Chất dễ cháy" ? 50000 : 0;

        // lấy loại hình vận chuyển
        $transportation_type_list = $this->show_transportation_type();
        // lấy giá chuyển phát nhanh
        $express_delivery = $transportation_type_list[0]['rates'];
        // lấy giá chuyển phát đường bộ
        $road_delivery = $transportation_type_list[1]['rates'];
        //lấy giá chuyển phát tiết kiệm
        $thrifty_delivery = $transportation_type_list[3]['rates'];
        // lấy giá chuyển phát hỏa tốc
        $fire_express_delivery = $transportation_type_list[2]['rates'];

        // gộp các loại giá
        $shipping_rates = [
            'express_delivery' => $express_delivery,
            'road_delivery' => $road_delivery,
            'thrifty_delivery' => $thrifty_delivery,
            'fire_express_delivery' => $fire_express_delivery,
        ];

        // lấy loại hàng hóa
        $stock_rates_list = $this->show_stock_rates_by_name($params['cargo_content']);
        $stock_rates_price = 0;
        foreach($stock_rates_list as $key => $collection){
            $stock_rates_price = $collection->rates;
        }
        return view('User.Other.CheckCharges')->with('distance', $distanceAddress)->with('params', $params)->with('stock_rates_price', $stock_rates_price)->with('shipping_rates', $shipping_rates)->with('insurance_fees', $insurance_fees);
    }

    public function show_stock_rates_by_name($name){
        $stock_rates = new rates();
        $stock_list = $stock_rates->get_stock_rates_by_name($name);
        return $stock_list;
    }

    public function show_transportation_type(){
        $transportation_type = new transportation_type();
        $transportation_type_list = $transportation_type->get_transportation_type();
        return $transportation_type_list;
    }

    public function list_news(Request $request){
        $type = $request->type;
        if($type === null || $type === 'new'){
            $type = 'new';
        }
        if($type === 'specialized'){
            $type = "tin chuyên ngành";
        }
        if($type === 'wok'){
            $type = "tin hoạt động";
        }
        if($type === 'sale'){
            $type = "tin khuyến mãi";
        }
        $data = $this->get_list_news($type);
        $topNews = $this->get_top_news();
        return view('User.Other.News')->with('data', $data)->with('topNews', $topNews);
    }

    public function get_list_news($type){
        $news = new news();
        $list_news = $news->get_list_news($type);
        return $list_news;
    }

    public function get_top_news(){
        $data = [];
        $news = new news();
        $data[0] = $news->get_top_most_view_specialized();
        $data[1] = $news->get_top_most_view_wok();
        $data[2] = $news->get_top_most_view_sale();
        return $data;
    }

    public function show_news(Request $request){
        $params = $request->all();
        $news = new news();
        $list_news = $news->get_list_news_by_id($params['id']);
        $topNews = $this->get_top_news();
        return view('User.Other.ShowNews')->with('data', $list_news)->with('topNews', $topNews);;
    }
}
