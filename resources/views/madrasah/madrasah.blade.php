@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- profil --}}
<section class="profil">
    <div class="container">
        <div class="profil-bg mb-3" style="height: 250px;" data-aos="fade-up" data-aos-duration="1000">
            <div class="judul-profil ms-5 text-white" style="padding-top:150px">
                <h1>Profil</h1>
                <h3>Madrasah Alif</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 profil-madrasah" data-aos="fade-up" data-aos-duration="2000">
                <p></p>
            </div>

            <div class="col-md-6 jejak-madrasah">
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-2 mb-2">
                        <p class="text-center">2003</p>
                    </div>
                    <div class="col-md-1 mb-2 d-flex justify-content-center">
                        <div class="lingkaran"></div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <p class="text-center">Berdirinya Madrasah</p>
                    </div>
                </div>
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2500">
                    <div class="col-md-5 mb-2">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>

                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-2">
                        <p class="text-center">2003</p>
                    </div>
                    <div class="col-md-1">
                        <div class="lingkaran mx-auto"></div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center">Berdirinya Madrasah</p>
                    </div>
                </div>
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-5">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>
                
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-2">
                        <p class="text-center">2023</p>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="lingkaran"></div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center">Berdirinya Madrasah</p>
                    </div>
                </div>
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-5">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-6">
                <button type="button" class="btn btn-success">Galeri</button>
            </div>
        </div>
    </div>
</section>



@endsection