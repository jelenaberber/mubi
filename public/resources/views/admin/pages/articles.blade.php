@extends('admin.layoutAdmin')
@section('title') Articles @endsection
@section('content')
    <div class="content-wrapper mx-0">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Articles</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container">
                <div class="col-12">
                    <p class="message fs-3 text-center text-success"></p>
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
                                        <th>Writer</th>
                                        <th>Created at</th>
                                        <th>Review</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $index => $a)
                                        <tr class="article-row" data-id="{{ $a->article_id }}">
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $a->title }}</td>
                                            <td>{{ $a->full_name }}</td>
                                            <td>{{ $a->created_at }}</td>
                                            </td>
                                            <td><a href="{{ route('articleAndComments', ['id' => $a->article_id]) }}" class="btn btn-info see-article">See article and comments</a></td>
                                            <td><button class="btn btn-danger delete-article" value="{{ $a->article_id }}">Delete</button></td>
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
