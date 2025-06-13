<?php

use App\Http\Controllers\AksesorisController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HasilLautController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;

Route::get('homepage', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('kuliner', [KulinerController::class, 'index']);

Route::get('/wa/kuliner/{id}', [KulinerController::class, 'redirectWa'])->name('wa.kuliner');

Route::get('aksesoris', [AksesorisController::class, 'index'])->name('aksesoris.index');
Route::get('/wa/aksesoris/{id}', [AksesorisController::class, 'redirectWa'])->name('wa.aksesoris');

Route::get('hasillaut', [HasilLautController::class, 'index'])->name('hasillaut.index');
Route::get('/wa/hasillaut/{id}', [HasilLautController::class, 'redirectWa'])->name('wa.hasillaut');
Route::get('tentangkami', [TentangKamiController::class, 'index']);

Route::get('galeri', [GaleriController::class, 'index']);

Route::get('kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');
