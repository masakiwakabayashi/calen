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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 管理者情報のCRUD
Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/{id}', 'AdminController@show')->name('admin.show');
Route::get('/admin/{id}/edit', 'AdminController@edit')->name('admin.edit');
Route::get('/admin/{id}/editpassword', 'AdminController@editPassword')->name('admin.editpassword');
Route::patch('/admin/{id}/edit', 'AdminController@update')->name('admin.update');
Route::patch('/admin/{id}/editpassword', 'AdminController@updatePassword')->name('admin.updatepassword');


