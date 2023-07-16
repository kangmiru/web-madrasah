<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Berita;
use App\Models\Galery;
use App\Models\Foto;
use App\Models\Alumni;

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

        Galery::create([
            'name' => 'Kegiatan',
            'slug' => 'activity'
        ]);

        Galery::create([
            'name' => 'Fasilitas',
            'slug' => 'facility'
        ]);

        Foto::factory()->count(15)->create();

        Berita::factory()->count(30)->create();

        Alumni::factory()->count(10)->create();
    }
}
