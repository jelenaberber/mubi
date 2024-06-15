@extends('admin.layoutAdmin')
@section('title') Edit movie @endsection
@section('content')
    <div class="col-8 my-5 d-flex justify-content-center">
        <form method="post" action="{{ route('movies.update', ['movie' => $movie->movie_id]) }}" name="update-movie" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$movie->movie}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Original name</label>
                    <input type="text" class="form-control" id="original_name" name="original_name" value="{{$movie->original_name}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{$movie->year}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" value="{{$movie->duration}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Director</label>
                    <select class="custom-select mr-sm-2" id="director_id" name="director_id">
                        @foreach($directors as $d)
                            @if($d->id == $movie->director_id)
                                <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
                            @else
                                <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Language</label>
                    <select class="custom-select mr-sm-2" id="language_id" name="language_id">
                        @foreach($languages as $l)
                            @if($l->id == $movie->language_id)
                                <option value="{{ $l->id }}" selected>{{ $l->name }}</option>
                            @else
                                <option value="{{ $l->id }}">{{ $l->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value="{{$movie->trailer}}">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Our take</label>
                <textarea class="form-control" id="our_take" name="our_take">{{$movie->our_take}}</textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Synopsis</label>
                <textarea class="form-control" id="sinopis" name="sinopis">{{$movie->sinopis}}</textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Image card</label>
                    <img class="col-5" src="{{ asset('/assets/images/'.$movie->img_min) }}" alt="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">You can upload new photo</label>
                    <input type="file" name="img_min">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Image cover</label>
                    <img class="col-5" src="{{ asset('/assets/images/'.$movie->img_max) }}" alt="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">You can upload new photo</label>
                    <input type="file" name="img_max">
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-3">Change</button>
            <button type="submit" class="btn btn-danger m-3">Close</button>
        </form>
    </div>
    <div class="col-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
