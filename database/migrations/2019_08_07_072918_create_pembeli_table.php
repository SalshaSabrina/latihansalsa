<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembeli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pembeli_no_ktp',10);
            $table->string('pembeli_nama');
            $table->string('pembeli_alamat');
            $table->integer('pembeli_telepon');
            $table->integer('pembeli_Hp');
            $table->timestamps();
            $table->primary('pembeli_no_ktp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pembeli');
    }
}
