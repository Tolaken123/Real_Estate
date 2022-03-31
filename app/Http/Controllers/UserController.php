<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
   public function getUser()
    {
        $users =user::all();
        return view('admin.Account.list',['users'=>$users]);
    }
    public function creat(){
       return view('admin.Account.create_user');
    }
}
