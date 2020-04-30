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
Route::prefix('/brand')->group(function(){
		Route::get('create','Admin\BrandController@create');
		Route::post('store','Admin\BrandController@store');
		Route::get('index','Admin\BrandController@index');
		Route::get('destroy/{id}','Admin\BrandController@destroy');
		Route::get('update/{id}','Admin\BrandController@update');
		Route::post('edit/{id}','Admin\BrandController@edit');
});


