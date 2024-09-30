<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('business-cards', BusinessCardController::class);

Route::get('/v/{username}', [BusinessCardController::class, 'showByUsername']);

Route::get('/admin/business-cards', [BusinessCardController::class, 'adminIndex'])->name('admin.business-cards.index');

Route::get('/v/{name}', [BusinessCardController::class, 'showByName'])->name('business-cards.vcard');


