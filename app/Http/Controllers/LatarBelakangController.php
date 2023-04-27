<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatarBelakang;

class LatarBelakangController extends Controller
{
    public function index()
    {
        return view('pendidikan',[
            "title" => "Pendidikan",
            "active" => "pendidikan",
            "madrasah" => LatarBelakang::all()
        ]);
    }

    public function show($slug)
    {
        return view('/madrasah/madrasah', [
            "title" => "Madrasah",
            "active" => "madrasah",
            "profil" => LatarBelakang::find($slug)
        ]);
    }
}
