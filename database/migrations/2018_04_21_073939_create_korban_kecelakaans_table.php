<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKorbanKecelakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korban_kecelakaans', function (Blueprint $table) {
            $table->unsignedInteger('no_ktp');
            $table->unsignedInteger('id_kecelakaan');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('kondisi');
            $table->timestamps();

            $table->primary('no_ktp');
            $table->foreign('id_kecelakaan')->references('id')->on('kecelakaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korban_kecelakaans');
    }
}
