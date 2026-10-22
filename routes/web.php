<?php

use App\Http\Controllers\habitController;
use App\Http\Controllers\login;
use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;

Route::get('/home', [siteController::class, 'index']);
Route::get('/login', [login::class, 'index'])->name('auth.login');
Route::post('/login', [login::class, 'logar']);
Route::get('/register', [register::class, 'index'])->name('site.register');
Route::post('/register', [register::class, 'register'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [siteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [login::class, 'logout']);

    // habits
    Route::get('/dashboard/habito/criar', [habitController::class, 'create'])->name('habito.criar');
    Route::post('/dashboard/habito', [habitController::class, 'store'])->name('habito.store');
    Route::delete('/dashboard/habito/{habit}', [habitController::class, 'destroy'])->name('habito.destroy');
    Route::get('/dashboard/habito/{habit}', [habitController::class, 'edit'])->name('habito.editar');
    Route::put('/dashboard/habito/{habit}', [habitController::class, 'update'])->name('habito.update');
});
