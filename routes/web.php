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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/create', 'ProdukController@create');
Route::post('/produk', 'ProdukController@store');
Route::get('/produk/{produk_id}', 'ProdukController@show');
Route::get('/produk/{produk_id}/edit', 'ProdukController@edit');
Route::put('/produk/{produk_id}', 'ProdukController@update');
Route::delete('/produk/{produk_id}', 'ProdukController@destroy');
