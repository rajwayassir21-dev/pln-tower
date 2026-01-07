<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tower;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Tower::query();

        if ($request->filled('search')) {
            $query->where('nama_tower', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('jenis')) {
            $query->where('jenis', $request->jenis);
        }

        if ($request->filled('wilayah')) {
            $query->where('wilayah', $request->wilayah);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $towers = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('user.dashboard', compact('towers'));
    }
}
