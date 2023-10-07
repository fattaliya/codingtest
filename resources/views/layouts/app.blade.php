<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Aplikasi Anda</title>
    <!-- Tambahkan stylesheet, script, dan asset lainnya di sini -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Contoh asset CSS -->
</head>
<body>
    {{-- <header>
        <!-- Tambahkan header situs web Anda di sini -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Nama Aplikasi Anda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header> --}}


    <li class="nav-item">
        <a class="nav-link" href="{{ route('pendaftaran.index') }}">Pendaftaran</a>
    </li>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Tambahkan footer situs web Anda di sini -->
        <div class="text-center py-2">
            &copy; {{ date('Y') }} Nama Aplikasi Anda. All rights reserved.
        </div>
    </footer>

    <!-- Tambahkan script JavaScript di sini jika diperlukan -->
    <script src="{{ asset('js/app.js') }}"></script> <!-- Contoh asset JavaScript -->
</body>
</html>
