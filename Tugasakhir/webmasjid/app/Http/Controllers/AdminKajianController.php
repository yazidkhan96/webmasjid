<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKajianController extends Controller
{
    public function jadwalkajian()
    {
        return view ('admin.jadwalkajian');
    }

    public function perencanaan_kajian()
    {
        return view ('admin.perencanaan_kajian');
    }
    public function request_kajian()
    {
        return view ('admin.request_kajian');
    }

    public function addjadwalkajian()
    {
        return view ('admin.add_jadwal_kajian');
    }

     public function addperencanaankajian()
    {
        return view ('admin.add_perencanaan_kajian');
    }

}
