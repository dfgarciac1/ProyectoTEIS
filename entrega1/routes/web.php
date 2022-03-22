<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Auth::routes();
//Routes wine
Route::get('/wines/register', 'App\Http\Controllers\WineController@register')->name("wines.register");
Route::post('/wines/upload', 'App\Http\Controllers\WineController@save')->name("wines.upload");
Route::get('/wines/list', 'App\Http\Controllers\WineController@index')->name("wines.list");
Route::get('/wines/show/{id}', 'App\Http\Controllers\WineController@show')->name("wines.show");
Route::get('/wines/delete/{id}', 'App\Http\Controllers\WineController@destroy')->name('wines.delete');

// Routes vasitos
Route::get('/vasitos/register', 'App\Http\Controllers\VasitoController@register')->name("vasitos.register");
Route::post('/vasitos/upload', 'App\Http\Controllers\VasitoController@save')->name("vasitos.upload");
Route::get('/vasitos/list', 'App\Http\Controllers\VasitoController@index')->name("vasitos.list");
Route::get('/vasitos/show/{id}', 'App\Http\Controllers\VasitoController@show')->name("vasitos.show");
Route::get('/vasitos/delete/{id}', 'App\Http\Controllers\VasitoController@destroy')->name('vasitos.delete');

//Routes Cart

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");

