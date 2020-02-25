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
Route::get('/budi', function () {
    return 'auuuuuu';
});
///Mengambil controller firstController (app/http/controllers/auth) 
Route::get('test','firstController@index');
Route::get('/mahasiswa/{nama}','firstController@mahasiswa');
Route::get('/daftar/form','firstController@form');
Route::post('/daftar/form/action','firstController@postForm');

