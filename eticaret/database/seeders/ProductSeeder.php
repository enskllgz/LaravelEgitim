<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Product::Create([
        'name' => 'Urun 1',
        'image'=>'images/shoe_1.jpg',
        'category_id' => 1,
        'short-text' => 'Kısa Bilgi',
        'price' => 100,
        'size'=> 'Small',
        'color' => 'Beyaz',
        'qty' => 10,
        'status' => '1',
        'content' => '<p>Ürün Baya iyi</p>'

      ]);

      Product::Create([
        'name' => 'Urun 2',
        'image'=>'images/cloth_2.jpg',
        'category_id' => 2,
        'short-text' => 'Kısa Bilgi 2',
        'price' => 150,
        'size'=> 'Large',
        'color' => 'Siyah',
        'qty' => 5,
        'status' => '1',
        'content' => '<p>Ürün Baya Baya iyi</p>'

      ]);
    }
}
