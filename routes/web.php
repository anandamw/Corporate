<?php

use App\Http\Controllers\RecipientController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/surat-masuk', [SuratMasukController::class, 'index']);

Route::get('/recipient', [RecipientController::class, 'index']);
