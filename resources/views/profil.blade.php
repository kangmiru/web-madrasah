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
        <div class="row py-3 me-0">
            <div class="col-md-6 profil-madrasah" data-aos="fade-up" data-aos-duration="2000">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae distinctio ducimus, enim aspernatur non, aut optio molestiae quasi, repudiandae nostrum quia. Dolores distinctio consequatur possimus quibusdam consequuntur in repudiandae dolorum unde delectus maiores, omnis modi, deleniti nobis, illum impedit atque iusto autem. Vero dolorum suscipit voluptatibus labore vel, ut tenetur neque, quam doloribus unde iste perspiciatis aliquid laudantium, impedit ab? Voluptate perspiciatis labore ut asperiores placeat perferendis ducimus corporis hic ratione pariatur! Voluptatum doloribus non optio, incidunt vero tempora molestias voluptates cum totam voluptas! Ratione eveniet aliquid iste dolore sit consectetur incidunt dolores qui magni cum veritatis, ab eum quos corrupti illum sequi et, debitis eaque accusantium dolorum fugit vero. Saepe quae numquam labore cumque voluptatibus dolore odit earum expedita. Cupiditate quibusdam dolorem, suscipit cumque placeat sed quisquam quis est voluptas sunt magnam fugit facilis asperiores iste, dolore aliquid dolor nemo nostrum! Repudiandae nemo at, officia quibusdam quia blanditiis ipsa?</p>
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
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-5 mb-2">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>

                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
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
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-5">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>
                
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
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
                <div class="row me-0 my-2 ms-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-5">
                        <div class="garis mx-auto"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

{{-- visi & misi --}}
<section class="visi-misi">
    <div class="container">
        <div class="row me-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="col my-5">
                <h2>Visi & Misi</h2>
            </div>
        </div>
        <div class="row me-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-md-6 text-center">
                <h3>Visi</h3>
                <p class="fs-5">Alif Juara Ahlak Mulia</p>
            </div>
            <div class="col-md-6">
                <h3>Misi</h3>
                <p class="fs-5"><span>1.</span>Lorem ipsum dolor sit amet.</p>
                <p class="fs-5"><span>2.</span>Lorem ipsum dolor sit amet.</p>
                <p class="fs-5"><span>3.</span>Lorem ipsum dolor sit amet.</p>
                <p class="fs-5"><span>4.</span>Lorem ipsum dolor sit amet.</p>
                <p class="fs-5"><span>5.</span>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</section>

{{-- struktur organisasi --}}
<section class="struktur-org">
    <div class="container">
        <div class="row me-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="col my-5">
                <h2>Struktur Organisasi</h2>
            </div>
        </div>
        <div class="row me-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="col mb-3 d-flex justify-content-center">
                <div class="card">
                    <img src="/img/mad1.jpg" class="card-img-top" style="width:100%;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- pimpinan lembaga --}}
<section class="lembaga">
    <div class="container">
        <div class="row py-5 me-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="col">
                <h2>Pimpinan Lembaga</h2>
            </div>
        </div>
        <div class="row me-0 ms-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="owl-carousel carousel-theme slider">
                <div class="col-md-3 mb-3 item ">
                    <div class="card-sekolah" >
                        <div class="card sekolah-card"  style="width: 400px;">
                            <img src="/img/mad1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Madrasah Aliyah</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 item ">
                    <div class="card-sekolah">
                        <div class="card sekolah-card" style="width: 400px;">
                            <img src="/img/mad1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Madrasah Aliyah</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 item ">
                    <div class="card-sekolah">
                        <div class="card sekolah-card" style="width: 400px;">
                            <img src="/img/mad1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Madrasah Aliyah</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 item ">
                    <div class="card-sekolah">
                        <div class="card sekolah-card" style="width: 400px;">
                            <img src="/img/mad1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Madrasah Aliyah</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection