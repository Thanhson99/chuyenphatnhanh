<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
     // tên table
     protected $table = 'orders';
     public $search_field = [
         'status', 'sending_place', 'recipients'
     ];
 
     public function list_orders($params = null){
        $query = $this->select('*');
        if($params['fillter']['status'] != 'all'){
            $query->where('status', $params['fillter']['status']);
        }
        if(!empty($params['search']['value'])){
            if($params['search']['field'] != 'all'){
                $search_field =  in_array($params['search']['field'], $this->search_field) ? $params['search']['field'] : 'status';
                $query->where($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
            }else{
                foreach($this->search_field as $key => $search_field){
                    $query->orWhere($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
                }
            }
        }
        // lấy hết theo id từ bé đến lớn
        // $query = $query->orderBy("id", "ASC")->paginate(10); // phân trang theo số phần tử
        $query = $query->join('transportation_type', 'transportation_type.id', '=', 'orders.transportation_id')->get();
        return $query;
     }
 
    public function delete_orders($id){
        // tìm user theo id sau đó xóa
        $query = $this->where('id_order', '=', $id)->delete();
        return $query;
    }

    public function saveItem($params, $transportation_type){
        $data = $params['form'];
        // nếu không tồn tại id tạo đối tượng và thêm mới
        if(!isset($params['id'])){
            $orders = new orders();
            $orders->status = "Đang giao";
            $orders->sending_place = $data['sending_place'];
            $orders->recipients = $data['recipients'];
            $orders->user_id = 0;
            $orders->ward_id_sending = $data['wards_sending'];
            $orders->ward_id_recipients = $data['wards_receiver'];
            $orders->transportation_id = $transportation_type;
            $orders->save();
            // trả về id
            return $orders->id;
        }else{
            // nếu đã có id thì update database
            // update data
            // $this->where('id', $params['id'])->update($data);
            // trả về id
            return $params['id'];
        }
    }

    public function get_orders_by_id($id){
        $query = $this->select('*')->where('id_order', $id)->get();
        return $query;
    }

    public function get_date($date){
        // $query = $this->select('created_at')
    }
}
