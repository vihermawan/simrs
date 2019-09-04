<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pasien', function (Blueprint $table) {
            $table->bigIncrements('id_pasien');
            $table->string('nama_pasien');
            $table->dateTime('tanggal_kunjungan');
            $table->dateTime('jam');
            $table->string('id_rolepasien');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('pendidikan');
            $table->string('asuransi');
            $table->string('tempat_lahir');
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
        Schema::dropIfExists('table_pasien');
    }
}
