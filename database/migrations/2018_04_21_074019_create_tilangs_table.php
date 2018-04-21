<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTilangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tilangs', function (Blueprint $table) {
             $table->unsignedInteger('no_tilang');
          $table->unsignedInteger('id_petugas');
          $table->unsignedInteger('no_sim');
          $table->unsignedInteger('no_stnk');
          $table->unsignedInteger('id_merek');
          $table->unsignedInteger('id_jenis_kendaraan');

          $table->string('nama_pelanggar');
          $table->string('keterangan');
          $table->unsignedInteger('no_plat');

          $table->timestamps();
          $table->primary('no_tilang');
          $table->foreign('id_petugas')->references('id')->on('users');
          $table->foreign('id_merek')->references('id')->on('merek_kendaraans');
          $table->foreign('id_jenis_kendaraan')->references('id')->on('jenis_kendaraans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tilangs');
    }
}
