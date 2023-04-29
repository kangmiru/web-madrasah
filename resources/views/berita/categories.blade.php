@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- kategori --}}
<section class="kategori">
    <div class="container">
        <div class="row mb-3 pt-3">
            <div class="col">
                <h3><a href="/berita" style="text-decoration:none;" class="text-dark">Berita</a> > <a href="/categories" style="text-decoration:none;" class="text-dark">Kategori</a></h3>
            </div>
        </div>
        
        <div class="row">
            @foreach ($categories as $c)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/500x500/?{{ $c->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/categories/{{ $c->slug }}" class="text-dark" style="text-decoration : none;">
                                {{ $c->name }}
                            </a>    
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection