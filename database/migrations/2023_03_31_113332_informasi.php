<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_informasi', function (Blueprint $table) {
            $table->bigIncrements('id_informasi');
            $table->string('judul');
            $table->text('deskripsi');
            $table->timeTz('tanggal_posting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('tb_informasi', function (Blueprint $table) {
            //
        });*/
    }
}
