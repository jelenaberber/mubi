@extends('layout')
@section('title') Blog @endsection
@section('content')
    <div class="container">

        <div class="row mb-4 my-5">
            <div class="col-sm-12 text-center">
                <h2 class="posts-entry-title fs-3">Articles</h2>
            </div>
        </div>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-4 mb-4">
                <div class="post-entry-alt">
                    <a href="{{ route('article', ['id' => $article->article_id]) }}" class="img-link"><img src="{{ asset('/assets/images/'.$article->img_min) }}" alt="Image" class="img-fluid image"></a>
                    <div class="excerpt">


                        <h2><a href="{{ route('article', ['id' => $article->article_id]) }}">{{ $article->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <a href="{{ route('article', ['id' => $article->article_id]) }}">{{ $article->first_name }} {{ $article->last_name }}</a></span>
                            <span>&nbsp;-&nbsp; {{ $article->created_at }}</span>
                        </div>

                        <p>{{ $article->truncated_text }}...</p>
                        <p><a href="{{ route('article', ['id' => $article->article_id]) }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
@endsection
