<?php

namespace App\Http\Controllers\Frontend;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller

{
    public function anasayfa()
    {

     return view('frontend.pages.index');
    }

    public function urunler()
    {

     return view('frontend.pages.urunler');
    }

    public function urundetay()
    {

     return view('frontend.pages.urundetay');
    }

    public function hakkımızda()
    {

     $about = About::where('id','1')->first();
     return view('frontend.pages.hakkımızda', compact('about'));
    }

    public function sepet()
   {

    return view('frontend.pages.sepet');
   }


   public function iletisim()
   {
    return view('frontend.pages.iletisim');
   }


}
