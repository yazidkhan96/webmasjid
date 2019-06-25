<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDonasiController extends Controller
{
    public function donasi()
    {
        return view ('admin.donasi');
    }
     public function pendonasi()
    {
        return view ('admin.pendonasi');
    }
     public function penyerahandonasi()
    {
        return view ('admin.penyerahan_donasi');
    }
     public function addpenyerahandonasi()
    {
        return view ('admin.add_penyerahan_donasi');
    }
     public function adddonasi()
    {
        return view ('admin.add_donasi');
    } 
}
