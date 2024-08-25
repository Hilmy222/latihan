<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $produk = Produk::all();

        // Mengirim data produk ke view home
        return view('home', [
            'produk' => $produk
        ]);
    }

}
