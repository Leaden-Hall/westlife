@extends('admin/admin_app')

@section('admin_content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User management Table
        <small>Create, Read, Update, Delete</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <!-- /.box-header -->
                <center class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Verify Email</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->showVerification()}}</td>
                            <td>{{$user->created_at->toDateTimeString()}}</td>
                            <td><center><a href="" class="btn btn-danger">Delete</a></center>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection