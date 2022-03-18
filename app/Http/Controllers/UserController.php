<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
   public function show(){
    $data= users::all();
        return view('admin.account.user_list',['user'=>$data]);
   }
}
