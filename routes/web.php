<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthRedirectController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\TowerController as UserTowerController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

Route::get('/create-admin', function () {
    $admin = User::where('id_login', 'admin01')->first();

    if ($admin) {
        return 'Admin sudah ada';
    }

    User::create([
        'name' => 'Admin',
        'id_login' => 'admin',
        'password' => Hash::make('123'),
        'role' => 'admin',
    ]);

    return 'Admin berhasil dibuat';
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->get('/redirect', function () {
    $user = request()->user();

    return match ($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'user'  => redirect()->route('user.dashboard'),
        default => abort(403),
    };
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');

    Route::get('/user/dashboard', [App\Http\Controllers\User\TowerController::class, 'index'])
        ->name('user.dashboard');

    Route::get('/user/towers/{id}', [UserTowerController::class, 'show'])
        ->name('tower_detail');
});

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // ===== USER CRUD =====
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/users', [UserController::class, 'store'])->name('user.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');

        // ===== TOWER CRUD =====
        Route::get('/towers', [TowerController::class, 'index'])->name('tower.index');
        Route::get('/towers/create', [TowerController::class, 'create'])->name('tower.create');
        Route::post('/towers', [TowerController::class, 'store'])->name('tower.store');
        Route::get('/towers/{tower}/edit', [TowerController::class, 'edit'])->name('tower.edit');
        Route::put('/towers/{tower}', [TowerController::class, 'update'])->name('tower.update');
        Route::delete('/towers/{tower}', [TowerController::class, 'destroy'])->name('tower.destroy');
    });
