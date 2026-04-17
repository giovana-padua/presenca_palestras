<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/inicio', [App\Http\Controllers\SiteController::class, 'index']);

Route::get('/dupla', [App\Http\Controllers\Dupla::class, 'dupla'])
