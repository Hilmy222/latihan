<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;


use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function formProduk()
    {
        $produk = Produk::all();
        $data = [
            'title' => 'HumanCare| Myapp',
            'active' => 'catatan',
            'produk' => $produk
        ];
        return view('auth.menu',$data);
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jenis' => 'required|in:makanan,minuman',
            'harga' => 'required|integer',
            'waktu_penyajian' => 'required|integer',
            'bintang' => 'required|string|max:10',
        ]);

        // Proses upload gambar
        $filename = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $filename);
        }

        // Simpan data ke database
        Produk::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $filename,
            'jenis' => $request->input('jenis'),
            'harga' => $request->input('harga'),
            'waktu_penyajian' => $request->input('waktu_penyajian'),
            'bintang' => $request->input('bintang'),
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    public function destroy($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }
    public function update(Request $request, $id_produk)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'waktu_penyajian' => 'required',
            'bintang' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id_produk);

    // Proses upload gambar baru
    $filename = $produk->gambar; // Pertahankan gambar lama
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($produk->gambar && file_exists(public_path('storage/' . $produk->gambar))) {
            unlink(public_path('storage/' . $produk->gambar));
        }

        // Upload gambar baru
        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage'), $filename);
    }


        // Update data produk
        $produk->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'waktu_penyajian' => $request->waktu_penyajian,
            'bintang' => $request->bintang,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    
}
