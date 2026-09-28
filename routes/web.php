<?php

use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [siteController::class, 'index']);
Route::get('/login', [login::class, 'index'])->name('auth.login');
Route::post('/login', [login::class, 'logar']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [siteController::class, 'dashboard']);
    Route::post('/logout', [login::class, 'logout']);
});