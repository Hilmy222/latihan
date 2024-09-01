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
            'produk' => $produk]);
    }

    public function detail($id_produk)
    {
        // Temukan produk berdasarkan ID
        $produk = Produk::findOrFail($id_produk);

        // Kirim data produk ke view
        return view('detail', compact('produk'));
    }



    public function payment()
    {
        return view('payment');
    }
    public function keranjang()
    {
        return view('keranjang');
    }

}
