<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class detail_orders extends Model
{
    protected $table = "detail_orders";

    public function list_detail_orders($params = null){
        $query = $this->select('*');
        $query = $query->join('orders', 'detail_orders.orders_id', '=', 'orders.id_order')->join('stock_rate', 'stock_rate.id', '=', 'detail_orders.stock_id')->get();
        return $query;
    }

    public function get_order_id($id){
        $query = $this->select('orders_id')->where('orders_id', '=', $id)->get();
        return $query;
    }

    public function get_detail_order_by_id($id){
        $query = $this->select('*')->where('orders_id', $id)->get();
        return $query;
    }
 
    public function delete_detail_orders($id){
        // tìm user theo id sau đó xóa
        $query = $this->where('id_detail_order', '=', $id)->delete();
        return $query;
    }

    public function saveItem($params, $transportation_type, $total_price, $order_id){
        $data = $params['form'];
        // nếu không tồn tại id tạo đối tượng và thêm mới
        if(!isset($params['id_order'])){
            $detail_orders = new detail_orders();
            $detail_orders->orders_id = $order_id;
            $detail_orders->stock_id = $data['stock_rate_type'];
            $detail_orders->weight = $data['weight'];
            $detail_orders->height = $data['height'];
            $detail_orders->width = $data['width'];
            $detail_orders->length = $data['length'];
            $detail_orders->total_price = $total_price;
            $detail_orders->collection_fee = str_replace("," ,"" , $data['collection_fee']);
            $detail_orders->reminiscent_name_sending = $data['reminiscent_name_sending'];
            $detail_orders->sending_name = $data['sending_name'];
            $detail_orders->sending_phone_number = $data['sending_phone_number'];
            $detail_orders->reminiscent_name_receiver = $data['reminiscent_name_receiver'];
            $detail_orders->receiver_name = $data['receiver_name'];
            $detail_orders->receiver_phone_number = $data['receiver_phone_number'];
            $detail_orders->note = $data['note'];
            $detail_orders->save();
            // trả về id
            return $detail_orders->id;
        }else{
            // nếu đã có id thì update database
            // update data
            // $this->where('orders_id', $order_id)->update($data);
            // trả về id
            return $params['id'];
        }
    }

    public function get_date($dateStart, $dateEnd){
        $query = $this->select('total_price', 'detail_orders.created_at');
        $query = $query->join('orders', 'detail_orders.orders_id', '=', 'orders.id_order');
        $query = $query->whereBetween('detail_orders.created_at', [$dateStart, $dateEnd])->get();
        return $query;
    }
}