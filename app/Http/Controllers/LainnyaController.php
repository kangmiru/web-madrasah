<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lainnya;

class LainnyaController extends Controller
{
    public function index()
    {
        return view ('/lainnya/lainnya',[
            "title" => "Unit Lainnya",
            "active" => "lainnya",
            "units" => Lainnya::all()
        ]);
    }

    public function show($slug)
    {
        return view ('/lainnya/unit',[
            "title" => "Unit",
            "active" => "lainnya",
            "unit" => Lainnya::find($slug)
        ]);
    }
}
