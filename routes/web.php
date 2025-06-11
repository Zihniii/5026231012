<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SofaDBController;
use App\Http\Controllers\KaryawanDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);

Route::get('blog', function () {
	return view('blog');
});

Route::get('/week1', function () {
	return view('week1');
});

Route::get('/Soal 1', function () {
	return view('Soal 1');
});

Route::get('/bootsrap1', function () {
	return view('bootstrap1');
});

Route::get('/bootstrap2', function () {
	return view('bootstrap2');
});

Route::get('/js1', function () {
	return view('js1');
});

Route::get('/js2', function () {
	return view('js2');
});

Route::get('/ntusg', function () {
	return view('linktree-ntusg');
});

Route::get('/ets', function () {
	return view('ets');
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('dosen', [Coba::class, 'index']);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);


// route Sofa
Route::get('/sofa', [SofaDBController::class, 'indexsofa']);
Route::get('/sofa/tambahsofa',[SofaDBController::class, 'tambahsofa']);
Route::post('/sofa/storesofa',[SofaDBController::class, 'storesofa']);
Route::get('/sofa/editsofa/{id}',[SofaDBController::class, 'editsofa']);
Route::post('/sofa/updatesofa',[SofaDBController::class, 'updatesofa']);
Route::get('/sofa/hapussofa/{id}',[SofaDBController::class, 'hapussofa']);
Route::get('/sofa/carisofa',[SofaDBController::class, 'carisofa']);

// route Karyawan
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/karyawan/tambah',[KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store',[KaryawanDBController::class, 'store']);
Route::post('/karyawan/update',[KaryawanDBController::class, 'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanDBController::class, 'hapus']);

