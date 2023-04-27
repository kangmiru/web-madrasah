@extends('layouts.main')

@section('content')
<section class="blank"></section>

<section class="read">
    <div class="container pb-5">
        <h2>{{ $news->title }}</h2>

        <p>By. Hafadz in <a href="/category/{{ $news->category->slug }}">{{ $news->category->name   }}</a></p>
        
        {{!! $news->body !!}}
        
        <a href="/berita">kembali</a>
    </div>
</section>

@endsection