<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/land', function () {
    return view('land');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('uts', function () {
    return view('uts');
});

Route::get('template1', function () {
    return view('template1');
});


// Route::get('biodata', [Link::class, 'index']);
// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

// route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

// template
Route::get('/template', function () {
    return view('template');
});

// Route tas
Route::get('/tas', [TasController::class, 'index']);
Route::get('/tas/cari', [TasController::class, 'cari']);
Route::get('/tas/tambah', [TasController::class, 'tambah']);
Route::post('/tas/store', [TasController::class, 'store']);
Route::get('/tas/edit/{id}', [TasController::class, 'edit']);
Route::post('/tas/update', [TasController::class, 'update']);
Route::get('/tas/hapus/{id}', [TasController::class, 'hapus']);
