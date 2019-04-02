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

Route::get('/', 'StoryController@index');
Route::get('/story/create', 'StoryController@create');
Route::get('/Thriller', 'StoryController@thriller');
Route::get('/Fantasy', 'StoryController@fantasy');
Route::get('/Western', 'StoryController@western');
Route::get('/Detective', 'StoryController@detective');
Route::get('/login', 'StoryController@detective');
Route::get('/register', 'RegisterController@create');
Route::post('/story/store', 'StoryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
