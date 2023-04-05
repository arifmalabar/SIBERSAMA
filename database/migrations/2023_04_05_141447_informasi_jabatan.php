<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformasiJabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_informasi', function (Blueprint $table) {
            $table->char('kd_jabatan', 10);
            $table->foreign('kd_jabatan')->references('kd_jabatan')->on('tb_jabatan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_informasi', function (Blueprint $table) {
            //
        });
    }
}
