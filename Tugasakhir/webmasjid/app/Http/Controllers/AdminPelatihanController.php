<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPelatihanController extends Controller
{
    public function jadwalpelatihan()
    {
        return view ('admin.jadwalpelatihan');
    }
    public function perencanaanpelatihan()
    {
        return view ('admin.perencanaan_pelatihan');
    }
    public function addjadwalpelatihan()
    {
        return view ('admin.add_jadwal_pelatihan');
    }
    public function requestpelatihan()
    {
        return view ('admin.request_pelatihan');
    }
    public function daftarpesertapelatihan()
    {
        return view ('admin.daftar_peserta_pelatihan');
    }

    public function addperencanaanpelatihan()
    {
        return view ('admin.add_perencanaan_pelatihan');
    }

}   
