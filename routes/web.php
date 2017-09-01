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
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
->middleware('auth')
->group(
    function ( ) {
        Route::get('users', 'Admin\UsersController@index')->name('admin.users');
    }
);

Route::get('/messages', 'MessageController@index')->name('messages.index');
Route::get('/payments', 'PaymentController@index')->name('payments.index');
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/user', 'UsersController@index')->name('user.create');
Route::get('/user_preferences', 'UsersController@edit')->name('user.edit');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

