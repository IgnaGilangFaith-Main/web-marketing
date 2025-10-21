@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="row g-0">
        <div class="col-12 col-md-12">
            <h1 class="text-center">Dashboard</h1>
        </div>
    </div>
    <hr>
    <div class="row g-4 justify-content-center align-items-center mt-4">
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="img-container" style="height: 200px; overflow: hidden;">
                    <img src="{{ asset('img/berita.jpg') }}" class="card-img-top " style="object-fit: cover;" alt="Berita">
                </div>
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title text-center">Berita</h3>
                    <div class="d-grid mt-auto">
                        <a href="" class="btn btn-primary btn-lg">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="img-container d-flex align-items-center justify-content-center bg-secondary"
                    style="height: 200px;">
                    <div style="width: 175px; height: 175px;" class="rounded-circle overflow-hidden">
                        <img src="{{ asset('img/akun.png') }}" class="w-100 h-100" style="object-fit: cover;"
                            alt="Akun">
                    </div>
                </div>
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title text-center">Akun</h3>
                    <div class="d-grid mt-auto">
                        <a href="" class="btn btn-primary btn-lg">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
