<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\OwnerLapangController;
use App\Http\Controllers\owner\DashboardOwnerController;
use App\Http\Controllers\user\HomepageController;
use App\Http\Controllers\user\DetailLapang;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin
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

    //untuk menampilkan tabel owner lapangan
    Route::get('ownerLapang', [OwnerLapangController::class, 'index'])->name('pages.ownerLapang');
    //untuk menampilkan form sekaligus fungsinya
    Route::get('ownerLapang/create',[OwnerLapangController::class, 'create'])->name('form.createOwner');
    Route::post('ownerLapang/store',[OwnerLapangController::class, 'store'])->name('form.storeOwner');
    //untuk menampilkan form sekaligus update
    Route::put('ownerLapang/{id}/updateOwner',[OwnerLapangController::class, 'update'])->name('form.updateOwner');
    Route::get('ownerLapang/{id}/editOwner',[OwnerLapangController::class, 'edit'])->name('form.editOwner');    
    //untuk menampilkan form sekaligus delete
    Route::delete('ownerLapang/{id}',[OwnerLapangController::class, 'destroy'])->name('form.deleteOwner');

    Route::get('bookingManage',[BookingController::class, 'index'])->name('pages.bookingManage');
 
});


Route::prefix('owner')->name('owner.')->group(function () {
   //untuk menampilkan dashboard owner lapang
   Route::get('pages/index',[DashboardOwnerController::class, 'index'])->name('pages.index'); 
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('pages/index',[HomepageController::class,'index'])->name('pages.index');
    Route::get('pages/detailLapang',[DetailLapang::class, 'index'])->name('pages.detailLapang');
});


require __DIR__.'/auth.php';
