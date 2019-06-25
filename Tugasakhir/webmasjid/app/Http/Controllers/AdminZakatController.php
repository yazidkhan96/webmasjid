<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminZakatController extends Controller
{
    public function Zakat()
    {
        return view ('admin.zakat');
    }
     public function penyerahanzakat()
    {
        return view ('admin.penyerahan_zakat');
    }
    public function addpenyerahanzakat()
    {
        return view ('admin.add_penyerahan_zakat');
    }
}
