<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_guru', function (Blueprint $table) {
            $table->char('NIP', 50)->primary();
            $table->char('kode_pangkat', 15);
            $table->foreign('kode_pangkat')->references('kode_pangkat')->on('tb_kepangkatan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password', 255);
            $table->integer('role', 15);
            $table->timestamp('last_access');
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
