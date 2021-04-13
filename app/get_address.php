<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class get_address extends Model
{
    protected $table = "wards";

    public function get_address($ward_id){
        $query = $this->select('*')->where('wards.id', '=', $ward_id);
        $query = $query->join('districts', 'districts.id', '=', 'wards.district_id')->join('provinces', 'provinces.id', '=', 'districts.province_id')->get();
        return $query;
    }
}
