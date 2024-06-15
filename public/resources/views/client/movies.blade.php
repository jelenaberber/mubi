@extends('layout')
@section('title') Movies @endsection
@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading"><h1>Movies</h1></div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                    <div class="col-12 d-flex flex-wrap justify-content-between" id="movies">
                        @foreach($movies as $movie)
                            <div class="movie blog-entry d-flex flex-wrap blog-entry-search-item col-6">
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
                    </div>
                    <div class="col-12 pagination">
                        {{ $movies->links() }}
                    </div>
                </div>


                <div class="col-lg-4 sidebar">

                    <div class="sidebar-box search-form-wrap mb-4">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Type a keyword"/>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading">Genres</h3>
                        <ul class="categories">
                            @foreach($genres as $g)
                            <li class="fs-5 genres"><input type="checkbox" name="genre" value="{{ $g->id }}"/> {{ $g->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-box">
                            <div class="multiselect">
                                <div class="selectBox">
                                    <select class="form-select">
                                        <option>Select festivals</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                    @foreach($festivals as $f)
                                    <label class="fs-6 festivals">
                                        <input type="checkbox" value="{{ $f->id }}" /> {{ $f->name }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
