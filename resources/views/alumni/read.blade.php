@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- detail alumni --}}
<section class="default py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3 ">
        <img src="/img/oke1.png" alt="" class="read-alumni mx-auto">
        <div class="row">
            <button class="selengkapnya btn btn-warning text-center mt-5 mx-auto">
              <a href="/alumni" style="text-decoration:none; color:white;">
                  <span>kembali </span> 
              </a>
            </button>
        </div>
      </div>
      <div class="col-md-6">
        <h3>{{ $detail->nama }}</h3>
        <p>Angkatan       : {{ $detail->angkatan }}</p>
        <p>Kerja/Kuliah   : {{ $detail->kuliah_kerja }}</p>
        <p>Kesan          : {!! $detail->kesan !!}</p>
      </div>
    </div>
  </div>
</section>


@endsection