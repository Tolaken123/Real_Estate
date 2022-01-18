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

// Noted: Here we create route to test your view then comment it . 


Route::get('/', function () {
    return view('Layout.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/home/admin', function () {
    return view('Home.admin');
});
 Route::get('/home/verify', function () {
    return view('Home.verify');
});
Route::get('/home/prooerty', function () {
    return view('Home.propertyform');
});
Route::get('/home/homepage', function () {
    return view('Home.homepage');
});