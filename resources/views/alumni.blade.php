@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="background">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/oke1.png" class="alumni-img my-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama</h5>
                        <p class="card-text">Angkatan</p>
                        <p class="card-text">Pekerjaan/Kampus</p>
                        <p class="card-text">Kesan</p>
                        <a id="alumniMore">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="alumniModal" class="modal">
        <div class="alumni-content">
            <span class="close">&times;</span>
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/oke1.png" class="alumni-img-modal">
                </div>
                <div class="col">
                    <p>Nama : Hafadz </p>
                    <p>Angkatan : 2020 </p>
                    <p>Pekerjaan/Kampus : Unpas </p>
                    <p>Kesan : Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quo iure libero repellendus? Voluptatum explicabo, dolores labore nisi recusandae sequi. </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection