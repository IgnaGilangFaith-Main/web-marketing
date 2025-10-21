<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon1.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .product-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
        }

        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .hero-section {
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            z-index: 1;
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .stats-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .stats-number {
            font-size: 3rem;
            font-weight: bold;
            line-height: 1;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .nav-link:hover {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar dengan gradient background -->
    <nav class="navbar navbar-expand-lg navbar-dark"
        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <img src="{{ asset('img/icon1.png') }}" alt="Logo" width="40" height="40" class="me-2">
                {{ env('APP_NAME') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <form class="d-flex me-3" action="#" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Cari produk..." aria-label="Search"
                            style="min-width: 200px;">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    @if (isset(Auth::user()->id))
                        <a class="btn btn-outline-light" href="{{ url('/dashboard') }}">
                            <i class="fas fa-user me-1"></i> Dashboard
                        </a>
                    @else
                        <a class="btn btn-outline-light" href="{{ url('/login') }}">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5"
        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 60vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Selamat Datang di {{ env('APP_NAME') }}</h1>
                    <p class="lead mb-4">Temukan produk terbaik untuk kebutuhan digital marketing Anda. Kami menyediakan
                        solusi lengkap untuk mengembangkan bisnis online Anda.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#produk" class="btn btn-light btn-lg px-4">
                            <i class="fas fa-shopping-cart me-2"></i>Lihat Produk
                        </a>
                        <a href="#tentang" class="btn btn-outline-light btn-lg px-4">
                            <i class="fas fa-info-circle me-2"></i>Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="produk" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Produk Kami</h2>
                <p class="lead text-muted">Pilihan terbaik untuk kebutuhan digital marketing Anda</p>
            </div>
            <div class="row g-4">
                <!-- Product Card Template -->
                @php
                    $products = [
                        [
                            'title' => 'Digital Marketing Course',
                            'description' => 'Pelajari strategi digital marketing terkini dari ahlinya',
                        ],
                        [
                            'title' => 'SEO Optimization Tool',
                            'description' => 'Tools untuk mengoptimalkan website Anda di mesin pencari',
                        ],
                        [
                            'title' => 'Social Media Management',
                            'description' => 'Kelola semua akun media sosial dalam satu platform',
                        ],
                        [
                            'title' => 'Content Creation Kit',
                            'description' => 'Template dan tools untuk membuat konten yang engaging',
                        ],
                        [
                            'title' => 'Analytics Dashboard',
                            'description' => 'Monitor performa marketing campaign secara real-time',
                        ],
                        [
                            'title' => 'Email Marketing Suite',
                            'description' => 'Solusi lengkap untuk email marketing automation',
                        ],
                        [
                            'title' => 'Lead Generation Tool',
                            'description' => 'Dapatkan lebih banyak leads berkualitas tinggi',
                        ],
                        ['title' => 'PPC Management', 'description' => 'Kelola iklan berbayar dengan ROI maksimal'],
                    ];
                @endphp
                @foreach ($products as $index => $product)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0 product-card">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('gambar_produk/koding.png') }}" class="card-img-top"
                                    alt="{{ $product['title'] }}"
                                    style="height: 200px; object-fit: cover; transition: transform 0.3s;">
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-primary">New</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark">{{ $product['title'] }}</h5>
                                <p class="card-text text-muted flex-grow-1">{{ $product['description'] }}</p>
                                <div class="d-flex justify-content-center align-items-center mt-auto">
                                    <div>
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg px-5">
                    <i class="fas fa-plus me-2"></i>Lihat Semua Produk
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold">Mengapa Memilih Kami?</h2>
                <p class="lead text-muted">Keunggulan yang kami tawarkan untuk kesuksesan bisnis Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <i class="fas fa-rocket fa-lg"></i>
                    </div>
                    <h5 class="fw-bold">Inovasi Terdepan</h5>
                    <p class="text-muted">Menggunakan teknologi dan strategi marketing terbaru untuk hasil maksimal</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <i class="fas fa-users fa-lg"></i>
                    </div>
                    <h5 class="fw-bold">Tim Ahli</h5>
                    <p class="text-muted">Didukung oleh tim profesional berpengalaman di bidang digital marketing</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line fa-lg"></i>
                    </div>
                    <h5 class="fw-bold">Hasil Terukur</h5>
                    <p class="text-muted">Tracking dan analisis mendalam untuk memastikan ROI yang optimal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="stats-number">1000+</div>
                    <p class="mb-0">Klien Puas</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-number">50+</div>
                    <p class="mb-0">Produk Digital</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-number">24/7</div>
                    <p class="mb-0">Dukungan</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-number">99%</div>
                    <p class="mb-0">Kepuasan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">{{ env('APP_NAME') }}</h5>
                    <p class="text-muted">Platform terpercaya untuk semua kebutuhan digital marketing Anda.
                        Bergabunglah dengan ribuan pebisnis yang telah merasakan manfaatnya.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold mb-3">Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="#produk" class="text-muted text-decoration-none">Produk</a></li>
                        <li><a href="#tentang" class="text-muted text-decoration-none">Tentang</a></li>
                        <li><a href="#kontak" class="text-muted text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Digital Marketing</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">SEO Optimization</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Social Media</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Content Marketing</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Kontak Kami</h6>
                    <div class="text-muted">
                        <p><i class="fas fa-map-marker-alt me-2"></i>Jakarta, Indonesia</p>
                        <p><i class="fas fa-envelope me-2"></i>info@elmuna.com</p>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; 2025 {{ env('APP_NAME') }}. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-muted text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
