<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tb_pegawai','PegawaiController@index');

Route::get('/tb_pegawai/tambah','PegawaiController@tambah');

Route::post('/tb_pegawai/store','PegawaiController@store');

Route::get('/tb_pegawai/edit/{id}','PegawaiController@edit');

Route::post('/tb_pegawai/update','PegawaiController@update');

Route::get('/tb_pegawai/hapus/{id}','PegawaiController@hapus');