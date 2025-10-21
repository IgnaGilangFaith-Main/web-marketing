@extends('admin.layout')
@section('title', 'Produk')
@section('content')
    <h1 class="text-center">Produk Anda</h1>
    <div class="d-flex justify-content-between">
        <div class="col-3 col-md-3 mb-3">
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
        <div class="col-4 col-md-4">
            <form action="{{ route('produk.index') }}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control ml-2" name="cari" placeholder="Kata Kunci"
                        value="{{ request('cari') }}" required>
                    <button type="submit" class="btn btn-primary"><i class='bx bx-search-alt-2'></i>Cari</button>
                    <a href="{{ route('produk.index') }}" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Link Tokopedia</th>
                    <th>Link Shopee</th>
                    <th>Gambar Utama</th>
                    <th>Gambar Pendamping 1</th>
                    <th>Gambar Pendamping 2</th>
                    <th>Gambar Pendamping 3</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1 + ($data->currentPage() - 1) * $data->perPage();
                @endphp
                @if (count($data) > 0)
                    @foreach ($data as $produk)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $produk->deskripsi }}</td>
                            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td>
                                @if ($produk->link_tokped != null)
                                    <a href="{{ $produk->link_tokped }}" target="_blank">{{ $produk->link_tokped }}</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if ($produk->link_shopee != null)
                                    <a href="{{ $produk->link_shopee }}" target="_blank">{{ $produk->link_shopee }}</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('gambar_produk/' . $produk->gambar_utama) }}" alt="Gambar Utama"
                                    width="100">
                            </td>
                            <td class="text-center">
                                @if ($produk->gambar_pendamping1 != null)
                                    <img src="{{ asset('gambar_produk/' . $produk->gambar_pendamping1) }}"
                                        alt="Gambar Pendamping 1" width="100">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($produk->gambar_pendamping2 != null)
                                    <img src="{{ asset('gambar_produk/' . $produk->gambar_pendamping2) }}"
                                        alt="Gambar Pendamping 2" width="100">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($produk->gambar_pendamping3 != null)
                                    <img src="{{ asset('gambar_produk/' . $produk->gambar_pendamping3) }}"
                                        alt="Gambar Pendamping 3" width="100">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm mb-1">
                                    <i class='bx bx-edit'></i> Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">
                            <center>
                                <h3>Data Kosong</h3>
                            </center>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
