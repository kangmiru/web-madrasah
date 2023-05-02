@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="read">
    <div class="container pb-5">
        <div class="row mb-3 pt-3">
            <div class="col">
                <h3><a href="/berita" class="text-dark" style="text-decoration: none;">{{ $title }}</a> - <a href="/categories" class="text-dark" style="text-decoration: none;">Kategori</a></h3>
            </div>
        </div>
        
        <div class="row mb-3 justify-content-center">
            <div class="col-md-10">
                <img src="" alt="">
                
                <h2>{{ $news->title }}</h2>
        
                <p>By. Hafadz in <a href="/berita?category={{ $news->category->slug }}">{{ $news->category->name  }}</a></p>

                <img src="https://source.unsplash.com/1200x400/?{{ $news->category->name }}" alt="{{ $news->category->name }}" class="img-fluid">
                

                <article class="my-3">
                    {!! $news->body !!}
                </article>
                
                <br>
                
                <button class="selengkapnya btn btn-warning text-center mt-5">
                    <a href="/berita" style="text-decoration:none; color:white;">
                        <span>kembali </span> 
                    </a>
                </button>
            </div>
        </div>

    </div>
</section>

@endsection