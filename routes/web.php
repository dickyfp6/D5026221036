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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "Halo, Selamat datang";
});

Route::get('/blog2', function ($id) {
    return view('blog');
});

Route::get('/week1', function () {
    return view('week1');
});

Route::get('/masukkan/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@lihat');

//nilaikuliah CR
Route::get('/nilai', 'App\Http\Controllers\NilaiController@index2');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiController@tambah2');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store2');

//mobil CRUD
Route::get('/mobil', 'App\Http\Controllers\MobilController@index3');
Route::get('/mobil/tambah','App\Http\Controllers\MobilController@tambah3');
Route::post('/mobil/store','App\Http\Controllers\MobilController@store3');
Route::get('/mobil/beli/{kodemobil}','App\Http\Controllers\MobilController@beli');
Route::post('/mobil/proses-beli/{kodemobil}','App\Http\Controllers\MobilController@prosesBeli');
Route::get('/mobil/hapus/{kodemobil}','App\Http\Controllers\MobilController@hapus3');
Route::get('/mobil/cari','App\Http\Controllers\MobilController@cari');
