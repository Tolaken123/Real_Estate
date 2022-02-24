<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PropertiesController;

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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/hey',function(){
    return view('properties');
});

<<<<<<< HEAD

Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin.','middleware' => 'auth'], function () {
    Route::get('/',function(){return view('layouts.include.admin');});
=======
Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin.','middleware' => 'auth'], function () {
    Route::get('/',function(){return view('layouts.admin');});
>>>>>>> fffd5261f06b15205046cdde504588644f1f4825
    //Route::resource('/properties','PropertiesController');
    Route::get('/properties', [PropertiesController::class,'create'])->name('Create');
    Route::post('/properties', [PropertiesController::class,'store'])->name('Store');
    Route::get('/properties/index', [PropertiesController::class,'index'])->name('index');
    
});


     



Route::get('/propertie',[PropertiesController::class,'index']);
   
Auth::routes();


<<<<<<< HEAD
Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/livewire',function(){
    return view('livewire.index');
});

Route::get('/nav', function () {
    return view('fonte.index');
});
Route::get('/home/admin', function () {
    return view('Home.admin');
});
 Route::get('/home/verify', function () {
    return view('Home.verify');
});
//Route::get('/home/homepage', function () {
//});
Route::get('/admin/properties/createform', function () {
    return view('admin.properties.createform');
});
=======
 Route::get('/home', [HomeController::class,'index'])->name('home');

// Route::get('/livewire',function(){
//     return view('livewire.index');
// });

// Route::get('/nav', function () {
//     return view('fonte.index');
// });
// Route::get('/home/admin', function () {
//     return view('Home.admin');
// });
//  Route::get('/home/verify', function () {
//     return view('Home.verify');
// });
// //Route::get('/home/homepage', function () {
// //});
// Route::get('/admin/properties/createform', function () {
//     return view('admin.properties.createform');
// });
>>>>>>> fffd5261f06b15205046cdde504588644f1f4825
