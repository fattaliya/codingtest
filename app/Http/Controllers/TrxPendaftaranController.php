<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\TrxPendaftaran;

class TrxPendaftaranController extends Controller
{
    // Menampilkan daftar pendaftaran
    public function index()
    {
        $pendaftaran = TrxPendaftaran::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    // Menampilkan formulir pendaftaran
    public function create()
    {
        return view('pendaftaran.create');
    }

    // Menyimpan data pendaftaran yang baru
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh pengguna
        $request->validate([
            'waktu_registrasi' => 'required|date',
            'no_registrasi' => 'required|string',
            'no_rekam_medis' => 'required|string',
            'nama_pasien' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_registrasi' => 'required|string',
            'jenis_layanan' => 'required|string',
            'jenis_pembayaran' => 'required|string',
            'status_registrasi' => 'required|string',
            'waktu_mulai_pelayanan' => 'nullable|date',
            'waktu_selesai_pelayanan' => 'nullable|date',
            'petugas_pendaftaran' => 'required|string',
        ]);

        // Simpan data pendaftaran baru ke dalam database
        TrxPendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }

    // Menampilkan formulir edit pendaftaran
    public function edit($id)
    {
        $pendaftaran = TrxPendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    // Memperbarui data pendaftaran yang ada
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh pengguna
        $request->validate([
            'waktu_registrasi' => 'required|date',
            'no_registrasi' => 'required|string',
            'no_rekam_medis' => 'required|string',
            'nama_pasien' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_registrasi' => 'required|string',
            'jenis_layanan' => 'required|string',
            'jenis_pembayaran' => 'required|string',
            'status_registrasi' => 'required|string',
            'waktu_mulai_pelayanan' => 'nullable|date',
            'waktu_selesai_pelayanan' => 'nullable|date',
            'petugas_pendaftaran' => 'required|string',
        ]);

        // Temukan data pendaftaran berdasarkan ID dan perbarui informasinya
        $pendaftaran = TrxPendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    // Menghapus data pendaftaran
    public function destroy($id)
    {
        $pendaftaran = TrxPendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }

    public function pdf()
{
    $data = TrxPendaftaran::all();
    $pdf = 'laporan_pendaftaran_' . date('YmdHis') . '.pdf'; // Menggunakan timestamp sebagai bagian dari nama file
    $pdf = PDF::loadView('pendaftaran.pdf', compact('data'));
    return $pdf->download($pdf);
}


    public function show($id)
{
    // Temukan data pendaftaran berdasarkan ID
    $pendaftaran = TrxPendaftaran::findOrFail($id);

    // Tampilkan tampilan Blade untuk menampilkan detail pendaftaran
    return view('pendaftaran.show', compact('pendaftaran'));
}

}
