<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRawatInap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_rawat_inap', function (Blueprint $table) {
            $table->bigIncrements('id_rawat_inap');
            $table->integer('id_pasien');
            $table->integer('id_user');
            $table->dateTime('tanggal_masuk');
            $table->dateTime('tanggal_keluar');
            $table->integer('id_ruang'); 
            $table->integer('id_pemeriksaan');  
            $table->integer('id_periksaharian');  
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
        Schema::dropIfExists('table_rawat_inap');
    }
}
