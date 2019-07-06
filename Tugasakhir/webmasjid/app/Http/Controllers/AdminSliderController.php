<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use File;

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

     public function editslider($id)
    {
        $slider=Slider::find($id);
        return view ('admin.edit_slider',compact('slider'));
    }

    public function deleteslider($id)
    {
        $slider=Slider::find($id);
        $this->delete_foto($slider->gambar,'Slider');
        $slider->delete();
        return back ();
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


     public function updateslider(Request $r,$id)
    {
      $slider=Slider::find($id);
      $slider->judul=$r->judul;
      $slider->gambar=$this->update_foto($r->gambar[0],'Slider',$slider->gambar);
      $slider->deskripsi=$r->deskripsi;
      $slider->save();
      return response()->json(['data'=>$r->all()]);
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
