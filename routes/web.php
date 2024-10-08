<?php

use App\Http\Controllers\BusinessCardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KaryawanController;

use App\Http\Controllers\VCardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/v', function () {
//     return view('welcome');
// });

// tes

// Route untuk menampilkan halaman bisnis
Route::get('/', [BusinessCardController::class, 'index'])->name('business-cards.index');
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