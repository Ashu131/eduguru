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

Route::get('/', 'MainController@index');

//User Authentication Routes
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

// Nav pages 
Route::resource('articles', 'pages\ArticlesController');
Route::get('/discuss','PagesController@discuss');
Route::get('/locker','PagesController@locker');
Route::get('/jobs','PagesController@job');
Route::get('/connect','PagesController@connect');

//Edit Profile
Route::get('/editprofile', 'UsersController@editprofile');