<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\location\AddressSelectController;
use App\Http\Controllers\Admin\ProfielController;

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

Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'home'])->name('home');
    Route::group(['prefix' => 'properties', 'as' => 'properties.'], function () {
        Route::get('/', [\App\Http\Controllers\Frontend\PropertyController::class, 'index'])->name('index');
        Route::get('/{property}', [\App\Http\Controllers\Frontend\PropertyController::class, 'detail'])->name('detail');
    });

    Route::group(['prefix' => 'agents', 'as' => 'agent.'], function () {
        Route::get('/{user}', [\App\Http\Controllers\Frontend\PropertyController::class, 'agent_properties'])->name('index');
    });
});

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/layouts/Home_page', function () {
    return view('layouts/Home_page');
});
Route::get('/layouts/industry_profile', function () {
    return view('layouts/industry_profile');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/layouts/property_detail', function () {
    return view('layouts/property_detail');
});

Route::get('/layouts/contact_us', function () {
    return view('layouts/contact_us');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    // Route::get('/', function () {
    //     return view('layouts.admin');});
    Route::resource('/', AdminController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/properties', PropertiesController::class);
    Route::resource('/rent', RentController::class);
    Route::resource('/sale', SaleController::class);
   
   
    Route::group(['prefix' => 'location', 'as' => 'location.'], function () {
        Route::get('district', [AddressSelectController::class, 'districts'])->name('district');
        Route::get('commune', [AddressSelectController::class, 'communes'])->name('commune');
        Route::get('village', [AddressSelectController::class, 'villages'])->name('village');
    });
    Route::middleware('admin')->group(function () {
        Route::resource('/user', AccountController::class);
        Route::get('/profile',[ProfielController::class,'profile']);
        Route::patch('/profile/update',[ProfielController::class,'update']);
    });
});
