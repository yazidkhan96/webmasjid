<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masjid;
use File;
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

  public function editprofilemasjid($id)
    {
        $masjid=Masjid::find($id);
        return view ('admin.edit_profile_masjid',compact('masjid'));
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

      public function updatemasjid(Request $r,$id)
    {
      $masjid=Masjid::find($id);
      $masjid->nama_masjid=$r->namamasjid;
      $masjid->alamat_masjid=$r->alamatmasjid;
      $masjid->tahun_beridiri=$r->tahunberdiri;
      $masjid->gambar=$this->update_foto($r->gambar,'Masjid',$masjid->gambar);
      $masjid->deskripsi=$r->deskripsi;
      $masjid->save();
      return response()->json(['data'=>$r->all()]);
    }

      public function deleteprofilemasjid($id)
    {
        $masjid=Masjid::find($id);
        $this->delete_foto($masjid->gambar,'Masjid');
        $masjid->delete();
        return back ();
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

    public function update_foto($img,$folder,$old_img)
    {
      $uniqid=uniqid();
      if ($img && count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/'.$folder.'/'.$uniqid.'.'.$ext;
          $success = file_put_contents($file, $data);
          $this->delete_foto($old_img,$folder);
            return $uniqid.'.'.$ext;
          
      }else{
          return $old_img;
      }
    }

    public function delete_foto($img,$folder)
    {
      $image_path = public_path().'/images/'.$folder.'/'.$img;
      if ($img!="default.jpg") {
          if(File::exists($image_path)){ 
              unlink($image_path);
          }
      }
    }
}
