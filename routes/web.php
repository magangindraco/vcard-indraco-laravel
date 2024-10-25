<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VCardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BusinessCardController;


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


// Hanya bisa diakses oleh tamu (guest)
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegisterForm']);
    Route::post('/register', [RegisterController::class, 'register']);
});

// Logout bisa diakses ketika pengguna sudah login
Route::middleware('auth')->post('/logout', [LoginController::class, 'logout'])->name('logout');

// route hlmn utama
Route::get('/', [LoginController::class,  'showLoginForm'])->name('login');

// Route untuk menampilkan halaman bisnis
Route::get('/v/administrator', [EmployeeController::class, 'index'])->name('employees.index')->middleware('auth');

// Route untuk menampilkan form tambah kartu nama
Route::get('/v/member/create', [EmployeeController::class, 'create'])->name('employees.create')->middleware('auth');


// Route untuk menyimpan kartu nama yang baru dibuat
Route::post('/v/administrator', [EmployeeController::class, 'store'])->name('employees.store')->middleware('auth');

// Route untuk menampilkan detail bisnis berdasarkan nama
Route::get('/v/{name}', [EmployeeController::class, 'show'])->name('employees.show');

// Route untuk mengedit kartu bisnis
Route::get('/v/member/edit/{name}', [EmployeeController::class, 'edit'])->name('employees.edit')->middleware('auth');

// Route untuk mengupdate kartu bisnis
Route::put('/v/member/update/{name}', [EmployeeController::class, 'update'])->name('employees.update')->middleware('auth');

// Route untuk menghapus kartu bisnis
Route::delete('/v/{name}', [EmployeeController::class, 'destroy'])->name('employees.destroy')->middleware('auth');

// Route download vcard
Route::get('employees/{employee}/vcard', [EmployeeController::class, 'downloadVCard'])->name('employees.download-vcard')->middleware('auth');