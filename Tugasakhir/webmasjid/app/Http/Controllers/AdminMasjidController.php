<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
