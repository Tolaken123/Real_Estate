<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\location\AddressSelectController;
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
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    // Route::get('/', function () {
    //     return view('layouts.admin');});
       Route::resource('/',AdminController::class);
       Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
       Route::resource('/properties',PropertiesController::class);
       Route::resource('/user',AccountController::class);
      // Route::resource('/rent',RentController::class);
      // Route::resource('/sale',SaleController::class);

    Route::group(['prefix' => 'location','as' => 'location.'],function(){
        Route::get('district',[AddressSelectController::class,'districts'])->name('district');
        Route::get('commune',[AddressSelectController::class,'communes'])->name('commune');
        Route::get('village',[AddressSelectController::class,'villages'])->name('village');
    });
});




Route::get('/image', [FileUpload::class, 'createForm']);
Route::post('/image', [FileUpload::class, 'fileUpload'])->name('imageUpload');
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/image', function () {
//     return view('image.form');
// });
// Route::get('/layouts/property_detail', function () {
//     return view('layouts/property_detail');
// });
// Route::get('/admin/Account/user_profile', function () {
//     return view('admin/Account/user_profile');
// });
// Route::get('/fonte/home/Item', function () {
//     return view('fonte.home.Item');
// });
Route::get('/layouts/Home_page', function () {
    return view('layouts/Home_page');
});
Route::get('/layouts/industry_profile', function () {
        return view('layouts/industry_profile');
    });

// Route::get('/layouts/test', function () {
//     return view('layouts/test');
// });

// // Route::get('/propertie',[PropertiesController::class,'index']);

// Route::get('/livewire', function () {
//     return view('livewire.index');
// });

// Route::get('/nav', function () {
//     return view('fonte.index');
// });
// Route::get('/home/admin', function () {
//     return view('Home.admin');
// });
// Route::get('/home/verify', function () {
//     return view('Home.verify');
// });
// Route::get('/home/homepage', function () {
// });
// // Route::get('/admin/properties/createform', function () {
// //     return view('admin.properties.createform');
// // });


// Route::get('/fonte/home/Item', function () {
//     return view('fonte.home.Item');
// });
// Route::get('/layouts/Home_page', function () {
//     return view('layouts/Home_page');
// });
// Route::get('/layouts/test', function () {
//     return view('layouts/test');
// });

Route::get('/homepage', function () {
    return view('homepage');
});


// Route::get('/fonte/home/Item',function(){
//     return view('fonte.home.Item');
// });
// Route::get('/layouts/Home_page',function(){
//     return view('layouts/Home_page');
// });
// Route::get('/layouts/test',function(){
//     return view('layouts/test');
// });
// Route::get('/admin/Account/Index', function () {
//     return view('admin/Account/Index');
// });
// Route::get('/admin/Account/user_profile', function () {
//     return view('admin/Account/user_profile');
// });

// Route::get('/auth/Account/userprofile', function () {
//     return view('auth/Account/userprofile');
// });

Route::get('/layouts/property_detail', function () {
    return view('layouts/property_detail');
});

Route::get('/layouts/contact_us',function(){
    return view('layouts/contact_us');
});
