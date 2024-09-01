<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produk = Produk::all();
    return view('home', compact('produk'));
});


Route::get('/login',[LoginController::class,'login']);
Route::post('/login/proses',[LoginController::class,'proses'])-> name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home',[HomeController::class,'home']);
Route::get('/payment',[HomeController::class,'payment']);
Route::get('/keranjang',[HomeController::class,'keranjang']);
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::get('/detail/{id_produk}', [HomeController::class, 'detail'])->name('produk.detail');
Route::post('/produk/{id_produk}/add-to-cart', [ProdukController::class, 'addToCart'])->name('produk.addToCart');
Route::post('/keranjang/delete', [KeranjangController::class, 'delete']);
Route::post('/keranjang/update', [KeranjangController::class, 'update']);





Route::get('/admin',[DashboardController::class,'index']);
Route::get('/menu',[ProdukController::class,'formProduk']);
Route::post('/menu', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id_produk}',[ProdukController::class,'edit'])->name('catatan.edit');
Route::put('/produk/update/{id_produk}',[ProdukController::class,'update'])->name('produk.update');
Route::delete('/produk/{id_produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');


