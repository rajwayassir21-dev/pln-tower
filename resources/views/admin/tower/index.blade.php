<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Tower | Admin PLN Tower</title>

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

        .table-pln thead {
            background-color: #0066cc;
            color: #fff;
            border-bottom: 2px solid #ffcc00;
        }

        .table-pln thead th {
            color: #fff;
            font-weight: 600;
            border: none;
        }

        .table-pln tbody tr {
            background-color: #fff;
            color: #333;
        }

        .table-pln tbody tr:hover {
            background-color: #f0f8ff;
        }

        .table-pln tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .table-pln tbody tr:nth-child(even):hover {
            background-color: #f0f8ff;
        }

        .badge-pln {
            background-color: #ffcc00;
            color: #000;
            font-weight: 600;
        }

        .badge-sertifikat {
            background-color: #28a745;
            color: #fff;
            font-weight: 500;
        }

        .badge-belum {
            background-color: #dc3545;
            color: #fff;
            font-weight: 500;
        }

        .pln-warning {
            color: #ffcc00;
            font-weight: 600;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }

        .page-title {
            color: #000;
            font-weight: 700;
            border-left: 5px solid #ffcc00;
            padding-left: 15px;
            margin-bottom: 20px;
        }

        .alert-pln {
            background-color: #fff9e6;
            border-left: 5px solid #ffcc00;
            color: #856404;
            border-radius: 0;
        }

        .btn-tambah {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #000;
            font-weight: 600;
            padding: 6px 12px;
        }

        .btn-tambah:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #000;
            transform: translateY(-1px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-edit {
            background-color: transparent;
            border-color: #0066cc;
            color: #0066cc;
            font-weight: 500;
        }

        .btn-edit:hover {
            background-color: #0066cc;
            border-color: #0066cc;
            color: #fff;
        }

        .btn-hapus {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
            font-weight: 500;
        }

        .btn-hapus:hover {
            background-color: #c82333;
            border-color: #bd2130;
            color: #fff;
        }

        .table td,
        .table th {
            vertical-align: middle;
            padding: 12px 15px;
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

        .filter-card {
            background-color: #f8f9fc;
            border-left: 4px solid #0066cc;
            margin-bottom: 20px;
        }

        .filter-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .form-control-filter {
            border: 1px solid #d1d3e2;
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 0.9rem;
        }

        .form-control-filter:focus {
            border-color: #0066cc;
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
        }

        .status-icon {
            font-size: 1.2rem;
            margin-right: 5px;
        }

        .td-description {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .empty-state {
            padding: 40px 20px;
            text-align: center;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 15px;
            opacity: 0.5;
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

                    <!-- Page Title -->
                    <h1 class="h3 mb-4 text-gray-800 page-title">Data Tower</h1>

                    @if (session('success'))
                        <div class="alert alert-pln alert-dismissible fade show mb-4" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Tower Statistics -->
                    <div class="row mb-4">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Tower
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $towers->total() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-broadcast-tower fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Bersertifikat
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $towers->where('status_sertifikat', 'bersertifikat')->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-certificate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Belum Bersertifikat
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $towers->where('status_sertifikat', 'belum')->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Filter Card -->
                    <div class="card shadow mb-4 filter-card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-filter mr-2"></i>Filter Data
                            </h6>
                        </div>
                        <div class="card-body">
                            <form id="filterForm" method="GET" action="{{ route('admin.tower.index') }}">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label class="filter-label">Status Sertifikat</label>
                                        <select name="status_sertifikat"
                                            class="form-control form-control-filter filter">
                                            <option value="">Semua Status</option>
                                            <option value="bersertifikat"
                                                {{ request('status_sertifikat') == 'bersertifikat' ? 'selected' : '' }}>
                                                Bersertifikat
                                            </option>
                                            <option value="belum"
                                                {{ request('status_sertifikat') == 'belum' ? 'selected' : '' }}>
                                                Belum
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="filter-label">Kecamatan</label>
                                        <select name="kecamatan" class="form-control form-control-filter filter">
                                            <option value="">Semua Kecamatan</option>
                                            @foreach ($kecamatans as $k)
                                                <option value="{{ $k }}"
                                                    {{ request('kecamatan') == $k ? 'selected' : '' }}>
                                                    {{ $k }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="filter-label">Kota</label>
                                        <select name="city" class="form-control form-control-filter filter">
                                            <option value="">Semua Kota</option>
                                            @foreach ($cities as $c)
                                                <option value="{{ $c }}"
                                                    {{ request('city') == $c ? 'selected' : '' }}>
                                                    {{ $c }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="filter-label">Cari Tower</label>
                                        <div class="input-group">
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                class="form-control form-control-filter"
                                                placeholder="Cari deskripsi/lokasi...">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Tower Table Card -->
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex justify-content-between align-items-center card-header-pln">
                            <h6 class="m-0 font-weight-bold">
                                <i class="fas fa-broadcast-tower mr-2"></i>Data Tower Sistem
                            </h6>
                            <a href="{{ route('admin.tower.create') }}" class="btn btn-tambah">
                                <i class="fas fa-plus mr-1"></i> Tambah Tower
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-pln" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi</th>
                                            <th>Lokasi</th>
                                            <th>Status Sertifikat</th>
                                            <th>Luas</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota</th>
                                            <th>Tgl Awal</th>
                                            <th>Tgl Akhir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($towers as $tower)
                                            <tr>
                                                <td>{{ $loop->iteration + ($towers->currentPage() - 1) * $towers->perPage() }}
                                                </td>
                                                <td class="td-description" title="{{ $tower->description }}">
                                                    {{ $tower->description }}
                                                </td>
                                                <td>{{ $tower->lokasi }}</td>
                                                <td>
                                                    @if ($tower->status_sertifikat == 'bersertifikat')
                                                        <span class="badge badge-sertifikat">
                                                            <i class="fas fa-check-circle status-icon"></i>
                                                            {{ ucfirst($tower->status_sertifikat) }}
                                                        </span>
                                                    @else
                                                        <span class="badge badge-belum">
                                                            <i class="fas fa-times-circle status-icon"></i>
                                                            {{ ucfirst($tower->status_sertifikat) }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>{{ $tower->luas ?? '-' }}</td>
                                                <td>{{ $tower->kelurahan }}</td>
                                                <td>{{ $tower->kecamatan }}</td>
                                                <td>{{ $tower->city }}</td>
                                                <td>{{ $tower->tgl_awal }}</td>
                                                <td>{{ $tower->tgl_akhir }}</td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <a href="{{ route('admin.tower.edit', $tower->id) }}"
                                                            class="btn btn-edit btn-sm">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>

                                                        <form action="{{ route('admin.tower.destroy', $tower->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Yakin hapus data tower ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-hapus btn-sm">
                                                                <i class="fas fa-trash"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="11">
                                                    <div class="empty-state">
                                                        <i class="fas fa-broadcast-tower"></i>
                                                        <h5>Belum ada data tower</h5>
                                                        <p class="mb-3">Tambahkan data tower pertama Anda</p>
                                                        <a href="{{ route('admin.tower.create') }}"
                                                            class="btn btn-tambah">
                                                            <i class="fas fa-plus mr-1"></i> Tambah Tower Pertama
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            @if ($towers->hasPages())
                                <div class="mt-4">
                                    {{ $towers->appends(request()->query())->links() }}
                                </div>
                            @endif
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
            // Auto submit filter on change
            $('.filter').change(function() {
                $('#filterForm').submit();
            });

            // Auto submit search after typing stops
            let typingTimer;
            const searchInput = $('input[name="search"]');

            searchInput.on('keyup', function() {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(function() {
                    $('#filterForm').submit();
                }, 500);
            });

            // Konfirmasi penghapusan
            $('form[onsubmit]').submit(function(e) {
                if (!confirm(
                        'Apakah Anda yakin ingin menghapus data tower ini? Tindakan ini tidak dapat dibatalkan.'
                        )) {
                    e.preventDefault();
                }
            });

            // Auto-hide alert setelah 5 detik
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);

            // Show full description on hover
            $('.td-description').hover(function() {
                $(this).css({
                    'white-space': 'normal',
                    'overflow': 'visible',
                    'background-color': '#f8f9fa'
                });
            }, function() {
                $(this).css({
                    'white-space': 'nowrap',
                    'overflow': 'hidden',
                    'background-color': ''
                });
            });
        });
    </script>

</body>

</html>
