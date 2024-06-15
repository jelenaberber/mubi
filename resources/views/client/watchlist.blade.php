@extends('layout')
@section('title') Watchlist @endsection
@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading"><h1>Watchlist</h1></div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-12 d-flex flex-wrap justify-content-between" id="movies">

                        @if(count($movies) === 0)
                            <div class="col-12 text-center d-flex flex-column align-items-center justify-content-center">
                                <h1 class="text-center fs-3">You don't have movies on your watchlist</h1>
                                <img class="col-3" src="{{ asset('/assets/images/watchlist.png') }}" alt="Empty watchlist">
                            </div>
                        @else
                            @foreach($movies as $movie)
                                <div class="movie blog-entry d-flex flex-wrap blog-entry-search-item col-3">
                                    <a href="{{ route('movie', ['movie_id' => $movie->id]) }}" class="img-link me-5">
                                        <img src="{{ asset('/assets/images/'.$movie->img_max) }}" alt="Image" class="img-fluid">
                                    </a>
                                    <div class="col-12">
                                        <span class="date">{{ $movie->year }}<a href="#"></a></span>
                                        <h2><a href="{{ route('movie', ['movie_id' => $movie->id]) }}">{{ $movie->name }}</a></h2>
                                        <h2 class="h5"><a href="{{ route('movie', ['movie_id' => $movie->id]) }}" class="h6">{{ $movie->original_name }}</a></h2>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                </div>
            </div>
        </div>
    </div>
@endsection
