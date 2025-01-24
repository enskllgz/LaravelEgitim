<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' =>'https://fakeimg.pl/250x100/',
            'name'  =>'Kalite Tesadüf Değildir.',
            'content' =>'E-Ticaret Sitemize Hoşgeldiniz',
            'link'    =>'urunler',
            'status'  =>'1'
        ]);
    }
}
