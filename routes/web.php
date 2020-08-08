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
/*
Route::get('/', 'HomeController@home');
*/
Route::get('/','HomeController@tabel');

Route::get('/register','AuthController@register');
Route::post('/register/proses','AuthController@proses');
Route::get('/welcome','AuthController@welcome');
Route::get('/master',function(){
	return view('adminlte/master');
});
Route::get('/coba',function(){
	return view('items/index');
});

Route::get('/data-table','HomeController@datatable');

Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/post-pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan','PertanyaanController@index');

Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');
Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');