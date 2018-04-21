<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggarans', function (Blueprint $table) {
          $table->unsignedInteger('no_tilang');
          $table->unsignedInteger('no_pasal');
          $table->timestamps();

          $table->foreign('no_tilang')->references('no_tilang')->on('tilangs');
          $table->foreign('no_pasal')->references('no_pasal')->on('pasals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggarans');
    }
}
