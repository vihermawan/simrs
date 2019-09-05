<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRawatJalan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_jalan', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_pemeriksaan')->references('id')->on('pemeriksaan');
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
