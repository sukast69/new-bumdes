<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenggunaAir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengguna_air', function (Blueprint $table) {
            $table->id('id_pengguna');
            
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('nomer_hp');
            $table->boolean('jenis_kelamin');
            $table->boolean('status_pengguna');
            $table->string('alamat_pengguna');
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
        Schema::dropIfExists('tb_pengguna_air');
    }
}