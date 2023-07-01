@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="background">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="/galeri/" class="" style="text-decoration : none;">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500/?animal" class="card-img" alt="...">
                        <div class="card-img-overlay align-item-center play-btn">    
                            <a href="">
                                <img src="/img/play-button.png" style="width:50px;">
                            </a>
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
</section>
@endsection