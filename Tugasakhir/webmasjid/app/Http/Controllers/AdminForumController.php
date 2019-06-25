<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
