<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kartu Nama Digital')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link ke file CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('business-cards.index') }}">Home</a></li>
                <li><a href="{{ route('business-cards.create') }}">Tambah Kartu Nama</a></li>
            </ul>
        </nav>
    </header>

    <div class="container card mt-5 mb-5 shadow">
        @yield('content') <!-- Section utama untuk konten -->
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Kartu Nama Digital</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link ke file JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
