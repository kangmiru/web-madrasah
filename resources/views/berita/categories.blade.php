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
        
        <div class="row pb-5 justify-content-center">
            @foreach ($categories as $c)
            <div class="col-md-3 mb-5">
                <a href="/berita?category={{ $c->slug }}" class="" style="text-decoration : none;">
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