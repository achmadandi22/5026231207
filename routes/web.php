<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('Pertemuan5_Linktree');
});

// TugasFrontEnd

Route::get('Pertemuan2_ITSNews', function () {
	return view('Pertemuan2_ITSNews');
});

Route::get('Pertemuan3_TemplateBS', function () {
	return view('Pertemuan3_TemplateBS');
});

Route::get('Pertemuan4_Layout', function () {
	return view('Pertemuan4_Layout');
});

Route::get('Pertemuan5_Linktree', function () {
	return view('Pertemuan5_Linktree');
});

Route::get('Pertemuan67_JavaScript', function () {
	return view('Pertemuan67_JavaScript');
});

Route::get('Pertemuan67_Validasi', function () {
	return view('Pertemuan67_Validasi');
});

Route::get('Index(ETS)', function () {
	return view('index');
});