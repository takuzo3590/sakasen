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
Route::group(['prefix' => 'admin'], function(){
Route::get('note/create', 'Admin\NoteController@add');
Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::get('profile/edit' , 'Admin\ProfileController@edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
