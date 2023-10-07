@extends('layouts.app') {{-- Ganti 'layouts.app' dengan layout yang sesuai di proyek Anda --}}

@section('content')
<div class="container">
    <h1>Formulir Pendaftaran Pasien Baru</h1>

    <form method="POST" action="{{ route('pendaftaran.store') }}">
        @csrf <!-- Tambahkan ini untuk melindungi formulir dari serangan CSRF -->

        <!-- Field Waktu Registrasi -->
        <div class="form-group">
            <label for="waktu_registrasi">Waktu Registrasi</label>
            <input type="datetime-local" class="form-control" id="waktu_registrasi" name="waktu_registrasi" required>
        </div>

        <!-- Field No. Registrasi -->
        <div class="form-group">
            <label for="no_registrasi">No. Registrasi</label>
            <input type="text" class="form-control" id="no_registrasi" name="no_registrasi" required>
        </div>

        <!-- Field No. Rekam Medis -->
        <div class="form-group">
            <label for="no_rekam_medis">No. Rekam Medis</label>
            <input type="text" class="form-control" id="no_rekam_medis" name="no_rekam_medis" required>
        </div>

        <!-- Field Nama Pasien -->
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
        </div>

        <!-- Field Jenis Kelamin -->
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <!-- Field Tanggal Lahir -->
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <!-- Field Jenis Registrasi -->
        <div class="form-group">
            <label for="jenis_registrasi">Jenis Registrasi</label>
            <input type="text" class="form-control" id="jenis_registrasi" name="jenis_registrasi" required>
        </div>

        <!-- Field Jenis Layanan -->
        <div class="form-group">
            <label for="jenis_layanan">Jenis Layanan</label>
            <input type="text" class="form-control" id="jenis_layanan" name="jenis_layanan" required>
        </div>

        <!-- Field Jenis Pembayaran -->
        <div class="form-group">
            <label for="jenis_pembayaran">Jenis Pembayaran</label>
            <input type="text" class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
        </div>

        <!-- Field Status Registrasi -->
        <div class="form-group">
            <label for="status_registrasi">Status Registrasi</label>
            <input type="text" class="form-control" id="status_registrasi" name="status_registrasi" required>
        </div>

        <!-- Field Waktu Mulai Pelayanan -->
        <div class="form-group">
            <label for="waktu_mulai_pelayanan">Waktu Mulai Pelayanan</label>
            <input type="datetime-local" class="form-control" id="waktu_mulai_pelayanan" name="waktu_mulai_pelayanan">
        </div>

        <!-- Field Waktu Selesai Pelayanan -->
        <div class="form-group">
            <label for="waktu_selesai_pelayanan">Waktu Selesai Pelayanan</label>
            <input type="time" class="form-control" id="waktu_selesai_pelayanan" name="waktu_selesai_pelayanan">
        </div>

        <!-- Field Petugas Pendaftaran -->
        <div class="form-group">
            <label for="petugas_pendaftaran">Petugas Pendaftaran</label>
            <input type="text" class="form-control" id="petugas_pendaftaran" name="petugas_pendaftaran" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
