<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRawatInap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_inap', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_ruang')->references('id')->on('ruang');
            $table->foreign('id_pemeriksaan')->references('id')->on('pemeriksaan');
            $table->foreign('id_periksaharian')->references('id')->on('pemeriksaan_harian');
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
