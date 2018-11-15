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


//1.网站首页
//从这里加载HomeController类里面的index方法
Route::get ('/','HomeController@index')->name ('home');

//用户管理
//4.从这里加载UserController类里面的login方法
Route::get ('user/login','UserController@login')->name ('user.login');
//从这里加载UserController类里面的store方法 注册提交
Route::post ('user/store','UserController@store')->name ('user.store');

Route::get ('user/register','UserController@register')->name ('register');
//接收登录提交
Route::post ('user/registerForm','UserController@registerForm')->name ('registerForm');
//注销账号的
Route::get ('user/logout','UserController@logout')->name ('logout');
//重置密码  修改密码
Route::get ('user/passwordReset','UserController@passwordReset')->name ('passwordReset');
//接收重置完密码的数据
Route::post ('passwordResetForm','UserController@passwordResetForm')->name ('passwordResetForm');
//工具类
//10.从这里加载CodeControllerr类里面的send方法
Route::any('/code/send','Util\CodeController@send')->name('code.send');

//后台路由;
Route::group(['middleware' => ['admin.auth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
    Route::get ('index','IndexController@index')->name ('index');
});
Route::get ('indexff','Admin\IndexController@indexff')->name ('indexff');