<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $primaryKey ='id';
    protected $fillable =['id','id_user','id_produk','jumlah','harga','nama','gambar','jenis'];
     public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

}
