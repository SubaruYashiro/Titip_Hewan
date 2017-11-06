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

Auth::routes();


Route::get('logout', 'Auth\LoginController@userLogout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('/', 'GuestController@index')->name('index');
Route::get('about', 'GuestController@about')->name('about');

Route::group(['prefix' => 'admin'], function() {
	Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});