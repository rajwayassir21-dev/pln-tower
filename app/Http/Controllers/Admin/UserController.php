<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.user.index', compact('users'));
    }

    // Form tambah user
    public function create()
    {
        return view('admin.user.create');
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'id_login' => 'required|string|unique:users,id_login',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:3',
        ]);

        User::create([
            'id_login' => $request->id_login,
            'name' => $request->name,
            'password' => $request->password, // Laravel auto-hash karena $casts
            'role' => 'user',
        ]);

        return redirect()->route('admin.user.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    // Form edit user
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    // Update user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'id_login' => 'required|string|unique:users,id_login,' . $user->id,
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:3',
        ]);

        $user->id_login = $request->id_login;
        $user->name = $request->name;
        if ($request->password) {
            $user->password = $request->password; // auto-hash
        }
        $user->save();

        return redirect()->route('admin.user.index')
            ->with('success', 'User berhasil diperbarui');
    }

    // Hapus user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')
            ->with('success', 'User berhasil dihapus');
    }
}
