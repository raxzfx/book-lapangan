<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\OwnerLapangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\FasilitasController;
use App\Models\User;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('pages', [DashboardController::class, 'index'])->name('pages.index');
    Route::get('users', [UsersController::class, 'index'])->name('pages.users');
    Route::get('lapangan', [LapanganController::class, 'index'])->name('pages.lapangan');
    Route::get('ownerLapang', [OwnerLapangController::class, 'index'])->name('pages.ownerLapang');
    Route::get('kategori', [kategoriController::class, 'index'])->name('pages.kategori');
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('pages.fasilitas');
    Route::get('user/create',[UsersController::class, 'create'])->name('form.create');
    Route::post('user/store',[UsersController::class, 'store'])->name('form.store');
    Route::put('user/{id}/userUpdate',[UsersController::class, 'update'])->name('form.update');
    Route::get('user/{id}/userEdit',[UsersController::class, 'edit'])->name('form.UserEdit');
    Route::delete('user/{id}',[UsersController::class, 'destroy'])->name('form.UserDelete');
    
});
