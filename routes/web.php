<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;




Route::middleware('guest')->group(function () {

    Route::view('/', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



Route::middleware('auth')->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/recipient', [RecipientController::class, 'index']);
    Route::post('/recipient/{id}/update', [RecipientController::class, 'update_link']);
    Route::get('/galeri', [GaleryController::class, 'index']);


    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/surat-masuk', [SuratMasukController::class, 'index']);
        Route::post('/surat-masuk/store', [SuratMasukController::class, 'store']);
        Route::get('/agenda', [AgendaController::class, 'index']);
        // Route untuk update status surat
        Route::put('/surat-masuk/{id}/update-status', [AgendaController::class, 'updateDataStatus'])->name('surat-masuk.updateStatus');
    });


    Route::get('/logout', [AuthController::class, 'logout']);
});
