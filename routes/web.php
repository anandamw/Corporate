<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::middleware('guest')->group(function () {

    Route::get('/surat-masuk', [SuratMasukController::class, 'index']);

    Route::get('/recipient', [RecipientController::class, 'index']);
    Route::post('/recipient/{id}/update', [RecipientController::class, 'update_link']);

    Route::get('/agenda', [AgendaController::class, 'index']);

    Route::get('/agenda/export', [AgendaController::class, 'export']);
});



Route::middleware('auth')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {});
});
