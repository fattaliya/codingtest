@extends('layouts.app') {{-- Anda perlu mengganti 'layouts.app' sesuai dengan layout yang digunakan di proyek Anda --}}

@section('content')
<div class="container">
    <h1>Daftar Pendaftaran Pasien</h1>

    <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah</a>
    <!-- Tambahkan ini untuk tombol cetak PDF -->
    <a href="{{ route('pendaftaran.pdf') }}" class="btn btn-primary">Cetak PDF</a>

    <table class="table">
        <thead>
            <tr>
                <th>Waktu Registrasi</th>
                <th>No. Registrasi</th>
                <th>No. Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Registrasi</th>
                <th>Jenis Layanan</th>
                <th>Jenis Pembayaran</th>
                <th>Status Registrasi</th>
                {{-- <th>Waktu Registrasi</th> --}}
                <th>Waktu Mulai Pelayanan</th>
                <th>Waktu Pelayanan</th>
                <th>Petugas Pendaftaran</th>
                <th>Aksi</th> {{-- Kolom untuk aksi seperti Edit dan Hapus --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->waktu_registrasi }}</td>
                <td>{{ $pendaftaran->no_registrasi }}</td>
                <td>{{ $pendaftaran->no_rekam_medis }}</td>
                <td>{{ $pendaftaran->nama_pasien }}</td>
                <td>{{ $pendaftaran->jenis_kelamin }}</td>
                <td>{{ $pendaftaran->tanggal_lahir }}</td>
                <td>{{ $pendaftaran->jenis_registrasi }}</td>
                <td>{{ $pendaftaran->jenis_layanan }}</td>
                <td>{{ $pendaftaran->jenis_pembayaran }}</td>
                <td>{{ $pendaftaran->status_registrasi }}</td>
                {{-- <td>{{ $pendaftaran->waktu_registrasi }}</td> --}}
                <td>{{ $pendaftaran->waktu_mulai_pelayanan }}</td>
                <td>{{ $pendaftaran->waktu_selesai_pelayanan }}</td>
                <td>{{ $pendaftaran->petugas_pendaftaran }}</td>
                <td>
                    <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn btn-primary">Edit</a>
                    {{-- Tambahkan tombol Hapus dengan form di sini --}}
                    <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
