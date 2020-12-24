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

// 日付

Route::get('/index', 'DateController@index')->name('date.index');

Route::get('/date/create', 'DateController@create')->name('date.create');

Route::POST('/date/create','DateController@store')->name('date.store');

Route::get('/date/{id}/edit', 'DateController@edit')->name('date.edit');

Route::PATCH('/date/{id}/edit','DateController@update')->name('date.update');

Route::delete('/date/{id}','DateController@destroy')->name('date.destroy');




// イベント

// Route::get('/index', 'EventController@index')->name('event.index');



Route::get('/event/create', 'EventController@create')->name('event.create');

Route::POST('/event/create','EventController@store')->name('event.store');

Route::GET('/event/{event_id}/show', 'EventController@show')->name('event.show');

Route::get('/event/{event_id}/edit', 'EventController@edit')->name('event.edit');

Route::PATCH('/event/{event_id}/edit','EventController@update')->name('event.update');

Route::delete('/event/{event_id}','EventController@destroy')->name('event.destroy');

// ユーザー情報

Route::get('user_profile/{id}', 'UserProfileController@show')->name('user_profile.show');

Route::get('user_profile/{id}/edit_user_name', 'UserProfileController@editUserName')->name('user.edit_name');

Route::get('user_profile/{id}/edit_user_password', 'UserProfileController@editPassword')->name('user.edit_password');

Route::patch('user_profile/{id}/edit_user_name', 'UserProfileController@updateUserName')->name('user.update_name');

Route::patch('user_profile/{id}/edit_user_password', 'UserProfileController@updatePassword')->name('user.update_password');

// 記事関連

Route::get('post/index', 'PostController@index')->name('post.index');

Route::get('event/post/{post_id}', 'PostController@show')->name('post.show');

Route::get('event/post/{post_id}/create', 'PostController@create')->name('post.event.create');

Route::POST('event/post/{post_id}/create','PostController@store')->name('post.event.store');

Route::POST('post/index', 'PostController@search')->name('post.event.search');