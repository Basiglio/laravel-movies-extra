@extends('layouts.main')


{{-- @dd($movies) --}}
@section('header_content')

@endsection



@section('main_content')
<div class="d-flex flex-wrap">
    @foreach ($movies as $movie)
        <div class="card" style="width: calc(100% / 5);">
        <img src="{{ asset('images/'.$movie->poster_name) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">{{ $movie->title }}</h3>
                <h4 class="card-text">{{ $movie->author }}</h4>
                <h5 class="card-text">{{ $movie->year }}</h5>
                {{-- <h5 class="card-text">{{ $movie->genre }}</h5> --}}
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    @endforeach
</div>

@endsection




@section('footer_content')

@endsection
