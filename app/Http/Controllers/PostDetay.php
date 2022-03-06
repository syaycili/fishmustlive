<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostDetay extends Controller
{
    public function postdetay(int $id)
    {
        if (Posts::where('id', $id)->exists()) {
            $post = Posts::where('id', $id)->first();
            return view('postdetay',array('post'=>$post));
        }
        return redirect()->route('dashboard');
    }

}
