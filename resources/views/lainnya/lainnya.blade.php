@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- pendidikan --}}
<section class="pendidikan pb-5">
    <div class="container">
        <div class="row">
            @foreach ($units as $l)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="/img/{{ $l["gambar"] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/lainnya/{{ $l["slug"] }}">
                                {{ $l["unit"] }}
                            </a>    
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection