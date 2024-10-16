<?php

use App\Http\Controllers\BusinessCardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('home');

// Route untuk menampilkan halaman bisnis (vCard)
Route::get('/v', [BusinessCardController::class, 'index'])->name('business-cards.index');

// Route untuk menampilkan form tambah kartu nama
Route::get('/v/create', [BusinessCardController::class, 'create'])->name('business-cards.create');


// Route untuk menyimpan kartu nama yang baru dibuat
Route::post('/v', [BusinessCardController::class, 'store'])->name('business-cards.store');

// Route untuk menampilkan detail bisnis berdasarkan nama
Route::get('/v/{name}', [BusinessCardController::class, 'show'])->name('business-cards.show');

// Route untuk mengedit kartu bisnis
Route::get('/v/edit/{name}', [BusinessCardController::class, 'edit'])->name('business-cards.edit');

// Route untuk mengupdate kartu bisnis
Route::put('/v/update/{name}', [BusinessCardController::class, 'update'])->name('business-cards.update');

// Route untuk menghapus kartu bisnis
Route::delete('/v/{name}', [BusinessCardController::class, 'destroy'])->name('business-cards.destroy');