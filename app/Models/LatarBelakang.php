<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatarBelakang 
{
    private static $tingkat_madrasah = [
        [
            "tingkat" => "RA Alif ABS",
            "slug" => "ra-alif-abs",
            "gambar" => "mad1.jpg",
            "alamat" => "Ciwidey, Bandung, Jawa Barat",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ],
        [
            "tingkat" => "MI Alif ABS",
            "slug" => "mi-alif-abs",
            "gambar" => "mad1.jpg",
            "alamat" => "Ciwidey, Bandung, Jawa Barat",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ],
        [
            "tingkat" => "MTS Alif ABS",
            "slug" => "mts-alif-abs",
            "gambar" => "mad1.jpg",
            "alamat" => "Ciwidey, Bandung, Jawa Barat",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ],
        [
            "tingkat" => "MA Alif ABS",
            "slug" => "ma-alif-abs",
            "gambar" => "mad1.jpg",
            "alamat" => "Ciwidey, Bandung, Jawa Barat",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ]
    ];

    public static function all()
    {
        return collect(self::$tingkat_madrasah);
    }

    public static function find($slug)
    {
        $tingkat = static::all();
        
        return $tingkat->firstWhere('slug',$slug);
    }
}
