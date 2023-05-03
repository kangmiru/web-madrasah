<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with =["galery"];

    public function galery()
    {
        return $this->belongsTo(Galery::class);
    }
}
