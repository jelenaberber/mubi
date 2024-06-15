@extends('admin.layoutAdmin')
@section('title') New movie @endsection
@section('content')
    <div class="col-8 my-5 d-flex justify-content-center">
        <form method="post" action="{{ route('movies.store') }}" name="new-movie" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Original name</label>
                    <input type="text" class="form-control" id="original_name" name="original_name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Year</label>
                    <input type="text" class="form-control" id="year" name="year">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Director</label>
                    <select class="custom-select mr-sm-2" id="director_id" name="director_id">
                        <option value="0">Choose</option>
                        @foreach($directors as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Language</label>
                    <select class="custom-select mr-sm-2" id="language_id" name="language_id">
                        <option value="0">Choose</option>
                        @foreach($languages as $l)
                            <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Our take</label>
                <textarea class="form-control" id="our_take" name="our_take"></textarea>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Synopsis</label>
                <textarea class="form-control" id="sinopis" name="sinopis"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Upload card photo</label>
                    <input type="file" name="img_min">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Upload cover photo</label>
                    <input type="file" name="img_max">
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-3">Add new movie</button>
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
