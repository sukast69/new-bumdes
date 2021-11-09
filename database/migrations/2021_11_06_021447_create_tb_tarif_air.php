<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTarifAir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tarif_air', function (Blueprint $table) {
            $table->id('id_tarif');
            $table->string('r_a_awal');
            $table->string('r_a_akhir');
            $table->string('r_a_biaya');
            $table->string('r_b_awal');
            $table->string('r_b_akhir');
            $table->string('r_b_biaya');
            $table->string('r_c_awal');
            $table->string('r_c_akhir');
            $table->string('r_c_biaya');
            $table->string('biaya_admin');
            $table->string('biaya_service');
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
        Schema::dropIfExists('tb_tarif_air');
    }
}