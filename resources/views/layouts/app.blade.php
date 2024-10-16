<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Indraco, Indraco Jaya Perkasa, Indraco Webdev">
    <meta name="generator" content="">
    <title>@yield('title', 'Kartu Nama Digital')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMN4juhO9Pcz5hPuvm/wj7G8g/dFl3B44hP2gB" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon-indraco.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/HelveticaNeue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    
    <!-- Tambahkan CSS hover efek di sini -->
    <style>
        /* Efek hover untuk tombol di sidebar */
        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #5D5D5D;
            border-color: #ffffff;
        }

        /* Efek hover untuk tombol action pada kartu nama */
        .action-btn {
            transition: background-color 0.3s, color 0.3s;
        }

        .action-btn:hover {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: white;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: white;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }

        /* Efek transisi umum */
        .btn {
            transition: background-color 0.3s, color 0.3s;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Admin -->
            <div class="col-md-3" style="background-color: #5D5D5D; padding-top: 20px; min-height: 100vh;">
                <!-- Logo Indraco di bagian atas sidebar -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo-color.png') }}" alt="Indraco Logo" style="width: 100px;">
                    <h4 class="text-white mt-2">Indraco Admin</h4>
                </div>

                <!-- Menu Navigasi dengan tombol terpisah -->
                <div class="d-flex flex-column gap-2">
                    <!-- Tombol Tambah Kartu Nama -->
                    <a href="{{ route('business-cards.create') }}" target="_self" class="btn btn-outline-light mt-4 text-start">
                        <img src="{{ asset('assets/img/ikon-kartu nama.png') }}" width="25" height="25" alt="" class="mb-1">
                        <span>Tambah Kartu Nama</span>
                    </a>
                    <!-- Tombol Daftar Kartu Nama -->
                    <a href="{{ route('business-cards.index') }}" target="_self" class="btn btn-outline-light mt-4 text-start">
                        <img src="{{ asset('assets/img/ikon-daftar.png') }}" width="25" height="25" alt="" class="mb-1">
                        <span>Daftar Kartu Nama</span>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9" style="background-color: #F8F9FA; min-height: 100vh;">
                @yield('content') <!-- Section utama untuk konten -->
            </div>
        </div>
    </div>

    {{-- <footer>
        <p>&copy; {{ date('Y') }} Kartu Nama Digital</p>
    </footer> --}}

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link ke file JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
