<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//route gate 
// Route::get('/surat-masuk', function () {
//     return 'daftar isi surat masuk';
// })->name('surat-masuk.index');

// Route::get('/surat-masuk/{id}', function ($id) {
//     return 'Detail surat masuk dengan ID:' .$id;
// })->name('surat-masuk.index');

//route controller
Route::get('/surat-masuk/', [SuratMasukController::class, 'index'])
    ->name('surat-masuk.index');

Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])
    ->name('surat-masuk.show');

// Tambahkan baris ini di bawah route surat masuk
Route::get('/surat-keluar', [App\Http\Controllers\SuratKeluarController::class, 'index'])->name('surat-keluar.index');
Route::get('/surat-keluar/{id}', [App\Http\Controllers\SuratKeluarController::class, 'show'])->name('surat-keluar.show');
