@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- detail alumni --}}
<section class="default py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <img src="/img/oke1.png" alt="" class="read-alumni">
      </div>
      <div class="col-md-5">
        <h3>{{ $detail->nama }}</h3>
        
        <p>nama</p>
        <p>nama</p>
        <p>nama</p>
      </div>
    </div>
  </div>
</section>


@endsection