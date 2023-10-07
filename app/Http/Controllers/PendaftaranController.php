<?php

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'waktu_registrasi' => 'required',
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_registrasi' => 'required',
            'layanan' => 'required',
            'jenis_pembayaran' => 'required',
            'status_registrasi' => 'required',
            'waktu_mulai_pelayanan' => 'required',
            'waktu_selesai_pelayanan' => 'required',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index');
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_registrasi' => 'required',
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_registrasi' => 'required',
            'layanan' => 'required',
            'jenis_pembayaran' => 'required',
            'status_registrasi' => 'required',
            'waktu_mulai_pelayanan' => 'required',
            'waktu_selesai_pelayanan' => 'required',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index');
    }
}
