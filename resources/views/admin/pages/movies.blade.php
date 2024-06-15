@extends('admin.layoutAdmin')
@section('title') Movies @endsection
@section('content')
    <div class="content-wrapper mx-0">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Movies</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container">
                <div class="col-12">
                    @if(isset($message))
                    <p class="message fs-3 text-center text-success">{{$message}}</p>
                    @endif
                    <a class="btn btn-info my-2" href="{{ route('movies.create') }}">Add new movie</a>
                </div>
                <div class="row">
                    <div class="card col-12">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Num</th>
                                        <th>Title</th>
                                        <th>Original name</th>
                                        <th>Director</th>
                                        <th>Created at</th>
                                        <th>Review</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($movies as $index => $m)
                                        <tr class="movie-row" data-id="{{ $m->id }}">
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $m->name }}</td>
                                            <td>{{ $m->original_name }}</td>
                                            <td>{{ $m->director }}</td>
                                            <td>{{ $m->created_at }}</td>
                                            <td><a href="{{ route('movies.show', ['movie' => $m->id]) }}" class="btn btn-info see-article">Review</a></td>
                                            <td>
                                                <a href="{{ route('movies.delete', ['movie' => $m->id]) }}" class="btn btn-danger see-article" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $m->id }}').submit();">Delete</a>
                                                <form id="delete-form-{{ $m->id }}" action="{{ route('movies.delete', ['movie' => $m->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </section>
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
