<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
