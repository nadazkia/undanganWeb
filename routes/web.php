<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PemesananController;
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

Route::get('/', function () {
    return view('welcome');
});


// MEMPELAI
// Route::get('/pemesanan/mempelai', [PemesananController::class, 'indexMempelai'])->name('pemesanan.indexMempelai');
// Route::post('/pemesanan/mempelai', [PemesananController::class, 'storeMempelai'])->name('pemesanan.storeMempelai');
// Route::get('/pemesanan/mempelai/create', [PemesananController::class, 'createMempelai'])->name('pemesanan.createMempelai');
// Route::put('/pemesanan/mempelai/{id}', [PemesananController::class, 'editMempelai'])->name('pemesanan.editMempelai');

// // ACARA
// Route::get('/pemesanan/acara', [PemesananController::class, 'indexAcara'])->name('pemesanan.indexAcara');
// Route::post('/pemesanan/acara', [PemesananController::class, 'storeAcara'])->name('pemesanan.review');
// Route::get('/pemesanan/acara/create', [PemesananController::class, 'createAcara'])->name('pemesanan.createAcara');
// Route::put('/pemesanan/acara/{id}', [PemesananController::class, 'editAcara'])->name('pemesanan.editAcara');




Route::resource('pemesanan/mempelai', PemesananController::class);
Route::resource('pemesanan/acara', PemesananController::class);
Route::resource('katalog', KatalogController::class);
Route::resource('harga', KatalogController::class);
