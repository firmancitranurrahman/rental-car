<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->string('no_sewa');
            $table->string('tgl_sewa')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->unsignedBigInteger('mobil')->nullable();
            $table->foreign('mobil')->references('id')->on('mobils')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('penyewaans');
    }
}
