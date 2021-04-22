<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{
    protected $table = "provinces";

    public function get_provinces(){
        $query = $this->select('*')->orderBy('id', 'ASC')->get();
        return $query;
    }

    public function get_provinces_name($id){
        $query = $this->select('*')->where('id', $id)->get();
        return $query;
    }
}
