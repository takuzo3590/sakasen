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
Route::get('/home','HomeController@index')->name('home');


// 選手
Route::group(['middleware' => ['auth', 'can:player']], function () {
  // 選手プロフィール作成画面
  Route::get('/admin/player/create', 'Admin\PlayerController@add')->name('player.create');
  Route::post('/admin/player/create', 'Admin\PlayerController@create')->name('player.create');
  //ノート作成画面
  Route::get('/admin/note/create', 'Admin\NoteController@add')->name('note.create');
  Route::post('/admin/note/create', 'Admin\NoteController@create')->name('note.create');
  
  //質問作成画面
});
 
// コーチ
Route::group(['middleware' => ['auth', 'can:coach']], function () {
   // コーチプロフィール画面
   Route::get('/admin/profile/create', 'Admin\ProfileController@add')->name('coach.create');
   Route::post('/admin/profile/create', 'Admin\ProfileController@create')->name('coach.create');
   
   Route::get('/admin/profile', 'Admin\ProfileController@index');
});

//共通ページ
Route::group(['prefix' => 'admin'], function() {
    Route::get('team/create', 'Admin\TeamController@add');
    Route::post('team/create', 'Admin\TeamController@create');
});
