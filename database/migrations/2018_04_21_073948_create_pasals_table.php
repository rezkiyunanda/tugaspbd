<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasals', function (Blueprint $table) {
            $table->unsignedInteger('no_pasal')->primary();
            $table->string('nama_pasal');
            $table->string('bunyi_pasal');
            $table->string('jenis_pelanggaran');
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
        Schema::dropIfExists('pasals');
    }
}
