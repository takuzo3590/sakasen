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
Route::get('note/edit' , 'Admin\NoteController@edit');
Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::get('profile/edit' , 'Admin\ProfileController@edit');
Route::get('question/create' , 'Admin\QuestionController@add');
});

Auth::routes();

// 全ユーザ
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
  // ユーザ一覧
  Route::get('/account', 'AccountController@index')->name('account.index');
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
  // ユーザ登録
  Route::get('/account/regist', 'AccountController@regist')->name('account.regist');
  Route::post('/account/regist', 'AccountController@createData')->name('account.regist');

  // ユーザ編集
  Route::get('/account/edit/{user_id}', 'AccountController@edit')->name('account.edit');
  Route::post('/account/edit/{user_id}', 'AccountController@updateData')->name('account.edit');

  // ユーザ削除
  Route::post('/account/delete/{user_id}', 'AccountController@deleteData');
});

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {

});

Route::get('/home', 'HomeController@index')->name('home');
