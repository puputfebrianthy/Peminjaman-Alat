<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KetersediaanAlatController;
use App\Http\Controllers\GeneralViewController;
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

Route::post('/logindashboard', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/ketersediaanAlat', [KetersediaanAlatController::class, 'index']);

Route::get('/dashboard', [GeneralViewController::class, 'dashboard']);
Route::get('/peminjaman', [GeneralViewController::class, 'peminjaman']);
Route::get('/cetaksurat/{id}', [GeneralViewController::class, 'cetaksurat']);

Route::get('/laporanPeminjaman', [PeminjamanAlatController::class, 'index']);
Route::post('/createpinjam', [PeminjamanAlatController::class, 'store']);

// Middleware untuk tamu yang belum login
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/', [GeneralViewController::class, 'beranda']);
});


// Middleware untuk akun yang sudah login dan userlevel
Route::group(['middleware' => ['auth', 'cekUserLogin:superadmin,admin']], function () {
    Route::post('/registration', [LoginController::class, 'registration']);
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/validasi', [ValidasiController::class, 'index']);
    Route::get('/validasi/diterima/{id}', [ValidasiController::class, 'store']);
    Route::get('/validasi/ditolak/{id}', [ValidasiController::class, 'tolak']);

    Route::get('/pengembalian', [PengembalianController::class, 'index']);
    Route::get('/pengembalian/terferivikasi/{id}', [PengembalianController::class, 'store']);

    Route::get('/history',[HistoryController::class, 'index']);

    Route::get('/mld', [MLDController::class, 'index']);
    
    Route::get('/monitoring', [GeneralViewController::class, 'monitoring']);

    Route::post('/createmonitoring', [monitoringController::class, 'store']);

});

