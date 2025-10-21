<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'gambar_utama',
        'gambar_pendamping1',
        'gambar_pendamping2',
        'gambar_pendamping3',
        'deskripsi',
        'harga',
        'link_tokped',
        'link_shopee',
    ];
}
