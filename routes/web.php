<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KulkasController;
use App\Http\Controllers\KaryawanDBController;

Route::get('/', function () {
    return view('template');
});

Route::get('/frontend', function () {
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

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'])->name('pegawai.hapus');
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'])->name('pegawai.cari');

Route::get('/formulir-pegawai', [PegawaiController::class, 'formulir'])->name('pegawai.formulir');
Route::post('/proses-pegawai', [PegawaiController::class, 'proses'])->name('pegawai.proses');

Route::get('/blog', [BlogController::class, 'home'])->name('blog.home');
Route::get('/blog/tentang', [BlogController::class, 'tentang'])->name('blog.tentang');
Route::get('/blog/kontak', [BlogController::class, 'kontak'])->name('blog.kontak');

Route::get('/input', [MalasngodingController::class, 'input'])->name('malasngoding.input');
Route::post('/proses', [MalasngodingController::class, 'proses'])->name('malasngoding.proses');

//Bagian tugas membuat tabel sesuai pembagian
//tugas pertemuan 14 membuat tabel kulkas
Route::get('/kulkas', [KulkasController::class, 'indexkulkas']);

//Menginput Data Ke Database Dengan Laravel
Route::get('/kulkas/tambahkulkas', [KulkasController::class, 'tambahkulkas']);

//Menampilkan Data di store Database Dengan Laravel
Route::post('/kulkas/storekulkas', [KulkasController::class, 'storekulkas']);

//Mengedit data kulkas
Route::get('/kulkas/editkulkas/{id}', [KulkasController::class, 'editkulkas']);

//bagian update data kulkas
Route::post('/kulkas/updatekulkas', [KulkasController::class, 'updatekulkas']);

//bagian hapus data kulkas
Route::get('/kulkas/hapuskulkas/{id}', [KulkasController::class, 'hapuskulkas']);

//bagian pencarian kulkas
Route::get('/kulkas/carikulkas', [KulkasController::class, 'carikulkas']);

//route karywan
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/tambah/karyawan', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);
