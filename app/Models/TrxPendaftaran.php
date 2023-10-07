<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPendaftaran extends Model
{


    protected $fillable = [
        'waktu_registrasi',
        'no_registrasi',
        'no_rekam_medis',
        'nama_pasien',
        'jenis_kelamin',
        'tanggal_lahir',
        'jenis_registrasi',
        'jenis_layanan',
        'jenis_pembayaran',
        'status_registrasi',
        // 'waktu_registrasi',
        'waktu_mulai_pelayanan',
        'waktu_selesai_pelayanan',
        'petugas_pendaftaran',
    ];
}
