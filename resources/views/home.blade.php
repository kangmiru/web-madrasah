<!-- navbar -->
@extends('layouts.main')

@section('content')
    <!-- cover web -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px; filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5" >
                        <h1>RA ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MI ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MTS ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MA ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- profil singkat -->
    <section>
        <div class="profil" style="background-color: #fff;">
            <div class="row justify-content-center me-0">
                <div class="col-md-5 my-5">
                    <h3>Profil</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis consequatur accusamus, maiores aspernatur quia sapiente ex cumque officia! Obcaecati, quo alias blanditiis eligendi quae maiores unde asperiores incidunt voluptatem, nemo praesentium fugiat eos ab facere repellat corporis quaerat. Mollitia amet sed illo autem nam voluptatem similique, inventore facilis repellendus quaerat! Tempora, eos. Quidem totam modi dicta earum sint, velit repudiandae ducimus quasi facere beatae ea molestiae, soluta minima quisquam magni deleniti, vitae quas assumenda. Ratione, ipsum aperiam dolore voluptate, iste quos officia temporibus, autem rem tenetur nam deserunt est vitae molestias repellat laborum ex pariatur reprehenderit unde enim explicabo modi.
                    </p>
                    <button class="selengkapnya btn btn-primary text-center">
                        <a href="/profil" style="text-decoration:none; color:white;">
                            <span>selengkapnya </span> 
                        </a>
                    </button>
                </div>
                <div class="col-md-5 my-5 g-6">
                    <img class="center mx-auto d-block" src="https://source.unsplash.com/500x500/?madrasah">
                    <p class="text-center">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- bagian sekolah -->
    <section class="bagian">
        <div class="container">
            <div class="row text-center my-5 me-0 ">
                <div class="col-md-3" style="border-right: 2px solid black;">
                    <h5 style="margin-left:9px">Menjadi Bagian Alif Al-ittifaq Boarding School</h5>
                </div>
                
                <div class="col-md-3" style="border-right: 2px solid black;">
                    <img src="" alt="">
                    <p class="fw-bold fs-4 count" data-val="1000">000</p>
                </div>
                
                <div class="col-md-3" style="border-right: 2px solid black;">
                    <img src="" alt="">
                    <p class="fw-bold fs-4 count" data-val="1000">000</p>
                </div>
                
                <div class="col-md-3">
                    <img src="" alt="">
                    <p class="fw-bold fs-4 count" data-val="1000">000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- alasan -->
    <section>
        <div class="alasan" style="background-color:#fff;">
            <div class="container">
            <div class="row text-center mb-3 me-0">
                <div class="col">
                    <h2 class="mt-4">Kenapa Madrasah Alif?</h2>
                </div>
            </div>
            <div class="row pb-5 me-0">
                <div class="col-md-4 mb-3">
                    <div class="card alasan" >
                        <div class="card-body">
                            <img src="https://source.unsplash.com/500x500/?madrasah"class="img-fluid">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card alasan" >
                        <div class="card-body">
                            <img src="https://source.unsplash.com/500x500/?madrasah" class="img-fluid">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card alasan" >
                        <div class="card-body">
                            <img src="https://source.unsplash.com/500x500/?madrasah" class="img-fluid">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- kata alumni -->
    <section>
        <div class="alumni pb-5 text-light">
            <h2 class="text-center py-5">Kata Alumni</h2>
            <div class="container review">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @if($alumni->count())
                            <div class="carousel-item active">
                                <div class=" text-center pt-3 mb-3">
                                    <h4>{{ $alumni[0]->nama }}</h4>
                                    <p>{{ $alumni[0]->kuliah_kerja }}</p>
                                    <img src="/img/oke1.png" class="foto-alumni">
                                    <p>{{ $alumni[0]->angkatan }}</p>
                                    <p class="mb-5">{{  $alumni[0]->excerpt  }}</p>
                                </div>
                            </div>
                            @foreach($alumni->skip(1) as $a)
                                <div class="carousel-item">
                                    <div class=" text-center pt-3 mb-3">
                                        <h4>{{ $a->nama }}</h4>
                                        <p>{{ $a->kuliah_kerja }}</p>
                                        <img src="/img/oke1.png" class="foto-alumni">
                                        <p>{{ $a->angkatan }}</p>
                                        <p class="mb-5">{{  $a->excerpt  }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                </div>
            </div>
        </div>
    </section>

    <!-- sekolah kami -->
    <section class="sekolah">
        <div class="container ">
            <div class="py-5 pt-2">
                <h2 class="text-center mt-5 mb-5">Sekolah Kami</h2>
                <div class="row me-0 ms-3">
                    <div class="owl-carousel carousel-theme slider">
                        @foreach ($madrasah as $m)
                        <div class="col-md-3 mb-3 item ">
                            <div class="card-sekolah" >
                                <div class="card sekolah-card"  style="width: 400px;">
                                    <img src="https://source.unsplash.com/500x500/?madrasah" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $m["tingkat"] }} </h5>
                                        <button class="selengkapnya btn btn-primary text-center">
                                            <a href="/madrasah/{{ $m["slug"] }}" style="text-decoration:none; color:white;">
                                                <span>selengkapnya </span> 
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row me-0">
                    <div class="col text-center">
                        <button class="more btn text-center">
                            <a href="/pendidikan" style="text-decoration:none; color:#0d6efd;">
                                <span>Lebih Banyak </span> 
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- berita madrasah -->
    <section class="berita py-5">
        <hr>
        <div class="container">
            <div class="row me-0 my-5">
                <div class="col">
                    <h2 class="text-center">Berita Terkini</h2>
                </div>
            </div>
            <div class="row me-0 d-flex justify-content-center ms-auto">
            @foreach ($berita as $b)
                <div class="col-md-4 mb-3">
                    <div class="card card-berita" style="height:650px">
                        <img src="https://source.unsplash.com/500x500/?{{ $b->category->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->title }}</h5>
                            <p class="card-text">{{ $b->excerpt }}</p>
                            <button class="selengkapnya btn btn-primary text-center">
                                <a href="/berita/{{ $b->slug }}" style="text-decoration:none; color:white;">
                                    <span>selengkapnya </span> 
                                </a>
                            </button>
                        </div>
                    </div>  
                </div>
            @endforeach
            </div>
            
            <div class="row me-0 pt-5">
                <div class="col text-center">
                    <button class="more btn text-center">
                        <a href="/berita" style="text-decoration:none; color:#0d6efd;">
                            <span>Lebih Banyak </span> 
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- geleri madrasah -->
    <section class="galeri py-5">
        <hr>
        <div class="container">
            <div class="row me-0 my-5">
                <div class="col-md-4 mb-3">
                    <h4>Galeri Madrasah</h4>
                    <p>Lihat galeri untuk melihat kegiatan yang dilaksanakan di madrasah Alif ABS</p>
                    <button class="more btn text-center">
                        <a href="" style="text-decoration:none; color:#0d6efd;">
                            <span>Lebih Banyak </span> 
                        </a>
                    </button>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="/img/mad1.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="/img/mad1.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
    