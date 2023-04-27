@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- berita --}}
<section class="berita">
    <div class="container">
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
                        <a href="">selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection