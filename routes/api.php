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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::post('products/{id}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{id}', 'App\Http\Controllers\ProductController@destroy');

Route::get('categories ', 'App\Http\Controllers\CategoryController@index');
Route::post('categories ', 'App\Http\Controllers\CategoryController@store');
Route::post('categories/{id}', 'App\Http\Controllers\CategoryController@update');