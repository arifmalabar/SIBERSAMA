<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JenisKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jenis_kriteria', function (Blueprint $table) {
            $table->bigIncrements('kode_jenis_kriteria');
            $table->unsignedBigInteger('kode_kriteria');
            $table->foreign('kode_kriteria')->references('kode_kriteria')->on('tb_kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jenis_kriteria');
            $table->integer('bobot_poin');
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
