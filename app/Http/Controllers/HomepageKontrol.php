<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomepageKontrol extends Controller
{
    public function homepage()
    {
        $posts = Posts::select('id', 'PostBaslik', 'Location_X', 'Location_Y')->get();
        return view('homepage',array('posts'=>$posts));
    }
}
