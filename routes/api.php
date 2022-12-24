<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/post/create', 'App\Http\Controllers\ApiPostController@create');
Route::post('/post/update/{id}', 'App\Http\Controllers\ApiPostController@update');
Route::get('/post/delete/{id}', 'App\Http\Controllers\ApiPostController@delete');
Route::get('/post', 'App\Http\Controllers\ApiPostController@index');
Route::get('/post/index', 'App\Http\Controllers\ApiPostController@index');
Route::get('/post/show/{id}', 'App\Http\Controllers\ApiPostController@show');
