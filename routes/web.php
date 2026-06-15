<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\SuratController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/penduduk', [KelurahanController::class, 'penduduk']);
//Route::get('/surat', [KelurahanController::class, 'daftarSurat']);



\Route::resource('surat', SuratController::class);