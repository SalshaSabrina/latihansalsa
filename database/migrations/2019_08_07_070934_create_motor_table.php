<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motor_kode');
            $table->string('motor_merk');
            $table->string('motor_type');
            $table->string('motor_warna_pilihan');
            $table->double('motor_harga');
            $table->binary('motor_gambar');
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
        Schema::dropIfExists('Motor');
    }
}
