<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
   public function show()
    {
        $data['show'] =user::all();
        return view('admin.Account.list',compact("data"));
    }
    public function creat(){
       return view('admin.Account.create_user');
    }
}
