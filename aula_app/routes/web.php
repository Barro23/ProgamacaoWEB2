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

Route::get('/user', 'App\Http\Controllers\UsuarioController@index');

Route::get('/user/{id}', 'App\Http\Controllers\UsuarioController@show');
Route::post('/user', 'App\Http\Controllers\UsuarioController@create');
Route::put('/user/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::get('/user/destroy/{id}', 'App\Http\Controllers\UsuarioController@destroy');