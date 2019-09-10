<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_akses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_role')->unsigned()->default(1);
            $table->bigInteger('id_menu')->unsigned()->default(0);
            $table->string('aksi')->nullable();
            $table->bigInteger('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usee_akses');
    }
}
