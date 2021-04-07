<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_user extends Model
{
    // tên table
    protected $table = 'users';

    public function list_users($params = null){
        $query = $this->select('*');
        if($params['fillter']['provider-name'] != 'all'){
            $query->where('provider_name', $params['fillter']['provider-name']);
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