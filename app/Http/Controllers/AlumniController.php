<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(){
        return view('/alumni',[
            'title' => 'Alumni',
            'active' => 'alumni',
            'lulusan' => Alumni::latest()->paginate(12)->withQueryString()
        ]);
    }
}
