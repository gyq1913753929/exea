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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/goods')->group(function(){
		Route::get('zhanshi','Admin\GoodsController@zhanshi');
		Route::get('tian','Admin\GoodsController@tian');
		Route::post('tianjia','Admin\GoodsController@tianjia');
		
		Route::get('xiu/{id}','Admin\GoodsController@xiu');
		Route::post('xiugai/{id}','Admin\GoodsController@xiugai');
		Route::get('delete/{id}','Admin\GoodsController@delete');
});
Route::prefix('/custorm')->group(function(){
Route::get('/','Admin\CustormController@index');//列表展示
Route::get('create','Admin\CustormController@create');//添加页面
Route::post('store','Admin\CustormController@store');//执行添加
Route::get('edit/{id}','Admin\CustormController@edit');//编辑展示
Route::post('update/{id}','Admin\CustormController@update');//执行添加
Route::get('destroy/{id}','Admin\CustormController@destroy');//删除
});


