<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PLN Tower</title>

    <link rel="icon" href="{{ asset('storage/assets/img/pln.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --pln-blue: #0066cc;
            --pln-yellow: #ffcc00;
            --pln-dark: #000000;
            --pln-light: #f8f9fa;
        }

        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(135deg, var(--pln-blue) 0%, #004d99 100%);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand img {
            height: 50px;
            width: 50px;
            object-fit: contain;
            border-radius: 8px;
            padding: 5px;
        }

        .brand-text {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .btn-logout {
            background-color: var(--pln-yellow);
            color: var(--pln-dark);
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn-logout:hover {
            background-color: #e6b800;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);
        }

        /* HEADER */
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('{{ asset('storage/assets/img/bg.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 80px 20px;
            margin-bottom: 40px;
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background-color: var(--pln-yellow);
            border-radius: 2px;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* MAIN CONTENT */
        .content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px 40px;
        }

        /* CONTENT HEADER */
        .content-header {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--pln-yellow);
        }

        .content-header h2 {
            color: var(--pln-dark);
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 2.2rem;
        }

        .content-header span {
            color: #666;
            font-size: 1.1rem;
        }

        /* FILTER FORM */
        .control-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            border-top: 4px solid var(--pln-blue);
        }

        .control-box .form-label {
            font-weight: 600;
            color: var(--pln-dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-select,
        .form-control {
            border: 2px solid #e1e5eb;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-select:focus,
        .form-control:focus {
            border-color: var(--pln-blue);
            box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
            outline: none;
        }

        .btn-outline-primary {
            border-color: var(--pln-blue);
            color: var(--pln-blue);
            padding: 12px 20px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-outline-primary:hover {
            background-color: var(--pln-blue);
            border-color: var(--pln-blue);
            color: white;
            transform: translateY(-1px);
        }

        /* CARD GRID */
        .card-grid {
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            border: 1px solid #eaeaea;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 102, 204, 0.15);
            border-color: var(--pln-blue);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 25px;
        }

        .card-title {
            color: var(--pln-dark);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .card-text {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .badge-sertifikat {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .badge-belum {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .badge-wilayah {
            background-color: var(--pln-blue);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #eee;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-footer small {
            color: #666;
        }

        /* TOMBOL DETAIL - MENGHILANGKAN GARIS BAWAH */
        .btn-detail {
            background-color: var(--pln-blue);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            margin-top: 15px;
            text-decoration: none !important;
            /* Menghilangkan garis bawah */
        }

        .btn-detail:hover {
            background-color: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
            color: white;
            /* Pastikan warna tetap putih saat hover */
            text-decoration: none !important;
            /* Pastikan tidak ada garis bawah saat hover */
        }

        .btn-detail:active,
        .btn-detail:focus {
            text-decoration: none !important;
            /* Menghilangkan garis bawah saat aktif/fokus */
            outline: none;
            /* Menghilangkan outline default */
        }

        .btn-detail i {
            font-size: 0.9rem;
        }

        /* Menghilangkan semua efek garis bawah dari link */
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none !important;
        }

        /* EMPTY STATE */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .empty-state i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            color: #666;
            margin-bottom: 15px;
        }

        /* PAGINATION */
        .pagination-container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-top: 40px;
            border-top: 4px solid var(--pln-yellow);
        }

        .pagination {
            margin: 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .page-item .page-link {
            color: var(--pln-blue);
            border: 1px solid #dee2e6;
            padding: 10px 18px;
            margin: 0 5px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
            min-width: 45px;
            text-align: center;
            text-decoration: none !important;
        }

        .page-item .page-link:hover {
            background-color: var(--pln-blue);
            color: white;
            border-color: var(--pln-blue);
            transform: translateY(-2px);
            text-decoration: none !important;
        }

        .page-item.active .page-link {
            background-color: var(--pln-blue);
            border-color: var(--pln-blue);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 102, 204, 0.3);
            text-decoration: none !important;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #f8f9fa;
            border-color: #dee2e6;
            text-decoration: none !important;
        }

        .pagination-info {
            text-align: center;
            color: #666;
            font-size: 0.95rem;
            margin-top: 15px;
        }

        /* LOADING SPINNER */
        .loading-spinner {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--pln-blue);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* MODAL LOGOUT STYLES */
        .modal-logout {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 10000;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: white;
            width: 90%;
            max-width: 450px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: modalAppear 0.4s ease forwards;
        }

        @keyframes modalAppear {
            to {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .modal-header {
            background: linear-gradient(135deg, var(--pln-blue) 0%, #004d99 100%);
            padding: 30px;
            text-align: center;
            color: white;
            position: relative;
        }

        .modal-header i {
            font-size: 3.5rem;
            margin-bottom: 15px;
            color: var(--pln-yellow);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-header h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .modal-body {
            padding: 40px 30px;
            text-align: center;
        }

        .modal-icon {
            font-size: 5rem;
            color: #ffcc00;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .modal-body p {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .modal-user {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid var(--pln-yellow);
        }

        .modal-user i {
            color: var(--pln-blue);
            margin-right: 10px;
        }

        .modal-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn-modal-cancel {
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            min-width: 130px;
        }

        .btn-modal-cancel:hover {
            background: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-modal-logout {
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            min-width: 130px;
            box-shadow: 0 4px 15px rgba(255, 75, 43, 0.3);
        }

        .btn-modal-logout:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 75, 43, 0.4);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }

            .header p {
                font-size: 1rem;
            }

            .content-header h2 {
                font-size: 1.8rem;
            }

            .card-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .pagination {
                flex-wrap: wrap;
            }

            .page-item .page-link {
                padding: 8px 14px;
                margin: 2px;
                min-width: 40px;
            }

            .brand-text {
                font-size: 1.2rem;
            }

            .btn-logout {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .modal-content {
                width: 95%;
                max-width: 400px;
            }

            .modal-actions {
                flex-direction: column;
                gap: 10px;
            }

            .btn-modal-cancel,
            .btn-modal-logout {
                width: 100%;
                min-width: auto;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 12px 15px;
            }

            .header {
                padding: 60px 15px;
            }

            .content {
                padding: 0 15px 30px;
            }

            .control-box,
            .content-header,
            .pagination-container {
                padding: 20px;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }

            .modal-header {
                padding: 25px 20px;
            }

            .modal-body {
                padding: 30px 20px;
            }

            .modal-icon {
                font-size: 4rem;
            }
        }
    </style>
</head>

<body>

    <!-- LOADING SPINNER -->
    <div class="loading-spinner" id="loadingSpinner">
        <div class="spinner"></div>
    </div>

    <!-- MODAL LOGOUT -->
    <div class="modal-logout" id="logoutModal">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-sign-out-alt"></i>
                <h3>Konfirmasi Logout</h3>
            </div>
            <div class="modal-body">
                <div class="modal-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="modal-user">
                    <p><i class="fas fa-user"></i> Anda login sebagai:
                        <strong>{{ auth()->user()->name ?? 'Admin' }}</strong></p>
                </div>
                <p>Apakah Anda yakin ingin keluar dari sistem Monitoring Tower PLN?</p>
                <div class="modal-actions">
                    <button class="btn-modal-cancel" onclick="closeLogoutModal()">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                        @csrf
                        <button type="submit" class="btn-modal-logout">
                            <i class="fas fa-sign-out-alt me-2"></i>Ya, Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="brand">
            <img src="{{ asset('storage/assets/img/logo.jpg') }}" alt="Logo PLN">
            <span class="brand-text">PLN UPT Bekasi</span>
        </div>
        <div class="nav-menu">
            <button class="btn-logout" onclick="showLogoutModal()">
                <i class="fas fa-sign-out-alt me-2"></i>Logout
            </button>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="header">
        <h1>Monitoring Tower PLN</h1>
        <p>Sistem Informasi Pendataan dan Monitoring Tower PLN di Wilayah UPT Bekasi</p>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content">

        <!-- TITLE -->
        <div class="content-header">
            <h2>Data Tower</h2>
            <span>Monitoring & Pendataan Tower PLN di Wilayah UPT Bekasi</span>
        </div>

        <!-- FILTER FORM -->
        <form method="GET" class="control-box" id="filterForm">
            <div class="row g-3">

                <div class="col-md-3">
                    <label class="form-label">Status Sertifikat</label>
                    <select name="status_sertifikat" class="form-select filter-select">
                        <option value="">Semua Status</option>
                        <option value="bersertifikat"
                            {{ request('status_sertifikat') == 'bersertifikat' ? 'selected' : '' }}>
                            Bersertifikat
                        </option>
                        <option value="belum" {{ request('status_sertifikat') == 'belum' ? 'selected' : '' }}>
                            Belum Bersertifikat
                        </option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Kecamatan</label>
                    <select name="kecamatan" class="form-select filter-select">
                        <option value="">Semua Kecamatan</option>
                        @foreach ($kecamatans as $k)
                            <option value="{{ $k }}" {{ request('kecamatan') == $k ? 'selected' : '' }}>
                                {{ $k }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Kota</label>
                    <select name="city" class="form-select filter-select">
                        <option value="">Semua Kota</option>
                        @foreach ($cities as $c)
                            <option value="{{ $c }}" {{ request('city') == $c ? 'selected' : '' }}>
                                {{ $c }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Cari Tower</label>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control filter-input"
                            value="{{ request('search') }}" placeholder="Cari nama/deskripsi..." id="searchInput">
                        <button type="button" class="btn btn-outline-primary" onclick="clearFilters()">
                            Clear
                        </button>
                    </div>
                </div>

            </div>
        </form>

        <!-- STATISTICS -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Total Tower</h5>
                        <h2 class="mb-0">{{ $towers->total() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Bersertifikat</h5>
                        <h2 class="mb-0">{{ $towers->where('status_sertifikat', 'bersertifikat')->count() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Belum Bersertifikat</h5>
                        <h2 class="mb-0">{{ $towers->where('status_sertifikat', 'belum')->count() }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Kota Berbeda</h5>
                        <h2 class="mb-0">{{ $cities->count() }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- GRID -->
        <div class="card-grid row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
            @forelse($towers as $tower)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tower->description }}</h5>
                            <p class="card-text">{{ Str::limit($tower->description, 100) }}</p>
                            <div class="mb-2">
                                <span class="badge badge-wilayah">{{ $tower->wilayah ?: $tower->city }}</span>
                                @if ($tower->status_sertifikat == 'bersertifikat')
                                    <span class="badge-sertifikat">Bersertifikat</span>
                                @else
                                    <span class="badge-belum">Belum Bersertifikat</span>
                                @endif
                            </div>
                            <p class="card-text mb-1">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    {{ $tower->kecamatan }}, {{ $tower->city }}
                                </small>
                            </p>
                            @if ($tower->luas)
                                <p class="card-text mb-1">
                                    <small class="text-muted">
                                        <i class="fas fa-expand-alt me-1"></i>
                                        Luas: {{ $tower->luas }} m²
                                    </small>
                                </p>
                            @endif

                            <!-- TOMBOL DETAIL TANPA GARIS BAWAH -->
                            <a href="{{ route('tower_detail', ['id' => $tower->id]) }}"
                                class="btn-detail">
                                <i class="fas fa-eye me-1"></i> Detail Tower
                            </a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                ID: #{{ $tower->id }}
                            </small>
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ $tower->created_at->format('d/m/Y') }}
                            </small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state">
                        <i class="fas fa-broadcast-tower"></i>
                        <h3>Data tower tidak ditemukan</h3>
                        <p>Coba ubah filter pencarian atau clear filter untuk melihat semua data.</p>
                        <button class="btn btn-primary" onclick="clearFilters()">
                            <i class="fas fa-filter me-2"></i>Clear Filter
                        </button>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        @if ($towers->hasPages())
            <div class="pagination-container">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($towers->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">«</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $towers->previousPageUrl() }}" rel="prev">«</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @php
                            $current = $towers->currentPage();
                            $last = $towers->lastPage();
                            $start = max(1, $current - 2);
                            $end = min($last, $current + 2);

                            if ($start > 1) {
                                echo '<li class="page-item"><a class="page-link" href="' .
                                    $towers->url(1) .
                                    '">1</a></li>';
                                if ($start > 2) {
                                    echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                                }
                            }

                            for ($page = $start; $page <= $end; $page++) {
                                if ($page == $current) {
                                    echo '<li class="page-item active"><span class="page-link">' .
                                        $page .
                                        '</span></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="' .
                                        $towers->url($page) .
                                        '">' .
                                        $page .
                                        '</a></li>';
                                }
                            }

                            if ($end < $last) {
                                if ($end < $last - 1) {
                                    echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                                }
                                echo '<li class="page-item"><a class="page-link" href="' .
                                    $towers->url($last) .
                                    '">' .
                                    $last .
                                    '</a></li>';
                            }
                        @endphp

                        {{-- Next Page Link --}}
                        @if ($towers->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $towers->nextPageUrl() }}" rel="next">»</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">»</span>
                            </li>
                        @endif
                    </ul>
                </nav>

                <div class="pagination-info">
                    Menampilkan {{ $towers->firstItem() ?? 0 }} - {{ $towers->lastItem() ?? 0 }} dari
                    {{ $towers->total() }} data tower
                    @if (request()->has('status_sertifikat') ||
                            request()->has('kecamatan') ||
                            request()->has('city') ||
                            request()->has('search'))
                        <br><small class="text-muted">(Hasil pencarian difilter)</small>
                    @endif
                </div>
            </div>
        @endif

    </main>

    <!-- BOOTSTRAP JS & FONT AWESOME -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <script>
        // Modal Logout Functions
        function showLogoutModal() {
            document.getElementById('logoutModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('logoutModal');
            if (event.target === modal) {
                closeLogoutModal();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLogoutModal();
            }
        });

        // Auto submit filter on change with debounce
        let filterTimeout;

        function submitFilter() {
            clearTimeout(filterTimeout);
            document.getElementById('loadingSpinner').style.display = 'flex';
            document.getElementById('filterForm').submit();
        }

        // Auto submit for filter selects
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', submitFilter);
        });

        // Auto submit for search input with debounce
        const searchInput = document.getElementById('searchInput');
        let typingTimer;

        searchInput.addEventListener('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(submitFilter, 800);
        });

        // Clear all filters
        function clearFilters() {
            const url = new URL(window.location.href);
            url.search = '';
            window.location.href = url.toString();
        }

        // Show loading spinner on page load
        document.addEventListener('DOMContentLoaded', function() {
            const spinner = document.getElementById('loadingSpinner');
            spinner.style.display = 'flex';

            // Hide spinner after page loads
            window.addEventListener('load', function() {
                setTimeout(() => {
                    spinner.style.display = 'none';
                }, 500);
            });
        });

        // Smooth scroll to top when clicking pagination
        document.querySelectorAll('.pagination a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('loadingSpinner').style.display = 'flex';

                // Scroll to top smoothly
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

                // Navigate to page after a short delay
                setTimeout(() => {
                    window.location.href = this.href;
                }, 300);
            });
        });

        // Handle enter key in search input
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                submitFilter();
            }
        });

        // Prevent form submission on logout form to use modal instead
        document.addEventListener('DOMContentLoaded', function() {
            const logoutForm = document.getElementById('logoutForm');
            if (logoutForm) {
                logoutForm.onsubmit = function(e) {
                    e.preventDefault();
                    // Submit the form after modal confirmation
                    this.submit();
                };
            }
        });

        // Add loading indicator when clicking detail button
        document.querySelectorAll('.btn-detail').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('loadingSpinner').style.display = 'flex';
            });
        });
    </script>

</body>

</html>
