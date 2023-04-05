<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KepangkatanGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_guru', function (Blueprint $table) {
            $table->char('kode_pangkat', 15);
            $table->foreign('kode_pangkat')->references('kode_pangkat')->on('tb_kepangkatan')->onUpdate('cascade')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_guru', function (Blueprint $table) {
            //
        });
    }
}
