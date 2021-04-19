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
}
