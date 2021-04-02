<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_user extends Model
{
    protected $table = 'users';

    public function list_users(){
        $query = $this->orderBy("id", "ASC")->get();
        return $query;
    }
}