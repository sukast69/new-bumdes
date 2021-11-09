<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->Pengguna = new Pengguna();
    }

    public function index()
    {
        $data = [
            'pengguna_air' => $this->Pengguna->allData(),
        ];

        return view('admin/pengguna_air/v_pengguna_air', $data);
    }

    public function addDataPengguna()
    {
        Request()->validate([
            'nik' => 'required|unique:tb_pengguna_air,nik|min:16',
            'nama_lengkap' => 'required',
            'nomer_hp' => 'required|min:11',
            'jenis_kelamin' => 'required',
            'alamat_pengguna' => 'required',
            'status_pengguna' => 'required',
        ]);
        return \view('admin/pengguna_air/v_pengguna_air');
    }
    
}