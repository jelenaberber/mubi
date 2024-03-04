@extends('layout')
@section('title') Log in @endsection
@section('content')

    <div class="section login-background">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{route('logIn')}}" method="post" class=" d-flex justify-content-center">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 mb-3 mx-2">
                                <input type="email" name="email" class="form-control form" placeholder="Email">
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="password" name="password" class="form-control form" placeholder="Password">
                                <p class="text-danger">{{$errors->first('password')}}</p>
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <input type="submit" value="Log in" class="btn btn-primary btn-form">
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <p class="mt-2 text">You don`t have account? <a href="{{ route('singUp') }}">Sing up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
@endsection
