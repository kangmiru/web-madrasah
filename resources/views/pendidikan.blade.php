@extends('layouts.main')

@section('content')
<section class="blank"></section>

{{-- pendidikan --}}
<section class="pendidikan pb-5">
    <div class="container">
        <div class="row">
            @foreach ($madrasah as $m)
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/mad1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/madrasah/{{ $m["slug"] }}">
                                {{ $m["tingkat"] }}
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