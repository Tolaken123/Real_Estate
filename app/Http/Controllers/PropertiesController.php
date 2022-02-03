<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index(){
        return view('admin.properties.properties');
    }
    // public function Create(){
    //     return view('layouts.app' );
    // }
}
