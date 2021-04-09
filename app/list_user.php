<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_user extends Model
{
    // tên table
    protected $table = 'users';
    public $search_field = [
        'email', 'name', 'CMND', 'phone_number'
    ];

    public function list_users($params = null){
        $query = $this->select('*');
        // kiểm tra lấy dữ liệu theo fillter
        if($params['fillter']['provider-name'] != 'all'){
            $query->where('provider_name', $params['fillter']['provider-name']);
        }
        if(!empty($params['search']['value'])){
            if($params['search']['field'] != 'all'){
                $search_field =  in_array($params['search']['field'], $this->search_field) ? $params['search']['field'] : 'email';
                $query->where($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
            }else{
                foreach($this->search_field as $key => $search_field){
                    $query->orWhere($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
                }
            }
        }
        // lấy hết theo id từ bé đến lớn
        $query = $query->orderBy("id", "ASC")->paginate(4); // phân trang theo số phần tử
        return $query;
    }

    public function delete_user($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }
}