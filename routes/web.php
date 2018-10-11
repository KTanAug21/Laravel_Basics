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

// Persons
Route::post('/persons/insert', 'PersonController@insert');
Route::get('/persons/list','PersonController@list');
Route::get('/persons','PersonController@show_form');
Route::get('/persons/{id}', 'PersonController@show_person');
Route::post('/persons/update/{id}', 'PersonController@update');
// Sample Route with controller
//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth','two_factor');