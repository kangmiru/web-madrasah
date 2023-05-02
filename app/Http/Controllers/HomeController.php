<?php

namespace App\Http\Controllers;

use App\Models\LatarBelakang;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Home",
            "active" => "home",
            "madrasah" => LatarBelakang::all(),
            "berita" => Berita::latest()->paginate(3)
        ]);
    }
}
