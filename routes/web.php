<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class,'index']);


Route::get('dashboard', [DashboardController::class, 'index']) ->name('dashboard');