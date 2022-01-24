<?php
Route::get('/admin/create/ybsoserious','MainController@adminCreate');
Route::get('/','MainController@Get')->name('index');
Route::get('/leaderboard','MainController@leaderBoardGet')->name('leaderboard')->middleware(['auth','verified']);;
Route::get('/leaderboard2','MainController@leaderBoardGet2')->name('leaderboard2')->middleware(['auth','verified']);;
Route::get('/level/{id}', 'MainController@levelGet')->name('level')->middleware(['auth','verified']);
Route::post('/level/{id}', 'MainController@levelPost')->middleware('verified');
Route::get('/rules','MainController@rulesGet')->name('rule');
Route::redirect('/home','/redirect');
Route::get('/redirect', 'MainController@redirect')->name('home');
Route::get('/logout','MainController@logout')->name('logout');
//Route::post('/dark_mode/{id}','MainController@dark_mode')->name('dark_mode');
Route::get('/dark_mode/{id}','MainController@dark_mode')->name('dark_mode_get');
//Route::post('/disable_dark_mode/{id}','MainController@disable_dark_mode')->name('disable_dark_mode');
Route::get('/disable_dark_mode/{id}','MainController@disable_dark_mode')->name('disable_dark_mode_get');
Auth::routes(['verify' => true]);
Route::get('/share/{id}/{name}','MainController@share');
Route::get('/admin/qwertymnbv09',function(){
   return User::get();
})->middleware('admin');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
