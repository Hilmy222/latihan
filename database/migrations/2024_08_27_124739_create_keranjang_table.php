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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('id_produk')->constrained()->onDelete('cascade'); // Relasi ke tabel produk
            $table->integer('jumlah'); // Jumlah item di keranjang
            $table->integer('harga'); // Harga item
            $table->string('nama'); // Harga item
            $table->string('gambar'); // Harga item
            $table->string('jenis'); // Harga item
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
