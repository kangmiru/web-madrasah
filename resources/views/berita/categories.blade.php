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
        
        <div class="row pb-5">
            @foreach ($categories as $c)
            <div class="col-md-3 mb-5">
                <a href="/categories/{{ $c->slug }}" class="" style="text-decoration : none;">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?{{ $c->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0,0,0,0.7)">
                                    {{ $c->name }}
                            </h5>
                        </div>
                    </div>
                </a>    
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection