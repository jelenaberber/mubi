@extends('admin.layoutAdmin')
@section('title') Users @endsection
@section('content')
    <div class="content-wrapper mx-0">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All users</h1>
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
                                        <th>Profile image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Created at</th>
                                        <th>Role</th>
                                        <th>Change</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $index => $user)
                                        <tr class="user" data-id="{{ $user->user_id }}">
                                            <td>{{ $index+1 }}</td>
                                            <td><img class="col-6" src="{{ asset('/assets/images/'.$user->profile_img) }}" alt="User Image"></td>
                                            <td>{{ $user->full_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td class="role">
                                                <select class="role" data-user="{{ $user->user_id }}">
                                                    @foreach($roles as $r)
                                                        @if($r->name == $user->name)
                                                            <option value="{{ $r->id }}" selected>{{ $r->name }}</option>
                                                        @else
                                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><button class="btn btn-info change-role" data-user="{{ $user->user_id }}" disabled>Change role</button></td>
                                            <td><button class="btn btn-danger delete-user" value="{{ $user->user_id }}">Delete</button></td>
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
