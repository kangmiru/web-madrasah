@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="background">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/oke1.png" class="alumni-img">
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
            <p>Lorem ipsum dolor sit.</p>
        </div>
    </div>
</section>
@endsection