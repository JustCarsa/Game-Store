<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('game/{id}', [HomeController::class, 'game'])->name('game');
Route::post('beli/{id}', [PembelianController::class, 'proses'])->name('beli');
Route::get('struk/{id}', [PembelianController::class, 'struk'])->name('struk');
