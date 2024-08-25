<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk'); // Primary key dengan nama id_produk
            $table->string('nama'); // Nama produk
            $table->string('deskripsi'); // Nama produk
            $table->string('gambar'); // Gambar produk, gunakan string untuk tipe VARCHAR
            $table->enum('jenis', ['makanan', 'minuman']); // Jenis produk
            $table->integer('harga'); // Harga produk, gunakan integer
            $table->integer('waktu_penyajian'); // Waktu penyajian produk
            $table->string('bintang'); // Bintang, gunakan string untuk tipe VARCHAR
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
