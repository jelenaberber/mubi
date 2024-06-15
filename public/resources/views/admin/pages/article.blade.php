@extends('admin.layoutAdmin')
@section('title') Blog @endsection
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page article" style="background-image: url('{{ asset('/assets/images/'.$article->img_max) }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $article->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 me-3 d-inline-block"><img src="{{ asset('/assets/images/'.$article->profile_img) }}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{ $article->full_name }}</span>
                            <span>&nbsp;-&nbsp; {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}</span>
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
                        <p>{{ $article->text }}</p>
                        <img src="{{ asset('/assets/images/'.$article->img_min) }}" alt="{{ $article->title }}"  class="col-12">
                    </div>
                </div>

                <div class="pt-5 comment-wrap">
                    <h3 class="mb-5 heading" id="numberOfComments">{{ count($comments) }} Comments</h3>
                    <ul class="comment-list comment-article">
                        @foreach($comments as $comment)
                            <li class="comment" data-id="{{ $comment->id }}">
                                <div class="vcard">
                                    <img src="{{ asset('/assets/images/'.$comment->profile_img) }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <div class="d-flex justify-content-between col-4">
                                        <h3>{{ $comment->full_name }}</h3>
                                        <button class="btn text-danger p-0 delete-comment" value="{{ $comment->id }}" data-article="{{ $article->id }}">Delete</button>
                                    </div>

                                    <div class="meta">{{ $comment->created_at }}</div>
                                    <p>{{ $comment->text }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- END comment-list -->
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
