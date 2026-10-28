<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\Fortofolio1010Controller;

Route::get('/', function () {
    return redirect()->route('fortofolio.index');
});

Route::resource('fortofolio', Fortofolio1010Controller::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class,'index']);


Route::get('dashboard', [DashboardController::class, 'index']) ->name('dashboard');

Route::resource('pelanggan', PelangganController::class);