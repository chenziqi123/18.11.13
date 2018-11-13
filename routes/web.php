<?php

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
///admin/user 静态模板
/// 'Admin\AdminController@index' 创建的类
/// admin.user  起的别名
Route::get ('/admin/user','Admin\AdminController@index')->name ('admin.user');
Route::get ('admin/create','Admin\AdminController@create')->name ('admin.create');
Route::post ('admin/store','Admin\AdminController@store')->name ('admin.store');

//资源路径
Route::resource ('/ass','Admin\PionpopController');