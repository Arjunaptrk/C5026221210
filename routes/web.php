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
    return "Halo Apa Kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo Apa Kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('Tugas1',function (){
    return view('Tugas1');
})->name('Tugas1');

Route::get('Tugas2',function (){
    return view('Tugas2');
})->name('Tugas2');

Route::get('Week1',function (){
    return view('Week1');
})->name('Week1');

Route::get('Week3',function (){
    return view('Week3');
})->name('Week3');

Route::get('Week4',function (){
    return view('Week4');
})->name('Week4');

Route::get('Week6',function (){
    return view('Week6');
})->name('Week6');

Route::get('Week7',function (){
    return view('Week7');
})->name('Week7');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});
Route::get('iniForm', function () {
    return view('iniFOrm');
});
Route::get('master', function () {
    return view('master');
});

Route::get('formulir', 'App\Http\Controllers\ContohController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\ContohController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
