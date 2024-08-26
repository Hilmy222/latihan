<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'login']);
Route::post('/login/proses',[LoginController::class,'proses'])-> name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home',[HomeController::class,'home']);
Route::get('/payment',[HomeController::class,'payment']);
Route::get('/detail/{id_produk}', [HomeController::class, 'detail'])->name('produk.detail');



Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/menu',[ProdukController::class,'formProduk']);
Route::post('/menu', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id_produk}',[ProdukController::class,'edit'])->name('catatan.edit');
Route::put('/produk/update/{id_produk}',[ProdukController::class,'update'])->name('produk.update');
Route::delete('/produk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');


