<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductssController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('product', function () {
    return view('product');
});

Route::get('/', function () {
    
    return view('master');
});

Route::get('logout', function () {
    Session::forget('user');
    return view('login');
});

Route::post('/login','App\Http\Controllers\UsersController@login');

Route::get('product','App\Http\Controllers\ProductsController@index');

Route::get('detail/{id}','App\Http\Controllers\ProductsController@detail');

Route::get('search','App\Http\Controllers\ProductsController@search');

Route::post('add_to_cart','App\Http\Controllers\ProductsController@addToCart');

Route::get('cartlist','App\Http\Controllers\ProductsController@cartList');

Route::get('remove/{id}','App\Http\Controllers\ProductsController@remove');

Route::get('order','App\Http\Controllers\ProductsController@orderNow');

Route::post('orderplace','App\Http\Controllers\ProductsController@orderPlace');

Route::get('myorders','App\Http\Controllers\ProductsController@myOrders');