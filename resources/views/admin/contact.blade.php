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

                    @if(session()->get('deleteContact') != null)
                        <div class="alert alert-success" style="margin: 20px 20px 0px 20px">
                            {{session()->get('deleteContact')}}
                        </div>
                    @elseif(session()->get('answered') != null)
                        <div class="alert alert-success" style="margin: 20px 20px 0px 20px">
                            {{session()->get('answered')}}
                        </div>
                    @endif

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
                                    <td>{{ $value->id  }}</td>
                                    <td>{{ $value->name  }}</td>
                                    <td>{{ $value->email  }}</td>
                                    <td>{{ str_limit($value->message)  }}</td>
                                    <td>{{ $value->status() }}</td>

                                    <td>
                                        @if($value->status == 1)
                                            <a href="{{ URL::to('/admin/contact/delete/'.$value->id) }}"  class="btn btn-danger"
                                               onclick="return confirm('Are you sure you want to delete this contact?');">Delete</a>
                                        @else
                                            <a href="{{ URL::to('/admin/response_contact/'.$value->id) }}"  class="btn btn-info">Response</a>
                                        @endif()
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
@endsection