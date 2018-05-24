@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 class="text-center" style="font-size: 35px;">
            Permission management Table
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($permissions as $key => $value)
                            <tbody>
                            <tr>
                                <td>{{ str_limit($value->id)  }}</td>
                                <td>{{ str_limit($value->name)  }}</td>
                                <td>{{ str_limit($value->description)  }}</td>
                                <td>
                                    <div class="text-center">
                                        <a href="{{ URL::to('/admin/edit_permission/'.$value->id) }}"
                                           class="btn btn-info">Edit</a>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <a href="{{ URL::to('/admin/delete_permission/'.$value->id) }}"
                                           onclick="return confirm('Are you sure you want to delete this permission?');"
                                           class="btn btn-danger">Delete</a>
                                    </div>

                                </td>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="text-center">
                            <a class="btn btn-success btn-lg" href="{{ URL::to('/admin/permission/form') }}">Add</a>
                        </div>
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