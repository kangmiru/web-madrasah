<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'hafadz',
            'username' => 'hafadz',
            'email' => 'mirufadz25@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory()->count(4)->create();

        Category::create([
            'name' => 'Sosial',
            'slug' => 'sosial'
        ]);

        Category::create([
            'name' => 'Madrasah',
            'slug' => 'madrasah'
        ]);

        Category::create([
            'name' => 'Artikel',
            'slug' => 'artikel'
        ]);

        Berita::factory()->count(20)->create();
    }
}
