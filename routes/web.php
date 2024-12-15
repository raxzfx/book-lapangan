<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\OwnerLapangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\FasilitasController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('pages', [DashboardController::class, 'index'])->name('pages.index');
    Route::get('users', [UsersController::class, 'index'])->name('pages.users');
    Route::get('lapangan', [LapanganController::class, 'index'])->name('pages.lapangan');
    Route::get('ownerLapang', [OwnerLapangController::class, 'index'])->name('pages.ownerLapang');
    Route::get('kategori', [kategoriController::class, 'index'])->name('pages.kategori');
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('pages.fasilitas');
});
