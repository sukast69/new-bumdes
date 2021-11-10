<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{

    public function allData()
    {
        return DB::table('tb_pengguna_air')->get();
    }

    public function addDataPengguna($dataPengguna)
    {
        return DB::table('tb_pengguna_air')->insert($dataPengguna);
    }
}