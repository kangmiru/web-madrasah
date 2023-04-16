<?php

use App\Models\LatarBelakang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

// route ke halaman profile
Route::get('/profil', function (){
    return view('profil', [
        "title" => "Profil",
        "active" => "profil"
    ]);
});

//route kehalaman pendidikan
Route::get('/pendidikan', function(){
    return view('pendidikan',[
        "title" => "Pendidikan",
        "active" => "pendidikan",
        "madrasah" => LatarBelakang::all()
    ]);
});

// route ke halaman madrasah
Route::get('/madrasah/{slug}', function($slug){
    
    return view('/madrasah/madrasah', [
        "title" => "Madrasah",
        "active" => "madrasah",
        "profil" => LatarBelakang::find($slug)
    ]);
});
