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

Route::get('/', 'App\Http\Controllers\MovieController@index');
Route::get('/movie/{id}', 'App\Http\Controllers\MovieController@show');

Route::post('/movie/{id}', 'App\Http\Controllers\ReviewController@store');
