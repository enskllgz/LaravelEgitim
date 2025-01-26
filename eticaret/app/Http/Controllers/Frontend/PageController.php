<?php

namespace App\Http\Controllers\Frontend;
use App\Models\About;
use App\Models\Product;
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
        $products = Product::where('status', '1')->get();
     return view('frontend.pages.urunler',compact('products'));
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
