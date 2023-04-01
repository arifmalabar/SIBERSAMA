<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelanggaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelanggaran', function (Blueprint $table) {
            $table->bigIncrements('kode_pelanggaran');
            $table->char('NIP', 50);
            $table->unsignedBigInteger('kode_anggota');
            $table->char('NISN', 20);
            $table->unsignedBigInteger('kode_jenis_kriteria');
            $table->integer('semester');
            $table->foreign('NIP')->references('NIP')->on('tb_guru')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_anggota')->references('kode_anggota')->on('tb_mpkosis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('NISN')->references('NISN')->on('tb_siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_jenis_kriteria')->references('kode_jenis_kriteria')->on('tb_jenis_kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('semester')->references('semester')->on('tb_semester')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTimeTz('tanggal_pelanggaran', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
