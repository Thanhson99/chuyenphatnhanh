<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_user extends Model
{
    // tên table
    protected $table = 'users';

    public function list_users(){
        // lấy hết theo id từ bé đến lớn
        $query = $this->orderBy("id", "ASC")->paginate(4); // phân trang theo số phần tử
        return $query;
    }

    public function delete_user($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }
}