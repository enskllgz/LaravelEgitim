<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' =>null,
            'name'  =>'Erkek',
            'content' =>'Erkek Giyim',
            'status'  =>'1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' => $erkek->id,
            'name'  =>'Erkek Kazak',
            'content' =>'Erkek Kazaklar',
            'status'  =>'1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' => $erkek->id,
            'name'  =>'Erkek Pantolon',
            'content' =>'Erkek Pantolonları',
            'status'  =>'1'
        ]);

        $kadın = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' =>null,
            'name'  =>'Kadın',
            'content' =>'Kadın Giyim',
            'status'  =>'1'
        ]);
        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' => $kadın->id,
            'name'  =>'Kadın Çanta',
            'content' =>'Kadın Çantaları',
            'status'  =>'1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' => $kadın->id,
            'name'  =>'Elbise',
            'content' =>'Kadın Elbiseleri',
            'status'  =>'1'
        ]);

        $cocuk = Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' =>null,
            'name'  =>'Çocuk',
            'content' =>'Çocuk Giyim',
            'status'  =>'1'
        ]);

        Category::create([
            'image' =>null,
            'thumbnail' =>null,
            'cat_ust' =>$cocuk->id,
            'name'  =>'Çocuk oyuncak',
            'content' =>'Çocuk Oyuncakları',
            'status'  =>'1'
        ]);
    }
}
