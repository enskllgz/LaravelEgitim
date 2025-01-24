<?php

namespace App\Http\Controllers\Frontend;
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

     return view('frontend.pages.hakkımızda');
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
