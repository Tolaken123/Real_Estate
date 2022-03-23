<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
   public function index(){
      
      $data= user::get();
        return view('admin.account.user_list',['data' => $data]);
   }
   public function create(){
      
   }

}
