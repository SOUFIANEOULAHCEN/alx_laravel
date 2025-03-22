<?php

use App\Http\Controllers\AeroportController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\VolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Layouts.app');
});

Route::resource('/vols', VolController::class);
Route::resource('/passagers', PassagerController::class);
Route::resource('/aeroports', AeroportController::class);
// Route::get('/vols', [VolController::class, 'index'])->name('Vols.index');
