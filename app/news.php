<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    // tên table
    protected $table = 'news';

    public function list_news($params = null){
        $query = $this->select('*');
        if($params['fillter']['news-type'] != 'all'){
            $query->where('new_type', $params['fillter']['news-type']);
        }
        // lấy hết theo id từ bé đến lớn
        $query = $query->orderBy("id", "ASC")->paginate(4); // phân trang theo số phần tử
        return $query;
    }

    public function delete_news($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }
}
