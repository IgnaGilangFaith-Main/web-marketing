<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="icon" href="{{ asset('img/icon1.png') }}" type="image/x-icon">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @stack('css')
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('/dashboard') }}"><img src="{{ asset('img/icon1.png') }}"
                alt="Logo" width="40" height="40">
            {{ Auth::user()->name }}
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class='bx bx-menu'></i>
        </button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon">
                                <i class='bx bxs-dashboard'></i>
                            </div>
                            Dashboard
                        </a>
                        <a href="{{ route('produk.index') }}" class="nav-link">
                            <div class="sb-nav-link-icon"><i class='bx bxs-box'></i></div>
                            Produk
                        </a>
                        <a href="{{ route('home') }}" class="nav-link">
                            <div class="sb-nav-link-icon"><i class='bx bxs-home'></i></div>
                            Halaman Awal
                        </a>
                        <a href="" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="bx bxs-user"></i></div>
                            User
                        </a>
                        <a href="{{ route('logout') }}" class="nav-link">
                            <div class="sb-nav-link-icon"><i class='bx bx-log-out bx-flip-horizontal'></i></div>
                            Keluar
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Login sebagai</div>
                    {{-- {{ Auth::user()->name }} --}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 my-3">
                    @yield('content')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Elmuna Kebumen {{ date('Y') }}</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="{{ url('/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @stack('js')
</body>

</html>
