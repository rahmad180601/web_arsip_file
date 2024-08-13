<?php

use App\Http\Controllers\DaftarArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/login/post_login', [LoginController::class, 'post_login'])->name('post_login');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/about', [DashboardController::class, 'about'])->name('about');

    Route::get('/daftar-arsip', [DaftarArsipController::class, 'index'])->name('arsip');
    Route::post('/daftar-arsip/import', [DaftarArsipController::class, 'import'])->name('arsip.import');
    Route::post('/daftar-arsip/store', [DaftarArsipController::class, 'store'])->name('arsip.store');
    Route::post('/daftar-arsip/update', [DaftarArsipController::class, 'update'])->name('arsip.update');
    Route::get('/daftar-arsip/delete/{id}', [DaftarArsipController::class, 'delete'])->name('arsip.delete');
    Route::get('/daftar-arsip/detail/{id}', [DaftarArsipController::class, 'detail'])->name('arsip.detail');
    Route::get('/daftar-arsip/data', [DaftarArsipController::class, 'data'])->name('arsip.data');
    Route::get('/daftar-arsip/get-produk-harga/{id}', [DaftarArsipController::class, 'getharga'])->name('getharga');
});