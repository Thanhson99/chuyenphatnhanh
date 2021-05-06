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
use App\provinces;
use App\districts;
use App\wards;
use App\distanceAddress;
use Carbon\Carbon;
use App\get_address;
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
            'form.title' => 'required|min:3|max:100',
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
        // dd($detail_orders, $orders);

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
         // kiểm tra id nếu tồn tại đưa đến trang sửa không có id đưa đến tragn thêm
        if(isset($request->id)){
            $item = [];
            $detail = new detail_orders();
            $detail_orders = $detail->get_all($request->id);
            // dd($detail_orders);
            foreach($detail_orders as $key => $value){
                $item['id_detail_order'] = $value->id_detail_order;
                $item['orders_id'] = $value->orders_id;
                $item['weight'] = $value->weight;
                $item['height'] = $value->height;
                $item['width'] = $value->width;
                $item['length'] = $value->length;
                $item['reminiscent_name_sending'] = $value->reminiscent_name_sending;
                $item['sending_name'] = $value->sending_name;
                $item['sending_phone_number'] = $value->sending_phone_number;
                $item['reminiscent_name_receiver'] = $value->reminiscent_name_receiver;
                $item['receiver_name'] = $value->receiver_name;
                $item['receiver_phone_number'] = $value->receiver_phone_number;
                $item['note'] = $value->note;
                $item['sending_place'] = $value->sending_place;
                $item['recipients'] = $value->recipients;
                $item['wards_sending'] = $value->ward_id_sending;
                $item['wards_receiver'] = $value->ward_id_recipients;
                $item['collection_fee'] = $value->collection_fee;
                $item['transportation_id'] = $value->transportation_id;
                $item['stock_id'] = $value->stock_id;
            }
            //lấy địa chỉ người gửi
            $temp = new get_address();
            $address = $temp->get_address($item['wards_sending']);
            foreach ($address as $key => $collection_address) {
                $item['provinces_sending'] = $collection_address->province_id;
                $item['districts_sending'] = $collection_address->district_id;
            }

            // lấy địa chỉ nơi nhận
            $address = $temp->get_address($item['wards_receiver']);
            foreach ($address as $key => $collection_address) {
                $item['provinces_receiver'] = $collection_address->province_id;
                $item['districts_receiver'] = $collection_address->district_id;
            }
            return view('Admin.Orders.form')->with('item', $item)->with('provinces', $provinces_list)->with('stock_rates', $stock_rates_list)->with('distance', $distance)->with('stock_rates_price', $stock_rates_price)->with('shipping_rates', $shipping_rates)->with('insurance_fees', $insurance_fees);;
        }
        return view('Admin.Orders.form')->with('item', $item)->with('provinces', $provinces_list)->with('stock_rates', $stock_rates_list)->with('distance', $distance)->with('stock_rates_price', $stock_rates_price)->with('shipping_rates', $shipping_rates)->with('insurance_fees', $insurance_fees);
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
            return redirect()->route('admin.addOrders')->with('message', $message);
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

        return redirect()->route('admin.addOrders', ['distance' => $distanceAddress, 'item' => $params['form']]);
    }

    public function save_orders(Request $request){
        // Gọi model
        $detail_orders = new detail_orders();
        $orders = new orders();
        $transportation_type = 0;
        $total_price = 0;
        $params = $request->all();
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
        $save_orders = $orders->saveItem($params, $transportation_type);
        $save_detail_orders = $detail_orders->saveItem($params, $transportation_type, $total_price, $save_orders);
        Session::flash('success', 'Thêm vận đơn thành công');
        return redirect()->route('admin.listOrders');
    }

    public function show_statistical(Request $request){
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
        $detail_order = new detail_orders();
        $detail_orders = $detail_order->get_date($subNow, $now);
        
        // xử lý ngày bắt đầu và ngày kết thúc
        $tempNow = Carbon::now('Asia/Ho_Chi_Minh');
        $tempSubNow = Carbon::now('Asia/Ho_Chi_Minh')->subDays($day);

        // lấy ngày
        $arrDate = [];
        while($tempNow->toDateString() != $tempSubNow->toDateString()){
            array_push($arrDate, $tempNow->toDateString());
            $tempNow->subDays(1); 
        }

        //------------------- Thống kê doanh thu và số lượng order-------------------------
        // lấy detail order
        $data_detail = [];
        foreach($detail_orders as $key => $value){
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
        // ----------------------------- Thống kê user đăng ký------------------------------
        // khai báo model lấy ra từ csdl
        $user = new User();
        $list_user = $user->get_date($subNow, $now);

        // lấy user
        $data_user = [];
        foreach($list_user as $key => $value){
            if(array_key_exists(date('Y-m-d', strtotime($value->created_at)), $data_user)){
                $data_user[date('Y-m-d', strtotime($value->created_at))] += 1;
            }else{
                $data_user[date('Y-m-d', strtotime($value->created_at))] = 1;
            }
        }

        // xử lý arr theo provider name
        $arrTotalUser = [];
        // thêm giá và số lượng vào 2 mảng tương ứng
        foreach($dates as $date => $value){
            if(array_key_exists($value, $data_user)){
                array_push($arrTotalUser, $data_user[$value]);
            }else{
                array_push($arrTotalUser, 0);
            }
        }

        // lưu vào 1 mảng để truyền đi đơn giản
        $data = [
            'dates' => $dates,
            'total_price' => $arrTotalPrice,
            'total_order' => $arrTotalOrder,
            'total_user' => $arrTotalUser,
        ];
        return view('Admin.Statistical.index', ['data' => $data])->with('day', $day);
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
