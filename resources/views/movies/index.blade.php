@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-center moviesTitle mb-5 text-white">Our Productions</h1>
    <div class="cardwrap d-flex flex-wrap gap-3">
        @foreach ($movies as $movie)
            @include('movies.partials.movieCard', $movie)
        @endforeach
    </div>
</div>
@endsection
