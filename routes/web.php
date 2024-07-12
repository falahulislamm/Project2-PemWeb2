<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\Kategori_umkmController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\ProvinsiController;


Route::get('/', function () {
    return view('frontend');
});

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //routing UMKM
Route::get('/umkm/show', [umkmController::class, 'show'])->name('umkm.show')->middleware(['auth', 'administrator']); //tampilkan
Route::get('/umkm/create', [umkmController::class, 'create'])->name('umkm.create')->middleware(['auth', 'administrator']); //add
Route::post('/umkm/store', [umkmController::class, 'store'])->name('umkm.store')->middleware(['auth', 'administrator']);
Route::get('/umkm/{id}/edit', [umkmController::class, 'edit'])->name('umkm.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/umkm/{id}', [umkmController::class, 'destroy'])->name('umkm.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/umkm/{id}', [umkmController::class, 'view'])->name('umkm.view')->middleware(['auth', 'administrator']); //view

//routing KabKota
Route::get('/kabkota/show', [kabkotaController::class, 'show'])->name('kabkota.show');
Route::get('/kabkota/create', [kabkotaController::class, 'create'])->name('kabkota.create')->middleware(['auth', 'administrator']); //add
Route::post('/kabkota/store', [kabkotaController::class, 'store'])->name('kabkota.store')->middleware(['auth', 'administrator']);
Route::get('/kabkota/{id}/edit', [kabkotaController::class, 'edit'])->name('kabkota.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/kabkota/{id}', [kabkotaController::class, 'destroy'])->name('kabkota.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/kabkota/{id}', [kabkotaController::class, 'view'])->name('kabkota.view'); //view

//routing Kategori_umkm
Route::get('/kategori_umkm/show', [kategori_umkmController::class, 'show'])->name('kategori_umkm.show');
Route::get('/kategori_umkm/create', [kategori_umkmController::class, 'create'])->name('kategori_umkm.create')->middleware(['auth', 'administrator']); //add
Route::post('/kategori_umkm/store', [kategori_umkmController::class, 'store'])->name('kategori_umkm.store')->middleware(['auth', 'administrator']);
Route::get('/kategori_umkm/{id}/edit', [kategori_umkmController::class, 'edit'])->name('kategori_umkm.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/kategori_umkm/{id}', [kategori_umkmController::class, 'destroy'])->name('kategori_umkm.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/kategori_umkm/{id}', [kategori_umkmController::class, 'view'])->name('kategori_umkm.view'); //view

//routing Provinsi
Route::get('/provinsi/show', [provinsiController::class, 'show'])->name('provinsi.show'); //tampilkan
Route::get('/provinsi/create', [provinsiController::class, 'create'])->name('provinsi.create')->middleware(['auth', 'administrator']); //add
Route::post('/provinsi/store', [provinsiController::class, 'store'])->name('provinsi.store')->middleware(['auth', 'administrator']);
Route::get('/provinsi/{id}/edit', [provinsiController::class, 'edit'])->name('provinsi.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/provinsi/{id}', [provinsiController::class, 'destroy'])->name('provinsi.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/provinsi/{id}', [provinsiController::class, 'view'])->name('provinsi.view'); //view

//routing Pembina
Route::get('/pembina/show', [pembinaController::class, 'show'])->name('pembina.show'); //tampilkan
Route::get('/pembina/create', [pembinaController::class, 'create'])->name('pembina.create')->middleware(['auth', 'administrator']); //add
Route::post('/pembina/store', [pembinaController::class, 'store'])->name('pembina.store')->middleware(['auth', 'administrator']);
Route::get('/pembina/{id}/edit', [pembinaController::class, 'edit'])->name('pembina.edit')->middleware(['auth', 'administrator']); //edit
Route::delete('/pembina/{id}', [pembinaController::class, 'destroy'])->name('pembina.destroy')->middleware(['auth', 'administrator']); //delete
Route::get('/pembina/{id}', [pembinaController::class, 'view'])->name('pembina.view'); //view

// profil
Route::get('/profil', function () { //url yang ditampilkan di web
    return view('profil');
    })->name('profil');

// profil
Route::get('/halaman_utama', function () { //url yang ditampilkan di web
    return view('halaman_utama');
    })->name('halaman_utama');

});

require __DIR__.'/auth.php';


