<?php
namespace App\Http\Controllers\HomeController;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('Home.homepage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('Home.admin');
});
Route::post('user',[UserAuth::class,'userlogin']);
Route::view("login",'login');