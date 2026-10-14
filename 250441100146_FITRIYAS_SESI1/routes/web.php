<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layanans', LayanansController::class, 'index'])->name
Route::get('/layanans', LayanansController::class, 'index'])->name