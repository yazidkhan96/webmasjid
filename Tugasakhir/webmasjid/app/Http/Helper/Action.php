<?php

namespace App\Http\Helper;
use Illuminate\Contracts\View\View;
use File;
class Action
{
	public static function save_foto($img,$folder)
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

  public static function save_multiple_foto($image,$folder)
  {
      $arr_img=[];
      for ($i=0,$imgLength=count($image); $i <$imgLength; $i++) { 
        $uniqid=uniqid();
        $img=$image[$i]['gambar'];
        if (count(explode('.', $img))!=2) {
            $ext  = explode('/', explode(';',explode(',', $img)[0])[0])[1];
            $img  = explode(',', $img)[1];
            $data = base64_decode($img);
            $file = public_path().'/images/'.$folder.'/'.$uniqid.'.'.$ext;
            $success = file_put_contents($file, $data);
            array_push($arr_img,$uniqid.'.'.$ext);
        }else{
            array_push($arr_img,'default.jpg');
        }
      }
      return implode(',',$arr_img);
  }

  public static function update_multiple_foto($image,$folder,$old_img,$del_img)
  {
      $arr_img=[];
      if (isset($del_img)&& count($del_img)!=0) {
       $old_img=explode(',',$old_img);
       $arr_img= array_diff($old_img, $del_img);
      }
      if (isset($image)) {
        for ($i=0,$imgLength=count($image); $i <$imgLength; $i++) { 
          $uniqid=uniqid();
          $img=$image[$i]['gambar'];
          if (count(explode('.', $img))!=2) {
              $ext  = explode('/', explode(';',explode(',', $img)[0])[0])[1];
              $img  = explode(',', $img)[1];
              $data = base64_decode($img);
              $file = public_path().'/images/'.$folder.'/'.$uniqid.'.'.$ext;
              $success = file_put_contents($file, $data);
              array_push($arr_img,$uniqid.'.'.$ext);
          }else{
              array_push($arr_img,'default.jpg');
          }
        }
      }
      if (count($arr_img)!=0) {
        return implode(',',$arr_img);
      }else{
        return $old_img;
      }
  }

  public static function delete_foto($img,$folder)
    {
      $image_path = public_path().'/images/'.$folder.'/'.$img;
      if ($img!="default.jpg") {
          if(File::exists($image_path)){ 
              unlink($image_path);
          }
      }
    }


    
    public static function update_foto($img,$folder,$old_img)
    {
      $uniqid=uniqid();
      if ($img && count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/'.$folder.'/'.$uniqid.'.'.$ext;
          $success = file_put_contents($file, $data);
          Action::delete_foto($old_img,$folder);
            return $uniqid.'.'.$ext;
          
      }else{
          return $old_img;
      }
    }

}