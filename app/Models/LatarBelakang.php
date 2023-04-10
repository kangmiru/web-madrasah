<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatarBelakang extends Model
{
    private static $latar_belakang = [
        [
            "tingkat" => "Raudhotul Athfal",
            "slug" => "roudhotul-athfal",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ],
        [
            "tingkat" => "Madrasah Ibtidaiyah",
            "slug" => "madrasah-ibtidaiyah",
            "teks" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?"
        ]
    ];


    public static function find($slug)
    {
        $latar = self::$latar_belakang;
        $new_latar = [];
        foreach ($latar_belakang as $l) {
            if ($l["slug"] === $slug) {
                $new_latar = $latar;
            }
        }

        return $new_latar;
    }
}
