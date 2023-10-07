<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pendaftaran Pasien</title>
    <style>
        /* Atur gaya tampilan untuk PDF di sini */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Pendaftaran Pasien</h1>

    <table>
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
                <th>Waktu Mulai Pelayanan</th>
                <th>Waktu Pelayanan</th>
                <th>Petugas Pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftaran as $data)
                <tr>
                    <td>{{ $data->waktu_registrasi }}</td>
                    <td>{{ $data->no_registrasi }}</td>
                    <td>{{ $data->no_rekam_medis }}</td>
                    <td>{{ $data->nama_pasien }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->jenis_registrasi }}</td>
                    <td>{{ $data->jenis_layanan }}</td>
                    <td>{{ $data->jenis_pembayaran }}</td>
                    <td>{{ $data->status_registrasi }}</td>
                    <td>{{ $data->waktu_mulai_pelayanan }}</td>
                    <td>{{ $data->waktu_selesai_pelayanan }}</td>
                    <td>{{ $data->petugas_pendaftaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
