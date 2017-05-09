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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/messages', 'MessageController@index')->name('messages.index');
Route::get('/payments', 'PaymentController@index')->name('payments.index');
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/user', 'UsersController@index')->name('users.create');


Auth::routes();
