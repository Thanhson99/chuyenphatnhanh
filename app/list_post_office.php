<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_post_office extends Model
{
    // tên table trong csdl
    protected $table = 'post_office';

    public function list_office(){
        // lấy office ra theo thứ tự bé đến lớn
        $query = $this->orderBy("id", "ASC")->get();
        return $query;
    }
}
