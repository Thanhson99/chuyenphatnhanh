<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rates extends Model
{
    // tên table
    protected $table = 'stock_rate';
    public $search_field = [
        'name', 'rates'
    ];

    public function list_rates($params = null){
        $query = $this->select('*');
        if(!empty($params['search']['value'])){
            if($params['search']['field'] != 'all'){
                $search_field =  in_array($params['search']['field'], $this->search_field) ? $params['search']['field'] : 'name';
                $query->where($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
            }else{
                foreach($this->search_field as $key => $search_field){
                    $query->orWhere($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
                }
            }
        }
        // lấy hết theo id từ bé đến lớn
        $query = $query->orderBy("id", "ASC")->paginate(10); // phân trang theo số phần tử
        return $query;
    }

    public function delete_rates($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }
}
