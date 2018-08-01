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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('index');
// });
// Route::name('front.index')->get('/',function(){
// 	return view("index");
// });

//定义单个路由绑定控制器的方法
Route::get('/','IndexController@index');

//路由配中间件
Route::get('/token', function(){
	return view('welcome');
})->middleware("token");

//定义资源路由
Route::resource('user', 'UserController');