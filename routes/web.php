<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KetersediaanAlatController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\PeminjamanAlatController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\MLDController;
use App\Http\Controllers\monitoringController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('login');
});
Route::post('/logindashboard', [LoginController::class, 'proses']);


Route::get('/ketersediaanAlat', [KetersediaanAlatController::class, 'index']);

Route::get('/validasi', [ValidasiController::class, 'index']);

Route::get('/laporanPeminjaman', [PeminjamanAlatController::class, 'index']);
Route::post('/createpinjam', [PeminjamanAlatController::class, 'store']);

Route::get('/pengembalian', [PengembalianController::class, 'index']);

// Route::get('/monitoring', [MLDController::class, 'index']);

Route::get('/history',[HistoryController::class, 'index']);

Route::get('/mld', [MLDController::class, 'index']);

Route::get('/form', function () {
    return view('formPinjam');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//==MONITORING==
Route::get('/monitoring', function () {
    return view('monitoring');
});
Route::post('/createmonitoring', [monitoringController::class, 'store']);

Route::get('/peminjaman', function () {
    return view('formPinjam');
});

Route::get('/', function () {
    return view('beranda');
});

