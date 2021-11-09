<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPemakaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemakaian', function (Blueprint $table) {
            $table->id('pemakaian');
            $table->bigInteger('id_tahun_master');
            $table->bigInteger('id_pengguna');
            $table->year('tahun_pemakaian', '4');
            $table->string('bulan_pemakaian', '12');
            $table->string('pemakaian_sebelumnya');
            $table->string('pemakaian_saat_ini');
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
        Schema::dropIfExists('tb_pemakaian');
    }
}