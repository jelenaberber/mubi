@extends('layout')
@section('title') Home @endsection
@section('content')

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Newest articles</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ route('blog') }}" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="row g-3">
                        @foreach($articles as $a)
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="{{ route('article', ['id' => $a->id]) }}" class="img-link">
                                    <img src="{{ asset('/assets/images/'.$a->img_min) }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">-{{ \Carbon\Carbon::parse($a->created_at)->format('d.m.Y') }}</span>
                                <h2><a href="{{ route('article', ['id' => $a->id]) }}">{{ $a->title }}</a></h2>
                                <p><a href="{{ route('article', ['id' => $a->id]) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row">
                @foreach($movies as $m)
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="{{ route('movie', ['movie_id' => $m->id]) }}" class="img-link">
                            <img src="{{ asset('/assets/images/'.$m->img_min) }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date"> {{ $m->year }}</span>
                        <h2><a href="{{ route('movie', ['movie_id' => $m->id]) }}">{{ $m->name }}</a></h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
