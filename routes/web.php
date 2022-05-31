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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');
//Route::get('messages/{id}', 'MessagesController@show');
//Route::post('messages', 'MessagesController@store');
//Route::put('messages/{id}', 'MessagesController@update');
//Route::delete('messages/{id}', 'MessagesController@destroy');

//Route::get('messages', 'MessagesController@index')->name('meddages.index');
//Route::get('messages/create', 'MessagesController@create')->name('messages.create');
//Route::put('messages/{id}', 'MessagesController@update')->name('messages.edit');