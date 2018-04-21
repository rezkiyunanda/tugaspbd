<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
             $table->unsignedInteger('no_plat');               
            $table->unsignedInteger('id_kecelakaan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('umur');
            $table->string('sim');
            $table->string('status_disita');
            $table->string('id_merk');
            $table->string('kondisi_kendaraan');
            $table->string('jenis_kendaraan');
            $table->string('status_kerugian');
            $table->integer('no_reg_bb');
            $table->integer('kerugian');
            $table->string('status_1');
            $table->timestamps();

            $table->primary('no_plat');
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
        Schema::dropIfExists('kendaraans');
    }
}
