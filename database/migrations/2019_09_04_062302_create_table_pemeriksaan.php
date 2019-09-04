<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemeriksaan', function (Blueprint $table) {
            $table->bigIncrements('id_pemeriksaan');
            $table->Increments('id_pasien');
            $table->Increments('id_user');
            $table->Increments('id_poli');
            $table->Increments('id_resep');
            $table->timestamps('id_tindakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pemeriksaan');
    }
}
