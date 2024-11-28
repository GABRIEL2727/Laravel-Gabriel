<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;

// Halaman utama
Route::get('/', function () {
    return view('home');
});

// Rute untuk tabel suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');

// Rute untuk tabel user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// Rute untuk tabel stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
Route::get('/stok/{stok}', [StokController::class, 'edit'])->name('stok.edit');
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');

// Rute untuk tabel barang_masuk
Route::get('/barang_masuk', [BarangMasukController::class, 'index'])->name('barang_masuk.index');
Route::get('/barang_masuk/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');
Route::post('/barang_masuk', [BarangMasukController::class, 'store'])->name('barang_masuk.store');
Route::get('/barang_masuk/{barang_masuk}', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');
Route::put('/barang_masuk/{barang_masuk}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');
Route::delete('/barang_masuk/{barang_masuk}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');

// Rute untuk tabel barang_keluar
Route::get('/barang_keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar.index');
Route::get('/barang_keluar/create', [BarangKeluarController::class, 'create'])->name('barang_keluar.create');
Route::post('/barang_keluar', [BarangKeluarController::class, 'store'])->name('barang_keluar.store');
Route::get('/barang_keluar/{barang_keluar}', [BarangKeluarController::class, 'edit'])->name('barang_keluar.edit');
Route::put('/barang_keluar/{barang_keluar}', [BarangKeluarController::class, 'update'])->name('barang_keluar.update');
Route::delete('/barang_keluar/{barang_keluar}', [BarangKeluarController::class, 'destroy'])->name('barang_keluar.destroy');

// Rute untuk tabel pinjam_barang
Route::get('/pinjam_barang', [PinjamBarangController::class, 'index'])->name('pinjam_barang.index');
Route::get('/pinjam_barang/create', [PinjamBarangController::class, 'create'])->name('pinjam_barang.create');
Route::post('/pinjam_barang', [PinjamBarangController::class, 'store'])->name('pinjam_barang.store');
Route::get('/pinjam_barang/{pinjam_barang}', [PinjamBarangController::class, 'edit'])->name('pinjam_barang.edit');
Route::put('/pinjam_barang/{pinjam_barang}', [PinjamBarangController::class, 'update'])->name('pinjam_barang.update');
Route::delete('/pinjam_barang/{pinjam_barang}', [PinjamBarangController::class, 'destroy'])->name('pinjam_barang.destroy');
