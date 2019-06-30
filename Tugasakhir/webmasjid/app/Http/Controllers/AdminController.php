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
        $pengurus->password=$r->password;
        $pengurus->save();
        return response()->json(['data'=>$r->all()]);

    }
    
}
