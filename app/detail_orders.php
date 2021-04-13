<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 
    public function delete_detail_orders($id){
        // tìm user theo id sau đó xóa
        $query = $this->where('id_detail_order', '=', $id)->delete();
        return $query;
    }
}