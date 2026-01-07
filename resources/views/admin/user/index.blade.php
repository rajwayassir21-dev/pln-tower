<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data User | Admin PLN Tower</title>

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
            color: #fefe30;
            font-weight: 600;
        }

        .btn-pln:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            color: #ffffff;
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
            background: linear-gradient(to right, #000, #333);
            color: #fff;
            border-bottom: 3px solid #ffcc00;
        }

        .table-pln thead {
            background-color: #f8f9fc;
            color: #ffffff;
            border-bottom: 2px solid #ffcc00;
        }

        .table-pln tbody tr:hover {
            background-color: #fff9e6;
        }

        .badge-pln {
            background-color: #ffcc00;
            color: #000;
            font-weight: 600;
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

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data User</span>
                </a>
            </li>

            <li class="nav-item">
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
                    <h1 class="h3 mb-4 text-gray-800 page-title">Daftar Users</h1>

                    @if (session('success'))
                        <div class="alert alert-pln alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- User Statistics -->
                    <div class="row mb-4">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total User
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $users->where('role', 'user')->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BAGIAN ADMIN DIHAPUS DARI SINI -->
                    </div>

                    <!-- User Table Card -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center card-header-pln">
                            <h6 class="m-0 font-weight-bold">Data User Sistem</h6>
                            <a href="{{ route('admin.user.create') }}" class="btn btn-pln btn-sm">
                                <i class="fas fa-plus mr-1"></i> Tambah User
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-pln" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Login</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $index => $user)
                                            @if ($user->role === 'user')
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <span class="font-weight-bold">{{ $user->id_login }}</span>
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                               class="btn btn-warning btn-sm btn-pln-outline">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>

                                                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST"
                                                                  onsubmit="return confirm('Yakin mau hapus user ini?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        @if($users->where('role', 'user')->count() == 0)
                                            <tr>
                                                <td colspan="5" class="text-center py-4">
                                                    <i class="fas fa-users fa-2x text-gray-300 mb-3"></i>
                                                    <p class="text-muted">Belum ada data user.</p>
                                                    <a href="{{ route('admin.user.create') }}" class="btn btn-pln">
                                                        <i class="fas fa-plus mr-1"></i> Tambah User Pertama
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
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
        // Konfirmasi penghapusan dengan modal yang lebih baik
        $(document).ready(function() {
            $('form[onsubmit]').submit(function(e) {
                if (!confirm('Apakah Anda yakin ingin menghapus user ini? Tindakan ini tidak dapat dibatalkan.')) {
                    e.preventDefault();
                }
            });

            // Auto-hide alert setelah 5 detik
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);
        });
    </script>

</body>

</html>
