<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tower;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::where('role', 'user')->count();
        $towerBersertifikat = Tower::where('status_sertifikat', 'bersertifikat')->count();
        $towerBelum = Tower::where('status_sertifikat', 'belum')->count();
        $towers = Tower::latest()->paginate(12);

        return view('admin.dashboard', compact(
            'userCount',
            'towerBersertifikat',
            'towerBelum',
            'towers'
        ));
    }
}
