<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Posts;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class adminislem extends Controller
{
  public function adminkontrol()
  {
    $adminMi = User::where('id', Auth::user()->id)->first()->adminMi;
    if($adminMi == 1){
        return 1;
    }else{
        return 0;
    }

  }

  public function adminpaneli()
  {

    if($this->adminkontrol() == 1){
        $posts = Posts::orderBy('id', 'DESC')->paginate(6);
        return view('admin.panel',array('posts'=>$posts));
    }else{
        return redirect()->route('homepage');
    }

  }



    public function iletisim_talepleri(){
    if($this->adminkontrol() == 1){

        $talepler= Contact::orderBy('id', 'ASC')->paginate(10);;
        return view('admin.contacts',array('talepler'=>$talepler));

    }else{
        return redirect()->route('homepage');
    }
    }



    public function iletisim_talep_sil(int $id){

        if($this->adminkontrol() == 1){
            Contact::where('id', $id)->delete();
            return back();
        }else{
            return redirect()->route('homepage');
        }


    }















    public function uyeleriListele(){


        if($this->adminkontrol() == 1){

            $uyeler = User::orderBy('id', 'DESC')->paginate(10);;
            return view('admin.uyepaneli',array('uyeler'=>$uyeler));

        }else{
            return redirect()->route('homepage');
        }
        }

    public function uyeSil(int $id){

        if($this->adminkontrol() == 1){

            User::where('id', $id)->delete();
            return back();


        }else{
            return redirect()->route('homepage');
        }


    }

}
