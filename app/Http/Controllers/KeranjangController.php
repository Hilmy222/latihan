<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index() {
        $cart = session()->get('cart', []);
        $total = 0;
    
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    
        return view('keranjang', ['cart' => $cart, 'total' => $total]);
    }
    public function destroy($id_produk)
    {
        $produk = Keranjang::findOrFail($id_produk);
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }
    public function update(Request $request)
{
    $productId = $request->input('productId');
    $quantity = $request->input('quantity');

    // Perbarui kuantitas produk di keranjang
    $cart = session()->get('cart');

    if(isset($cart[$productId])) {
        $cart[$productId]['quantity'] = $quantity;
        session()->put('cart', $cart);
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}
public function delete(Request $request)
{
    $productId = $request->input('productId');

    // Ambil data keranjang dari sesi
    $cart = session()->get('cart');

    // Jika produk ada di keranjang, hapus
    if(isset($cart[$productId])) {
        unset($cart[$productId]);
        session()->put('cart', $cart);
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}


}
