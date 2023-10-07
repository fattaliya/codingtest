<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Pasien</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan untuk tampilan cetakan */
    </style>
</head>
<body>
    <h1>Data Pasien</h1>
    <table>
        <thead>
            <tr>
                <th>No Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPasien as $pasien)
            <tr>
                <td>{{ $pasien->no_rekam_medis }}</td>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->tanggal_lahir }}</td>
                <!-- Isi dengan data lainnya -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
