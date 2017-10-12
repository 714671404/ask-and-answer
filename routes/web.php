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

//登录make：auth默认路由
//Route::get('/', function () {
//    return view('home/index');
//})->middleware('auth');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

/*
 * 首页路由区
 */
 Route::get('/', 'HomeController@index');

 Route::get('/a', function () {
     return view('/home');
 });
/*
 * 登录注册路由去
 */

Route::get('/login', 'Auth\LoginController@showLoginForm');
//Route::post('/user', 'Auth\LoginController@is_user');