@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- kategori --}}
<section class="default py-5">
    <div class="container">
        <div class="row mb-3 pt-3">
            <div class="col">
                <h3><a href="/berita" class="text-dark" style="text-decoration: none;">{{ $title }}</a> - <a href="/categories" class="text-dark" style="text-decoration: none;">Kategori</a></h3>
            </div>
        </div>

        <div class="row my-3 justify-content-center">
            <div class="col-md-6">
                <form action="/berita">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Berita..." aria-label="Cari Berita..." name="cari" value="{{ request('cari') }}">
                        <button class="btn btn-success" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($berita->count())
        <div class="row mb-3">
            <div class="col-md">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400/?{{ $berita[0]->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <a href="/berita/{{ $berita[0]->slug }}" class="text-dark" style="text-decoration : none;">
                                {{ $berita[0]->title }}
                            </a>    
                        </h5>
                        <p>
                            {{ $berita[0]->excerpt }}
                        </p>
                        <p class="card-text"><a href="/categories/{{ $berita[0]->category->slug }}"  style="text-decoration:none;"><small class ="text-muted">{{ $berita[0]->category->name }}</small></a></p>
                        <p class="card-text"><small class ="text-muted">{{ $berita[0]->created_at->diffForHumans() }}</small></p>
                        <button class="selengkapnya btn btn-primary text-center">
                            <a href="/berita/{{ $berita[0]->slug }}" style="text-decoration:none; color:white;">
                                <span>selengkapnya </span> 
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p>Tidak Ada Berita</p>
        @endif

        <div class="row">
            @foreach ($berita as $b)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="position-absolute p-2" style="background-color: rgba(0,0,0,0.5)">
                        <a href="/categories/{{ $b->category->slug }}" class="text-white" style="text-decoration:none;">
                            {{ $b->category->name }}
                        </a>    
                    </div>
                    <img src="https://source.unsplash.com/500x500/?{{ $b->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/berita/{{ $b->slug }}" class="text-dark" style="text-decoration : none;">
                                {{ $b->title }}
                            </a>    
                        </h5>
                        <p>
                            {{ $b->excerpt }}
                        </p>
                        <p class="card-text"><small class ="text-muted">{{ $b->created_at->diffForHumans() }}</small></p>
                        <button class="selengkapnya btn btn-primary text-center">
                            <a href="/berita/{{ $b->slug }}" style="text-decoration:none; color:white;">
                                <span>selengkapnya </span> 
                            </a>
                    </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection