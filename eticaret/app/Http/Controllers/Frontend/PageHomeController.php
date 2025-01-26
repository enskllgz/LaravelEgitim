<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
   public function anasayfa() {
      $slider = Slider::first();
     $title = "Anasayfa";
    return view('frontend.pages.index', compact('slider', 'title'));
   }
}
