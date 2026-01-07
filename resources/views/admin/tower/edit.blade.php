<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Edit Data Tower | Admin PLN Tower</title>

    <!-- Fonts -->
    <link href="{{ asset('storage/assets/sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('storage/assets/sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/admin.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('storage/assets/img/pln.png') }}" />

    <style>
        .btn-pln {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000;
            font-weight: 600;
        }

        .btn-pln:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #000;
        }

        .btn-pln-outline {
            background-color: transparent;
            border-color: #ffcc00;
            color: #ffcc00;
            font-weight: 600;
        }

        .btn-pln-outline:hover {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000;
        }

        .card-header-pln {
            background: linear-gradient(135deg, #0066cc 0%, #004d99 100%);
            color: #fff;
            border-bottom: 3px solid #ffcc00;
        }

        .form-control-pln {
            border: 1px solid #d1d3e2;
            border-radius: 4px;
            padding: 10px 12px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-control-pln:focus {
            border-color: #0066cc;
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
            outline: none;
        }

        .form-control-pln.is-invalid {
            border-color: #dc3545;
        }

        .form-control-pln.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .form-label-pln {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-label-required:after {
            content: " *";
            color: #dc3545;
        }

        .page-title {
            color: #000;
            font-weight: 700;
            border-left: 5px solid #ffcc00;
            padding-left: 15px;
            margin-bottom: 20px;
        }

        .alert-pln-error {
            background-color: #fff2e6;
            border-left: 5px solid #ff9900;
            color: #cc6600;
            border-radius: 0;
            border: 1px solid #ffeaa7;
        }

        .back-button {
            background-color: #f8f9fc;
            border: 1px solid #ddd;
            color: #333;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .back-button:hover {
            background-color: #e9ecef;
            color: #000;
            text-decoration: none;
        }

        .card {
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .card-header-pln h6 {
            margin: 0;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .form-section {
            background-color: #f8f9fc;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 25px;
            border-left: 4px solid #0066cc;
        }

        .form-section-title {
            color: #0066cc;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .form-section-title i {
            margin-right: 10px;
        }

        .form-group-row {
            margin-bottom: 20px;
        }

        .input-hint {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 5px;
            display: block;
        }

        textarea.form-control-pln {
            min-height: 100px;
            resize: vertical;
        }

        .coordinate-input {
            background-color: #f8f9fc;
            border: 1px dashed #adb5bd;
            font-family: monospace;
            font-size: 0.9rem;
        }

        .form-actions {
            padding-top: 20px;
            border-top: 1px solid #e3e6f0;
            margin-top: 30px;
        }

        .btn-update {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000;
            font-weight: 600;
            padding: 10px 30px;
            font-size: 1rem;
        }

        .btn-update:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #000;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-batal {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
            font-weight: 500;
            padding: 10px 30px;
            font-size: 1rem;
            margin-left: 10px;
        }

        .btn-batal:hover {
            background-color: #5a6268;
            border-color: #545b62;
            color: #fff;
        }

        .btn-reset {
            background-color: transparent;
            border-color: #dc3545;
            color: #dc3545;
            font-weight: 500;
            padding: 10px 20px;
            font-size: 1rem;
            margin-left: 10px;
        }

        .btn-reset:hover {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }

        .required-note {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 10px;
            text-align: right;
        }

        .required-note:before {
            content: "* ";
            color: #dc3545;
        }

        .tower-info-card {
            border-left: 4px solid #ffcc00;
            background-color: #f8f9fa;
            margin-bottom: 25px;
        }

        .tower-id-badge {
            background-color: #0066cc;
            color: white;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .last-updated {
            font-size: 0.85rem;
            color: #6c757d;
            font-style: italic;
        }

        @media (max-width: 768px) {

            .btn-update,
            .btn-batal,
            .btn-reset {
                width: 100%;
                margin-bottom: 10px;
                margin-left: 0;
            }
        }
    </style>
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-text mx-3">PLN UPT</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data User</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.tower.index') }}">
                    <i class="fas fa-fw fa-broadcast-tower"></i>
                    <span>Data Tower</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- User -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ auth()->user()->name ?? 'Admin' }}
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('storage/assets/img/admin.svg') }}">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End Topbar -->

                <!-- Page Content -->
                <div class="container-fluid">

                    <!-- Page Title & Breadcrumb -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 page-title">Edit Data Tower</h1>
                        <a href="{{ route('admin.tower.index') }}"
                            class="d-none d-sm-inline-block btn btn-sm back-button">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Data Tower
                        </a>
                    </div>

                    <!-- Tower Information Card -->
                    <div class="row mb-4">
                        <div class="col-xl-12">
                            <div class="card shadow tower-info-card">
                                <div class="card-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h5 class="card-title mb-1">
                                                <i class="fas fa-broadcast-tower text-warning mr-2"></i>
                                                Edit Data Tower: <span
                                                    class="text-dark">{{ $tower->description }}</span>
                                            </h5>
                                            <p class="card-text mb-0">
                                                <span class="tower-id-badge">
                                                    ID: #{{ $tower->id }}
                                                </span>
                                                <span class="mx-2">•</span>
                                                Lokasi: <strong>{{ $tower->lokasi }}</strong>
                                                <span class="mx-2">•</span>
                                                Status:
                                                @if ($tower->status_sertifikat == 'bersertifikat')
                                                    <span class="badge badge-success">Bersertifikat</span>
                                                @else
                                                    <span class="badge badge-danger">Belum</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <p class="last-updated mb-0">
                                                <i class="far fa-clock mr-1"></i>
                                                Terakhir diperbarui: {{ $tower->updated_at->format('d/m/Y H:i') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Card -->
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center card-header-pln">
                                    <h6 class="m-0 font-weight-bold">
                                        <i class="fas fa-edit mr-2"></i>Form Edit Data Tower
                                    </h6>
                                    <span class="badge badge-light">Mode Edit</span>
                                </div>
                                <div class="card-body">

                                    <!-- Error Messages -->
                                    @if ($errors->any())
                                        <div class="alert alert-pln-error alert-dismissible fade show mb-4"
                                            role="alert">
                                            <h6 class="alert-heading">
                                                <i class="fas fa-exclamation-triangle mr-2"></i>Terjadi Kesalahan
                                            </h6>
                                            <ul class="mb-0 pl-3">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <!-- Form -->
                                    <form action="{{ route('admin.tower.update', $tower->id) }}" method="POST"
                                        id="towerForm" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Informasi Umum Section -->
                                        <div class="form-section">
                                            <h6 class="form-section-title">
                                                <i class="fas fa-info-circle"></i>Informasi Umum Tower
                                            </h6>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="description"
                                                            class="form-label-pln form-label-required">Deskripsi
                                                            Tower</label>
                                                        <input type="text" name="description" id="description"
                                                            class="form-control-pln @error('description') is-invalid @enderror"
                                                            required
                                                            value="{{ old('description', $tower->description) }}"
                                                            placeholder="Masukkan deskripsi lengkap tower">
                                                        @error('description')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Contoh: Tower PLN Gardu Induk
                                                            Jatibarang</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="lokasi"
                                                            class="form-label-pln form-label-required">Lokasi</label>
                                                        <input type="text" name="lokasi" id="lokasi"
                                                            class="form-control-pln @error('lokasi') is-invalid @enderror"
                                                            required value="{{ old('lokasi', $tower->lokasi) }}"
                                                            placeholder="Masukkan alamat lengkap lokasi">
                                                        @error('lokasi')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Alamat lengkap termasuk patokan
                                                            sekitar</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group-row">
                                                        <label for="status_sertifikat"
                                                            class="form-label-pln form-label-required">Status
                                                            Sertifikat</label>
                                                        <select name="status_sertifikat" id="status_sertifikat"
                                                            class="form-control-pln @error('status_sertifikat') is-invalid @enderror"
                                                            required>
                                                            <option value="bersertifikat"
                                                                {{ old('status_sertifikat', $tower->status_sertifikat) == 'bersertifikat' ? 'selected' : '' }}>
                                                                Bersertifikat</option>
                                                            <option value="belum"
                                                                {{ old('status_sertifikat', $tower->status_sertifikat) == 'belum' ? 'selected' : '' }}>
                                                                Belum</option>
                                                        </select>
                                                        @error('status_sertifikat')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group-row">
                                                        <label for="luas" class="form-label-pln">Luas (m²)</label>
                                                        <input type="text" name="luas" id="luas"
                                                            class="form-control-pln @error('luas') is-invalid @enderror"
                                                            value="{{ old('luas', $tower->luas) }}"
                                                            placeholder="Contoh: 150.50">
                                                        @error('luas')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Dalam meter persegi (optional)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Koordinat Section -->
                                        <div class="form-section">
                                            <h6 class="form-section-title">
                                                <i class="fas fa-map-marker-alt"></i>Koordinat Geografis
                                            </h6>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="latitude_y"
                                                            class="form-label-pln form-label-required">Latitude
                                                            (Y)</label>
                                                        <input type="text" name="latitude_y" id="latitude_y"
                                                            class="form-control-pln coordinate-input @error('latitude_y') is-invalid @enderror"
                                                            required value="{{ old('latitude_y', $tower->latitude) }}"
                                                            placeholder="Contoh: -6.2088">
                                                        @error('latitude_y')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Koordinat lintang (contoh:
                                                            -6.2088)</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="longitude_x"
                                                            class="form-label-pln form-label-required">Longitude
                                                            (X)</label>
                                                        <input type="text" name="longitude_x" id="longitude_x"
                                                            class="form-control-pln coordinate-input @error('longitude_x') is-invalid @enderror"
                                                            required
                                                            value="{{ old('longitude_x', $tower->longitude) }}"
                                                            placeholder="Contoh: 106.8456">
                                                        @error('longitude_x')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Koordinat bujur (contoh:
                                                            106.8456)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data Administrasi Section -->
                                        <div class="form-section">
                                            <h6 class="form-section-title">
                                                <i class="fas fa-file-alt"></i>Data Administrasi
                                            </h6>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="no_surat" class="form-label-pln">Nomor
                                                            Surat</label>
                                                        <input type="text" name="no_surat" id="no_surat"
                                                            class="form-control-pln @error('no_surat') is-invalid @enderror"
                                                            value="{{ old('no_surat', $tower->no_surat) }}"
                                                            placeholder="Nomor surat jika ada">
                                                        @error('no_surat')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="no_sertipikat" class="form-label-pln">Nomor
                                                            Sertipikat</label>
                                                        <input type="text" name="no_sertipikat" id="no_sertipikat"
                                                            class="form-control-pln @error('no_sertipikat') is-invalid @enderror"
                                                            value="{{ old('no_sertipikat', $tower->no_sertipikat) }}"
                                                            placeholder="Nomor sertifikat jika ada">
                                                        @error('no_sertipikat')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data Wilayah Section -->
                                        <div class="form-section">
                                            <h6 class="form-section-title">
                                                <i class="fas fa-map"></i>Data Wilayah
                                            </h6>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group-row">
                                                        <label for="kelurahan"
                                                            class="form-label-pln form-label-required">Kelurahan</label>
                                                        <input type="text" name="kelurahan" id="kelurahan"
                                                            class="form-control-pln @error('kelurahan') is-invalid @enderror"
                                                            required value="{{ old('kelurahan', $tower->kelurahan) }}"
                                                            placeholder="Nama kelurahan">
                                                        @error('kelurahan')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group-row">
                                                        <label for="kecamatan"
                                                            class="form-label-pln form-label-required">Kecamatan</label>
                                                        <input type="text" name="kecamatan" id="kecamatan"
                                                            class="form-control-pln @error('kecamatan') is-invalid @enderror"
                                                            required value="{{ old('kecamatan', $tower->kecamatan) }}"
                                                            placeholder="Nama kecamatan">
                                                        @error('kecamatan')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group-row">
                                                        <label for="city"
                                                            class="form-label-pln form-label-required">Kota/Kabupaten</label>
                                                        <input type="text" name="city" id="city"
                                                            class="form-control-pln @error('city') is-invalid @enderror"
                                                            required value="{{ old('city', $tower->city) }}"
                                                            placeholder="Nama kota/kabupaten">
                                                        @error('city')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Periode Waktu Section -->
                                        <div class="form-section">
                                            <h6 class="form-section-title">
                                                <i class="fas fa-calendar-alt"></i>Periode Waktu
                                            </h6>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="tgl_awal" class="form-label-pln">Tanggal
                                                            Awal</label>
                                                        <input type="date" name="tgl_awal" id="tgl_awal"
                                                            class="form-control-pln @error('tgl_awal') is-invalid @enderror"
                                                            value="{{ old('tgl_awal', $tower->tgl_awal) }}">
                                                        @error('tgl_awal')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Tanggal mulai (optional)</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="tgl_akhir" class="form-label-pln">Tanggal
                                                            Akhir</label>
                                                        <input type="date" name="tgl_akhir" id="tgl_akhir"
                                                            class="form-control-pln @error('tgl_akhir') is-invalid @enderror"
                                                            value="{{ old('tgl_akhir', $tower->tgl_akhir) }}">
                                                        @error('tgl_akhir')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror
                                                        <span class="input-hint">Tanggal berakhir (optional)</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group-row">
                                                        <label for="foto" class="form-label-pln">Foto</label>

                                                        {{-- FOTO LAMA --}}
                                                        @if ($tower->foto)
                                                            <div class="mb-2">
                                                                <small>Foto saat ini:</small><br>
                                                                <img src="{{ asset('storage/tower/' . $tower->foto) }}"
                                                                    alt="Foto Tower"
                                                                    style="max-width:100%; height:150px; object-fit:cover; border-radius:6px;">
                                                            </div>
                                                        @endif

                                                        {{-- INPUT FOTO BARU --}}
                                                        <input type="file" name="foto" id="foto"
                                                            accept="image/*" onchange="previewFoto(event)"
                                                            class="form-control-pln @error('foto') is-invalid @enderror">

                                                        @error('foto')
                                                            <div class="invalid-feedback d-block">{{ $message }}
                                                            </div>
                                                        @enderror

                                                        <span class="input-hint">Upload foto baru (opsional)</span>

                                                        {{-- PREVIEW FOTO BARU --}}
                                                        <div class="mt-2">
                                                            <small>Preview foto baru:</small><br>
                                                            <img id="previewFoto"
                                                                style="display:none; max-width:100%; height:150px; object-fit:cover; border-radius:6px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Actions -->
                                        <div class="form-actions text-center">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save mr-2"></i>Update Data Tower
                                            </button>
                                            <a href="{{ route('admin.tower.index') }}" class="btn btn-batal">
                                                <i class="fas fa-times mr-2"></i>Batal
                                            </a>
                                            <button type="button" class="btn btn-reset" id="resetForm">
                                                <i class="fas fa-undo mr-2"></i>Reset
                                            </button>
                                            <div class="required-note mt-3">
                                                Field dengan tanda bintang (*) wajib diisi
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Container -->

            </div>
            <!-- End Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PLN UPT {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End Content Wrapper -->

    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    Yakin ingin logout?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('storage/assets/sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('storage/assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('storage/assets/sbadmin2/js/sb-admin-2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Auto-hide alert setelah 8 detik
            setTimeout(function() {
                $('.alert').alert('close');
            }, 8000);

            // Form validation
            $('#towerForm').submit(function(e) {
                const requiredFields = [
                    'description', 'lokasi', 'status_sertifikat',
                    'latitude_y', 'longitude_x', 'kelurahan', 'kecamatan', 'city'
                ];

                let isValid = true;
                let firstInvalidField = null;

                requiredFields.forEach(fieldId => {
                    const field = $('#' + fieldId);
                    if (!field.val().trim()) {
                        isValid = false;
                        if (!firstInvalidField) {
                            firstInvalidField = field;
                        }
                        field.addClass('is-invalid');
                    } else {
                        field.removeClass('is-invalid');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Harap lengkapi semua field yang wajib diisi!');
                    if (firstInvalidField) {
                        firstInvalidField.focus();
                    }
                    return false;
                }

                // Validasi format koordinat
                const latitude = $('#latitude_y').val().trim();
                const longitude = $('#longitude_x').val().trim();

                if (isNaN(parseFloat(latitude)) || isNaN(parseFloat(longitude))) {
                    e.preventDefault();
                    alert('Latitude dan Longitude harus berupa angka!');
                    $('#latitude_y').focus();
                    return false;
                }

                return true;
            });

            // Reset form button
            $('#resetForm').click(function() {
                if (confirm('Apakah Anda yakin ingin mengembalikan semua nilai ke data asli?')) {
                    // Reset ke nilai awal dari database
                    $('#description').val('{{ $tower->description }}');
                    $('#lokasi').val('{{ $tower->lokasi }}');
                    $('#status_sertifikat').val('{{ $tower->status_sertifikat }}');
                    $('#luas').val('{{ $tower->luas }}');
                    $('#latitude_y').val('{{ $tower->latitude_y }}');
                    $('#longitude_x').val('{{ $tower->longitude_x }}');
                    $('#no_surat').val('{{ $tower->no_surat }}');
                    $('#no_sertipikat').val('{{ $tower->no_sertipikat }}');
                    $('#kelurahan').val('{{ $tower->kelurahan }}');
                    $('#kecamatan').val('{{ $tower->kecamatan }}');
                    $('#city').val('{{ $tower->city }}');
                    $('#tgl_awal').val('{{ $tower->tgl_awal }}');
                    $('#tgl_akhir').val('{{ $tower->tgl_akhir }}');

                    // Hapus class error
                    $('.is-invalid').removeClass('is-invalid');

                    // Tampilkan pesan sukses
                    const resetAlert = `
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            Form berhasil direset ke data asli.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    `;

                    // Hapus alert error jika ada
                    $('.alert-pln-error').remove();

                    // Tambahkan alert sukses
                    $('.card-body').prepend(resetAlert);

                    // Auto-hide alert setelah 3 detik
                    setTimeout(function() {
                        $('.alert-success').alert('close');
                    }, 3000);
                }
            });

            // Auto-focus pada field pertama
            $('#description').focus();

            // Auto format luas jika diisi
            $('#luas').on('blur', function() {
                let value = parseFloat($(this).val());
                if (!isNaN(value) && value > 0) {
                    $(this).val(value.toFixed(2));
                }
            });

            // Toggle required fields based on status sertifikat
            $('#status_sertifikat').change(function() {
                const status = $(this).val();
                if (status === 'bersertifikat') {
                    $('#no_sertipikat').attr('placeholder', 'Wajib diisi untuk status bersertifikat');
                } else {
                    $('#no_sertipikat').attr('placeholder', 'Nomor sertifikat jika ada');
                }
            });
        });

        function previewFoto(event) {
            const img = document.getElementById('previewFoto');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.style.display = 'block';
        }
    </script>

</body>

</html>
