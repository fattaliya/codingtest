<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrxPendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('trx_pendaftaran', function (Blueprint $table) {
            $table->id();

            $table->timestamp('waktu_registrasi')->nullable();
            $table->string('no_registrasi', 50)->unique();
            $table->string('no_rekam_medis', 20);
            $table->string('nama_pasien', 255);
            $table->string('jenis_kelamin', 10);
            $table->date('tanggal_lahir');
            $table->string('jenis_registrasi', 255);
            $table->string('jenis_layanan', 255);
            $table->string('jenis_pembayaran', 255);
            $table->string('status_registrasi', 255);
            $table->timestamp('waktu_mulai_pelayanan')->nullable();
            $table->time('waktu_selesai_pelayanan')->nullable();
            $table->string('petugas_pendaftaran', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trx_pendaftaran');
    }
}
