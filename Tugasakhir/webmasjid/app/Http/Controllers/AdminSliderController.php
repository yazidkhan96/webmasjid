<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AdminSliderController extends Controller
{
    public function slider()
    {
        return view ('admin.slider');
    }

     public function addslider()
    {
        return view ('admin.add_slider');
    }

    public function createslider(Request $r)
    {
    	$slider = new Slider();
    	$slider->judul=$r->judul;
        $slider->gambar=$this->save_foto($r->gambar[0],uniqid());
    	$slider->deskripsi=$r->deskripsi;
    	$slider->save();
    	return response()->json(['data'=>$r->all()]);

    }

    public function save_foto($img,$uniqid)
    {
      if (count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/'.$uniqid.'.'.$ext;
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
