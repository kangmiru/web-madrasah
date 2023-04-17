@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- profil --}}
<section class="profil">
    <div class="container">
        <div class="profil-bg mb-3" style="height: 250px;" data-aos="fade-up" data-aos-duration="1000">
            <div class="judul-profil ms-5 text-white" style="padding-top:150px">
                <h1>Profil</h1>
                <h3>{{ $profil["tingkat"] }}</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 profil-madrasah" data-aos="fade-up" data-aos-duration="2000">
                <p>{{ $profil["teks"] }}</p>
            </div>

            <div class="col-md-3 mx-auto" data-aos="fade-up" data-aos-duration="2000">
                <div class="card">
                    <img src="/img/mad1.jpg" class="card-img-top img-profil" style="height: 400px; ">
                    <div class="card-img-overlay d-flex align-items-center">
                        <a href="" class="btn btn-profil mx-auto">
                            Galeri
                        </a>    
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



@endsection