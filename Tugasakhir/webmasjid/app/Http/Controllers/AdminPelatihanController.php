<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelatihan;
use App\Perencanaan_kajian_pelatihan;
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


     public function addpelatihan(Request $r)
    {
        $pelatihan=new Pelatihan();
        $pelatihan->judul_pelatihan=$r->judulpelatihan;
        $pelatihan->masjid_id=$r->namamasjid;
        $pelatihan->tanggal_pelatihan=$r->namamasjid;
        $pelatihan->nama_pemateri=$r->namapemateri;
        $pelatihan->nohp=$r->nomorhandphone;
        $pelatihan->gambar=$this->save_foto($r->gambar,'Pelatihan');
        $pelatihan->deskripsi=$r->deskripsi;
        $pelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }


     public function save_foto($img,$folder)
    {
        $uniqid=uniqid();
      if (count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/'.$folder.'/'.$uniqid.'.'.$ext;
          $success = file_put_contents($file, $data);
          return $uniqid.'.'.$ext;
      }else{
          return 'default.jpg';
      }
    }

    public function delete_foto($img,$folder)
    {
      $image_path = public_path().'/images/'.$folder.'/'.$img->name;
      if ($img->name!="default.jpg") {
          if(File::exists($image_path)){ 
              unlink($image_path);
              $img->delete();
          }
      }
    }



    public function uploadpelatihan(Request $r)
    {
        $perencanaanpelatihan=new Perencanaan_kajian_pelatihan();
        $perencanaanpelatihan->pengurus_id=$r->pengurus;
        $perencanaanpelatihan->tanggal_pelaksaan=$r->Tanggalpelaksanaan;
        $perencanaanpelatihan->lokasi=$r->lokasikajian;
        $perencanaanpelatihan->ustadz=$r->namaustadz;
        $perencanaanpelatihan->biaya_pelaksaan=$r->deskripsi;
        $perencanaanpelatihan->judul_perencanaan=$r->judulperencanaan;
        $perencanaanpelatihan->nohp=$r->nomorhandphone;
        $perencanaanpelatihan->jenis_perencanaan=$r->jenisperencanaan;
        $perencanaanpelatihan->save();
        return response()->json(['data'=>$r->all()]);
    }

}   
