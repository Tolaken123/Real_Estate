<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\UserController;


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

// Route::get('/hey',function(){
//     return view('properties');
// });





Route::get('/admin/properties', [PropertiesController::class,'create']);

Route::get('/property',function(){
    return view('properties');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin.','middleware' => 'auth'], function () {
    Route::get('/',function(){return view('layouts.admin');});
    // Route::resource('/properties','PropertiesController');
    Route::get('/properties', [PropertiesController::class,'create'])->name('create');
    Route::post('/properties', [PropertiesController::class,'store'])->name('Store');
    Route::get('/properties/index', [PropertiesController::class,'index'])->name('index');
    
    Route::get('/user',function () {
        return view('admin.account.user_list');
    });
    Route::get('/admin/Account/Index',function(){
        return view('admin/Account/Index');
    });
    // Route::get('/layouts/property_detail',function(){
    //     return view('layouts/property_detail');
    // });
    Route::get('/admin/Account/user_profile',function(){
        return view('admin/Account/user_profile');
    });

});
Route::get('/fonte/home/Item',function(){
    return view('fonte.home.Item');
});
Route::get('/layouts/Home_page',function(){
    return view('layouts/Home_page');
});

Route::get('/layouts/test',function(){
    return view('layouts/test');
});




Auth::routes();

 Route::get('/home', [HomeController::class,'index'])->name('home');


 Route::get('/homepage', function () {
    return view('homepage');
    });
  



    
// Route::get('/propertie',[PropertiesController::class,'index']);
   

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



Route::get('/homepage', function () {
    return view('homepage');
    });

    
Route::get('user',[UserController::class,'show']);
    


Route::get('user',[UserController::class,'show']);
    


// Route::get('/fonte/home/Item',function(){
//     return view('fonte.home.Item');
// });
// Route::get('/layouts/Home_page',function(){
//     return view('layouts/Home_page');
// });
// Route::get('/layouts/test',function(){
//     return view('layouts/test');
// });


Route::get('/admin/Account/Index',function(){
    return view('admin/Account/Index');
});
Route::get('/admin/Account/user_profile',function(){
    return view('admin/Account/user_profile');
});

Route::get('/auth/Account/userprofile',function(){
    return view('auth/Account/userprofile');
});

Route::get('/layouts/property_detail',function(){
    return view('layouts/property_detail');
});
