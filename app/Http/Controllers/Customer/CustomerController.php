<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\orders;
use App\detail_orders;
use App\rates;
use App\transportation_type;
use App\provinces;
use App\districts;
use App\wards;
use App\distanceAddress;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function __construct(){
        // luôn luôn bắt đầu phiên 
        session_start();
    }

    public function changeInfo(Request $request){
        $user = User::where('id', $request->id)->get();
        return view('Customer.ChangeInfo.index')->with('user', $user);
    }

    public function saveInfo(Request $request){
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
            Session::flash('success', 'Cập nhật thông tin thành công');
            return redirect()->route('customer.statistical', ['id' => $id]);
        }
        if($request->type == 'save'){
            Session::flash('success', 'Cập nhật thông tin thành công');
            return redirect()->route('customer.changeInfo', ['id' => $id]);
        }
    }

    public function statistical(Request $request){
        $user = User::where('email', $_SESSION["user"]->email)->first();
        $user_id = (string)$user['id'];
        // lay day
        $day = 7;
        if(isset($request->day)){
            $day = $request->day;
        }
        // lấy ngày hiện tại
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        // lui 7 day
        $subNow = Carbon::now('Asia/Ho_Chi_Minh')->subDays($day)->toDateString();
        // lấy dữ liệu
        $order = new orders();
        $list_orders = $order->get_date_by_user_id($user_id , $subNow, $now);
        
        // xử lý ngày bắt đầu và ngày kết thúc
        $tempNow = Carbon::now('Asia/Ho_Chi_Minh');
        $tempSubNow = Carbon::now('Asia/Ho_Chi_Minh')->subDays($day);

        // lấy ngày
        $arrDate = [];
        while($tempNow->toDateString() != $tempSubNow->toDateString()){
            array_push($arrDate, $tempNow->toDateString());
            $tempNow->subDays(1); 
        }

        //------------------- Thống kê tổng tiền và số lượng order-------------------------
        // lấy detail order
        $data_detail = [];
        foreach($list_orders as $key => $value){
            if(array_key_exists(date('Y-m-d', strtotime($value->created_at)), $data_detail)){
                $data_detail[date('Y-m-d', strtotime($value->created_at))][0] += $value->total_price;
                $data_detail[date('Y-m-d', strtotime($value->created_at))][1] += 1;
            }else{
                $data_detail[date('Y-m-d', strtotime($value->created_at))] = [$value->total_price, 1];
            }
        }

        $arrTotalPrice = [];
        $arrTotalOrder = [];

        // format lại mảng ngày
        $dates = array_reverse($arrDate);
        // thêm giá và số lượng vào 2 mảng tương ứng
        foreach($dates as $date => $value){
            if(array_key_exists($value, $data_detail)){
                array_push($arrTotalPrice, $data_detail[$value][0]);
                array_push($arrTotalOrder, $data_detail[$value][1]);
            }else{
                array_push($arrTotalPrice, 0);
                array_push($arrTotalOrder, 0);
            }
        }

        // lưu vào 1 mảng để truyền đi đơn giản
        $data = [
            'dates' => $dates,
            'total_price' => $arrTotalPrice,
            'total_order' => $arrTotalOrder,
        ];
        return view('Customer.Statistical.index', ['data' => $data])->with('day', $day)->with('id', $user_id);
    }

    public function show_orders(){
        return view('Customer.SearchOrder.index');
    }

    public function search_orders(Request $request){
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
            return view('Customer.SearchOrder.index')->with('orders', null)->with('id', $id);
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
        return view('Customer.SearchOrder.index')->with('data' , $data);
    }

    public function delivered(Request $request){
        $params = $request->all();
        $id = $params['id'];
        $status = "Đã giao";
        if($this->check_customer($id)){
            $list_order = $this->get_orders_by_user_id_and_status($id, $status);
            return view('Customer.ManageOrders.delivered', ['list_order' => $list_order]);
        }
        return redirect()->route('page_not_found');
    }

    public function are_delivered(Request $request){
        $params = $request->all();
        $id = $params['id'];
        $status = "Đang giao";
        if($this->check_customer($id)){
            $list_order = $this->get_orders_by_user_id_and_status($id, $status);
            return view('Customer.ManageOrders.areDelivered', ['list_order' => $list_order]);
        }
        return redirect()->route('page_not_found');
    }

    public function cancelled(Request $request){
        $params = $request->all();
        $id = $params['id'];
        $status = "Đã hủy";
        if($this->check_customer($id)){
            $list_order = $this->get_orders_by_user_id_and_status($id, $status);
            return view('Customer.ManageOrders.cancelled', ['list_order' => $list_order]);
        }
        return redirect()->route('page_not_found');
    }

    public function check_customer($id){
        $user = User::where('email', $_SESSION["user"]->email)->first();
        $user_id = (string)$user['id'];
        if($user_id === $id){
            return true;
        }
        return false;
    }

    public function get_orders_by_user_id_and_status($user_id, $status){
        $orders = new orders();
        $list_orders = $orders->get_orders_by_user_id_and_status($user_id, $status);
        return $list_orders;
    }

    public function statistical_order(Request $request){
        $params = $request->all();
        $id = $params['id'];
        if($this->check_customer($id)){
            $list_order = $this->get_orders_by_user_id($id);
            return view('Customer.StatisticalOrder.index', ['list_order' => $list_order]);
        }
        return redirect()->route('page_not_found');
    }

    public function get_orders_by_user_id($user_id){
        $orders = new orders();
        $list_orders = $orders->get_orders_by_user_id($user_id);
        return $list_orders;
    }

    public function show_evaluate(){
        return view('Customer.Evaluate.index');
    }

    public function evaluate(Request $request){
        $params = $request->all();
        Session::flash('success', 'Cảm ơn bạn đã phản hồi cho chúng tôi');
        return redirect()->route('customer.statistical');
    }

    public function add_orders(Request $request){
        $id = $request->id;
        $item = [];
        $distance = "";
        $stock_rates_price = 0;
        $insurance_fees = 0;

        if(isset($request->item)){
            $item = $request->item;
            $stock_rates_price = $this->show_stock_rates_by_id($item['stock_rate_type'])[0]['rates'];
            $insurance_fees = $this->show_stock_rates_by_id($item['stock_rate_type'])[0]['name'] === "Chất dễ cháy" ? 50000 : 0;
        }
        if(isset($request->distance)){
            $distance = $request->distance;
        }
        //lấy tỉnh thành
        $provinces = new provinces();
        $provinces_list = $provinces->get_provinces();

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
        $stock_rates_list = $this->show_stock_rates();
        if($this->check_customer($id)){
            return view('Customer.AddOrder.index')->with('item', $item)->with('provinces', $provinces_list)->with('stock_rates', $stock_rates_list)->with('distance', $distance)->with('stock_rates_price', $stock_rates_price)->with('shipping_rates', $shipping_rates)->with('insurance_fees', $insurance_fees)->with('id', $id);
        }
        return redirect()->route('page_not_found');
    }

    public function show_transportation_type(){
        $transportation_type = new transportation_type();
        $transportation_type_list = $transportation_type->get_transportation_type();
        return $transportation_type_list;
    }

    public function show_stock_rates(){
        $stock_rates = new rates();
        $stock_list = $stock_rates->get_stock_rates();
        return $stock_list;
    }

    public function show_stock_rates_by_id($id){
        $stock_rates = new rates();
        $stock_list = $stock_rates->get_stock_rates_by_id($id);
        return $stock_list;
    }

    public function show_districts(Request $request){
        $districts = new districts();
        $districts_list = $districts->get_district($request->provinces_id);
        return response()->json($districts_list);
    }

    public function show_wards(Request $request){
        $wards = new wards();
        $wards_list = $wards->get_wards($request->district_id);
        return response()->json($wards_list);
    }

    public function get_info_orders(Request $request){
        // validate dữ liệu
        $validatedData = $request->validate([
            'form.sending_name' => 'required|min:3|max:50',
            'form.sending_phone_number' => 'required|min:10|max:10',
            'form.sending_place' => 'required|min:3|max:100',
            'form.receiver_name' => 'required|min:3|max:50',
            'form.receiver_phone_number' => 'required|min:10|max:10',
            'form.recipients' => 'required|min:3|max:100',
            'form.weight' => 'required',
        ],
        [
            'required' => ":attribute không được để trống",
            'min' => ":attribute ít nhất :min ký tự",
            'max' => ":attribute vượt quá :max ký tự",
        ],
        [
            'form.sending_name' => 'Tên người gửi',
            'form.sending_phone_number' => 'Số điện thoại người gửi',
            'form.sending_place' => 'Số nhà, tên đường người gửi',
            'form.receiver_name' => 'Tên người nhận',
            'form.receiver_phone_number' => 'Số điện thoại người nhận',
            'form.recipients' => 'Số nhà, tên đường người nhận',
            'form.weight' => 'Khối lượng',
        ]);
        // trả về giá tiền và các hình thức vận chuyển

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
            $message = $message . 'phường/xã nhận, ';
        }
        if($params['form']['stock_rate_type'] == "Chọn loại hàng hóa" || $params['form']['stock_rate_type'] == 0){
            $message = $message . 'loại hàng hóa.';
        }

        if($message != "Vui lòng chọn "){
            return redirect()->route('customer.addOrders')->with('message', $message);
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

        // lấy tên đường
        $sending_place = $params['form']['sending_place'];
        $recipients = $params['form']['recipients'];
        
        // hợp nhất địa chỉ
        $address_sending = $provinces_name_sending . ', ' . $districts_name_sending . ', ' . $wards_name_sending . ', ' . $sending_place;
        $address_receiver = $provinces_name_receiver . ', ' . $districts_name_receiver . ', ' . $wards_name_receiver . ', ' . $recipients;

        // lấy độ dài đường đi theo Km
        $distance = new distanceAddress();
        $distanceAddress = $distance->getDistance($address_sending ,$address_receiver , "K");

        // Lấy id
        $id = $params['id'];
        return redirect()->route('customer.addOrders', ['distance' => $distanceAddress, 'item' => $params['form'], 'id' => $id]);
    }

    public function save_orders(Request $request){
        // Gọi model
        $detail_orders = new detail_orders();
        $orders = new orders();
        $transportation_type = 0;
        $total_price = 0;
        $params = $request->all();
        // Lấy customer ID
        $id = $params['id'];
        // bắt dk xem loại hình vận chuyển nào
        if($request->type == 'express_delivery'){
            $transportation_type = 1;
            $total_price = $params['total_price_express_delivery'];
        }
        if($request->type == 'road_delivery'){
            $transportation_type = 2;
            $total_price = $params['total_price_road_delivery'];
        }
        if($request->type == 'thrifty_delivery'){
            $transportation_type = 4;
            $total_price = $params['total_price_thrifty_delivery'];
        }
        if($request->type == 'fire_express_delivery'){
            $transportation_type = 3;
            $total_price = $params['total_price_fire_express_delivery'];
        }
        $save_orders = $orders->saveItem($params, $transportation_type, $id);
        $save_detail_orders = $detail_orders->saveItem($params, $transportation_type, $total_price, $save_orders);
        Session::flash('success', 'Thêm vận đơn thành công');
        return redirect()->route('customer.statisticalOrder', ['id' => $id]);
    }

    public function logout(){
        // Xóa dữ liệu của phiên
        if(isset($_SESSION["user"])){
            session_destroy();
        }
        return redirect()->route('home');
    }
}
