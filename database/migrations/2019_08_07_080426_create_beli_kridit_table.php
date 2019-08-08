<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliKriditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Beli_Kridit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kridit_kode');
            $table->unsignedBigInteger('pembeli_no_ktp');
            $table->foreign('pembeli_no_ktp')->references('id')->on('Pembeli')->onDelete('CASCADE');
            $table->unsignedBigInteger('paket_kode');
            $table->foreign('paket_kode')->references('id')->on('Kridit_Paket')->onDelete('CASCADE');
            $table->unsignedBigInteger('motor_kode');
            $table->foreign('motor_kode')->references('id')->on('Motor')->onDelete('CASCADE');  
            $table->date('kridit_tanggal');
            $table->boolean('fotocopy_KTP');
            $table->boolean('fotocopy_KK');
            $table->boolean('fotocopy_slip_gaji');
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
        Schema::dropIfExists('Beli_Kridit');
    }
}
