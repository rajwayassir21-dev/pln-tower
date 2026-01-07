<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua tower admin, filter optional
        $query = Tower::query();

        // Filter search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama_tower', 'like', "%$search%")
                  ->orWhere('wilayah', 'like', "%$search%");
        }

        // Pagination 12 per page
        $towers = $query->latest()->paginate(12)->withQueryString();

        // Dropdown filter data unik dari tower
        $kecamatans = Tower::select('kecamatan')->distinct()->pluck('kecamatan');
        $cities = Tower::select('city')->distinct()->pluck('city');

        return view('user.dashboard', compact('towers', 'kecamatans', 'cities'));
    }
}
