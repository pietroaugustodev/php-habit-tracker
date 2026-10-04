<?php

use App\Http\Controllers\login;
use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [siteController::class, 'index']);
Route::get('/login', [login::class, 'index'])->name('auth.login');
Route::post('/login', [login::class, 'logar'])->middleware(['per',]);
Route::get('/register', [register::class, 'index'])->name('site.register');
Route::post('/register', [register::class, 'register'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [siteController::class, 'dashboard']);
    Route::post('/logout', [login::class, 'logout']);
});