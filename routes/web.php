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

Route::group(['middleware' => 'prevent-back-history'],function(){
  
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('user', 'UserController@index')->name('user.index');

Route::get('user/{id}', 'UserController@show')->name('user.show');

Route::get('userCreate', 'UserController@viewcreate')->name('user.create');

Route::post('user/store', 'UserController@register')->name('user.store');

Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');

Route::put('user/{id}', 'UserController@update')->name('user.update');

Route::delete('user/{id}', 'UserController@destroy')->name('user.destroy');

});


