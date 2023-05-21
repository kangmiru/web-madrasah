@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="galeri">
    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach($galeries as $galery)
            <div class="col-md-3">
                <a href="/galeri/{{ $galery->slug }}" class="" style="text-decoration : none;">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?{{ $galery->slug }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0,0,0,0.7)">
                                {{ $galery->name }}
                            </h5>
                        </div>
                    </div>
                </a> 
            </div>
            @endforeach

            <div class="col-md-3">
                <a href="/galeri/alumni" class="" style="text-decoration : none;">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?people" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0,0,0,0.7)">
                                Alumni
                            </h5>
                        </div>
                    </div>
                </a> 
            </div>

            <div class="col-md-3">
                <a href="/galeri/" class="" style="text-decoration : none;">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?foto" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0,0,0,0.7)">
                                Video
                            </h5>
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
</section>

@endsection