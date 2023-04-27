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
            'email' => 'mirufadz25@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Sosial',
            'slug' => 'sosial'
        ]);

        Category::create([
            'name' => 'Madrasah',
            'slug' => 'madrasah'
        ]);

        Berita::create([
            'title' => ' Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero illo error quod sequi aliquam minima officia,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero illo error quod sequi aliquam minima officia, repellat natus rerum ipsa, culpa rem asperiores explicabo ducimus nihil tempora perferendis ratione dolorum neque magnam enim distinctio deleniti. Accusantium, quo. Recusandae doloribus facilis modi illum. Iusto recusandae nisi maxime accusamus, laborum labore autem.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Berita::create([
            'title' => ' Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero illo error quod sequi aliquam minima officia,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero illo error quod sequi aliquam minima officia, repellat natus rerum ipsa, culpa rem asperiores explicabo ducimus nihil tempora perferendis ratione dolorum neque magnam enim distinctio deleniti. Accusantium, quo. Recusandae doloribus facilis modi illum. Iusto recusandae nisi maxime accusamus, laborum labore autem.',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
