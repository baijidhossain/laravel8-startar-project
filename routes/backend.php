<?php

use App\Http\Controllers\Backend\AddtoCardController;
use App\Http\Controllers\Backend\ajaxsalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MenuBuilderController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProdactController;
use App\Http\Controllers\Backend\SaleController; 
use App\Http\Controllers\Backend\SalesreportController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SupplierDetailsController;

use App\Role;
use Illuminate\Routing\RouteGroup;

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


Route::group(['as'=>'app.','prefix'=>'app','middleware'=>['auth','admin']],function (){

Route::get('/dashboard',DashboardController::class)->name('dashboard');


//profile 
route::get('profile',[ProfileController::class,'index'])->name('profile.index');
route::put('profile',[ProfileController::class,'update'])->name('profile.update');

//secuirity 
route::get('profile/security',[ProfileController::class,'changepassword'])->name('profile.passwoed.change');
route::put('profile/security',[ProfileController::class,'updatepassword'])->name('profile.password.update');

//role controller
Route::resource('roles',RoleController::class);
route::get('routepermision',[RoleController::class,'routepermision'])->name('routepermision');
//end role controller

//user controller
Route::resource('users',UserController::class);
//enduser controller

//page controller
Route::resource('pages',PageController::class);
//end page controller

//menu
Route::resource('menus',MenuController::class)->except(['show']);
//end menu

Route::Group(['as'=>'menus.','prefix'=>'menus/{id}'],function (){
route::get('builder',[MenuBuilderController::class,'index'])->name('builder');

route::post('order',[MenuBuilderController::class,'order'])->name('order');
route::get('item/create',[MenuBuilderController::class,'itemCreate'])->name('item.create');
route::post('item/store',[MenuBuilderController::class,'itemStore'])->name('item.store');


route::get('item/{itemId}/edit',[MenuBuilderController::class,'itemEdit'])->name('item.edit');
route::put('item/{itemId}/update',[MenuBuilderController::class,'itemUpdate'])->name('item.update');

route::delete('item/{itemId}/destroy',[MenuBuilderController::class,'destroy'])->name('item.destroy');
});

Route::Group(['as'=>'settings.','prefix'=>'settings'],function(){
Route::get('general',[SettingController::class,'general'])->name('general');
Route::put('generalupdate',[SettingController::class,'generalupdate'])->name('general.update');
Route::get('appaerance',[SettingController::class,'appaerance'])->name('appaerance');
Route::put('appaerance',[SettingController::class,'appaeranceupdate'])->name('appaerance.update');
Route::put('favicon_icon',[SettingController::class,'faviconicon'])->name('faviconicon.update');

//mail
Route::get('mail',[SettingController::class,'mail'])->name('mail');
Route::put('mail',[SettingController::class,'mailupdate'])->name('mail.update');
//end mail

});

//category controler
Route::resource('categories',CategoryController::class);


Route::post('/ajaxtest',[CategoryController::class,'ajaxtest'])->name('ajaxtest');

Route::get('/index',[ajaxsalesController::class,'index'])->name('index');

Route::post('/ajaxsales',[ajaxsalesController::class,'ajaxsales'])->name('ajaxsales');
//end category controler

//prodact
Route::resource('prodacts',ProdactController::class);
//end prodact

//sale
Route::resource('sales',SaleController::class);
//end sale


//add to card
Route::Group(['as'=>'card.','prefix'=>'card'],function(){
Route::post('addtocard',[AddtoCardController::class,'addtocard'])->name('addtocard');

});

//end add to card 

//report
Route::Group(['as'=>'report.','prefix'=>'report'],function(){
    // Route::get('report',[SalesreportController::class,'salesreport'])->name('report');

    Route::get('dailyreport',[SalesreportController::class,'dailyreport'])->name('dailyreport');

    Route::get('daily_invoice_report',[SalesreportController::class,'dailyinvoicereport'])->name('dailyinvoicereport');
    
    });
//endreport

//employee
Route::resource('employees',EmployeeController::class);

//end employee


//supplier
Route::resource('suppliers',SupplierController::class);
//endsupplier

//supplier details
Route::resource('suppliersdetails',SupplierDetailsController::class);
//endsupplier details


//stock
Route::resource('stocks',StockController::class);
//endstock


});

