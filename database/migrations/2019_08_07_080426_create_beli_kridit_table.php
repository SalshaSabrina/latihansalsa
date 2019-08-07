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
            $table->string('kridit_kode',10);
            $table->foreign('pembeli_no_ktp')->references('pembeli_no_ktp')->on('Pembeli')->onDelete('cascade');
            $table->foreign('paket_kode')->references('paket_kode')->on('Kridit_Paket')->onDelete('cascade');
            $table->foreign('motor_kode')->references('motor_kode')->on('Motor')->onDelete('cascade');  
            $table->date('kridit_tanggal');
            $table->boolean('fotocopy_KTP');
            $table->boolean('fotocopy_KK');
            $table->boolean('fotocopy_slip_gaji');
            $table->timestamps();
            $table->primary('kridit_kode');
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
