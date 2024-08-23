<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'login']);
Route::post('/login/proses',[LoginController::class,'proses'])-> name('dashboard');
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/home',[DashboardController::class,'home']);