<?php

namespace App\Http\Controllers;

use App\Http\Requests\TambahProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index() {
        $data = Produk::latest()->paginate(10);
        return view('admin.produk.index',['data' => $data]);
    }

    function create(){
        return view('admin.produk.tambah');
    }

    function store(TambahProdukRequest $request){
        $validated = $request->validated();

        if ($request->hasFile('gambar_utama')) {
            $file = $request->file('gambar_utama');
            $gambarUtama = time() . '.' . $file->getClientOriginalExtension();
            $lokasi = public_path('gambar_produk');
            $file->move($lokasi, $gambarUtama);
        }

        if ($request->hasFile('gambar_pendamping1')) {
            $file = $request->file('gambar_pendamping1');
            $gambarPendamping1 = time() . '.' . $file->getClientOriginalExtension();
            $lokasi = public_path('gambar_produk');
            $file->move($lokasi, $gambarPendamping1);
        }

        if ($request->hasFile('gambar_pendamping2')) {
            $file = $request->file('gambar_pendamping2');
            $gambarPendamping2 = time() . '.' . $file->getClientOriginalExtension();
            $lokasi = public_path('gambar_produk');
            $file->move($lokasi, $gambarPendamping2);
        }

        if ($request->hasFile('gambar_pendamping3')) {
            $file = $request->file('gambar_pendamping3');
            $gambarPendamping3 = time() . '.' . $file->getClientOriginalExtension();
            $lokasi = public_path('gambar_produk');
            $file->move($lokasi, $gambarPendamping3);
        }

        $validated['gambar_utama'] = $gambarUtama;
        $validated['gambar_pendamping1'] = $gambarPendamping1 ?? null;
        $validated['gambar_pendamping2'] = $gambarPendamping2 ?? null;
        $validated['gambar_pendamping3'] = $gambarPendamping3 ?? null;

    }   
}
