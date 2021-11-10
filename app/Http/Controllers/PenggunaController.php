<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use GuzzleHttp\Psr7\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'nik' => 'required|unique:tb_pengguna_air,nik|min:16|max:16',
            'nama_lengkap' => 'required',
            'nomer_hp' => 'required|min:12|max:13',
            'jenis_kelamin' => 'required',
            'alamat_pengguna' => 'required',
            'status_pengguna' => 'required',
        ], [
            'nik.required' => 'NIK wajib diisi !!',
            'nik. ' => 'NIK sudah terdaftar !!',
            'nik.min' => 'Masukan NIK 16 Karakter !!',
            'nik.max' => 'Masukan NIK max 16 Karakter !!',
            'nama_lengkap.required' => 'Nama wajib diisi !!',
            'nomer_hp.required' => 'Nomer HP wajib diisi !!',
            'nomer_hp.min' => 'nomer hp minimal 11 karakter',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !!',
            'alamat_pengguna.required' => 'Alamat Pengguna wajib diisi !!',
            'status_penggguna.required' => 'Status Penggun awajib diisi !!',

        ]);

        $dataPengguna = [
            'nik' => Request()->nik,
            'nama_lengkap' => Request()->nama_lengkap,
            'nomer_hp' => Request()->nomer_hp,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'status_pengguna' => Request()->status_pengguna,
            'alamat_pengguna' => Request()->alamat_pengguna,

        ];

        $this->Pengguna->addDataPengguna($dataPengguna);

        Alert::success('Sukses', 'Data Berhasil ditambahkan');

        return \redirect()->route('insert');

        // return \view('admin/pengguna_air/v_pengguna_air');
    }

}