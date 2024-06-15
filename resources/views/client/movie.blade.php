@extends('layout')
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
                            <span class="d-inline-block mt-1">Directed by {{ $movie->director }}</span><br/>
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
                            @if(session()->get('user'))
                                <div class="col-3 d-flex justify-content-between">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-link" title="Rate and review" id="rateReview"><i class="fa-regular fa-star icon-white fs-3"></i></button>
                                    @if($exists)
                                        <button title="Remove from Watchlist" class="btn btn-link rounded-circle" id="watchlist"  data-id="{{ $movie->movie_id }}"><i class="fa-solid fa-check icon-white fs-3"></i></button>

                                    @else
                                        <button title="Add to Watchlist" id="watchlist" class="btn btn-link"  data-id="{{ $movie->movie_id }}"><i class="fa-solid fa-list-ul icon-white fs-3"></i></button>
                                    @endif
                                </div>
                            @endif
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
                                        <div class="d-flex justify-content-start col-8">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa-regular mx-1 fa-star fs-3 {{ $i <= $r->rate ? ' yellow' : '' }}" data-star="1"></i>
                                            @endfor
                                        </div>
                                        @if(session()->get('user') && session()->get('user')->id == $r->user_id)
                                            <button class="btn text-danger p-0 delete-review" value="{{ $r->comment_id }}" data-movie="{{ $movie->movie_id }}">Delete</button>
                                        @endif
                                    </div>
                                    <div class="meta">{{ $r->created_at }}</div>
                                    <p>{{$r->text}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                        @if(!session()->get('user'))
                            <h3 class="mb-5 fs-5">If you want to leave review you need to <a href="{{ route('logIn') }}">log in</a></h3>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center d-flex flex-wrap">
                        <h1 class="modal-title fs-5 col-12" id="exampleModalLabel">{{ $movie->movie }}</h1>
                        <h2 class="modal-title fs-6 col-12" id="exampleModalLabel">{{ $movie->director }}</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="contactForm">
                            <div class="mb-3 d-flex justify-content-around">
                                <label class="col-form-label col-2 text-start">Rate</label>
                                <div class="d-flex justify-content-start col-8">
                                    <i class="rate fa-regular mx-1 fa-star fs-3" data-star="1"></i>
                                    <i class="rate fa-regular mx-1 fa-star fs-3" data-star="2"></i>
                                    <i class="rate fa-regular mx-1 fa-star fs-3" data-star="3"></i>
                                    <i class="rate fa-regular mx-1 fa-star fs-3" data-star="4"></i>
                                    <i class="rate fa-regular mx-1 fa-star fs-3" data-star="5"></i>

                                </div>
                                <input type="hidden" id="movieId" value="{{ $movie->movie_id  }}">
                            </div>
                            <p class="text-danger rate-error col-12"></p>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                                <p class="text-danger review-error"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

@endsection
