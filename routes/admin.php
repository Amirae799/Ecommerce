<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes;
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  Route::group(['middleware'=>'auth:admin'],function (){
  Route::get('/admin','App\Http\Controllers\DashboardController@index')->name('admin.dashboard');
});
  Route::group(['middleware'=>'guest:admin'],function (){
  Route::get('login','App\Http\Controllers\LoginController@getLogin')->name('admin.login');
  Route::post('login','App\Http\Controllers\LoginController@postLogin')->name('admin.login');
  //////////////////////////////admin MODIFY products/////////////////////////////////////////////////////////
  Route::get('allproducts','App\Http\Controllers\LoginController@allproducts')->name('admin.allproducts');
  Route::get('createproduct', 'App\Http\Controllers\DashboardController@createProduct')->name('products.create');
  Route::post('storeproduct', 'App\Http\Controllers\DashboardController@storeProduct')->name('storeProduct');
  Route::get('edit/{id}', 'App\Http\Controllers\DashboardController@editProduct');
  Route::post('updateproduct/{id}', 'App\Http\Controllers\DashboardController@UpdateProduct');
  Route::get('delete/{product_id}', 'App\Http\Controllers\DashboardController@delete')->name('products.delete');
  /////////////////////////////////////////admin modify user///////////////////////////////////////////////////////
  Route::get('allusers','App\Http\Controllers\DashboardController@allusers')->name('admin.allusers');
  Route::get('create', 'App\Http\Controllers\DashboardController@createUser')->name('users.create');
  Route::post('store', 'App\Http\Controllers\DashboardController@storeUser')->name('storeUser');
  Route::get('edituser/{id}', 'App\Http\Controllers\DashboardController@edituser');
  Route::post('updateuser/{id}', 'App\Http\Controllers\DashboardController@Updateuser');
  Route::get('deleteuser/{id}', 'App\Http\Controllers\DashboardController@deleteuser');
  ////////////////////////////////////////////////////manager modify admin//////////////////
  Route::get('alladmins','App\Http\Controllers\DashboardController@alladmins')->name('admin.alladmins');

});