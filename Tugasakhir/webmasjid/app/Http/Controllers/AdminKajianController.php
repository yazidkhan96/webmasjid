<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal_kajian;
use App\Perencanaan_kajian_pelatihan;
use App\Request_kajian_pelatihan;
use Action;
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


     public function editperencanaankajian($id)
    {
        $perencanaankajian=Perencanaan_kajian_pelatihan::find($id);
        return view ('admin.edit_perencanaan_kajian',compact('perencanaankajian'));
    }
    public function editkajian($id)
    {
        $jadwalkajian=Jadwal_kajian::find($id);
        return view ('admin.edit_jadwal_kajian',compact('jadwalkajian'));
    }

     public function deleteperencanaankajian($id)
    {
        $perencanaankajian=Perencanaan_kajian_pelatihan::find($id);
        $perencanaankajian->delete();
        return back ();
    }
    public function deletekajian($id)
    {
        $jadwalkajian=Jadwal_kajian::find($id);
        $jadwalkajian->delete();
        return back ();
    }

    public function addkajian(Request $r)
    {
        $jadwalkajian =new Jadwal_kajian();
        $jadwalkajian->tema_kajian=$r->temakajian;
        $jadwalkajian->masjid_id=$r->namamasjid;
        $jadwalkajian->nama_ustadz=$r->namaustadz;
        $jadwalkajian->tanggal_kajian=$r->tanggalkajian;
        $jadwalkajian->waktu_kajian=$r->waktukajian;
        $jadwalkajian->lokasi=$r->lokasikajian;
        $jadwalkajian->save();
        return response()->json(['data'=>$r->all()]);
    }
    public function updatejadwalkajian(Request $r,$id)
    {
      $jadwalkajian=Jadwal_kajian::find($id);
      $jadwalkajian->tema_kajian=$r->temakajian;
      $jadwalkajian->masjid_id=$r->namamasjid;
      $jadwalkajian->nama_ustadz=$r->namaustadz;
      $jadwalkajian->tanggal_kajian=$r->tanggalkajian;
      $jadwalkajian->waktu_kajian=$r->waktukajian;
      $jadwalkajian->lokasi=$r->lokasikajian;
      $jadwalkajian->save();
      return response()->json(['data'=>$r->all()]);
    }


     public function perencanaankajian(Request $r)
    {
        $perencanaankajian=new Perencanaan_kajian_pelatihan();
        $perencanaankajian->user_id=$r->user;
        $perencanaankajian->tanggal_pelaksanaan=$r->Tanggalpelaksanaan;
        $perencanaankajian->lokasi=$r->lokasikajian;
        $perencanaankajian->ustadz=$r->namaustadz;
        $perencanaankajian->biaya_pelaksanaan=$r->deskripsi;
        $perencanaankajian->judul_perencanaan=$r->judulperencanaan;
        $perencanaankajian->nohp=$r->nomorhandphone;
        $perencanaankajian->jenis_perencanaan=$r->jenisperencanaan;
        $perencanaankajian->save();
        return response()->json(['data'=>$r->all()]);
    }


    public function updatekajian(Request $r,$id)
    {
      $perencanaankajian=Perencanaan_kajian_pelatihan::find($id);
      $perencanaankajian->user_id=$r->user;
      $perencanaankajian->tanggal_pelaksanaan=$r->Tanggalpelaksanaan;
      $perencanaankajian->lokasi=$r->lokasikajian;
      $perencanaankajian->biaya_pelaksanaan=$r->deskripsi;
      $perencanaankajian->judul_perencanaan=$r->judulperencanaan;
      $perencanaankajian->nohp=$r->nomorhandphone;
      $perencanaankajian->jenis_perencanaan=$r->jenisperencanaan;
      $perencanaankajian->save();
      return response()->json(['data'=>$r->all()]);
    }

    public function uploadreqkajian(Request $r)
    {
        $reqpelatihan=new Request_kajian_pelatihan();
        $reqpelatihan->nama_pengunjung=$r->namaanda;
        $reqpelatihan->lokasi=$r->lokasi;
        $reqpelatihan->email=$r->Email;
        $reqpelatihan->nohp=$r->nohp;
        $reqpelatihan->jenis_request=$r->jenisrequest;
        $reqpelatihan->nama_pemateri=$r->namaustadz;
        $reqpelatihan->deskripsi=$r->deskripsi;
        $reqpelatihan->tanggal_pelaksanaan=date('d',strtotime($r->tanggalpelaksanaan));
        $reqpelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }
    public function verifrequest($id)
    {
        $request=Request_kajian_pelatihan::find($id);
        $mail=Action::sendEmail($request->nama_pengunjung,'request anda telah menjadi perencanaan','Request Di Terima',$request->email);
        return back();        
    }

}
