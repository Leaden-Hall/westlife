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

            @if(session()->get('DeleteUser') != null)
                <div class="alert alert-success">
                    {{session()->get('DeleteUser')}}
                </div>
            @endif

            <div class="box">
                <div class="box-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Verify Email</th>
                            <th>Created At</th>
                            <th>Action</th>
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
                            <td><center><a href="{{ URL::to('/admin/delete_user/'.$user->id) }}"
                                           class="btn btn-danger"
                                           onclick="return confirm('Are you sure you want to delete this user?');">Delete</a></center>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection