<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tambah User | Admin PLN Tower</title>

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
            color: #ffffff;
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
            background: linear-gradient(to right, #000, #333);
            color: #fff;
            border-bottom: 3px solid #ffcc00;
        }

        .form-control-pln:focus {
            border-color: #ffcc00;
            box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.25);
        }

        .form-label-pln {
            font-weight: 600;
            color: #333;
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
        }

        .back-button {
            background-color: #f8f9fc;
            border: 1px solid #ddd;
            color: #333;
        }

        .back-button:hover {
            background-color: #e9ecef;
            color: #000;
        }

        .password-toggle {
            cursor: pointer;
            color: #666;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #ffcc00;
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

                    <!-- Page Title & Breadcrumb -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 page-title">Tambah User Baru</h1>
                        <a href="{{ route('admin.user.index') }}" class="d-none d-sm-inline-block btn btn-sm back-button">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar User
                        </a>
                    </div>

                    <!-- Form Card -->
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center card-header-pln">
                                    <h6 class="m-0 font-weight-bold">
                                        <i class="fas fa-user-plus mr-2"></i>Form Tambah User
                                    </h6>
                                    <span class="badge badge-light">Admin Panel</span>
                                </div>
                                <div class="card-body">

                                    <!-- Error Messages -->
                                    @if ($errors->any())
                                        <div class="alert alert-pln-error alert-dismissible fade show mb-4" role="alert">
                                            <h6 class="alert-heading">
                                                <i class="fas fa-exclamation-triangle mr-2"></i>Terjadi Kesalahan
                                            </h6>
                                            <ul class="mb-0 pl-3">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <!-- Form -->
                                    <form action="{{ route('admin.user.store') }}" method="POST" id="userForm">
                                        @csrf

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="alert alert-info border-left-info">
                                                    <h6 class="alert-heading"><i class="fas fa-info-circle mr-2"></i>Informasi</h6>
                                                    <p class="mb-0 small">
                                                        Isi semua field di bawah ini untuk menambahkan user baru ke sistem.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ID Login Field -->
                                        <div class="form-group row">
                                            <label for="id_login" class="col-md-4 col-form-label text-md-right form-label-pln">
                                                ID Login <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text"
                                                           class="form-control form-control-pln @error('id_login') is-invalid @enderror"
                                                           id="id_login"
                                                           name="id_login"
                                                           value="{{ old('id_login') }}"
                                                           required
                                                           placeholder="Masukkan ID Login">
                                                    @error('id_login')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <small class="form-text text-muted">
                                                    ID Login harus unik dan tidak boleh mengandung spasi.
                                                </small>
                                            </div>
                                        </div>

                                        <!-- Nama Field -->
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right form-label-pln">
                                                Nama Lengkap <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text"
                                                           class="form-control form-control-pln @error('name') is-invalid @enderror"
                                                           id="name"
                                                           name="name"
                                                           value="{{ old('name') }}"
                                                           required
                                                           placeholder="Masukkan nama lengkap">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Password Field -->
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right form-label-pln">
                                                Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password"
                                                           class="form-control form-control-pln @error('password') is-invalid @enderror"
                                                           id="password"
                                                           name="password"
                                                           required
                                                           placeholder="Masukkan password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text password-toggle" id="togglePassword">
                                                            <i class="fas fa-eye"></i>
                                                        </span>
                                                    </div>
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <small class="form-text text-muted">
                                                    Password minimal 3 karakter. Disarankan kombinasi huruf dan angka.
                                                </small>
                                            </div>
                                        </div>

                                        <!-- Role Information -->
                                        <div class="form-group row">
                                            <div class="col-md-8 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="roleInfo" checked disabled>
                                                    <label class="form-check-label text-muted small" for="roleInfo">
                                                        User yang dibuat akan memiliki role <strong>"user"</strong> secara otomatis.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Divider -->
                                        <hr class="mb-4">

                                        <!-- Form Actions -->
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-pln btn-lg">
                                                    <i class="fas fa-save mr-2"></i>Simpan User
                                                </button><br><br>
                                                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary btn-lg ml-2">
                                                    <i class="fas fa-times mr-2"></i>Batal
                                                </a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="card-footer bg-light">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <small class="text-muted">
                                                <i class="fas fa-exclamation-circle mr-1"></i>
                                                Field dengan tanda <span class="text-danger">*</span> wajib diisi.
                                            </small>
                                        </div>
                                    </div>
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
            // Toggle password visibility
            $('#togglePassword').click(function() {
                const passwordInput = $('#password');
                const icon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

            // Auto-hide alert setelah 8 detik
            setTimeout(function() {
                $('.alert').alert('close');
            }, 8000);

            // Form validation
            $('#userForm').submit(function(e) {
                const idLogin = $('#id_login').val().trim();
                const name = $('#name').val().trim();
                const password = $('#password').val().trim();

                if (!idLogin || !name || !password) {
                    e.preventDefault();
                    alert('Harap lengkapi semua field yang wajib diisi!');
                    return false;
                }

                if (password.length < 3) {
                    e.preventDefault();
                    alert('Password harus minimal 3 karakter!');
                    return false;
                }

                return true;
            });

            // Auto-focus pada field pertama
            $('#id_login').focus();
        });
    </script>

</body>

</html>
