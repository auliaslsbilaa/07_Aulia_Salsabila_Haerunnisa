<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Penggajian</title>
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    </head>
    <body class="bg-warning-70">
        {{----------------- NAVBAR -----------------}}
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container">
                <a class="navbar-brand text-light ms-5" href="/home">
                    <img src="{{ asset("image/logo/logo.png") }}" alt="Logo" width="40" height="40" class="me-2">
                    <strong>PT KURA KURA</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-5" href="/jabatan/index">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-5" href="/karyawan/index">Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-5" href="/Gaji/index">Gaji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-5" href="/Laporan">Laporan</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- -------------- CONTENT -------------- --}}
        <div class="div container">
            <div class="row m-4">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
        {{---------------- JAVASCRIPT ----------------}}
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>