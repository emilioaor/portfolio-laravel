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


Route::get('/', ['uses' => 'Index\IndexController@index', 'as' => 'index.index']);
Route::post('/contact', ['uses' => 'Index\IndexController@contact', 'as' => 'index.contact']);