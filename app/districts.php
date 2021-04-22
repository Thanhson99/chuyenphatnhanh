<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class districts extends Model
{
    protected $table = "districts";

    public function get_district($id){
        $query = $this->select('*')->where('province_id', $id)->get();
        return $query;
    }

    public function get_district_name($id){
        $query = $this->select('*')->where('id', $id)->get();
        return $query;
    }
}
