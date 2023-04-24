@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="read">
    <div class="container pb-5">
        <h2>{{ $news["judul"] }}</h2>
        <p>{{ $news["teks"] }}</p>
        <a href="/berita">kembali</a>
    </div>
</section>

@endsection