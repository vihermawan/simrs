<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyDaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daftar', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->foreign('id_poli')->references('id')->on('poli');
            $table->foreign('id_role_pembayaran')->references('id')->on('role_pembayaran');
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
