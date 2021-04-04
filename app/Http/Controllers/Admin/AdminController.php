<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\list_user;

class AdminController extends Controller
{
    public function get_list_user(){
        $user = new list_user();
        $users = $user->list_users();
        return view('Admin.List_user.index')->with('user' , $users);
    }

    public function delete_user($id){

    }
}
