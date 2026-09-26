<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [siteController::class, 'index']);