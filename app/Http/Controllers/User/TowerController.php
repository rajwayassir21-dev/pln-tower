<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index(Request $request)
    {
        // Ambil tower sesuai filter
        $query = Tower::query();

        if ($request->filled('status_sertifikat')) {
            $query->where('status_sertifikat', $request->status_sertifikat);
        }
        if ($request->filled('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }
        if ($request->filled('search')) {
            $query->where('description', 'like', '%' . $request->search . '%');
        }



        $towers = $query->paginate(9);

        // Ambil data unik untuk filter
        $kecamatans = Tower::select('kecamatan')->distinct()->pluck('kecamatan');
        $cities = Tower::select('city')->distinct()->pluck('city');

        return view('user.dashboard', compact('towers', 'kecamatans', 'cities'));
    }

    public function show($id)
    {
        $tower = Tower::findOrFail($id);

        return view('user.tower.detail', compact('tower'));
    }
}
