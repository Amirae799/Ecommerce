<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/login', function () {
  return view('login');
});
Route::get('/logout', function () {
  //Session::forget('user');
  Session::flush();
        
        Auth::logout();

        return redirect('/');
  //return redirect('login');
});

Route::post('/login','App\Http\Controllers\UserController@login');
Route::get('/register','App\Http\Controllers\UserController@register');
Route::post('/register','App\Http\Controllers\UserController@store')->name('register');
Route::get('/','App\Http\Controllers\ProductController@index');
Route::get('detail/{id}','App\Http\Controllers\ProductController@detail');
Route::get('search','App\Http\Controllers\ProductController@search');
Route::post('add_to_cart','App\Http\Controllers\ProductController@addToCart');
Route::get('cartlist','App\Http\Controllers\ProductController@cartList');
Route::get('remove/{id}','App\Http\Controllers\ProductController@removecart');
Route::get('ordernow','App\Http\Controllers\ProductController@OrderNow');
Route::post('orderplace','App\Http\Controllers\ProductController@Orderplace');
Route::get('myorder','App\Http\Controllers\ProductController@myOrder');
