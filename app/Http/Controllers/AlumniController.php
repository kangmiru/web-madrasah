<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(){
        return view('/alumni/alumni',[
            'title' => 'Alumni',
            'active' => 'alumni',
            'lulusan' => Alumni::latest()->paginate(9)->withQueryString()
        ]);
    }

    public function show(Alumni $lulusan)
    {
        return view('/alumni/read',[
            'title' => 'Alumni',
            'active' => 'alumni',
            'detail' => $lulusan
        ]);
    }
}
