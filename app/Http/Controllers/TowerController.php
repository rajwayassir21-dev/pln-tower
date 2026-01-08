<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index(Request $request)
    {
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
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('description', 'like', "%$search%")
                    ->orWhere('no_surat', 'like', "%$search%")
                    ->orWhere('no_sertipikat', 'like', "%$search%");
            });
        }

        $towers = $query->paginate(10)->withQueryString();

        $kecamatans = Tower::select('kecamatan')
            ->whereNotNull('kecamatan')
            ->distinct()
            ->pluck('kecamatan');

        $cities = Tower::select('city')
            ->whereNotNull('city')
            ->distinct()
            ->pluck('city');

        return view('admin.tower.index', compact(
            'towers',
            'kecamatans',
            'cities'
        ));
    }

    public function create()
    {
        return view('admin.tower.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'lokasi' => 'required',
            'status_sertifikat' => 'required|in:bersertifikat,belum',
            'luas' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'kelurahan' => 'nullable',
            'kecamatan' => 'nullable',
            'city' => 'nullable',
            'tgl_awal' => 'nullable|date',
            'tgl_akhir' => 'nullable|date',
        ]);

        Tower::create($validated);

        return redirect()
            ->route('admin.tower.index')
            ->with('success', 'Data tower berhasil ditambahkan');
    }

    public function edit(Tower $tower)
    {
        return view('admin.tower.edit', compact('tower'));
    }

    public function update(Request $request, Tower $tower)
    {
        $request->validate([
            'description' => 'required',
            'lokasi' => 'required',
            'status_sertifikat' => 'required|in:bersertifikat,belum',
            'luas' => 'nullable',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'no_surat' => 'nullable',
            'no_sertipikat' => 'nullable',
            'kelurahan' => 'nullable',
            'kecamatan' => 'nullable',
            'city' => 'nullable',
            'tgl_awal' => 'nullable|date',
            'tgl_akhir' => 'nullable|date',
        ]);

        $tower->update($request->all());

        return redirect()
            ->route('admin.tower.index')
            ->with('success', 'Data tower berhasil diupdate');
    }

    public function destroy(Tower $tower)
    {
        $tower->delete();

        return redirect()
            ->route('admin.tower.index')
            ->with('success', 'Data tower berhasil dihapus');
    }
}
