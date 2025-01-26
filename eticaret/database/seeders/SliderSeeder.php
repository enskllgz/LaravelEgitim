<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Slider::create([
            'image' =>'https://fakeimg.pl/250x100/',
            'name'  =>'Kalite Tesadüf Değildir.',
            'content' =>'E-Ticaret Sitemize Hoşgeldiniz',
            'link'    =>'urunler',
            'status'  =>'1'
        ]);
    }
}
