@extends('layouts.main')

@section('title')

@section('content')
<section>
    <section id="movies">
        @forelse ($movies as $movie)
            <div class="container-movie">

                <div class="movie-body">
                    <h4>{{ $movie->title }}</h4>
                    <h5>{{ $movie->original_title}}</h5>
                    <h6>{{ $movie->nationality }}</h6>
                    <h5>{{ $movie->date }}</h5>
                    <h6>{{ $movie->vote }}</h6>
                </div>

            </div>
        @empty
            <h3>Nessun film</h3>
        @endforelse
    </section>
</section>
@endsection