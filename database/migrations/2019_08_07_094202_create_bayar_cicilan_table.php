<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarCicilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bayar_Cicilan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cicilan_kode');
            $table->unsignedBigInteger('kridit_kode');
            $table->foreign('kridit_kode')->references('id')->on('Beli_Kridit')->onDelete('CASCADE');
            $table->date('cicilan_tanggal');
            $table->integer('cicilan_jumlah');
            $table->integer('cicilan_ke');
            $table->integer('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
        Schema::dropIfExists('Bayar_Cicilan');
    }
}
