<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserSystemInfoController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/test',function(){

// return menu('dashboard');

// });


// Route::get('/', function () {
//     return view('welcome');
// });


// all user access route
Route::get('/',[FrontendController::class,'index'])->name('frontend');


Route::get('/UserSystemInfo',[UserSystemInfoController::class,'getusersysteminfo'])->name('UserSystemInfo');
// all user access route


// Route::get('/user',[UserController::class,'index'])->name('user');
Route::group(['as'=>'frontend.','prefix'=>'frontend'],function (){
    Route::resource('users',UserController::class);
   
});

Route::group(['as'=>'client.','prefix'=>'client','middleware'=>['auth']],function (){
    Route::get('/profile', [HomeController::class,'index'])->name('profile');

    // Route::get('/home', [HomeController::class,'index'])->name('home');
   
});








Route::get('/login/{provider}',[LoginController::class,'redirecToProvider'])->name('login.provider');
Route::get('/login/{provider}/callback',[LoginController::class,'handleProviderCallback'])->name('login.callback');

// Route::group(['as'=>'login.','prefix'=>'login'],function (){

// Route::get('');

// });

Auth::routes();




// Using PHP callable syntax...
// Route::get('/users', [UserController::class, 'index']);

// Route::view('/dashboard','backend.dashboard');



// Route::get('{slug}',[PageController::class,'index'])->name('page');



