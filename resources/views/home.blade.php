@extends('layouts.main')

@section('container')
    <!-- cover web -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px; filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5" >
                        <h1>RA/TK ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white mt-3">Selengkapnya</a>
                        </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MI ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white mt-3">Selengkapnya</a>
                        </p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MTS ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white mt-3">Selengkapnya</a>
                        </p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/img/mad1.jpg" class="d-block w-100" style="height:750px;filter:brightness(50%);">
                <div class="carousel-caption align-items-center readmore mb-5">
                        <h1>MA ALIF ABS</h1>
                        <a href="" class="lead" style="color: white; text-decoration:none;">Ciwidey, Bandung, Jawa Barat</a>
                        <p class="lead">
                        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white mt-3">Selengkapnya</a>
                        </p>
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
    <div class="profil" style="background-color: #fff;">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <h3>Lorem, ipsum dolor.</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis consequatur accusamus, maiores aspernatur quia sapiente ex cumque officia! Obcaecati, quo alias blanditiis eligendi quae maiores unde asperiores incidunt voluptatem, nemo praesentium fugiat eos ab facere repellat corporis quaerat. Mollitia amet sed illo autem nam voluptatem similique, inventore facilis repellendus quaerat! Tempora, eos. Quidem totam modi dicta earum sint, velit repudiandae ducimus quasi facere beatae ea molestiae, soluta minima quisquam magni deleniti, vitae quas assumenda. Ratione, ipsum aperiam dolore voluptate, iste quos officia temporibus, autem rem tenetur nam deserunt est vitae molestias repellat laborum ex pariatur reprehenderit unde enim explicabo modi.
                </p>
                <button>selengkapnya</button>
            </div>
            <div class="col-md-5 my-5 ms-5 g-6">
                <img class="center mx-auto d-block" src="/img/mad1.jpg" style="height:250px;">
                <p class="text-center">Lorem, ipsum dolor.</p>
            </div>
        </div>
    </div>

    <!-- bagian sekolah -->
    <div class="bagian">
        <div class="row text-center my-5">
            <div class="col-md-3" style="border-right: 2px solid black;">
                <h5>Menjadi Bagian Madrasah</h5>
            </div>
            
            <div class="col-md-3" style="border-right: 2px solid black;">
                <img src="" alt="">
                <p>10</p>
            </div>
            
            <div class="col-md-3" style="border-right: 2px solid black;">
                <img src="" alt="">
                <p>10</p>
            </div>
            
            <div class="col-md-3">
                <img src="" alt="">
                <p>10</p>
            </div>
        </div>
    </div>

    <!-- why? -->
    <div class="why" style="background-color:#fff;">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2 class="mt-4">Kenapa Madrasah Alif?</h2>
            </div>
        </div>
        <div class="row mb-5 pb-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- kata alumni -->
    <div class="alumni">
        <h2 class="text-center">Apa Kata Alumni</h2>
        <div class="container">
            
        </div>
    </div>

@endsection
    