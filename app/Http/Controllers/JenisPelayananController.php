<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPelayanan; // Sesuaikan dengan nama model Anda

class JenisPelayananController extends Controller
{
    public function index()
    {
        $jenisPelayanan = JenisPelayanan::all();
        return view('jenis_pelayanan.index', compact('jenisPelayanan'));
    }

    public function create()
    {
        return view('jenis_pelayanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        JenisPelayanan::create([
            'nama' => $request->input('nama'),
        ]);

        return redirect()->route('jenis-pelayanan.index')->with('success', 'Jenis Pelayanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jenisPelayanan = JenisPelayanan::findOrFail($id);
        return view('jenis_pelayanan.edit', compact('jenisPelayanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $jenisPelayanan = JenisPelayanan::findOrFail($id);
        $jenisPelayanan->update([
            'nama' => $request->input('nama'),
        ]);

        return redirect()->route('jenis-pelayanan.index')->with('success', 'Jenis Pelayanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jenisPelayanan = JenisPelayanan::findOrFail($id);
        $jenisPelayanan->delete();

        return redirect()->route('jenis-pelayanan.index')->with('success', 'Jenis Pelayanan berhasil dihapus.');
    }
}
