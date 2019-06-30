<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
class AdminForumController extends Controller
{
    public function forum()
    {
        return view ('admin.forum');
    }
    public function addforum()
    {
        return view ('admin.add_forum');
    }

    public function uploadforum(Request $r)
    {
    	$forum =new Forum();
    	$forum->judul_forum=$r->judulforum;
    	$forum->gambar=$this->save_foto($r->gambar,'Forum');
    	$forum->deskripsi=$r->deskripsi;
    	$forum->save();
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
