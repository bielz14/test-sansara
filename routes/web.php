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

Route::auth();

Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@index');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');
