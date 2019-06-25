<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masjid;
class AdminMasjidController extends Controller
{

	public function masjid()
    {
        return view ('admin.masjid');
    }
    public function addprofilemasjid()
    {
        return view ('admin.add_profile_masjid');
    }

    public function uploadmasjid(Request $r)
    {
    	$masjid=new Masjid();
    	$masjid->nama_masjid=$r->namamasjid;
    	$masjid->alamat_masjid=$r->alamatmasjid;
    	$masjid->tahun_beridiri=$r->tahunberdiri;
    	$masjid->gambar=$this->save_foto($r->gambar,'Masjid');
    	$masjid->deskripsi=$r->deskripsi;
    	$masjid->save();
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
}
