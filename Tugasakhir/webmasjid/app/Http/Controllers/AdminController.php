<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin.index');
    }
    public function user()
    {
        return view ('admin.user');
    }

     public function adduser()
    {
        return view ('admin.add_user');
    }

    public function addpengurus(Request $r)
    {
        $pengurus =new Pengurus();
        //kiri database || kanan sesuai yg dikirm
        $pengurus->name=$r->username;
        $pengurus->nohp_wa=$r->nohp;
        $pengurus->email=$r->email;
        $pengurus->gambar=$this->save_foto($r->gambar[0],uniqid());
        $pengurus->password=$r->password;
        $pengurus->save();
        return response()->json(['data'=>$r->all()]);

    }
    
     public function deletepengurus($id)
    {
        $pengurus=Pengurus::find($id);
        $this->delete_foto($pengurus->gambar,'Pengurus');
        $pengurus->delete();
        return back ();
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


   public function save_foto($img,$uniqid)
    {
      if (count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/Slider/'.$uniqid.'.'.$ext;
          $success = file_put_contents($file, $data);
          return $uniqid.'.'.$ext;
      }else{
          return 'default.jpg';
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
