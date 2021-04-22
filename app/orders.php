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
        $query = $query->join('users', 'users.id', '=', 'orders.user_id')->join('transportation_type', 'transportation_type.id', '=', 'orders.transportation_id')->get();
        return $query;
     }
 
    public function delete_orders($id){
        // tìm user theo id sau đó xóa
        $query = $this->where('id_order', '=', $id)->delete();
        return $query;
    }

    public function saveItem($params){
        dd($params);
        // gán data = dữ liệu submit form
        $data = $params['form'];
        // nếu không tồn tại id tạo đối tượng và thêm mới
        if(!isset($params['id'])){
            // $rates = new rates();
            // $rates->name = $data['name'];
            // $rates->rates = $data['rates'];
            // $rates->save();
            // trả về id
            return $rates->id;
        }else{
            // nếu đã có id thì update database
            // update data
            // $this->where('id', $params['id'])->update($data);
            // trả về id
            return $params['id'];
        }
    }
}
