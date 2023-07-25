@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- daftar alumni --}}
<section class="default">
    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach($lulusan as $l)
            <div class="col-md-3">
                <div class="card mb-4" style="border-color: black; height: 500px;">
                    <img src="/img/oke1.png" class="alumni-img my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $l->nama }}</h5>
                        <p class="card-text">{{ $l->angkatan }}</p>
                        <p class="card-text">{{ $l->kuliah_kerja }}</p>
                        <p class="card-text">{{ $l->excerpt }}</p>
                        <a href="/alumni/{{ $l->slug }}" style="text-decoration:none; color:white;" class="selengkapnya btn btn-primary text-white" data-toggle="alumni-modal" data-target="#alumniModal">
                            <span>selengkapnya </span> 
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection