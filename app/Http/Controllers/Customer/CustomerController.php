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

class CustomerController extends Controller
{
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

    public function statistical(){
        return view('Customer.Statistical.index');
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

    public function manage_order(){
        return view('Customer.ManageOrders.index');
    }

    public function statistical_order(){
        dd('thong ke order');
    }

    public function evaluate(){
        dd('Nhận xét');
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
