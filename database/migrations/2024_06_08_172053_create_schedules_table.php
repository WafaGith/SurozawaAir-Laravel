<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('id_schedule');
            $table->unsignedBigInteger('id_pesawat');
            $table->date('tanggal_keberangkatan');
            $table->string('waktu_keberangkatan');
            $table->string('bandara_asal');
            $table->string('bandara_tujuan');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_pesawat')->references('id_pesawat')->on('planes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
