<?php

use App\Http\Controllers\VolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Layouts.app');
});

Route::resource('/vols', VolController::class);
// Route::get('/vols', [VolController::class, 'index'])->name('Vols.index');
