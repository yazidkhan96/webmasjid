<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;
use App\User;
use Action;
use Hash;
use Auth;
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
        $user =new User();
        //kiri database || kanan sesuai yg dikirm
        $user->name=$r->username;
        $user->nohp=$r->nohp;
        $user->email=$r->email;
        $user->gambar=$this->save_foto($r->gambar[0],uniqid());
        $user->password= Hash::make($r->password);
        $user->save();
        return response()->json(['data'=>$r->all()]);

    }

       public function updatefotopengurus(Request $r,$id)
    {
      $user=User::find($id);
      $user->gambar=Action::update_foto($r->gambar,'User',$user->gambar);
      $user->save();
      return response()->json(['data'=>$user,"gbr"=>$r->all()]);
    }


     public function deletepengurus($id)
    {
        $user=User::find($id);
        Action::delete_foto($user->gambar,'User');
        $user->delete();
        return back ();
    }

    public function update_password(Request $request)
    {
        $user=Auth::user();
        if (Hash::check($request->old,$user->password)) {
            $user->password=bcrypt($request->new);
            $user->save();
            return redirect('/dashboard_user')->with(['success' => 'berhasil merubah password']);
        }else{
            return redirect('/ubah_password')->with(['error' => 'gagal merubah password']);
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


   public function save_foto($img,$uniqid)
    {
      if (count(explode('.', $img))!=2) {
          $ext=explode('/', explode(';',explode(',', $img)[0])[0])[1];
          $img = explode(',', $img)[1];
          $data = base64_decode($img);
          $file =  public_path().'/images/User/'.$uniqid.'.'.$ext;
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
