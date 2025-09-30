<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{param1}', function () {
    return "Mahasiswa epep";
});

Route::get('/nama/{param1}', function ($param1){
    return "Nama saya : ".$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//ini percobaan latihan saya putra