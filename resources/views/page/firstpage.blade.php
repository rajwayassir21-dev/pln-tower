<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PLN Tower</title>

    <link rel="icon" href="{{ asset('storage/assets/images/Logo_PLN.png') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/first.css') }}">
</head>
<body>

<!-- NAVBAR -->
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

<!-- HEADER -->
<header class="header">
    <div class="header-content">
        <h1>Monitoring Sertifikasi Tower PLN UPT Bekasi</h1>
        <p>Sistem Informasi Pendataan dan Monitoring Tower</p>
    </div>
</header>

<!-- CONTENT -->
<main class="content" id="tower">

    <!-- TITLE -->
    <div class="content-header">
        <h2>Data Tower</h2>
        <span>Monitoring & Pendataan Tower PLN UPT Bekasi</span>
    </div>

    <!-- SEARCH & FILTER -->
    <div class="control-box">
        <input type="text" id="searchInput" placeholder="🔍 Cari tower...">

        <div class="filter-row">
            <select id="filterJenis">
                <option value="">Semua Jenis</option>
                <option value="SUTT">SUTT</option>
                <option value="SUTET">SUTET</option>
            </select>

            <select id="filterWilayah">
                <option value="">Semua Wilayah</option>
                <option value="Bekasi">Bekasi</option>
                <option value="Karawang">Karawang</option>
            </select>

            <select id="filterStatus">
                <option value="">Semua Status</option>
                <option value="Aktif">Aktif</option>
                <option value="Nonaktif">Nonaktif</option>
            </select>
        </div>
    </div>

    <!-- GRID -->
    <div class="card-grid">
        @for ($i = 1; $i <= 12; $i++)
        <div class="card"
             data-name="Tower {{ $i }}"
             data-jenis="SUTT"
             data-wilayah="Bekasi"
                data-status="{{ $i % 2 == 0 ? 'Aktif' : 'Nonaktif' }}">
            <div class="card-img"></div>
            <div class="card-body">
                <h4>Tower {{ $i }}</h4>
                <span>Bekasi</span>
                <small>Status: {{ $i % 2 == 0 ? 'sertifikasi' : 'Belum Sertifikasi' }}</small>
            </div>
        </div>
        @endfor
    </div>

</main>

<!-- JAVASCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {

    const searchInput = document.getElementById('searchInput');
    const filterJenis = document.getElementById('filterJenis');
    const filterWilayah = document.getElementById('filterWilayah');
    const filterStatus = document.getElementById('filterStatus');
    const cards = document.querySelectorAll('.card');

    function filterCards() {
        const search = searchInput.value.toLowerCase();
        const jenis = filterJenis.value;
        const wilayah = filterWilayah.value;
        const status = filterStatus.value;

        cards.forEach(card => {
            const name = card.dataset.name.toLowerCase();
            const cardJenis = card.dataset.jenis;
            const cardWilayah = card.dataset.wilayah;
            const cardStatus = card.dataset.status;

            const show =
                name.includes(search) &&
                (!jenis || cardJenis === jenis) &&
                (!wilayah || cardWilayah === wilayah) &&
                (!status || cardStatus === status);

            card.style.display = show ? 'block' : 'none';
        });
    }

    searchInput.addEventListener('input', filterCards);
    filterJenis.addEventListener('change', filterCards);
    filterWilayah.addEventListener('change', filterCards);
    filterStatus.addEventListener('change', filterCards);

});

document.querySelector('a[href="#tower"]').addEventListener('click', () => {
    const tower = document.getElementById('tower');
    tower.style.animation = 'none';
    tower.offsetHeight; // reset animation
    tower.style.animation = 'slideDown .8s ease';
});


</script>

</body>
</html>
