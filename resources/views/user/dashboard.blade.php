<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PLN Tower</title>

    <link rel="icon" href="{{ asset('storage/assets/img/pln.png') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/first.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="brand">
            <img src="{{ asset('storage/assets/img/logo.jpg') }}" alt="">
            <span class="brand-text">UPT Bekasi</span>
        </div>
        <div class="nav-menu">
            <a href="#tower">Data Tower</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="header">
        <h1>Monitoring Tower PLN</h1>
        <p>Sistem Informasi Pendataan Tower</p>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content" id="tower">

        <!-- TITLE -->
        <div class="content-header">
            <h2>Data Tower</h2>
            <span>Monitoring & Pendataan Tower PLN</span>
        </div>

        <!-- FILTER FORM -->
        <form method="GET" class="control-box">
            <div class="row g-3">

                <div class="col-md-3">
                    <label class="form-label">Status Sertifikat</label>
                    <select name="status_sertifikat" class="form-select" onchange="this.form.submit()">
                        <option value="">Semua Status</option>
                        <option value="bersertifikat"
                            {{ request('status_sertifikat') == 'bersertifikat' ? 'selected' : '' }}>Bersertifikat
                        </option>
                        <option value="belum" {{ request('status_sertifikat') == 'belum' ? 'selected' : '' }}>Belum
                        </option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Kecamatan</label>
                    <select name="kecamatan" class="form-control form-control-filter filter">
                        <option value="">Semua Kecamatan</option>
                        {{-- @foreach ($kecamatans as $k)
                            <option value="{{ $k }}" @selected(request('kecamatan') == $k)>{{ $k }}
                            </option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Kota</label>
                    <select name="city" class="form-control form-control-filter filter">
                        <option value="">Semua Kota</option>
                        {{-- @foreach ($cities as $c)
                            <option value="{{ $c }}" @selected(request('city') == $c)>{{ $c }}
                            </option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Cari Tower</label>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                            placeholder="Nama / Deskripsi...">
                        <button type="submit" class="btn btn-outline-primary">Cari</button>
                    </div>
                </div>

            </div>
        </form>

        <!-- GRID -->
        <div class="card-grid mt-4 row row-cols-1 row-cols-md-3 g-4">
            @forelse ($towers as $tower)
                <div class="col">
                    <div class="card h-100">
                        @if ($tower->foto)
                            <img src="{{ asset('storage/' . $tower->foto) }}" class="card-img-top" alt="Foto Tower"
                                style="height:180px; object-fit:cover;">
                        @else
                            <div class="card-img-top bg-secondary text-white d-flex justify-content-center align-items-center"
                                style="height:180px;">
                                No Image
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $tower->nama_tower }}</h5>
                            <p class="card-text">{{ $tower->wilayah }} | {{ $tower->kecamatan }} |
                                {{ $tower->city }}</p>
                            <p class="card-text"><small>Status: {{ $tower->status }} | Sertifikat:
                                    {{ $tower->status_sertifikat }}</small></p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Data tower tidak ditemukan.</p>
            @endforelse
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-center mt-4">
            {{ $towers->links('pagination::bootstrap-5') }}
        </div>

    </main>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
