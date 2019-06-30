<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal_kajian;
use App\Perencanaan_kajian_pelatihan;

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

    public function addkajian(Request $r)
    {
        $jadwalkajian =new Jadwal_kajian();
        $jadwalkajian->tema_kajian=$r->temakajian;
        $jadwalkajian->masjid_id=$r->namamasjid;
        $jadwalkajian->nama_ustadz=$r->namaustadz;
        $jadwalkajian->tanggal_kajian=$r->tanggalkajian;
        $jadwalkajian->bulan_kajian=$r->bulankajian;
        $jadwalkajian->waktu_kajian=$r->waktukajian;
        $jadwalkajian->lokasi=$r->lokasikajian;
        $jadwalkajian->save();
        return response()->json(['data'=>$r->all()]);
    }


     public function perencanaankajian(Request $r)
    {
        $perencanaankajian=new Perencanaan_kajian_pelatihan();
        $perencanaankajian->pengurus_id=$r->pengurus;
        $perencanaankajian->tanggal_pelaksaan=$r->Tanggalpelaksanaan;
        $perencanaankajian->lokasi=$r->lokasikajian;
        $perencanaankajian->ustadz=$r->namaustadz;
        $perencanaankajian->biaya_pelaksaan=$r->deskripsi;
        $perencanaankajian->judul_perencanaan=$r->judulperencanaan;
        $perencanaankajian->nohp=$r->nomorhandphone;
        $perencanaankajian->jenis_perencanaan=$r->jenisperencanaan;
        $perencanaankajian->save();
        return response()->json(['data'=>$r->all()]);
    }

}
