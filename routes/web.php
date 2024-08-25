<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Login
Route::get('/login',[LoginController::class,'login']);
Route::post('/login/proses',[LoginController::class,'proses'])-> name('dashboard');
Route::get('/home',[HomeController::class,'home']);

// Route Admin 
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/menu',[ProdukController::class,'formProduk']);
Route::post('/menu', [ProdukController::class, 'store'])->name('produk.store');
Route::delete('/produk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');


