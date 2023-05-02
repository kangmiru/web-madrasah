<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;

class BeritaController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' - ' . $category->name;
        }
        return view ('/berita/berita',[
            "title" => "Berita Madrasah" . $title,
            "active" => "berita",
            "berita" => Berita::latest()->filter(request(['cari', 'category']))->paginate(9)->withQueryString()
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
