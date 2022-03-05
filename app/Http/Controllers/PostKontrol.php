<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostKontrol extends Controller
{
    public function Dashboard(){
        $posts = Posts::orderBy('id', 'DESC')->paginate(6);
        return view('dashboard',array('posts'=>$posts));
    }

    public function PostEkle(Request $request){
        $validateData = $request->validate(
            [
                'PostBaslik' => 'required|string',
                'PostAciklama' => 'required|string',
                'PostAdres' => 'required|string',
                'Location_X' => 'required|string',
                'Location_Y' => 'required|string',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]
        );
        //$uniqstring = Str::random(5).Auth::user()->id;
        //$img_name = $request->file('image')->getClientOriginalName();
        $img_path = $request->file('image')->store('public/images');

        $yeniPost = new Posts();
        $yeniPost -> PostBaslik = $request->PostBaslik;
        $yeniPost -> PostAciklama = $request->PostAciklama;
        $yeniPost -> PostAdres = $request->PostAdres;
        $yeniPost -> Location_X = $request->Location_X;
        $yeniPost -> Location_Y = $request->Location_Y;
        $yeniPost -> img_path = $img_path;
        $yeniPost -> Kullanici = Auth::user()->name;
        $yeniPost->save();

        return redirect()->route('dashboard');
    }


    public function PostSil(int $id){
        if (Auth::user()->adminMi == 1) {
            Storage::delete(Posts::where('id',$id)->first()->img_path);
            Posts::where('id',$id)->first()->delete();
            return redirect()->back();
        }
        else{
            return redirect()->route('homepage');
        }
    }



}
