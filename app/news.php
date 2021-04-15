<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    // tên table
    protected $table = 'news';
    public $search_field = [
        'title', 'description', 'new_type'
    ];

    public function list_news($params = null){
        $query = $this->select('*');
        if($params['fillter']['news-type'] != 'all'){
            $query->where('new_type', $params['fillter']['news-type']);
        }
        if(!empty($params['search']['value'])){
            if($params['search']['field'] != 'all'){
                $search_field =  in_array($params['search']['field'], $this->search_field) ? $params['search']['field'] : 'title';
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

    public function delete_news($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }

    public function saveItem($params){
        $data = $params['form'];
        $news = new news();
        $news->title = $data['title'];
        $news->description = $data['description'];
        $news->new_type = $data['new_type'];
        $news->save();
    }
}
