@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="alumni">
    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach($foto as $f)
            <div class="col-md-3 mb-3">
                <a href="https://source.unsplash.com/500x500/?{{ $f->galery->slug }}" class="" style="text-decoration : none;" target="_blank">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?{{ $f->galery->slug }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0,0,0,0.7)">
                                {{ $f->name }}
                            </h5>
                        </div>
                    </div>
                </a> 
            </div>
            @endforeach
        </div>

        <!-- modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class ="modal-content" id="img1">
            <div id="caption">{{ $f->name }}</div>
        </div>
    </div>
</section>

@endsection