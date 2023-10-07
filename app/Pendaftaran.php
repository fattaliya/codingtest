<?php

namespace App;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('waktu_registrasi');
            $table->string('no_rekam_medis');
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('jenis_registrasi');
            $table->string('layanan');
            $table->string('jenis_pembayaran');
            $table->string('status_registrasi');
            $table->time('waktu_mulai_pelayanan');
            $table->time('waktu_selesai_pelayanan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
