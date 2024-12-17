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
    //untuk menampilkan tabel user
    Route::get('users', [UsersController::class, 'index'])->name('pages.users');
    //untuk create user
    Route::get('user/create',[UsersController::class, 'create'])->name('form.create');
    Route::post('user/store',[UsersController::class, 'store'])->name('form.store');
    //untuk update user
    Route::put('user/{id}/userUpdate',[UsersController::class, 'update'])->name('form.update');
    Route::get('user/{id}/userEdit',[UsersController::class, 'edit'])->name('form.UserEdit');
    //untuk delete user
    Route::delete('user/{id}',[UsersController::class, 'destroy'])->name('form.UserDelete');
    //untuk menampilkan halaman dashboard
    Route::get('pages', [DashboardController::class, 'index'])->name('pages.index');

    //untuk menampilkan tabel kategori
    Route::get('kategori', [kategoriController::class, 'index'])->name('pages.kategori');
    //untuk create data kategori
    Route::get('kategori/create',[kategoriController::class, 'create'])->name('form.createKategori');
    Route::post('kategori/store',[kategoriController::class, 'store'])->name('form.storeKategori');
    //untuk update data kategori
    Route::put('kategori/{id}/updateKategori',[kategoriController::class, 'update'])->name('form.updateKategori');
    Route::get('kategori/{id}/editKategori',[kategoriController::class, 'edit'])->name('form.editKategori');
    //untuk delete data kategori
    Route::delete('kategori/{id}',[kategoriController::class, 'destroy'])->name('form.deleteKategori');

    //untuk menampilkan tabel fasilitas
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('pages.fasilitas');
    //untuk create data fasilitas
    Route::get('fasilitas/create',[FasilitasController::class, 'create'])->name('form.createFasilitas');
    Route::post('fasilitas/store',[FasilitasController::class, 'store'])->name('form.storeFasilitas');
    //untuk update data fasilitas
    Route::put('fasilitas/{id}/updateFasilitas',[FasilitasController::class, 'update'])->name('form.updateFasilitas');
    Route::get('fasilitas/{id}/editFasilitas',[FasilitasController::class, 'edit'])->name('form.editFasilitas');
    //untuk delete data fasilitas
    Route::delete('fasilitas/{id}',[FasilitasController::class, 'destroy'])->name('form.deleteFasilitas');

    //untuk menampilkan tabel lapangan
    Route::get('lapangan', [LapanganController::class, 'index'])->name('pages.lapangan');
    //untuk create data lapangan
    Route::get('lapangan/create',[LapanganController::class, 'create'])->name('form.createLapangan');
    Route::post('lapangan/store',[LapanganController::class, 'store'])->name('form.storeLapangan');
    //untuk update data lapangan
    Route::put('lapangan/{id}/update',[LapanganController::class, 'update'])->name('form.updateLapangan');
    Route::get('lapangan/{id}/edit',[LapanganController::class, 'edit'])->name('form.editLapangan');    
    //untuk delete data lapangan
    Route::delete('lapangan/{id}',[LapanganController::class, 'destroy'])->name('form.deleteLapangan');



    Route::get('ownerLapang', [OwnerLapangController::class, 'index'])->name('pages.ownerLapang');
 
});


