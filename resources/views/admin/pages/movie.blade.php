@extends('admin.layoutAdmin')
@section('title') {{ $movie->movie }} @endsection
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page d-flex align-items-end" style="background-image: url('{{asset('/assets/images/'.$movie->img_max)}}')">
        <div class="container">
            <div class="col-12 d-flex justify-content-end align-items-start" id="rating">
                <i class="fa-regular fa-star icon-white fs-3"></i> {{ $rate }}/5
            </div>
            <div class="row same-height justify-content-between col-12">
                <div class="col-md-12 d-flex justify-content-start align-items-end">
                    <div class="post-entry text-start col-3">
                        <h1 class="mb-3 fs-2">{{ $movie->movie }}</h1>
                        <h2 class="fs-5">{{ $movie->original_name }}</h2>
                        <div class="post-meta">
{{--                            <span class="d-inline-block mt-1">Directed by {{ $movie->director }}</span><br/>--}}
                            @foreach($countries as $c)
                                <span>{{ $c-> name }},</span>
                            @endforeach
                            <span>{{ $movie->year }}</span><br/>
                            @foreach($genres as $g)
                                <span>{{ $g-> name }} </span>
                            @endforeach
                            <br/><span><i class="fa-solid fa-clock"></i> {{ $movie->duration }}'</span>
                            <span class="mx-2"><i class="fa-solid fa-volume-high"></i> {{ $movie->language }}</span>
                            <span class="line my-2"></span>
                            <a href="{{ route('movies.edit', ['movie' => $movie->movie_id]) }}" class="btn btn-dark p-1 fs-5">Change</a>
                        </div>
                    </div>
                    <div class="post-content-body col-9 d-flex flex-wrap mx-3">
                        <div class="col-6 px-2">
                            <h3 class="fs-5">SYNOPSIS</h3>
                            <p>{{ $movie -> sinopis }}</p>
                        </div>
                        <div class="col-6 px-2">
                            <h3 class="fs-5">OUR TAKE</h3>
                            <p>{{ $movie -> sinopis }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <div class="post-content-body">
                        <h3>Showing as part of the following festivals:</h3>
                        <div class="col-12 d-flex flex-wrap justify-content-between mt-5">
                            @foreach($festivals as $f)
                                <div class="col-2 d-flex flex-column align-items-center text-center">
                                    <img class="col-5 mb-2 fest-logo" src="{{asset('/assets/images/'.$f->logo)}}" alt="{{ $f-> name }}">
                                    <h1 class="fs-6">{{ $f-> name }}</h1>
                                </div>

                            @endforeach
                        </div>

                    </div>
                    <div class="post-content-body mt-5">
                        <h3 class="mb-3">Preview</h3>
                        <div>
                            <iframe width="560" height="315" src="{{ $movie->trailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="pt-5 comment-wrap">
                        @if($reviews != null)
                            <h3 class="mb-5 heading">{{ count($reviews) }} Reviews</h3>
                            <ul class="comment-list">
                                @foreach($reviews as $r)
                                    <li class="comment" data-id="{{ $r->comment_id }}">
                                        <div class="vcard">
                                            <img src="{{asset('/assets/images/'.$r->profile_img)}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <div class="d-flex justify-content-between col-4">
                                                <h3>{{$r->first_name}} {{$r->last_name}}</h3>
                                                <button class="btn text-danger p-0 delete-review" value="{{ $r->comment_id }}" data-movie="{{ $movie->movie_id }}">Delete</button>

                                            </div>
                                            <div class="meta">{{ $r->created_at }}</div>
                                            <p>{{$r->text}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>




@endsection
