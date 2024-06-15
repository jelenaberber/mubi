@extends('layout')
@section('title') Sing up @endsection
@section('content')
    <div class="section login-background">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{route('singUp')}}" method="post" enctype="multipart/form-data" class="d-flex justify-content-center">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="first_name" class="form-control form" placeholder="First name">
                                <p class="text-danger">{{$errors->first('first_name')}}</p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="last_name" class="form-control form" placeholder="Last name">
                                <p class="text-danger">{{$errors->first('last_name')}}</p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="username" class="form-control form" placeholder="Username">
                                <p class="text-danger">{{$errors->first('username')}}</p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="email" name="email" class="form-control form" placeholder="Email">
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="password" name="password" class="form-control form" placeholder="Password">
                                <p class="text-danger">{{$errors->first('password')}}</p>
                            </div>
                            <div class="col-8 d-flex justify-content-center mb-3">
                                <label class="text">Upload profile picture (optional)</label>
                                <input type="file" name="profile_img" class="text">
                                <p class="text-danger">{{$errors->first('profile_img')}}</p>
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <input type="submit" value="Sing up" class="btn btn-primary btn-form">
                            </div>
                        </div>
                    </form>
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
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
@endsection
