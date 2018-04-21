<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasKecelakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_kecelakaans', function (Blueprint $table) {
            $table->unsignedInteger('id_petugas');
            $table->unsignedInteger('id_kecelakaan');
            $table->string('status');

            $table->foreign('id_petugas')->references('id')->on('users');
            $table->foreign('id_kecelakaan')->references('id')->on('kecelakaans');
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
        Schema::dropIfExists('petugas_kecelakaans');
    }
}
