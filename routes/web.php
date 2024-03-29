<?php

use App\Models\Berita;
use App\Models\Galery;
use App\Models\Lainnya;
use App\Models\Category;
use App\Models\LatarBelakang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LainnyaController;
use App\Http\Controllers\LatarBelakangController;

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

Route::get('/', [HomeController::class, 'index']);

// route ke halaman profile
Route::get('/profil', function (){
    return view('profil', [
        "title" => "Profil",
        "active" => "profil"
    ]);
});

//route kehalaman pendidikan
Route::get('/pendidikan', [LatarBelakangController::class, 'index']);
Route::get('/madrasah/{slug}', [LatarBelakangController::class, 'show']);

// route ke halaman lainnya
Route::get('/lainnya',[LainnyaController::class, 'index']);
Route::get('/lainnya/{slug}',[LainnyaController::class, 'show']);

// route ke halaman berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{berita:slug}',[BeritaController::class, 'show']);

// route ke halaman kategori
Route::get('/categories',function(){
    return view('/berita/categories',[
        'title' => 'Kategori',
        'active' => 'kategori',
        'categories' => Category::all()
    ]);
} );

Route::get('/categories/{category:slug}', function (Category $category){
    return view('/berita/category',[
        'title' => $category->name,
        'active' => 'kategori',
        'berita' => $category->berita->load('category'),
        'category' => $category->name
    ]);
});

// route ke halaman galeri
Route::get('/galeri', function (){
    return view('galeri', [
        "title" => "Galeri",
        "active" => "galeri",
        'galeries' => Galery::all()
    ]);
});

Route::get('/galeri/{galery:slug}', function (Galery $galery){
    return view('/galeri/foto', [
        'title' => $galery->name,
        'active' => 'galeri',
        'foto' => $galery->foto->load('galery'),
        'galeri' => $galery->name
    ]);
});

//  route halaman video
Route::get('/videos/video', function(){
    return view('/galeri/video', [
        'title' => 'Video',
        'active' => 'video'
    ]);
});

// route ke halaman alumni
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/alumni/{lulusan:slug}', [AlumniController::class, 'show']);