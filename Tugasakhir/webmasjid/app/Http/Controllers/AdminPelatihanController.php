<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelatihan;
use App\Perencanaan_kajian_pelatihan;
use App\Request_kajian_pelatihan;
use App\Peserta_pelatihan;
use Action;
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

    public function editperencanaanpelatihan($id)
    {
        $perencanaanpelatihan=Perencanaan_kajian_pelatihan::find($id);
        return view ('admin.edit_perencanaan_pelatihan',compact('perencanaanpelatihan'));
    }

     public function editpelatihan($id)
    {
        $pelatihan=Pelatihan::find($id);
        return view ('admin.edit_jadwal_pelatihan',compact('pelatihan'));
    }


     public function deleteperencanaanpelatihan($id)
    {
        $perencanaanpelatihan=Perencanaan_kajian_pelatihan::find($id);
        $perencanaanpelatihan->delete();
        return back ();
    }

     public function deletepelatihan($id)
    {
        $pelatihan=Pelatihan::find($id);
        Action::delete_foto($pelatihan->gambar,'Pelatihan');
        $pelatihan->delete();
        return back ();
    }


    public function uploadpelatihan(Request $r)
    {
        $perencanaanpelatihan=new Perencanaan_kajian_pelatihan();
        $perencanaanpelatihan->user_id=$r->user;
        $perencanaanpelatihan->tanggal_pelaksanaan=date('d',strtotime($r->Tanggalpelaksanaan));
        $perencanaanpelatihan->lokasi=$r->lokasikajian;
        $perencanaanpelatihan->ustadz=$r->namaustadz;
        $perencanaanpelatihan->biaya_pelaksanaan=$r->deskripsi;
        $perencanaanpelatihan->judul_perencanaan=$r->judulperencanaan;
        $perencanaanpelatihan->nohp=$r->nomorhandphone;
        $perencanaanpelatihan->jenis_perencanaan=$r->jenisperencanaan;
        $perencanaanpelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }

    
    public function updatepelatihan(Request $r,$id)
    {
      $perencanaanpelatihan=Perencanaan_kajian_pelatihan::find($id);
      $perencanaanpelatihan->user_id=$r->user;
      $perencanaanpelatihan->tanggal_pelaksanaan=date('d',strtotime($r->Tanggalpelaksanaan));
      $perencanaanpelatihan->lokasi=$r->lokasikajian;
      $perencanaanpelatihan->biaya_pelaksanaan=$r->deskripsi;
      $perencanaanpelatihan->judul_perencanaan=$r->judulperencanaan;
      $perencanaanpelatihan->nohp=$r->nomorhandphone;
      $perencanaanpelatihan->jenis_perencanaan=$r->jenisperencanaan;
      $perencanaanpelatihan->save();
      return response()->json(['data'=>$r->all()]);
    }

     public function createjadwalpelatihan(Request $r)
    {
        $pelatihan=new Pelatihan();
        $pelatihan->judul_pelatihan=$r->judulpelatihan;
        $pelatihan->masjid_id=$r->namamasjid;
        $pelatihan->tanggal_pelatihan=date('d',strtotime($r->tanggalpelatihan));
        $pelatihan->nama_pemateri=$r->namapemateri;
        $pelatihan->nohp=$r->nomorhandphone;
        $pelatihan->gambar=Action::save_multiple_foto($r->gambar,'Pelatihan');
        $pelatihan->deskripsi=$r->deskripsi;
        $pelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }

    public function updatejadwalpelatihan(Request $r,$id)
    {
      $pelatihan=Pelatihan::find($id);
      $pelatihan->judul_pelatihan=$r->judulpelatihan;
      $pelatihan->tanggal_pelatihan=date('d',strtotime($r->tanggalpelatihan));
      $pelatihan->nama_pemateri=$r->namapemateri;
      $pelatihan->nohp=$r->nomorhandphone;
      $pelatihan->gambar=Action::update_multiple_foto($r->gambar,'Pelatihan',$pelatihan->gambar,$r->gambar_hapus);
      $pelatihan->deskripsi=$r->deskripsi;
      $pelatihan->save();
      return response()->json(['data'=>$r->all()]);
    }

    
    public function uploadreqpelatihan(Request $r)
    {
        $reqpelatihan=new Request_kajian_pelatihan();
        $reqpelatihan->nama_pengunjung=$r->namaanda;
        $reqpelatihan->lokasi=$r->lokasi;
        $reqpelatihan->email=$r->Email;
        $reqpelatihan->nohp=$r->nohp;
        $reqpelatihan->jenis_request=$r->lokasi;
        $reqpelatihan->nama_pemateri=$r->namaustadz;
        $reqpelatihan->deskripsi=$r->deskripsi;
        $reqpelatihan->tanggal_pelaksanaan=date('d',strtotime($r->tanggalpelaksanaan));
        $reqpelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }


    public function addpeserta(Request $r)
    {
        $pesertapelatihan=new Peserta_pelatihan();
        $pesertapelatihan->pelatihan_id=$r->jenispelatihan;
        $pesertapelatihan->nama_peserta=$r->nama;
        $pesertapelatihan->email=$r->email;
        $pesertapelatihan->nohp=$r->nohp;
        $pesertapelatihan->alamat_lengkap=$r->alamat;
        $pesertapelatihan->foto_data_diri=Action::save_foto($r->gambar,'Identitas');
        $pesertapelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }


}   
