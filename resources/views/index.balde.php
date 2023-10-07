@extends('layouts.app')

@section('content')
    <h1>Data Pendaftaran</h1>
    <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah Pendaftaran</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu Registrasi</th>
                <th>No Rekam Medis</th>
                <th>Nama Pasien</th>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftarans as $pendaftaran)
                <tr>
                    <td>{{ $pendaftaran->id }}</td>
                    <td>{{ $pendaftaran->waktu_registrasi }}</td>
                    <td>{{ $pendaftaran->no_rekam_medis }}</td>
                    <td>{{ $pendaftaran->nama_pasien }}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                    <td>
                        <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn btn-warning">Edit</a>
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
@endsection
