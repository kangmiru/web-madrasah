<?php

use App\Models\Berita;
use App\Models\Lainnya;
use App\Models\LatarBelakang;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home",
        "madrasah" => LatarBelakang::all()
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
        'berita' => $category->berita,
        'category' => $category->name
    ]);
});