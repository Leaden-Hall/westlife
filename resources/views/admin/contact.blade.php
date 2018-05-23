@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 class="text-center" style="font-size: 35px;">
            Contact management Table
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
                                <th>Email</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($contacts as $key => $value)
                                <tbody>
                                <tr>
                                    <td>{{ str_limit($value->id)  }}</td>
                                    <td>{{ str_limit($value->name)  }}</td>
                                    <td>{{ str_limit($value->email)  }}</td>
                                    <td>{{ str_limit($value->message)  }}</td>
                                    <td>{{ str_limit($value->status)  }}</td>
                                    <td><a href="{{ URL::to('/admin/response_contact/'.$value->id) }}"  class="btn btn-info">Response</a>
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