<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemeriksaan', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_poli')->references('id')->on('poli');
            $table->foreign('id_resep')->references('id')->on('resep');
            $table->foreign('id_tindakan')->references('id')->on('tindakan');
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
