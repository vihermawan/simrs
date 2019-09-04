<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRawatJalan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_rawat_jalan', function (Blueprint $table) {
            $table->bigIncrements('id_rawat_jalan');
            $table->integer('id_pasien');
            $table->integer('id_user');
            $table->dateTime('tanggal_keluar');
            $table->dateTime('tanggal_masuk');
            $table->integer('id_pemeriksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_rawat_jalan');
    }
}
