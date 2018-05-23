@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 class="text-center" style="font-size: 35px;">
            Subsciption management Table
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
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($subs as $key => $value)
                            <tbody>
                            <tr>
                                <td>{{ str_limit($value->id)  }}</td>
                                <td>{{ str_limit($value->email)  }}</td>
                                <td><a href="{{ URL::to('/admin/delete_sub/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete this subscription?');" class="btn btn-danger">Delete</a>
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
@endsection