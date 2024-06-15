@extends('admin.layoutAdmin')
@section('title') Home @endsection
@section('content')
<div class="content-wrapper mx-0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Monthly statistic</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New users</span>
                            <span class="info-box-number">{{ $usersNum }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-newspaper"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New articles</span>
                            <span class="info-box-number">{{ $articlesNum }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-comment"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Comments</span>
                            <span class="info-box-number">{{ $commentsNum }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Reviews</span>
                            <span class="info-box-number">{{ $reviewsNum }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <div>
                    <!-- /.card -->
                    <div class="row">

                        <div class="col-md-12">
                            <!-- USERS LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Members</h3>

                                    <div class="card-tools">
                                        <span class="badge badge-danger">{{ $latestUsers->count() }} New members</span>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">
                                        @foreach($latestUsers as $user)
                                        <li class="col-2">
                                            <img src="{{ asset('/assets/images/'.$user->profile_img) }}" alt="User Image">
                                            <a class="users-list-name" href="#">{{ $user -> first_name }} {{ $user -> last_name }}</a>
                                            <span class="users-list-date">{{ \Carbon\Carbon::parse($user->created_at)->format('d.m.') }}</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <a href="{{ route('allUsers') }}">View All Users</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Articles</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Num</th>
                                        <th>Title</th>
                                        <th>Writer</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($latestArticles as $index => $article)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $article->title }}</td>
                                            <td>{{ $article->first_name }} {{ $article->last_name }}</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $article->comment_count }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="{{ route('allArticles') }}" class="btn btn-sm btn-secondary float-right">View All Articles</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                    <!-- PRODUCT LIST -->
                <div class="card col-12">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Recently added movies</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Title</th>
                                    <th>Reviews</th>
                                    <th>Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentlyAddedMovies as $index => $movie)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $movie->name }}</td>
                                        <td>{{ $movie -> comment_count }}</td>
                                        <td>
                                            @if($movie -> average_rate == 0)
                                                The movie has not been rated yet
                                            @else
                                                {{ $movie -> average_rate }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{ route('movies.create') }}" class="btn btn-sm btn-info float-left">Add new movie</a>
                        <a href="{{ route('movies.index') }}" class="btn btn-sm btn-secondary float-right">View All Movies</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection
