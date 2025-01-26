<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory(10)->create();

        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
        ]);

        $this->call([
            SliderSeeder::class,
            CategorySeeder::class,
            DatabaseSeeder::class,
            AboutSeeder::class,
            ProductSeeder::class,

        ]);

    }
}
}
