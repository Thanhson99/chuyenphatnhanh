<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_post_office extends Model
{
    protected $table = 'post_office';

    public function list_office(){
        $query = $this->orderBy("id", "ASC")->get();
        return $query;
    }
}
