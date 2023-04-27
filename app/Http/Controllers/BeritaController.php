<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view ('/berita/berita',[
            "title" => "Berita Madrasah",
            "active" => "berita",
            "berita" => Berita::all()
        ]);
    }

    public function show(Berita $berita)
    { 
        return view ('/berita/read',[
            "title" => "Berita Madrasah",
            "active" => "berita",
            "news" => $berita
        ]);
    }
}
