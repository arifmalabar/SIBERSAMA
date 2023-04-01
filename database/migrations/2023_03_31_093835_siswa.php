<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->char('NISN', 20)->primary();
            $table->unsignedBigInteger('kode_kelas');
            $table->foreign('kode_kelas')->references('kode_kelas')->on('tb_kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_siswa');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('username')->unique();
            $table->string('password', 255);
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
