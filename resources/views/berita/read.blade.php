@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="read">
    <div class="container pb-5">
        <div class="row mb-3 pt-3">
            <div class="col">
                <h3><a href="/berita" style="text-decoration:none;" class="text-dark">Berita</a> > <a href="/categories" style="text-decoration:none;" class="text-dark">Kategori</a> > <a href="/categories/{{ $news->category->slug }}" style="text-decoration:none;" class="text-dark">{{ $news->category->name }}</a> > {{ $news->title   }}</h3>
            </div>
        </div>
        
        <div class="row mb-3 justify-content-center">
            <div class="col-md-10">
                <img src="" alt="">
                
                <h2>{{ $news->title }}</h2>
        
                <p>By. Hafadz in <a href="/category/{{ $news->category->slug }}">{{ $news->category->name   }}</a></p>

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