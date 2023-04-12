<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

// route ke halaman profile
Route::get('/profil', function (){
    return view('profil', [
        "title" => "Profil",
        "active" => "profil"
    ]);
});

// route ke halaman madrasah
Route::get('/madrasah/madrasah', function(){
    $tingkat_madrasah = [
        [
            "tingkat" => "RA Alif ABS",
            "slug" => "ra-alif-abs",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ],
        [
            "tingkat" => "MI Alif ABS",
            "slug" => "mi-alif-abs",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ]
    ];
    return view('/madrasah/madrasah', [
        "title" => "Madrasah",
        "active" => "madrasah",
        "madrasah" => $tingkat_madrasah
    ]);
});
