@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- berita --}}
<section class="berita">
    <div class="container">
        <div class="row mb-3 pt-3">
            <div class="col">
                <h3>Berita</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($berita as $b)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="/img/mad1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/berita/{{ $b->slug }}" class="text-dark" style="text-decoration : none;">
                                {{ $b->title }}
                            </a>    
                        </h5>
                        <p>
                            {{ $b->excerpt }}
                        </p>
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