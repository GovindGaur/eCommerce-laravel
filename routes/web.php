<?php

use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers\;
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
Route::get('/logout', function () {
    Session::forget('user');
    return view('/login');
});
Route::view('/register','register');
Route::post('/register', 'UsersController@register');
Route::post('/login', 'UsersController@login');
Route::get('/', 'ProductController@index');
Route::get('/detail/{id}', 'ProductController@detail');
Route::get('search', 'ProductController@search');
Route::post('add_to_cart', 'ProductController@addToCart');
Route::get('cartlist', 'ProductController@cartlist');
Route::get('removecart/{id}', 'ProductController@removecart');
Route::get('ordernow', 'ProductController@ordernow');
Route::post('orderplace', 'ProductController@orderplace');
Route::get('myorders', 'ProductController@myorders');