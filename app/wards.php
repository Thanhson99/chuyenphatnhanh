<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wards extends Model
{
    protected $table = "wards";

    public function get_wards($id){
        $query = $this->select('*')->where('district_id', $id)->get();
        return $query;
    }

    public function get_wards_name($id){
        $query = $this->select('*')->where('id', $id)->get();
        return $query;
    }
}
