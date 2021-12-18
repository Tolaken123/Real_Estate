<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userlogin(Request $req){
        return $req->input();
    }
}
