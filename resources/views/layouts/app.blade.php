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
    
</head>

<body style="background-color: #5D5D5D">

    <div>
        @yield('content') <!-- Section utama untuk konten -->
    </div>

    {{-- <footer>
        <p>&copy; {{ date('Y') }} Kartu Nama Digital</p>
    </footer> --}}

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link ke file JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
