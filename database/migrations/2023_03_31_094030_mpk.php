<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mpk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mpkosis', function (Blueprint $table) {
            $table->bigIncrements('kode_anggota');
            $table->char('NISN', 20);
            $table->foreign('NISN')->references('NISN')->on('tb_siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->year('tahun_periode_aktif');
            $table->year('tahun_periode_non');
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
