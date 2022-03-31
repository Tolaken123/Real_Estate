<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
   public function getUser()
    {
        $users = DB::table('users')->get();
        //dd($users);
        return view('admin.Account.list',['users'=>$users]);
    }
    public function creat(){
       return view('admin.Account.create_user');
    }
}
