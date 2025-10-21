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
            $table->id();
            $table->string('nama_produk');
            $table->string('gambar_utama');
            $table->string('gambar_pendamping1')->nullable();
            $table->string('gambar_pendamping2')->nullable();
            $table->string('gambar_pendamping3')->nullable();
            $table->text('deskripsi');
            $table->string('harga');
            $table->string('link_tokped')->nullable();
            $table->string('link_shopee')->nullable();
            $table->timestamps();
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
