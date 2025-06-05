<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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

//TugasFrontEnd

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

Route::get('dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blogs', [BlogController::class, 'home']);
Route::get('/blogs/tentang', [BlogController::class, 'tentang']);
Route::get('/blogs/kontak', [BlogController::class,'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
