<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tower</title>

    <link rel="stylesheet" href="{{ asset('storage/assets/css/detail.css') }}">
</head>
<body>
    <nav class="navbar">
    <div class="brand">
        <img src="{{(asset('storage/assets/images/logo.png'))}}" alt="">
        <span class="brand-text">
            UPT Bekasi
        </span>

        
        
    </div>
    <div class="nav-menu">
        <a href="#tower">Data Tower</a>
        <a href="#">Data Lokasi</a>
        <a href="#">Data Foto</a>
        <a href="#">Laporan</a>
    </div>
</nav>

<main class="detail-container">

    <!-- TITLE -->
    <h2 class="tower-title">Name Tower</h2>

    <!-- CONTENT -->
    <div class="detail-grid">

        <!-- LEFT -->
        <div class="detail-card large"></div>

        <!-- RIGHT -->
        <div class="detail-side">
            <div class="detail-card small"></div>

            <button class="btn-direct">Direct</button>
        </div>

    </div>

</main>

</body>
</html>
