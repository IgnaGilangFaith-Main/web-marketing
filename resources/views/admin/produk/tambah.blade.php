@extends('admin.layout')
@section('title', 'Tambah Produk')
@section('content')
    <h1 class="text-center">Tambah Produk Baru</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
        </div>
        <div class="mb-3">
            <label for="gambar_utama" class="form-label">Gambar Utama</label>
            <input type="file" class="form-control" id="gambar_utama" name="gambar_utama">
        </div>
        <div class="mb-3">
            <label for="gambar_pendamping1" class="form-label">Gambar Pendamping 1</label>
            <input type="file" class="form-control" id="gambar_pendamping1" name="gambar_pendamping1">
        </div>
        <div class="mb-3">
            <label for="gambar_pendamping2" class="form-label">Gambar Pendamping 2</label>
            <input type="file" class="form-control" id="gambar_pendamping2" name="gambar_pendamping2">
        </div>
        <div class="mb-3">
            <label for="gambar_pendamping3" class="form-label">Gambar Pendamping 3</label>
            <input type="file" class="form-control" id="gambar_pendamping3" name="gambar_pendamping3">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga" name="harga">
        </div>
        <div class="mb-3">
            <label for="link_tokped" class="form-label">Link Tokopedia</label>
            <input type="text" class="form-control" id="link_tokped" name="link_tokped">
        </div>
        <div class="mb-3">
            <label for="link_shopee" class="form-label">Link Shopee</label>
            <input type="text" class="form-control" id="link_shopee" name="link_shopee">
        </div>
        <center>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </center>
    </form>
@endsection
