<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;


Route::get('/', function () {
    return view('frontend');
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
	return view('bootsrap1');
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
	return view('index');
});
