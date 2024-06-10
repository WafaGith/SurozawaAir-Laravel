<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->id('id_pesawat');
            $table->string('nama_pesawat');
            $table->integer('kapasitas');
            $table->string('jenis_pesawat');
            $table->date('tanggal_pembuatan');
            $table->string('nomor_registrasi')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
